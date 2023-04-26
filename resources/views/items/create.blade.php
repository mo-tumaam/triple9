@extends('layouts.dash')

@section('content')

<div class="block-forms">
  <div class="trip-card">
    <div class="block-header">
      <h2> COMPANY ASSET</h2>
      <a href="{{ route('subitems.create')}}">  <button>COST CENTRES<span class="icon-basic-target"></span></button></a>
    </div>


    <form  action="{{ route('items.store')}}" method="POST"> 
      @csrf

      <div class="block-upper">
        <div class="col-2 ">
          <div class="form-input">
            <input type="text" name="item" required>
            <span>Name</span>
          </div>


          <div class="form-subm submit">
            <button type="submit" value="" >Submit</button>
          </div>
        </div>



      </div> 
    </form>
  </div>
</div>

<div class="recent">
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
                 <td>#</td>
                <td>Name</td>
                <td>Category</td>
               
                <td colspan="2">Action</td>

              </tr>
            </thead>
            <tbody>
                @foreach($subitem as $subitem )
              <tr>
              <td>{{$subitem->id}}</td> 
              <td>{{$subitem->name}}</td> 
               <td>{{$subitem->item->item}}</td> 
              <td><a href="{{ $subitem->id}}"> <button type="submit" class="icon-basic-upload icon-edit">
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
        <h2> Asset</h2>

        <button><span class="icon-basic-target"></span></button>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table width="100%" id="ajax-crud-datatable">
            <thead>
              <tr>
                 <td>#</td>
                <td>Name</td>
               
                <td colspan="2">Action</td>

              </tr>
            </thead>
            <tbody>
                @foreach($item as $items )
              <tr>
              <td>{{$items->id}}</td> 
              <td>{{$items->item}}</td> 
              <td><a href="{{ $items->id}}"> <button type="submit" class="icon-basic-upload icon-edit"></button></a>
                 <a href=""> <button type="submit" class="icon-basic-trashcan-full icon-delete"></td> 

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