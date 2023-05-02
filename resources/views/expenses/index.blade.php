@extends('layouts.dash')

@section('content')

<div class="cards">
  <div class="single-card">
    <div>
        <h2></h2>
        <span>Employee</span>
    </div>
    <div>
        <span class="icon-basic-rss"></span>
    </div>
</div>
<div class="single-card">
    <div>
        <h3></h3>
        <span>Monthly</span>
    </div>
    <div>
        <span class="icon-basic-lightbulb"></span>
    </div>
</div>



<div class="single-card">
    <div>
        <h4></h4>
        <span>Paid</span>
    </div>
    <div>
        <span class="icon-basic-gear"></span>
    </div>
</div>
<div class="single-card">
    <div>
        <h3 class="wht"></h3>
        <span>Yearly</span>
    </div>
    <div>
        <span class="icon-basic-gunsight"></span>
    </div>
</div>
</div>

<div class="recent">
  <div class="projects">
    <div class="card">
      <div class="card-header">
        <h2>Recent Expenses</h2>
<div class="form_element">
        <form class="search" method="get" action="{{ route('expenses.create') }}">
@csrf
    <span class=" icon icon-basic-magnifier"></span>
    <input type="search" name="search" placeholder="">
   </form>
</div>
      
      </div>
      <div class="card-body">

        
    
        <div class="table-responsive">
          <table width="100%" id="ajax-crud-datatable">
            <thead>
              <tr>
                 <td>Date</td>
                <td>Truck</td>
                <td>File</td>
                  <td>Details</td>
                <td>Amount</td>
                <td>Remarks</td>
                
               
                <td colspan="2">Action</td>

              </tr>
            </thead>
            <tbody>
                @foreach($expense as $exp )
              <tr>
                <td>{{$exp->date->format('d/m/y')}}</td>
                <td>{{$exp->sub->name}}</td> 
                 <td>{{$exp->trip_id}}</td>
               <td>{{$exp->ledger->name}}</td>
             
              <td>@money($exp->amount)</td>

               <td>{{$exp->remark}}</td> 
             
              <td><a href="{{ $exp->id}}"> <button type="submit" class="icon-basic-upload icon-edit">
                 <a href=""> <button type="submit" class="icon-basic-trashcan-full icon-delete"></td> 

              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>


 <div class="projects">
    <div class="card">
      <div class="card-header">
        <h2>Trip Cost</h2>

        <button><span class="icon-basic-target"></span></button>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table width="100%" id="ajax-crud-datatable">
            <thead>
              <tr>
                 <td>Truck</td>
                <td>Trip</td>
                <td>Amount</td>
            

              </tr>
            </thead>
            <tbody>
                @foreach($tripExp as $exps )
              <tr>
              <td>{{$exps->sub->name}}</td> 
              <td>{{$exps->trip_id}}</td> 
              <td> <a href="{{ route('subitems.show', $exps->id)}}">@money($exps->amount)  </a></td>
            

              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>






 
  @endsection