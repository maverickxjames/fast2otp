<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TransactionController extends Controller
{
    public function addCredits(){

        $message_plans =DB::table('message_plans')->where('status', 1)->get();
        return view('add-credits', compact('message_plans'));
    }
}
