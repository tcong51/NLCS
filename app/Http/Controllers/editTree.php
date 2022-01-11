<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\db_trees;
use Illuminate\Support\Facades\DB;
class editTree extends Controller
{
    public function editTree(Request $request)
    {
        DB::table('db_trees')->where('Code', $request->id)->update(array($request->position => $request->contentEdit));
        return view('backend.admin.edit', ['id ' => $request->id, 'position' => $request->position]);
    }
}
