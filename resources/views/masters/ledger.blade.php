@extends('layouts.dash')

@section('content')

<div class="block-forms">
  <div class="trip-card">
    <div class="block-header">
      <h2> Ledger Creation</h2>
    <a href="{{ route('masters.create') }}">  <button>+ <span class=""> &nbsp; Master</span></button></a>
    </div>


<form  action="{{ route('ledger.store') }}" method="POST"> 
@csrf

<div class="block-upper">
        <div class="block-refrence ">
          <div class="form-input">
      <input type="text" name="name" required>
      <span>Name</span>
    </div>
 
    <div class="form-input">
    <select required placeholder="" name="master_id"> <option disabled selected >Under ..</option>
@foreach($master as $master)

            <option value="{{$master->id}}">{{$master->name}}</option>
            
@endforeach
      </select>
                
    </div>
   
<div class="form-subm submit">
      <button type="submit" value="" >Submit</button>
  </div>
          
   </div> 
 </div>
</form>
</div>
</div>


 



 

@endsection