<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sub;
use App\Models\Ledger;
use App\Models\Client;
use App\Models\Trip;
use App\Models\Master;
use App\Models\Category;
use App\Models\Allclient;


class TripController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trip =Trip::all();
        $subitem = sub::all();
        return view('trips.index', compact('trip', 'subitem'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $truck=sub::where('item_id', '=', 1)->get();
         $ledger=Ledger::where('name', '=', 'Trip income')->get();
           $driver=Category::where('position', '=', 'driver')->get();
           $client = Allclient::all();
        return view('trips.trips', compact('truck', 'ledger', 'driver', 'client'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request ->validate([
       'ledger_id' =>'required',
        'sub_id' => 'required',
       'category_id' =>'required',
        'allclient_id' => 'required',
        'container' =>'required|unique:trips',
        'owner' => 'required',
        'destination' =>'required',
        'rate' => 'required|min:2',
        'date' => 'required',

        ]);
    Trip::create($request->post());
return back()->with('success', ' created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
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

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
