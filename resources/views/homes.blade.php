@extends('layouts.dash')

@section('content')
<div class="cards">
  <div class="single-card">
    <div>
        <h2>{{$count}}</h2>
        <span>Employee</span>
    </div>
    <div>
        <span class="icon-basic-rss"></span>
    </div>
</div>
<div class="single-card">
    <div>
        <h3>@money($sum)</h3>
        <span>Monthly</span>
    </div>
    <div>
        <span class="icon-basic-lightbulb"></span>
    </div>
</div>



<div class="single-card">
    <div>
        <h4>Tzs @money($paid)</h4>
        <span>Paid</span>
    </div>
    <div>
        <span class="icon-basic-gear"></span>
    </div>
</div>
<div class="single-card">
    <div>
        <h3 class="wht">@money($sum*12 - $paid)</h3>
        <span>Yearly</span>
    </div>
    <div>
        <span class="icon-basic-gunsight"></span>
    </div>
</div>
</div>





<div class="recent">
    <div class="projects">
        <div class="card">
            <div class="card-header">
                <h2> Employee Report</h2>

                <button>Pay rise <span class="icon-basic-target"></span></button>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table width="100%" id="ajax-crud-datatable">
                        <thead>
                            <tr>
                                <td>Name</td>

                                <td> Salary</td>
                                <td>Balance</td>

                                <td>Duration</td>

                                <td>Date</td>
                               
                                <td colspan="2">Action</td>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach($emp as $employee )
                            <tr>
                                <td>{{ $employee ->name }}</td>
                                <td> @money($employee -> salary) </td>
                                <td>@money($employee->balance)</td>


                                <td> 
                                  <?php 
                                  $fdate=$employee->startDate;
                                  $ldate=$employee->created_at;
                                  $s=$employee->salary;

                                  $dtime1 =new DateTime($fdate);
                                  $dtime2 =new DateTime($ldate);

                                  $interval= $dtime1->diff($dtime2);
                                  $days=$interval->format('%m');
                                  echo ($days).  'Months' ;
                              ?></td>

                              <td> {{$employee->startDate->format('d/m/y')}}

                              </td>
                             
                            <td> <a href="{{route('employee.pdf', $employee->id)}}"> <span class="icon-basic-folder icon-view "></span></a>
                             
                                <form action="{{route('pay.destroy', $employee->id)}}" method="POST" onsubmit="return confirmDelete()">@csrf
                                    {{method_field('DELETE')}}
                                    <button type="submit" class="icon-basic-trashcan-full icon-delete"></button></form></td>
                                </tr>
                                @endforeach



                            </tbody>


                        </table>
                    </div>
                </div>
            </div>
        </div>



        <div class="customer">
            <div class="card">
                <div class="card-header">
                    <h2>All employees</h2>

                    <button>see all <span class="icon-basic-target"></span></button>
                </div>
                <div class="card-body">
                    @foreach($emp as $empl )
                    <div class="customer">
                        <div class="info">
                            
                            <img src="{{ asset('css/img/logo.jpg ') }}" width="40px" height="30px">
                            <div>
                                 
                                <h4>{{$empl->name}}</h4>
                                <small>@money($empl->salary)</small>
                              
                            </div>
                        </div>
                            <div class="contact">
                              <a href="{{route('payroll.details', $empl->id)}}"> <span class="icon-basic-eye icon-view "></span></a>
                               <a href="{{route('pay.edit', $empl->id)}}"> <button type="submit" class="icon-basic-upload icon-edit"></button></a>

                            </div> 
                        </div>@endforeach

                       
                                     
                                        </div>
                                    </div>
                                </div>
                            </div>








                            @endsection
