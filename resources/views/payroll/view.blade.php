@extends('layouts.dash')

@section('content')
<div class="cars">
  <div class="single-card">
    @if($count > 0)
    <div>
        @foreach($category as $category)


        <?php 
        $fdate=$category->startDate;
        $ldate=$category->created_at;
        $s=$category->salary;
        $c=$count;
        $balance=$category->balance;
        $contact =$category->contact;
        $adress=$category->address;

        $dtime1 =new DateTime($fdate);
        $dtime2 =new DateTime($ldate);

        $interval= $dtime1->diff($dtime2);
        $days=$interval->format('%m');
        $p= $days * $s-$c+$balance;
        $syl = $s * $days;

        ?>

        <h1>@money($p)  </h1>
        @endforeach
        <span>Balance</span>
    </div>
    <div>
        <span class="icon-basic-eye"></span>
    </div>
</div>
<div class="single-card">
    <div>
        @php
        $total = 0;
        foreach($payment as $pay) {
            $total +=  $pay['paid'];
        }
        @endphp
        <h3> @money( $total )</h3>
        <span>Paid</span>
    </div>
    <div>
        <span class="icon-basic-eye"></span>
    </div>
</div>


<div class="single-card">
    <div>
        @php
        $salary = 0;
        foreach($basic as $salary) {
            $salary =  $salary['salary'];
        }
        @endphp

    

        <h1> 
           @money($salary *$days)
       </h1>
       <span>Salary Earned</span>
   </div>
   <div>
    <span class="icon-basic-eye"></span>
</div>
</div>


</div>




<div class="recent">
    <div class="projects">
        <div class="card">
            <div class="card-header">
                <h2>Recent Payment </h2>

                <a href="{{ URL::to('/employee/pdf') }}"> <button>see all <span class="icon-basic-target"></span></button></a>
            </div>





            <div class="card-body">
                <div class="table-responsive" >
                    <table width="100%" id="table">
                        <thead>
                            <tr>
                                <td>Payment No</td>

                                <td>Amount</td>
                                <td>Date</td>
                                <td>Action</td>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $total = 0;
                            foreach($payment as $report) {
                                $total +=  $report['paid'];
                            }
                            @endphp

                            @php

                            $fdate=$category->startDate;
                            $ldate=$category->created_at;
                            $s=$category->salary;
                            $c=$count;

                            $dtime1 =new DateTime($fdate);
                            $dtime2 =new DateTime($ldate);

                            $interval= $dtime1->diff($dtime2);
                            $d=$interval->format('%m');
                            @endphp


                            @foreach($payment as $payment )
                            <tr>
                                <td>{{ $payment ->id }}</td>

                                <td> @money($payment ->paid)</td>
                                <td>{{ $payment ->date->format('d/m/y') }}</td>



                                <td> <span class="status black"></span>pending</td>
                            </tr>
                            @endforeach
                        </tbody></table>


                    

                    </div>

                </div>

            </div>
        </div>



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

      

    <div class="customer">
        <div class="card">
            <div class="card-header">
                <h2>Employee Details</h2>
                
            </div>

            <div class="card-body">
             <div class="logo">
                <img src="{{ asset('css/img/logo.jpg ') }}"  class="hogol_logo">
                <div class="hogol_name">
                    Hogol Transport<br />
                    Dar-salaam, buza<br />
                    P.O.BOX 8225
                </div>
            </div>

            <div class="invoice-box">
                <table cellpadding="0" cellspacing="0">
                  <tr class="heading">
                    <td>Info:</td>

                    <td>&nbsp;</td>
                </tr>

                <tr class="details">
                    <td>Name</td>

                    <td class="sum">{{$name}}</td>
                </tr>
                <tr class="details">
                    <td>Salary</td>

                    <td class="sum">@money($salary) tz</td>
                </tr>
                <tr class="details">
 
                 <td>Contacts</td>
 
                    <td class="sum"> {{ $contact}}</td>
                </tr>
                  <tr class="details">
                    <td>Address</td>

                    <td class="sum">{{$adress}}</td>
                </tr>
                

            </table></div>

        </div>
    </div>

                        @else
                        no record 
                        @endif 
</div>
</div>







@endsection
