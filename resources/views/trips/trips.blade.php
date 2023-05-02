@extends('layouts.dash')

@section('content')

<div class="block-forms">
  <div class="trip-card">
    <div class="block-header">
      <h2>Trip Creation</h2>
    <a href="{{route('trip.index')}}">  <button> View<span class="icon-basic-target"></span></button></a>
    </div>


<form  action="{{route('trip.store')}}" method="POST"> 
@csrf


  <div class="block-upper">
        <div class="block-refrence ">
  
        <div class="form-input">
      <select required placeholder="" name="ledger_id"> <option disabled >G/Ledger</option>

          @foreach($ledger as $ledger)
            <option value="{{$ledger->id}}">{{$ledger->name}}</option>
           @endforeach
            

      </select>
            <span>G/ledger</span>     
    </div>

              <div class="form-input">
      <select required placeholder="" name="sub_id" required > <option disabled  >Truck</option>
@foreach($truck as $truck)
            <option value="{{$truck->id}}">{{$truck->name}}</option>
           @endforeach
            

      </select>
            <span>Truck</span>     
    </div>

                <div class="form-input">
      <select required placeholder="" name="category_id" required > <option disabled  >Driver</option>
@foreach($driver as $d)
            <option value="{{$d->id}}">{{$d->name}}</option>
           @endforeach
            

      </select>
          <span>Driver Name</span>       
    </div>

                  <div class="form-input">
      <select required placeholder="" name="allclient_id" required > <option disabled  >Driver</option>
@foreach($client as $client)
            <option value="{{$client->id}}">{{$client->name}}</option>
           @endforeach
            

      </select>
          <span>Clearing Agent</span>       
    </div>

    
    </div>
   

          
   </div> 


 <div class="block-body"> 
      <div class="block-details">
        <div class="block-content">

    
    <div class="form-input">
       
        <input type="text" name="container"   autocomplete="off">
        @if ($errors->has('container'))
                            <i class="dis_error">{{ $errors->first('container') }}</i>
                        @endif
      <span>Container</span>
       
    </div>

    <div class="form-input"> 
    
                            
                       
         <input type="text" name="owner"   autocomplete="off">
@if ($errors->has('owner'))
                            <i class="dis_error">{{ $errors->first('owner') }}</i>
                        @endif
                      <span>Consegnee</span>
                    
     </div>

      <div class="form-input">
        
         <input type="text" name="destination"    autocomplete="off">
          @if ($errors->has('destination'))
                            <i class="dis_error">{{ $errors->first('destination') }}</i>
                        @endif
                      <span>Destination</span>
                      
     </div>
         
    
    <div class="form-input">
         <input type="number" name="rate"  autocomplete="off" >
          @if ($errors->has('rate'))
                            <i class="dis_error">{{ $errors->first('rate') }}</i>
                        @endif
                      <span>Trip Rate</span>
                      
     </div>
     <div class="form-input">
      <input type="date" name="date" autocomplete="off">
       @if ($errors->has('date'))
                            <i class="dis_error">{{ $errors->first('date') }}</i>
                        @endif
                <span>LoadingDate</span>
                
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