<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vacancy;

class SearchController extends Controller
{
    public function vacante(Request $request){
        $term = $request->get('term');

        $querys = Vacancy::where('name','LIKE', '%'. $term . '%')->get();
        $data = [];
        
        foreach($querys as $query){
            $data[] = [
                'label' => $query->name
            ];
        }

        return $data;
    }
}
