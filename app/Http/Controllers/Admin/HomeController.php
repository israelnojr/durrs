<?php

namespace DurrsConstructions\Http\Controllers\Admin;

use Illuminate\Http\Request;
use DurrsConstructions\emailList;
use DurrsConstructions\quotation;
use DurrsConstructions\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $quotation = quotation::all();
        $emails = emailList::all();
        return view('backend.dashboard', compact('quotation','emails'));
    }
}
