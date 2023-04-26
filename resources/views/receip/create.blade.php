@extends('layouts.dash')

@section('content')

<div class="block-forms">
  <div class="trip-card">
    <div class="block-header">
      <h2> Received voucher</h2>
    <a href="{{ route('clients.index') }}">  <button><span class="icon-basic-eye "> &nbsp; RECEIPTS</span></button></a>
    </div>


<form  action="{{ route('receive.store') }}" method="POST"> 
@csrf

 <div class="block-body"> 
      <div class="block-details">
        <div class="block-content">

    
 

     <div class="form-input">
      <select required placeholder="" name="allclient_id" required > <option disabled selected >Cr</option>
@foreach($client as $client)

            <option value="{{$client->id}}">{{$client->name}}</option>
            
@endforeach
      </select>
                
    </div>

         <div class="form-input">
      <select required placeholder="" name="ledger_id"> <option disabled selected >Dr</option>
@foreach($ledger as $ledger)

            <option value="{{$ledger->id}}">{{$ledger->name}}</option>
            
@endforeach
      </select>
                
    </div>

    <div class="form-input">
         <input type="text" name="paid" required>
                      <span>Amount</span>
     </div>
         

     <div class="form-input">
      <input type="date" name="date" required>
                <span>date</span>
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