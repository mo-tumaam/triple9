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

<div class="full_card">
  <div class="projects">
    <div class="card">
      <div class="card-header">
        <h2>Company Property</h2>

        <button> <span class="icon-basic-target"></span></button>
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
                <td>Agent</td>
                <td>Container</td>
                <td>Rate</td>
               
                <td colspan="2">Action</td>

              </tr>
            </thead>
            <tbody>
                @foreach($trip as $trip )
              <tr>
                <td>{{$trip->date->format('d/m/y')}}</td>
                <td>{{$trip->sub->name}}</td> 
                 <td>{{$trip->category->name}}</td>
              
              <td>{{$trip->destination}}</td> 
              <td>{{$trip->allclient->name}}</td>
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