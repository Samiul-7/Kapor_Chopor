<!DOCTYPE html>
<html>
  <head> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin </title>
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
                margin-top: 60px;
            }

            h1{
                color: white;
            }

            label{
                display: inline-block;
                width: 250px;
                font-size: 18px!important;
                color: white!important;
            }

            input[type='text']{
                width: 350px;
                height: 50px;
            }

            textarea{
                width: 450px;
                height: 80px;
            }

            .input_deg{
                padding: 15px;
            }

      </style>

  </head>
  <body>
    @include('admin.header')

    @include('admin.sidebar')
    
    <!-- some extensions that i used-->
    <div class="page-content">
        <div class="page-header>">
            <div class="container-fluid">
                <h1>Add Product</h1>
                <div class="div_deg">
                    <form action="{{url('upload_product')}}" method="Post" enctype="multipart/form-data">
                        @csrf
                        <div class="input_deg">
                            <label>Product Title</label>
                            <input type="text" name="title" required>
                        </div>

                        <div class="input_deg">
                            <label>Description</label>
                            <textarea name="description" required></textarea>
                        </div>

                        <div class="input_deg">
                            <label>Price</label>
                            <input type="text" name="price">
                        </div>

                        <div class="input_deg">
                            <label>Quantity</label>
                            <input type="number" name="qty">
                        </div>

                        <div class="input_deg">
                            <label>Product category</label>
                            <select name="category" required>
                                <option>
                                    Selelct an Option
                                </option>

                                @foreach($category as $category)

                                <option value="{{$category->category_name}}">{{$category->category_name}}</option>

                                @endforeach

                            </select>
                        </div>

                        <div class="input_deg">
                            <label>Product image</label>
                            <input type="file" name="image">
                        </div>

                        <div class="input_deg">
                            
                            <input class="btn btn-success" type="submit" value="Add Product">
                        </div>

                    </form>
                </div>
            </div>
         </div>
    </div>

    <script src="{{asset('admincss/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('admincss/vendor/popper.js/umd/popper.min.js')}}"> </script>
    <script src="{{asset('admincss/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('admincss/vendor/jquery.cookie/jquery.cookie.js')}}"> </script>
    <script src="{{asset('admincss/vendor/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('admincss/vendor/jquery-validation/jquery.validate.min.js')}}"></script>
    <script src="{{asset('admincss/js/charts-home.js')}}"></script>
    <script src="{{asset('admincss/js/front.js')}}"></script>
  </body>
</html>