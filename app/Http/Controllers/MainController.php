<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return view('pages.content.index');
    }
    public function search()
    {
        return view('pages.search.result_search');
    }

}
