<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HOGOL PAYROLL</title>
</head>


<style type="text/css">
    :root{
    --main-color:#DD2F6E;
    --color-dark:#1d2231;
    --text-grey:#8390a2;
}
*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    list-style-type: none;
    text-decoration: none;
    font-family: 'poppins', sans-serif;
}


main{
    margin-top: 90px;
    padding: 2rem  1.5rem;
    background: #f1f5f9;
    min-height: calc(100vh - 90px); 
}

.cards{
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    grid-gap: 2rem;

}

.cars{
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    grid-gap: 2rem;
}

.single-card{
    display: flex;
    justify-content: space-between;
    background: #fff;
    padding: 2rem;
    border-radius: 3px; 
}   

.single-card div:last-child span{
font-size: 3rem;
color: var(--main-color);
} 
.single-card div:first-child span{
    color: var(--text-grey);
}
.single-card:last-child{
background-image: linear-gradient(rgba(0, 0, 100, 0.8), rgba(0, 0, 100, 0.8)), url(./img/img1.jpg); 
background-position: center;
background-size: cover;
}

.single-card:last-child h3,
.single-card:last-child div:last-child span{
    color: #fff;
}

.single-card:last-child h1,
.single-card:last-child div:last-child span{
    color: #fff;
}

.single-card:last-child div:first-child span{
    color: #fff;
}
.recent{
    margin-top: 3.5rem;
    display: grid;
    grid-template-columns: 65% auto;
    grid-gap: 1rem;
    
    }
.card{
    background: #fff;
    border-radius: 5px;
}
.card-header,
.card-body{
    padding: 1rem;
}
.card-header{
    display: flex;
    justify-content: space-between;
    align-items: center;
    border-bottom: 1px solid #f0f0f0;
}
.card-header button{
background: var(--main-color);
border-radius: 10px;
color: #fff;
font-size: .8rem;
padding: .5rem 1rem;
outline: none;
border: 1px solid var(--main-color);

}

table{
border-collapse: collapse;
}

thead tr{
    border-top: 1px solid #f0f0f0;
    border-bottom: 1px solid #f0f0f0;
}

thead td{
font-weight: 700;
}
td{
    padding: .5rem 1rem;
    font-size: .9rem; 
    color: #222;
}
td .status{
    display: inline-block;
height: 10px;
width: 10px;
margin-right: 1rem;
border-radius: 50%;


}
tr td:last-child{
    display: flex;
    align-items: center;
}
.status.orange{
    background: orangered;
}
.status.purple{
    background: purple;
}
.status.black{
    background: black;
}

.table-responsive{
    width: 100%;
    overflow-x: auto;
}
.customer{
    display: grid;
    grid-template-columns: 1fr auto;
    justify-content: space-between;
    

}
.info{
    display: flex;
    align-items: center;
padding-bottom: .4rem;
border-bottom: 1px solid #ddd;
}
.info img{
    border-radius: 50%;
    margin-right: 1rem;
}
.info h4{
    font-size: .8rem;
    font-weight: 800;
    color: #222;

}
.info small{
    font-weight: 600;
    color: var(--text-grey);
}
.contact{
    margin-left: .5rem;
    border-bottom: 1px solid #ddd;
}
.contact span{
font-size: 1.2rem;
display: inline-block;
margin-left: .5rem;
color: var(--main-color);
}

.logo{
    display: grid;
    grid-template-columns: 1fr 1fr;
    padding-bottom: 20px;
}

.hogol_logo{
    justify-self: start;
    width: 100%;
    align-self: top;
}
 
 .hogol_name{
    justify-self: end;
    align-self: center;
    font-family: 'algeria'
 }






@media only screen and (max-width: 980px){
.cards, .cars{
    grid-template-columns: repeat(3, 1fr);
}



.recent{
    grid-template-columns: 60% 40%;  
}



}

@media only screen and (max-width: 768px){
.cards, .cars{
    grid-template-columns: repeat(2, 1fr);
}

.recent{
    grid-template-columns: 100%;  
}

@media only screen and (max-width: 560px){
.cards , .cars{
    grid-template-columns: 100%;
}
}
</style>
    
   
   
    
      
       
     
<body class="container">
    <main>

      


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

        $dtime1 =new DateTime($fdate);
        $dtime2 =new DateTime($ldate);

        $interval= $dtime1->diff($dtime2);
        $days=$interval->format('%m');
        $p= $days * $s-$c;
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

                <a href=""> <button>see all <span class="icon-basic-target"></span></button></a>
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


                        @else
                        no record 
                        @endif                  


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
                <img src=""  class="hogol_logo">
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

                    <td class="sum"> 078652436</td>
                </tr>
                

            </table></div>

        </div>
    </div>
</div>
</div>









    </main>
</body>

</html>

