@extends('layouts.dash')

@section('content')
 <div class="cards">
            <div class="single-card">
                <div>
                    <h1>20</h1>
                    <span>Trucks</span>
                </div>
                <div>
                    <span class="icon-basic-eye"></span>
                </div>
            </div>


            <div class="single-card">
                <div>
                    <h1>20</h1>
                    <span>Trucks</span>
                </div>
                <div>
                    <span class="icon-basic-eye"></span>
                </div>
            </div>
            <div class="single-card">
                <div>
                    <h1>20</h1>
                    <span>Trucks</span>
                </div>
                <div>
                    <span class="icon-basic-eye"></span>
                </div>
            </div>
            <div class="single-card">
                <div>
                    <h1>20</h1>
                    <span>Trucks</span>
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
                        <h2> Recent projects</h2>
                    
                    <button>see all <span class="icon-basic-target"></span></button>
                </div>
            <div class="card-body">
                <div class="table-responsive">
                <table width="100%">
                    <thead>
                        <tr>
                            <td>Employee Name</td>
                            
                            <td>Basic Salary</td>
                           
                            <td>Duration</td>
                            <td>Total Salary</td>
                            <td>Paid</td>
                            <td> balance</td>
                            <td>Action</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($emp as $employee )
                        <tr>
                            <td>{{ $employee ->name }}</td>
                            <td>{{ $employee -> salary }}</td>
                            

                            <td> 
      <?php 
$fdate=$employee->startDate;
$ldate=$employeecreated_at;
$s=$employee->salary;

$dtime1 =new DateTime($fdate);
$dtime2 =new DateTime($ldate);

$interval= $dtime1->diff($dtime2);
$days=$interval->format('%m');
echo ($days).  'Months' ;


      ?>


                            </td>


                            <td> 
                     /             <?php 
$fdate=$employee->category->startDate;
$ldate=$employee->category->created_at;
$s=$employee->category->salary;

$dtime1 =new DateTime($fdate);
$dtime2 =new DateTime($ldate);

$interval= $dtime1->diff($dtime2);
$days=$interval->format('%m');
echo $s*($days) ;


      ?>*/</td>
      <td>{{$employee->paid}}</td>

      <td>                                  <?php 
$fdate=$employee->category->startDate;
$ldate=$employee->category->created_at;
$s=$employee->category->salary;
$b=$employee->paid;

$dtime1 =new DateTime($fdate);
$dtime2 =new DateTime($ldate);

$interval= $dtime1->diff($dtime2);
$days=$interval->format('%m');
echo $s*($days)- $b ;


      ?></td>
                            
                            <td> <button type="submit" class="icon-basic-upload icon-edit">
                            <button type="submit" class="icon-basic-trashcan-full icon-delete"></td>
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
                        <h2>New  Cutomers</h2>
                
                    <button>see all <span class="icon-basic-target"></span></button>
                </div>
            <div class="card-body">
                <div class="customer">
                    <div class="info">
                    <img src="img/img1.JPG" width="30px" height="30px" alt="">
                    <div>
                        <h4>T323AFZ </h4>
                        <small>TLCU 876543</small>
                    </div></div>
                    <div class="contact">
                        <span >VIEW</span>
                        <span class="icon-basic-upload"></span>
                        
                    </div>
                </div>

                <div class="customer">
                    <div class="info">
                    <img src="img/img1.JPG" width="30px" height="30px" alt="">
                    <div>
                        <h4>Ali Mohamed </h4>
                        <small>CEO officer</small>
                    </div></div>
                    <div class="contact">
                        <span class="icon-basic-upload"></span>
                        <span class="icon-basic-upload"></span>
                        <span class="icon-basic-upload"></span>
                    </div>
                </div>
                <div class="customer">
                    <div class="info">
                    <img src="img/img1.JPG" width="30px" height="30px" alt="">
                    <div>
                        <h4>Ali Mohamed </h4>
                        <small>CEO officer</small>
                    </div></div>
                    <div class="contact">
                        <span class="icon-basic-upload"></span>
                        <span class="icon-basic-upload"></span>
                        <span class="icon-basic-upload"></span>
                    </div>
                </div>
                <div class="customer">
                    <div class="info">
                    <img src="img/img1.JPG" width="30px" height="30px" alt="">
                    <div>
                        <h4>Ali Mohamed </h4>
                        <small>CEO officer</small>
                    </div></div>
                    <div class="contact">
                        <span class="icon-basic-upload"></span>
                        <span class="icon-basic-upload"></span>
                        <span class="icon-basic-upload"></span>
                    </div>
                </div>
                <div class="customer">
                    <div class="info">
                    <img src="img/img1.JPG" width="30px" height="30px" alt="">
                    <div>
                        <h4>Ali Mohamed </h4>
                        <small>CEO officer</small>
                    </div></div>
                    <div class="contact">
                        <span class="icon-basic-upload"></span>
                        <span class="icon-basic-upload"></span>
                        <span class="icon-basic-upload"></span>
                    </div>
                </div>
                <div class="customer">
                    <div class="info">
                    <img src="img/img1.JPG" width="30px" height="30px" alt="">
                    <div>
                        <h4>Ali Mohamed </h4>
                        <small>CEO officer</small>
                    </div></div>
                    <div class="contact">
                        <span class="icon-basic-upload"></span>
                        <span class="icon-basic-upload"></span>
                        <span class="icon-basic-upload"></span>
                     </div>
                     </div>
        </div>
    </div>
</div>
</div>







@endsection
