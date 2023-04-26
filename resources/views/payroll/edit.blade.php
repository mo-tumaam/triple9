@extends('layouts.dash')

@section('content')

<div class="block-forms">
  <div class="trip-card">
    <div class="block-header">
      <h2> Edit Employee</h2>
    <a href="/home">  <button>see all <span class="icon-basic-target"></span></button></a>
    </div>


<form  action="{{ route('pay.update' ,[$emp->id]) }}" method="POST"> 

@csrf
{{method_field('PUT')}}


 <div class="block-body"> 
      <div class="block-details">
        <div class="block-content">

    
    <div class="form-input">
        <input type="text" name="name" required value="{{$emp->name}}">
      <span>Employee Name</span>
    </div>

    <div class="form-input">
         <input type="text" name="salary" required value="{{$emp->salary}}" >
                      <span>Basic Salary</span>
     </div>
        
        <div class="form-input">
      <select required placeholder="" name="position"> <option disabled >choose</option>

            <option value="Driver" {{$emp->position == 'Driver' ? 'selected': ''}}>Driver</option>
            <option value="manager" {{$emp->position == 'manager' ? 'selected': ''}} >Manager</option>
            <option value="Accountant" {{$emp->position == 'Accountant' ? 'selected': ''}} >Accountant</option>
            <option value="Turnboy"  {{$emp->position == 'Turnboy' ? 'selected': ''}}>Turnboy</option>
             <option value="security"  {{$emp->position == 'security' ? 'selected': ''}}>Security</option>
               <option value="Fundi"  {{$emp->position == 'Fundi' ? 'selected': ''}}>Fundi</option>

      </select>
                
    </div> 
    
     <div class="form-input">
      <input type="date" name="startDate" required value="{{$emp->startDate->format('Y-m-d')}}">
                <span>Start Date</span>
    </div>
  
    
      
    </div>



  <div class="form-subm submit">
      <button type="submit" value="" >Update</button>
  </div>

   </div>
     </div>
</form>
</div>
</div>
@endsection