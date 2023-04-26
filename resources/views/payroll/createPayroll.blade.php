@extends('layouts.dash')

@section('content')

<div class="block-forms">
  <div class="trip-card">
    <div class="block-header">
      <h2> Register Employee</h2>
    <a href="{{ route('payroll.payment') }}">  <button>payroll <span class="icon-basic-target"></span></button></a>
    </div>


<form  action="{{ route('pay.store') }}" method="POST"> 
@csrf

  <div class="block-upper">
        <div class="block-refrence ">
          <div class="form-input">
      <input type="text" name="name" required  autocomplete="off">
      <span>Name</span>
    </div>
    <div class="form-input">
     <input type="text" name="salary" required autocomplete="off">
                <span>Basic salary</span>
  </div>
    

     <div class="form-input">
        <input type="text" name="balance"  autocomplete="off">
    <span>Opening B/l</span>
  </div>
    </div>
   

          
   </div> 
   <div class="block-header">
      <h4> Contact Details</h4>
   
    </div>

 <div class="block-body"> 
      <div class="block-details">
        <div class="block-content">

    
    <div class="form-input">
        <input type="text" name="tin" required autocomplete="off">
      <span>Tin Number</span>
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
      <select required placeholder="" name="position"> <option disabled >choose</option>

            <option value="Driver">Driver</option>
            <option value="manager" >Manager</option>
            <option value="Accountant" >Accountant</option>
            <option value="Turnboy" >Turnboy</option>
             <option value="security" >Security</option>
               <option value="Fundi" >Fundi</option>

      </select>
                
    </div>
     <div class="form-input">
      <input type="date" name="startDate" required autocomplete="off">
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