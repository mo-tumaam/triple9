@extends('layouts.dash')

@section('content')

<div class="block-forms">
  <div class="trip-card">
    <div class="block-header">
      <h2> REGISTER COST CENTRES</h2>
    <a href="{{route('items.create')}}">  <button>see all <span class="icon-basic-target"></span></button></a>
    </div>


<form  action="{{ route('subitems.store') }}" method="POST"> 
@csrf

<div class="block-upper">
        <div class="block-refrence ">
          <div class="form-input">
      <input type="text" name="name" required>
      <span>Name</span>
    </div>
 
    <div class="form-input">
    <select required placeholder="" name="item_id"> <option disabled selected >Under ..</option>
@foreach($item as $item)

            <option value="{{$item->id}}">{{$item->item}}</option>
            
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