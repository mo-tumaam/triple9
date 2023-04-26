@extends('layouts.dash')

@section('content')

<div class="cards">
  <div class="single-card">
    <div>

           @php
        $total = 0;
        foreach($trip as $pay) {
            $total +=  $pay['rate'];
        }
        @endphp
        <h2> $@money($total)</h2>
        <span>Current Total</span>
    </div>
    <div>
        <span class="icon-basic-rss"></span>
    </div>
</div>
<div class="single-card">
    <div>
              @php
        $paid = 0;
        foreach($receipt as $receipt) {
            $paid +=  $receipt['paid'];
        }
        @endphp
        <h3>$ @money($paid)</h3>
        <span>paid</span>
    </div>
    <div>
        <span class="icon-basic-lightbulb"></span>
    </div>
</div>



<div class="single-card">
    <div>
        <h4>{{$count}}</h4>
        <span>Total Trips</span>
    </div>
    <div>
        <span class="icon-basic-gear"></span>
    </div>
</div>
<div class="single-card">
    <div>
        <h3 class="wht">@money($total - $paid)</h3>
        <span>Balance</span>
    </div>
    <div>
        <span class="icon-basic-gunsight"></span>
    </div>
</div>
</div>

<div class="full_card">
  <div class="projects">
    <div class="card">
      <div class="card-header">
               
     
       @foreach($trip as $trips) 
            <?php 
            $name = $trips->allclient->name; 
?> 
        @endforeach
      
        <h2>{{$name}}</h2>

       <a href="{{route('receive.create')}}"> <button> <span class="icon-basic-target"></span></button></a>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table width="100%" id="ajax-crud-datatable">
            <thead>
              <tr>
                 <td>Date</td>
                <td>Truck</td>
                  <td>Driver</td>
                <td>Destination</td>
                
                <td>Container</td>
                <td>Rate</td>
               
                <td colspan="2">Action</td>

              </tr>
            </thead>
            <tbody>
                @foreach($trip as $trip )
              <tr>
                <td>{{$trip->date->format('d/m/y')}}</td>
                <td>  {{$trip->sub->name}}</td> 
                 <td><a href="{{route('payroll.details', $trip->category->id)}}">{{$trip->category->name}}</a></td>
              
              <td>{{$trip->destination}}</td> 
             
              <td>{{$trip->container}}</td>

               <td>{{$trip->rate}}</td> 
             
              <td><a href="{{ $trip->id}}"> <button type="submit" class="icon-basic-upload icon-edit">
                 <a href=""> <button type="submit" class="icon-basic-trashcan-full icon-delete"></td> 

              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  @endsection