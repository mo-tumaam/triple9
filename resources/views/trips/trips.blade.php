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
      <span>Container</span>
        @if ($errors->has('container'))
                            <span class="text-danger">{{ $errors->first('container') }}</span>
                        @endif
    </div>

    <div class="form-input">
         <input type="text" name="owner"   autocomplete="off">
                      <span>Consegnee</span>
                        @if ($errors->has('owner'))
                            <span class="text-danger">{{ $errors->first('owner') }}</span>
                        @endif
     </div>

      <div class="form-input">
         <input type="text" name="destination"    autocomplete="off">
                      <span>Destination</span>
                       @if ($errors->has('destination'))
                            <span class="text-danger">{{ $errors->first('destination') }}</span>
                        @endif
     </div>
         
    
    <div class="form-input">
         <input type="number" name="rate"  autocomplete="off" >
                      <span>Trip Rate</span>
                       @if ($errors->has('rate'))
                            <span class="text-danger">{{ $errors->first('rate') }}</span>
                        @endif
     </div>
     <div class="form-input">
      <input type="date" name="date" autocomplete="off">
                <span>LoadingDate</span>
                 @if ($errors->has('rate'))
                            <span class="text-danger">{{ $errors->first('rate') }}</span
                        @endif
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