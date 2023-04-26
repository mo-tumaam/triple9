@extends('layouts.dash')

@section('content')
      @if($count > 0)
    <div class="invoice-box">
       <div class="logo">
                <img src="{{ asset('css/img/logo.jpg ') }}"  class="hogol_logo">
                <div class="hogol_name">
                   <h1>Hogol Transport</h1>
                   <h2> Dar-salaam, buza <br>
                    P.O.BOX 8225
                </div>
            </div>
      <table cellpadding="0" cellspacing="0">
      
              
            
          
      

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
          <tr></tr>

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
@endsection