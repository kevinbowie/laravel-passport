<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        $clients = auth()->user()->clients;
        return view('settings', compact('clients'));
    }
}
