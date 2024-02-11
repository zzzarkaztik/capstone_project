<?php

namespace App\Http\Controllers;

use App\Models\BusSchedule;
use App\Models\Transaction;
use App\Models\Ticket;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function show_transactions(Request $r)
    {
        $transaction = Transaction::query()
            ->select('*')
            ->where('user_id', '=', Session::get('user_id'))
            ->get();
        return view('transactions', compact('transaction'));
    }
    public function book_ticket(Request $r)
    {
        $book_status = 'pending';

        $book = new Transaction;
        $book->user_id = Session::get('user_id');
        $book->order_status = $book_status;
        $book->save();

        $sched = BusSchedule::query()
            ->where('available_seats', '>', '0')
            ->get();

        $tickets = [];
        $totalPrice = 0;
        foreach ($sched as $schedule) {
            $num_book = $r->input('book_' . $schedule->bus_schedule_id);
            if ($num_book > 0) {
                $ticket = new Ticket;
                $ticket->transaction_id = $book->transaction_id;
                $ticket->bus_schedule_id = $schedule->bus_schedule_id;
                $user = User::find(Session::get('user_id'));
                $ticket->type = $user->type;
                $ticket->price = $schedule->price;
                $ticket->save();
                $totalPrice += $ticket->price * $num_book;
                array_push($tickets, $ticket);
            }
        }

        $book->total_price = $totalPrice;
        $book->save();

        $receipt = Transaction::query()
            ->select('ticket_id', 'buses.bus_id', 'destination', 'arrival_time', 'departure_time', 'transactions.total_price')
            ->join('tickets', 'tickets.transaction_id', '=', 'transactions.transaction_id')
            ->join('bus_schedules', 'bus_schedules.bus_schedule_id', '=', 'tickets.bus_schedule_id')
            ->join('buses', 'buses.bus_id', '=', 'bus_schedules.bus_id')
            ->join('bus_routes', 'bus_routes.bus_route_id', '=', 'buses.bus_route_id')
            ->where('transactions.transaction_id', '=', $book->transaction_id)
            ->get();

        return view('tickets', compact('book', 'tickets', 'receipt'));
    }


    public function index()
    {
        $schedules = BusSchedule::query()
            ->select('bus_schedules.*', 'bus_routes.destination')
            ->join('buses', 'bus_schedules.bus_id', '=', 'buses.bus_id')
            ->join('bus_routes', 'buses.bus_route_id', '=', 'bus_routes.bus_route_id')
            ->where('bus_schedules.available_seats', '>', 0)
            ->get();

        return view('user_booking', compact('schedules'));
    }
}
