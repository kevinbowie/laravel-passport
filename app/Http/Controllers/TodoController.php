<?php

namespace App\Http\Controllers;

use App\Models\Todo as ModelsTodo;
use Auth;
use App\Todo;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    /**
     * Class constructor.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $todos = auth()->user()->todos;

        return view('todos', compact('todos'));
    }
}
