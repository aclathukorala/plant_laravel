<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
  
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/now-ui-dashboard.css?v=1.3.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="blue">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
     
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
          <li class="">
            <a href="/dashboard">
              <img src="https://img.icons8.com/material-sharp/24/000000/details.png" style="float:left">
              <p>Dashboard</p>
            </a>
          </li>
          <li>
            <a href="/plant">
              <img src="https://img.icons8.com/windows/32/000000/potted-plant.png" style="float:left">
              <p>Plant</p>
            </a>
          </li>
          <li class="active">
            <a href="/manage">
            <img src="https://img.icons8.com/windows/32/000000/request-service.png" style="float:left"> 
              <p>Manage website</p>
            </a>
          </li>
          <li>
            <a href="/advertiesment">
            <img src="https://img.icons8.com/ios-filled/50/000000/post-ads.png" style="float:left;width:15%;">
              <p>advertiesment</p>
            </a>
          </li>
          <li>
            <a href="/employeepage">
            <img src="https://img.icons8.com/material-sharp/24/000000/find-matching-job.png" style="float:left;">
              <p>Applications</p>
            </a>
          </li>
          <li>
            <a href="/supplierpage">
            <img src="https://img.icons8.com/material-sharp/24/000000/supplier.png" style="float:left;width:10%;">
              <p>Suppliers</p>
            </a>
          </li>
          <li>
            <a href="./typography.html">
             
              <p></p>
            </a>
          </li>
          
        </ul>
      </div>
    </div>
    <div class="main-panel" id="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
           
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            
            <ul class="navbar-nav">
              
              
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                    {{ Auth::user()->name }} <span class=""></span>
                </a>

                <ul class="dropdown-menu" role="menu">
                    <li>
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();" style="color:black;margin-left:20px;">
                            Logout
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                </ul>
            </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="panel-header panel-header-sm">
       <h1 style="color:white;text-align:center">Image slider</h1>
      </div>
      
      <div class="content">
       
       
        <br>
        <br>

        
               <br>

               <table class="table table-dark" style="text-align:center;">
                   
                    <th>image</th>
                    <th>edit</th>
                   

                    @foreach($data as $datas)
                    <tr>
                       
                        <td><img src="{{asset('uploads/imageslder/'.$datas->image)}}" width="100px" height="100px" alt="image"></td>
                        <td><a href="/editimageslider/{{$datas->id}}" class="btn btn-info" onclick="return confirm('are you sure?')">edit</a></td>
                        
                    </tr>
                    @endforeach

               </table>

        </div>
     
     
     
    </div>
  </div>
 
  <script src="../assets/js/core/jquery.min.js"></script>
  
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  
  
  
  <script src="../assets/js/now-ui-dashboard.min.js?v=1.3.0" type="text/javascript"></script>
 
  
 
</body>

</html>