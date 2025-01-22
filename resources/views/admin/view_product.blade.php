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
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


    <style type="text/css">
        .div_deg{
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 60px;
        }

        .table_deg{
            border: 2px solid greenyellow;
        }

        th{
            background-color: skyblue;
            color: white;
            font-size: 19px;
            font-wight: bold;
            padding: 15px;
        }

        td{
            border: 1px solid skyblue;
            text-align: center;
            color: aliceblue;
        }
        input[type='search']{
            width: 500px;
            height: 60px;
            margin-left: 50px;


        }

    </style>

  </head>
  <body>
    @include('admin.header')
    @include('admin.js')
    @include('admin.css')
    


    @include('admin.sidebar')
    
    <!-- some extensions that i used-->
    <div class="page-content">
        <div class="page-header>">
            <div class="container-fluid">
                <form action="{{url('product_search')}}" method="get">
                        @csrf
                    <input type="search" name="search">
                    <input type="submit" class="btn btn-secondary" value="Search">
                </form>
             <div class="div_deg">
              <table class="table_deg">

                <tr>
                    <th>Product Title</th>
                    <th>Description</th>
                    <th>Category</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Image</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>

                @foreach($product as $products)
                <tr>

                    <td>{{$products->title}}</td>
                    <td>{!!Str::words($products->description,10)!!}</td>
                    <td>{{$products->catrgory}}</td>
                    <td>{{$products->price}}</td>
                    <td>{{$products->quantity}}</td>
                    <td>
                        <img height="120" width="120" src="products/{{$products->image}}">
                    </td>
                    <td>

                    <a class="btn btn-success"   href="{{url('update_product',$products->id)}}">Edit</a>
                    </td>
                    <td>

                    <a class="btn btn-danger" onclick="confirmation(event)"  href="{{url('delete_product',$products->id)}}">Delete</a>
                    </td>

                </tr>
                @endforeach
              </table>  


             
             </div> 
             <div class="div_deg">

             {{$product->links()}}
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