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
        <h2>Registered Clients</h2>

        <button> <span class="icon-basic-target"></span></button>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table width="100%" id="ajax-crud-datatable">
            <thead>
              <tr>
                 <td>#</td>
                <td>client</td>
                  <td>Address</td>
                <td>Contact</td>
             
               
                <td colspan="2">Action</td>

              </tr>
            </thead>
            <tbody>
                @foreach($client as $allclient )
              <tr>
                <td>{{$allclient->id}}</td>
                <td>{{$allclient->name}}</td> 
                 <td>{{$allclient->address}}</td>
                 <td>{{$allclient->contact}}</td>

              
             

             
             
              <td><a href="{{ route('clients.show', $allclient->id)}}}"> <button  class="icon-basic-upload icon-edit"></button></a>
                 <a href=""> <button type="submit" class="icon-basic-trashcan-full icon-delete"></button></a></td> 

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
        <h2>Top Clients</h2>

        <button><span class="icon-basic-target"></span></button>
      </div>
      <div class="card-body">
        <div class="table-responsive">
     <table width="100%" id="ajax-crud-datatable">
            <thead>
              <tr>
                 <td>#</td>
                <td>client</td>
                
             
               
                <td colspan="2">Action</td>

              </tr>
            </thead>
            <tbody>
                @foreach($client as $cl )
              <tr>
                <td>{{$cl->id}}</td>
                <td>{{$cl->name}}</td> 
               

              
             

             
             
              <td><a href="{{ route('clients.show', $cl->id)}}}"> <button  class="icon-basic-upload icon-edit"></button></a>
                 <a href=""> <button type="submit" class="icon-basic-trashcan-full icon-delete"></button></a></td> 

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