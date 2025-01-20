<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{asset('/admincss/vendor/bootstrap/css/bootstrap.min.css')}}">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="{{asset('/admincss/vendor/font-awesome/css/font-awesome.min.css')}}">
    <!-- Custom Font Icons CSS-->
    <link rel="stylesheet" href="{{asset('/admincss/css/font.css')}}">
    <!-- Google fonts - Muli-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{asset('/admincss/css/style.default.css')}}" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{asset('/admincss/css/custom.css')}}">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{asset('/admincss/img/favicon.ico')}}">
    <style>
      /* Pure black background for the body */
      body {
        background-color: #000; /* Black background */
      }
    </style>
    <style type="text/css">
        .div_deg{
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 60px;
        }
        input[type="text"]{
            width: 400px;
            height: 50px;
        }
    </style>
  </head>
  <body>
    @include('admin.header') <!-- Header Section -->

    @include('admin.sidebar') <!-- Sidebar Section -->

    <div class="page-content">
        <div class="page-header>">
            <div class="container-fluid">
            <h1 style="color: white;">Update Category</h1>
                <div class="div_deg">
                    
                    <form action="{{url('update_category',$data->id)}}" method="post">
                        @csrf
                        <input type="text" name="category" value="{{$data->category_name}}">
                        <input class="btn btn-primary" type="submit" value="Update Category">
                    </form>
                </div>
            </div>
         </div>
    </div>


    <!-- Scripts -->
    <script src="{{asset('admincss/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('admincss/vendor/popper.js/umd/popper.min.js')}}"></script>
    <script src="{{asset('admincss/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('admincss/vendor/jquery.cookie/jquery.cookie.js')}}"></script>
    <script src="{{asset('admincss/vendor/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('admincss/vendor/jquery-validation/jquery.validate.min.js')}}"></script>
    <script src="{{asset('admincss/js/charts-home.js')}}"></script>
    <script src="{{asset('admincss/js/front.js')}}"></script>
  </body>
</html>
