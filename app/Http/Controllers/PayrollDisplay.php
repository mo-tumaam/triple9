<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SubCategory;
use App\Models\Category;
use Carbon\Carbon;
use PDF;

class PayrollDisplay extends Controller
{
    public function display(Request $Request, $id)
    {
       $display= Category::where('id', $id)->first();
       $payment= SubCategory::where('category_id', $display->id)->orderBy('date', 'asc')->get();
//$salary= SubCategory::where('category_id', $display->id)->whereMonth('date',Carbon::now())->get();
       $count= SubCategory::where('category_id', $display->id)->whereYear('date',Carbon::now())->sum('paid');


$category = SubCategory::join('categories', 'categories.id', '=', 'sub_categories.category_id')->select('categories.*')->where('category_id', $display->id)->groupBy('category_id')->get();

$basic = SubCategory::join('categories', 'categories.id', '=', 'sub_categories.category_id')->select('categories.*')->where('category_id', $display->id)->groupBy('category_id')->get();




       return view('payroll.view', compact('payment', 'count',  'category' , 'basic' ));
    }


  public function view(){
$employee =Category::all();

 //$category = Category::join('sub_categories',  'sub_categories.category_id', '=','categories.id')-> select('categories.*', 'sub_categories.paid', SubCategory::raw('sum(paid)as amount' ))->groupBy('category_id')->get();



   return view('payroll.payment', compact('employee'));
  } 


  public function store(Request $request)
    {
        $request ->validate([
        'category_id' =>'required',
        'paid' => 'required',
        
        'date' => 'required',

        ]);
    SubCategory::create($request->post());
return redirect()->back();

    }  

    public function edit($id)
    {
       $emp =Category::find($id);
       return view('payroll.edit', compact('emp'));
    }

    public function update(Request $request, $id){

       $request ->validate([
        'name' =>'required',
        'position' => 'required',
        'salary' => 'required',
        'starDate' => 'required',

        ]); 
       $category =Category::find($id);
       $category->name=$request->name;
       $category->position=$request->position;
       $category->salary=$request->salary;
       $category->startDate=$request->startDate;
       $category->save();

       return view('payroll.view');

    }

      public function createPDF($id) {
      // retreive all records from db

     $display= Category::where('id', $id)->first();
       $payment= SubCategory::where('category_id', $display->id)->orderBy('date', 'asc')->get();
//$salary= SubCategory::where('category_id', $display->id)->whereMonth('date',Carbon::now())->get();
       $count= SubCategory::where('category_id', $display->id)->whereYear('date',Carbon::now())->sum('paid');


$category = SubCategory::join('categories', 'categories.id', '=', 'sub_categories.category_id')->select('categories.*')->where('category_id', $display->id)->groupBy('category_id')->get();

$basic = SubCategory::join('categories', 'categories.id', '=', 'sub_categories.category_id')->select('categories.*')->where('category_id', $display->id)->groupBy('category_id')->get();
      // share data to view


$data =[
'payment'=>$payment,
'count'=>$count,
'category'=>$category,
'basic'=>$basic

];
      view()->share('employee',);
      $pdf = PDF::loadView('payroll.invoice', $data);
      // download PDF file with download method
      return $pdf->download('pdf_file.pdf');
    }
}


