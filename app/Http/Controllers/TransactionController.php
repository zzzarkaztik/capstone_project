<?php

namespace App\Http\Controllers;

use App\Models\BusSchedule;
use App\Models\Transaction;
use App\Models\Ticket;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function book_ticket(Request $r)
    {
        $book = new Transaction;
        $book->user_id = Session::get('user_id');
        $book->save();

        $sched = BusSchedule::query()
            ->select('*')
            ->where('available_seats', '>', '0')
            ->get();

        for ($i = 0; $i < count($sched); $i++) {
            $num_book = $r->input('book_' . $sched[$i]->bus_schedule_id);
        }
    }

    public function index()
    {
        $sched = BusSchedule::query()
            ->select('*')
            ->where('available_seats', '>', '0')
            ->get();
        return view('user_booking', compact('sched'));
    }
}
