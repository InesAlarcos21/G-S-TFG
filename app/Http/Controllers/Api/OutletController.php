<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OutletController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $outlest = Outlet::all(); 

        $geoJSONdata = $outlest->map(function($outlest){
            return [
                'type' => 'Feature', 
                'properties' => new OutletResources($outlest),
                'geometry' =>[
                    'type' =>'Point', 
                    'coordinates' => [
                        $outlest->longitude, 
                        $outlest->latitude,
                    ],
                ],
            ];
        });
        return response()->json([
            'type' =>'FeatureConllection', 
            'feature' =>$geoJSONdata,
        ]); 
    }
}
