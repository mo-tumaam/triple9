@extends('layouts.dash')

@section('content')

<div class="block-forms">
  <div class="trip-card">
    <div class="block-header">
      <h2> Client Creation</h2>
    <a href="{{ route('clients.index') }}">  <button><span class="icon-basic-target"></span> &nbsp; VIEW</button></a>
    </div>


<form  action="{{ route('clients.store') }}" method="POST"> 
@csrf



 <div class="block-body"> 
      <div class="block-details">
        <div class="block-content">

    <div class="form-input">
         <input type="text" name="name" required autocomplete="off">
                      <span>Client Name</span>
     </div>
   

    <div class="form-input">
         <input type="text" name="address" required autocomplete="off">
                      <span>Address</span>
     </div>

      <div class="form-input">
         <input type="text" name="contact" required autocomplete="off">
                      <span>Contact</span>
     </div>
         
     <div class="form-input">
      <select required placeholder="" name="ledger_id"> <option disabled >G/Ledger</option>

          @foreach($ledger as $ledger)
            <option value="{{$ledger->id}}">{{$ledger->name}}</option>
           @endforeach
            

      </select>
            <span>G/ledger</span>     
    </div>
   
    
      
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