<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ledger;
use App\Models\Allclient;
use App\Models\Trip;
use App\Models\Receive;
use Carbon\Carbon;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $client =Allclient::all();
        return view('client.index', compact('client'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ledger = Ledger::all();
        return view ('client.create', compact('ledger'));
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
        'name' =>'required',
        
        'address' =>'required',
        'contact' => 'required',
         'ledger_id' => 'required',

        ]);
    Allclient::create($request->post());
return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $client = Allclient::where('id', $id)->first();
        $trip = Trip::where('allclient_id', $client->id)->orderBy('date', 'asc')->get();
         $receipt = Receive::where('allclient_id', $client->id)->orderBy('date', 'asc')->get();
            $count= Trip::where('allclient_id', $client->id)->whereYear('date',Carbon::now())->count();
        return view('client.display', compact('trip', 'receipt', 'count'));
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
