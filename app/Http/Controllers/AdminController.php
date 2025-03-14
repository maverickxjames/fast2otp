<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;

class AdminController extends Controller
{
    public function getSettings()
    {
        $settings = Setting::all();
        return response()->json($settings);
    }
}

