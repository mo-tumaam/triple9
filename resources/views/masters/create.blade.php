@extends('layouts.dash')

@section('content')

<div class="block-forms">
  <div class="trip-card">
    <div class="block-header">

      <h2> Master Creation</h2>
       @if(Session::has('success'))
                    <div class="success">
                        {{ Session::get('success') }}
                        @php
                            Session::forget('success');
                        @endphp
                    </div>
                @endif
                 
    <a href="{{route('ledger.create')}}">  <button>+<span class="i"></span> &nbsp; Ledger</button></a>
    </div>


<form  action="{{route('masters.store')}}" method="POST"> 
@csrf

<div class="block-upper">
 
        <div class="block-refrence ">
         
          <div class="form-input">
            
      <input type="text" name="name" >
      <span class"text-danger"">Name</span>
@if ($errors->has('name'))
                            <span >{{ $errors->first('name') }}</span>
                        @endif
    </div>
    
      
 
    <div class="form-input">
    <select required placeholder="" name="nature" required> <option disabled selected >Under ..</option>

<option value="expenses">Expenses</option>
<option value="capital account">capital account</option>
<option value="current Liability">current Liability</option>
            <option value="current Asset">current Asset</option>
            <option value="Income">Income</option>
            

      </select>
                @if ($errors->has('nature'))
                            <i class="text-danger">{{ $errors->first('nature') }}</i>
                        @endif
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