<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index()
    {
        return view('search.search');
    }


    public function search(Request $request)
    {
        if($request->ajax())
        {
            $output="";
            $players=DB::table('players')->where('identityNumber','LIKE','%'.$request->search."%")->get();
            if($players)
            {
                foreach ($players as $key => $player) {
                    $output.='<tr>'.
                        '<td>'.$player->name.'</td>'.
                        '<td>'.$player->surname.'</td>'.
                        '<td>'.$player->height.'</td>'.
                        '<td>'.$player->weight.'</td>'.
                        '</tr>';
                }
                return Response($output);
            }
        }
    }
}
