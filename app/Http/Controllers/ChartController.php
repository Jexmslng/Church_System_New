<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;

class ChartController extends Controller{

/**
   * Display a listing of the resource.
   *
   * @return IlluminateHttpResponse
   */

    public function index(){
        $data=Event::select('id', 'EventDateFrom')->get()->groupBy(function($data){
           return Carbon::parse($data->EventDateFrom)->format('M');
        });

        $months=[];
        $monthCount=[];
        foreach($data as $month => $values){
            $months[]=$month;
            $monthCount[]=count($values);
        }

        return view('admin.admineventchart',['data'=>$data, 'months' => $months, 'monthCount' => $monthCount] );
}

}