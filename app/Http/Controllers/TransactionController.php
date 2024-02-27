<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use App\Models\BusSchedule;
use App\Models\Transaction;
use App\Models\Ticket;
use App\Models\User;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function accept_ticket(string $id)
    {
        $ticket = Transaction::where('transaction_id', '=', $id)
            ->update(
                [
                    'order_status' => 'reserved',
                ]
            );

        return redirect('admin/ticket/' . $id)->with('success', 'Ticket Reserved!');
    }

    public function admin_ticket(string $id)
    {
        $tickets = Transaction::query()
            ->select('ticket_id', 'buses.bus_id', 'destination', 'arrival_time', 'departure_time', 'transactions.total_price', 'order_date', 'order_status', 'type')
            ->join('tickets', 'tickets.transaction_id', '=', 'transactions.transaction_id')
            ->join('bus_schedules', 'bus_schedules.bus_schedule_id', '=', 'tickets.bus_schedule_id')
            ->join('buses', 'buses.bus_id', '=', 'bus_schedules.bus_id')
            ->join('bus_routes', 'bus_routes.bus_route_id', '=', 'buses.bus_route_id')
            ->where('transactions.transaction_id', '=', $id)
            ->get();

        return view('bookings_ticket', compact('tickets'));
    }

    public function booking(Request $r)
    {
        $book = Transaction::query()
            ->select('*')
            ->join('users', 'users.user_id', '=', 'transactions.user_id')
            ->join('tickets', 'tickets.transaction_id', '=', 'transactions.transaction_id')
            ->get();

        $total_bookings = Transaction::query()
            ->select(DB::raw('COUNT(*) AS total'))
            ->get()
            ->first();

        return view('bookings', compact('book', 'total_bookings'));
    }

    public function view_ticket(string $id)
    {
        $tickets = Transaction::query()
            ->select('ticket_id', 'buses.bus_id', 'destination', 'arrival_time', 'departure_time', 'transactions.total_price', 'order_date', 'order_status', 'type')
            ->join('tickets', 'tickets.transaction_id', '=', 'transactions.transaction_id')
            ->join('bus_schedules', 'bus_schedules.bus_schedule_id', '=', 'tickets.bus_schedule_id')
            ->join('buses', 'buses.bus_id', '=', 'bus_schedules.bus_id')
            ->join('bus_routes', 'bus_routes.bus_route_id', '=', 'buses.bus_route_id')
            ->where('tickets.ticket_id', '=', $id)
            ->get();

        return view('ticket', compact('tickets'));
    }

    public function my_tickets()
    {
        $tickets = Transaction::query()
            ->select('ticket_id', 'buses.bus_id', 'destination', 'arrival_time', 'departure_time', 'transactions.total_price', 'order_date', 'order_status', 'type')
            ->join('tickets', 'tickets.transaction_id', '=', 'transactions.transaction_id')
            ->join('bus_schedules', 'bus_schedules.bus_schedule_id', '=', 'tickets.bus_schedule_id')
            ->join('buses', 'buses.bus_id', '=', 'bus_schedules.bus_id')
            ->join('bus_routes', 'bus_routes.bus_route_id', '=', 'buses.bus_route_id')
            ->where('user_id', '=', Session::get('user_id'))
            ->get();

        return view('my_tickets', compact('tickets'));
    }

    public function book_ticket(Request $r)
    {
        $book = new Transaction;
        $book->user_id = Session::get('user_id');
        $book->save();

        $sched = BusSchedule::query()
            ->select('*')
            ->join('buses as b', 'b.bus_id', '=', 'bus_schedules.bus_id')
            ->join('bus_routes as br', 'br.bus_route_id', '=', 'b.bus_route_id')
            ->where('available_seats', '>', '0')
            ->get();

        $tickets = [];
        $totalPrice = 0;
        for ($i = 0; $i < count($sched); $i++) {
            $num_book = $r->input('book_' . $sched[$i]->bus_schedule_id);
            if ($num_book > 0) {
                $ticket = new Ticket;
                $ticket->transaction_id = $book->transaction_id;
                $ticket->bus_schedule_id = $sched[$i]->bus_schedule_id;
                $user = User::find(Session::get('user_id'));
                $ticket->type = $user->type;;
                $ticket->price = $sched[$i]->price;
                $ticket->save();
                $totalPrice += $ticket->price * $num_book;
                array_push($tickets, $ticket);
            }
        }
        $book->total_price = $totalPrice;
        $book->order_status = 'pending';
        $book->save();

        $receipts = Transaction::query()
            ->select('ticket_id', 'buses.bus_id', 'destination', 'arrival_time', 'departure_time', 'transactions.total_price')
            ->join('tickets', 'tickets.transaction_id', '=', 'transactions.transaction_id')
            ->join('bus_schedules', 'bus_schedules.bus_schedule_id', '=', 'tickets.bus_schedule_id')
            ->join('buses', 'buses.bus_id', '=', 'bus_schedules.bus_id')
            ->join('bus_routes', 'bus_routes.bus_route_id', '=', 'buses.bus_route_id')
            ->where('transactions.transaction_id', '=', $book->transaction_id)
            ->get();

        return view('receipt', compact('book', 'tickets', 'receipts'));
    }


    public function index()
    {
        $sched = BusSchedule::query()
            ->select('bus_schedule_id', 'destination', 'arrival_time', 'departure_time', 'price', 'available_seats')
            ->join('buses', 'buses.bus_id', '=', 'bus_schedules.bus_id')
            ->join('bus_routes', 'bus_routes.bus_route_id', '=', 'buses.bus_route_id')
            ->where('available_seats', '>', '0')
            ->get();
        return view('user_booking', compact('sched'));
    }
}
