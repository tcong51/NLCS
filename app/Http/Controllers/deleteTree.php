<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\db_trees;
use Illuminate\Support\Facades\DB;
class deleteTree extends Controller
{
     public function deleteTree(Request $request)
    {
        DB::table('db_trees')->where('Code', $request->Code)->delete();
        return view('backend.admin.listT', ['id ' => $request->id]);
    }
}
