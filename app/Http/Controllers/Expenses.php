<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sub;
use App\Models\Ledger;
use App\Models\Client;
use App\Models\Trip;
use App\Models\Master;
use App\Models\Category;
use App\Models\Expense;
use App\Models\Account;

class Expenses extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trip =Trip::all();
        $ledger=Ledger::all();
        $acc=Account::all();
        $master = Master::all();
        $truck=sub::where('item_id', '=', 1)->get();
        $trip = Trip::all();
        return view('expenses.create' , compact('trip', 'master', 'truck', 'ledger', 'trip', 'acc'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function create(Request $request)
    {
         if($request->filled('search')){
        $expense = Expense::search($request->search)->get();
        }else{
            $expense =Expense::all();
        }

       $tripExp = Expense::groupBy('trip_id')
   ->selectRaw('*, sum(amount) as amount')
   ->get();

       // $tripExp = Expense::groupBy('trip_id')->get();
        return view('expenses.index', compact('expense', 'tripExp'));
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
       'account_id' =>'required',
        'trip_id' => 'required',
        
        'remark' =>'required',
        'amount' => 'required|min:2',
        'date' => 'required',

        ]);
    Expense::create($request->post());
return back()->with('success', ' created successfully.');
    }

  public function TripFile(Request $request ,$id)
    {
        
         $tripid = Trip::where('sub_id', $id)->latest()->limit(1)->pluck('id', 'container');
        //dd($tripid);
        return response()->json($tripid);
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
