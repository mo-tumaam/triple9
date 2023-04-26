@extends('layouts.dash')

@section('content')

<div class="block-forms">
  <div class="trip-card">
    <div class="block-header">
      <h2> SALARY PAYMENT</h2>
    <a href="{{route('pay.create')}}">  <button>+<span class=""> &nbsp; Employee</span></button></a>
    </div>


<form  action="{{ route('payroll.store') }}" method="POST"> 
@csrf

 <div class="block-body"> 
      <div class="block-details">
        <div class="block-content">

    
 

     <div class="form-input">
      <select required placeholder="" name="category_id"> <option disabled selected >choose employee</option>
@foreach($employee as $emp)

            <option value="{{$emp->id}}">{{$emp->name}}</option>
            
@endforeach
      </select>
                
    </div>

    <div class="form-input">
         <input type="text" name="paid" required>
                      <span>Advance Salary</span>
     </div>
         

     <div class="form-input">
      <input type="date" name="date" required>
                <span>Start Date</span>
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