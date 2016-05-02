<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Auth;
use Mapper;
use \Geocoder;

class overzichtcontroller extends Controller
{
  public function __construct()
	{
		$this->middleware('auth');
	}
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    $hulpverleners = DB::table('hulpverlener')->get();
    Mapper::map(51, 4);

    foreach ($hulpverleners as $hulpverlener) {
    $param = array("address"=>$hulpverlener->adres);
    $response = \Geocoder::geocode('json', $param);
    $array = array(json_decode($response, true));
    Mapper::marker($array[0]['results'][0]['geometry']['location']['lat'] ,$array[0]['results'][0]['geometry']['location']['lng'],  ['draggable' => true, 'eventMouseDown' => " document.getElementById('$hulpverlener->id').style.color = 'red';".PHP_EOL, 'eventMouseUp' => " document.getElementById('$hulpverlener->id').style.color = '';".PHP_EOL]);

}

        return view('overzicht', compact('hulpverleners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
