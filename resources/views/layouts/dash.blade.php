<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />

    <!-- Styles -->
     <link href="{{ asset('css/mystyle/forms.css') }}" rel="stylesheet">
     
     <link href="{{ asset('css/mystyle/pdf.css') }}" rel="stylesheet">
   
   
      <link href="{{ asset('css/mystyle/style.css') }}" rel="stylesheet">
       <link href="{{ asset('css/mystyle/card.css') }}" rel="stylesheet">
       <link href="{{ asset('css/mystyle/tripform.css') }}" rel="stylesheet">
       <link rel="stylesheet" type="text/css" href="{{asset('css/mystyle/font/stylesfont.css') }}">



    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">

    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>

    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

      
                
</head>
<body class="container">
    
      <input type="checkbox" name="" id="nav-toggle">
<div class="sidebar">
    <div class="sidebar-brand">
      <h2> <span>Triple B</span></h2>
    </div>

    <div class="sidebar-menu">
      <ul>
        <li> <a href="/pay" class="active"> <span class="icon  icon-basic-home"></span> <span>Dashboard</span></a></li>

      <li> <a href="{{route('masters.create')}}"> <span class="icon  icon-basic-lock"></span> <span>Masters</span></a></li>
       <li> <a href="{{route('trip.create')}}"> <span class="icon  icon-basic-lock"></span> <span>Trips</span></a></li>
           
           <li> <a href="{{route('payroll.payment')}}"> <span class="icon  icon-basic-display"></span> <span>Payroll</span></a></li>
           <li> <a href="{{route('items.create')}}"> <span class="icon  icon-basic-home"></span> <span>Asset </span></a></li>
           <li> <a href="{{route('clients.create')}}"> <span class="icon  icon-basic-home"></span> <span>Client </span></a></li>
            <li> <a href="{{route('receive.create')}}"> <span class="icon  icon-basic-home"></span> <span>Receipt </span></a></li>

        <li> <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <span class="icon  icon-basic-accelerator"></span> <span>Logout</span></a></li>

      

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>

        

      </ul>
    </div>
</div>


       <div class="main-content">
  <header class="main-head">
    <h2>
      <label for="nav-toggle">
        <span class=" humberger">&#9776;</span>
      </label>
      Dashboard
    </h2>

    <div class="search-header">
    <span class=" icon icon-basic-magnifier"></span>
    <input type="search" name="" placeholder="search here">
    </div>

    <div class="user-image">
      <img src="{{ asset('css/img/img5.jpg ') }}" width="30px" height="30px" alt="">
      <div>
        <h4>Tumam Moha</h4>
        <small>super admin</small>
      </div>
    </div>
  </header>
<main>
  




         @yield('content')
       </main>

</div>
<script src="{{asset('vendor/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

 <script>
            
            var table = document.getElementById("table"), sumVal = 0;
            
            for(var i = 1; i < table.rows.length; i++)
            {
                sumVal = sumVal + parseInt(table.rows[i].cells[2].innerHTML);
            }
            
            document.getElementById("val").innerHTML =  sumVal;
            console.log(sumVal);
            
        </script>


  <script>
    $(document).ready(function () {
      $('#dataTable').DataTable(); // ID From dataTable 
      $('#dataTableHover').DataTable(); // ID From dataTable with Hover
    });
  </script>

    <script type="text/javascript">
      function confirmDelete(){
        return confirm('delete now');
      }
    </script>       
</body>
</html>