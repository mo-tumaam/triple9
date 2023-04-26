<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\worker;
use App\Models\payment;
use App\Models\SubCategory;
use App\Models\Category;
use DB;

class Payroll extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

      public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request)
    {
        $count= Category::count();
          $sum=Category::sum('salary');
          $paid=SubCategory::sum('paid');
          $emp = Category::orderBy('name', 'asc')->get();




    
    
        return view('homes', compact('emp', 'count', 'sum', 'paid'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('payroll.createPayroll');
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
        'salary' => 'required',
        'position' =>'required',
        'startDate' => 'required',
        'tin' =>'required',
        'balance' => '',
        'address' =>'required',
        'contact' => 'required',

        ]);
    Category::create($request->post());
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
        $emp =Category::find($id);
       return view('payroll.edit', compact('emp'));
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
      
       $category =Category::find($id);
       $category->name=$request->name;
       $category->position=$request->position;
       $category->salary=$request->salary;
       $category->startDate=$request->startDate;
       $category->save();
       return redirect()->route('pay.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $category =Category::find($id);
         $category->delete();

         return redirect()->route('pay.index');
    }
}
