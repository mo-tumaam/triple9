@extends('layouts.dash')

@section('content')

<div class="expenses">
<h1 class="form_head">Expenses Entry</h1>

<div class="form_content">
<span class="borderline"></span>

<form class="form_part" action="{{ route('expenses.store') }}" method="POST">
@csrf
<div class="form_element" >
			<input type="date" name="date"   required > 
			<span>Date</span>
			<i></i>

		</div>

			

<div class="form_element">
			<select required name="ledger_id"><option >Item</option>
			@foreach($ledger as $ledger)
            <option value="{{$ledger->id}}">{{$ledger->name}}</option>
           @endforeach</select>
			
			<i></i>

		</div>

		<div class="form_element">
			<select required name="sub_id" ><option >Trucks</option>
				@foreach(App\Models\sub::all() as $trucks)
            <option value="{{$trucks->id}}">{{$trucks->name}}</option>
           @endforeach
			</select>
			
			<i></i>

		</div>

	<div class="form_element">
			<select required name="trip_id" >
				<option >select</option>
		
       
			</select>
			
			<i></i>

		</div>


		<div class="form_element">
			<select required name="account_id"><option >Cash A/c</option>
						@foreach($acc as $acc)
            <option value="{{$acc->id}}">{{$acc->ledger->name}}</option>
           @endforeach
			</select>
			
			<i></i>

		</div>

			

			<div class="form_element span3">

			<input type="number" name="amount" required placeholder=> 

			<span>Amount</span>
			<i></i>

		</div>

<div class="form_element span2">
			<textarea required name="remark"></textarea>
			<span>Remarks !!!</span>
			

		</div>

		
		

	<div class="form_element span2">
		<input type="submit" name="" value="submit">

		</div>		

		
</form>


<div class="form_part2">
	<h1 class="form_head mt_2">trip content</h1>
	<div class="exp_display">
		<div class="exp_link">
			<div class="exp_bg">
	<span class="icon  icon-basic-display"> </span><a href="{{route('expenses.create')}}" class="link1" > All Expenses  </a></div>
	<div class="exp_bg">
	<span class="icon  icon-basic-lock icon2"> </span><a href="/" class="link1" > Yesterday  </a></div>
	<div class="exp_bg">
		<span class="icon  icon-basic-lock icon2"> </span><a href="/" class="link1" > This week  </a></div>

<div class="exp_card">
  <div class="single-card2">
    <div>
        <h3>1233</h3>
        <span>Total Expenses</span>
    </div>
    <div>
        <span class="icon-basic-rss"></span>
    </div>
</div>
</div>

</div>
	
</div>
</div>
</div>
</div>



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('select[name="sub_id"]').on('change', function(){
			var truckid = $(this).val();
			if(truckid){
				$.ajax({
					url:'/tripfile/'+truckid,
					type:"GET",
					dataType:"json",
					success:function(data){
						$('select[name="trip_id"]').empty();
						$.each(data, function(key , value){
			$('select[name="trip_id"]').append('<option value=" '+value+'">  HT' +value+' </option>');
						})
					}
				})
			}
		});
	});
</script>
@endsection