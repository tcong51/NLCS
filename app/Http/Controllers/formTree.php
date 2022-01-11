<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\db_trees;
use Illuminate\Support\Facades\DB;
class formTree extends Controller
{
    public function formTree(Request $request)
    {
        $file = $request->Avatar;
        DB::table('db_trees')->insert(
            [
                'TreeName' => $request->input('TreeName'),
                'Characteristics' => $request->input('Characteristics'),
                'HowToCare' => $request->input('HowToCare'),
                'Describe' => $request->input('Describe'),
                'Area' => $request->input('Area'),
                'Benefit' => $request->input('Benefit'),
                'Avatar' => $file->move('../resources/img/', $file->getClientOriginalName()),
                'NumberAccess' => 0,
                'Climate' => $request->input('Climate'),
                'Growthtime' => $request->input('Growthtime'),
                'Humidity' => $request->input('Humidity') ,
                'LandType' => $request->input('LandType') ,
                'Light' => $request->input('Light') ,
                'Species' => $request->input('Species')
            ]
        );
        return view('backend.admin.checkaddtree');
    }
}
