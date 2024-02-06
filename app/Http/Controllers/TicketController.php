<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TicketController extends Controller
{
    public function view_notifications()
    {

        $notifications = Transaction::query()
            ->select('*')
            ->where('user_id', '=', Session::get('user_id'))
            ->get();

        return view('notification', compact('notifications'));
    }
}
