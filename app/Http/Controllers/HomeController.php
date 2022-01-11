<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('backend.admin.home');
    }
    public function addtree()
    {
        return view('backend.admin.addtree');
    }
    public  function listtree(){
        return view('backend.admin.listtree');
    }
    public function listT(){
        return view('backend.admin.listT');
    }
    public function menuedit(){
        return view('backend.admin.menuedit');
    }
    public function edit()
    {
        return view('backend.admin.edit');
    }
}
