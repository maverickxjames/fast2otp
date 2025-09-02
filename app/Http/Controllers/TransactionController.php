<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TransactionController extends Controller
{
    public function addCredits(){

        $rcs_message_plans =DB::table('message_plans')->where('msg_channel', 'RCS')->where('status', 1)->get();
        $whatsapp_message_plans =DB::table('message_plans')->where('msg_channel', 'WHATSAPP')->where('status', 1)->get();
        return view('add-credits', compact('rcs_message_plans', 'whatsapp_message_plans'));
    }
}
