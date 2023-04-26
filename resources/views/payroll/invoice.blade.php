<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>am done</title>

  <style type="text/css">
  	.invoice-box {
				max-width: 800px;
				margin: auto;
				padding: 30px;
				border: 1px solid #eee;
				box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);
				font-size: 16px;
				line-height: 24px;
				font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
				color: #555;
			}

			.invoice-box table {
				width: 100%;
				line-height: inherit;
				text-align: left;
			}

			.invoice-box table td {
				padding: 5px;
				vertical-align: top;
			}

			.invoice-box table tr td:nth-child(2) {
				text-align: right;
			}

			.invoice-box table tr.top{
				border-bottom: 4px solid #1d2b3a;;

			}

			.invoice-box table tr.top table td {
				padding-bottom: 20px;
			}

			.invoice-box table tr.top table td.title {
				font-size: 45px;
				
				color: #333;
			}

			.invoice-box table tr.information table td {
				padding-bottom: 40px;
			}

			.invoice-box table tr.hh {
			backghround: linear-gradient(rgba(0, 0, 100, 0.8), rgba(0, 0, 100, 0.8));
				border-bottom: 1px solid #ddd;
				font-weight: bold;
			
				font-weight: bolder;
			}

				.invoice-box table tr.heading td {
			background: linear-gradient(rgba(0, 0, 100, 0.8), rgba(0, 0, 100, 0.8));
				border-bottom: 1px solid #ddd;
				font-weight: bold;
			color: white;
				font-weight: bolder;
			}

			.invoice-box table tr.details td {
				padding-bottom: 5px;
			}

			.invoice-box table tr.item td {
				border-bottom: 1px solid #eee;
			}

			.invoice-box table tr.item.last td {
				border-bottom: none;
			}

			.invoice-box table tr.total td:nth-child(2) {
				border-top: 2px solid #eee;
				font-weight: bold;
			}

			i .salary{
				background: linear-gradient(rgba(0, 0, 100, 0.8), rgba(0, 0, 100, 0.8));
				color: white;
				font-weight: bolder;
			}

			.hogol_name{
 	justify-self: start;
 	align-self: center;
 	font-family: 'algeria';
 	padding: 0;
 	margin: 0;
 	font-size: 2rem;
color: rgba(0, 0, 100, 0.8);
letter-spacing: 0.3rem;

 
 }

			@media only screen and (max-width: 600px) {
				.invoice-box table tr.top table td {
					width: 100%;
					display: block;
					text-align: center;
				}

				.invoice-box table tr.information table td {
					width: 100%;
					display: block;
					text-align: center;
				}
			}

			/** RTL **/
			.invoice-box.rtl {
				direction: rtl;
				font-family: Tahoma, 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
			}

			.invoice-box.rtl table {
				text-align: right;
			}

			.invoice-box.rtl table tr td:nth-child(2) {
				text-align: left;
			}
  </style>
</head>
<body>
	@if($count >1)
		<div class="invoice-box">
		
			
				<table cellpadding="0" cellspacing="0">
				<tr class="top">
					<td colspan="2">
						<table>
							<tr>
								<td class="title">
									<img src="{{ public_path().'/storage/logo.jpg' }}" style="width: 100%; max-width: 150px" />
								</td>

								<td>
								<p class="hogol_name">	Hogol Transport</p>
									Buza , Temeke Dar-salaam<br />
									P.O.BOX 8225
								</td>
							</tr>
						</table>
					</td>
				</tr>
							
						
					
			

				 @php
        $name = 0;
        foreach($basic as $salary) {
          $name =  $salary['name'];
      }
      @endphp

      @php
      $salary = 0;


      foreach($basic as $salary) {
        $salary =  $salary['salary'];
    }
    @endphp

      @php
      $position = 0;


      foreach($basic as $position) {
        $position =  $position['position'];
    }
    @endphp

       

				<tr class="information">
					<td colspan="2">
						<table>
							<tr>
								<td>
									{{$name}}<br />
									buza, Dar-es-salaam<br />
									078665432, 
								</td>
              
								<td>
									<i class="salary">salary:Tzs  @money($salary).</i><br />
									{{$position}}<br />
									@foreach($category as $dat)
									since : {{$dat->startDate}}
									@endforeach
									
									
								</td>
							</tr>
						</table>
					</td>
				</tr>

				<tr class="heading">
					<td> Account History</td>

					<td>Balance #</td>
				</tr>

				<tr class="details">
					<td>Basic Salary</td>
@foreach($category as $category)


        <?php 
        $fdate=$category->startDate;
        $ldate=$category->created_at;
        $s=$category->salary;
        $c=$count;

        $dtime1 =new DateTime($fdate);
        $dtime2 =new DateTime($ldate);

        $interval= $dtime1->diff($dtime2);
        $days=$interval->format('%m');
        $p= $days * $s-$c;
        $syl = $s * $days;

        ?>
					<td>@money($s)</td>
					@endforeach
				</tr>
				<tr class="details">
					<td>Salary Earned( {{$days}}Months) </td>
					 @php
        $salary = 0;
        foreach($basic as $salary) {
            $salary =  $salary['salary'];
        }
        @endphp
        <td>@money($salary*$days)</td>
				</tr>
				<tr class="details">
					<td>A/c Balance</td>
					<td>@money($p)</td>
					</tr>

				<tr class="heading">
					<td>Transaction</td>

					<td>Amount</td>
				</tr>
@foreach($payment as $pay )
				<tr class="item">
					
					<td>{{ $pay ->date->format('d/m/y') }}</td>

					<td>@money($pay->paid)</td>
					
				</tr>@endforeach

				

				<tr class="total">
					<td></td>

					<td>Total: @money($count)</td>
				</tr>
			</table>
		</div>
		  @else
                        no record 
                        @endif                  
</body>
</html>