<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')
    <style>
        table{
            border: 2px solid lightgreen;
            text-align: center;
        }    
        th{
            background-color: lightgreen;
            padding: 10px;
            font-size: 18px;
            text-align: center;
        }
        td{
            color:white;
            padding: 10px;
            border: 1px solid lightgreen;
        }
        .table_center{
            display:flex;
            justify-content: center;
            align-items: center;
        }
    </style>
  </head>
  <body>
    @include('admin.header')

    @include('admin.sidebar')
    
    <!-- some extensions that i used-->
    <div class="page-content">
        <div class="page-header>">
            <div class="container-fluid"></div>
            <div class="table_center">
                <table>
                    <tr>
                        <th>Customer Name</th>
                        <th>Address</th>
                        <th>Phone </th>
                        <th>Product Title</th>
                        <th>Product Price</th>
                        <th>Image</th>
                        <th>Status</th>
                        <th>Change status</th>
                    </tr>
                    @foreach($data as $data)
                    <tr>
                        <td>{{$data->name}}</td>
                        <td>{{$data->rec_address}}</td>
                        <td>{{$data->phone}}</td>
                        <td>{{$data->product->title}}</td>
                        <td>{{$data->product->price}}</td>
                        <td>
                            <img width="150" src="{{$data->product->image}}">
                        </td>
                        <td>
                            @if($data->status == 'in progress')
                                <span style="color:red">{{$data->status}}</span>
                            @elseif($data->status == 'On the way')
                                <span style="color:skyblue">{{$data->status}}</span>
                                @else
                                <span style="color:green">{{$data->status}}</span>
                            @endif
                        </td>
                        <td>
                            @if($data->status == 'Delivered')
                                <p>Cant Change the status anymore</p>
                                <a class="btn btn-danger" onclick="confirmation(event)" href="{{url('delete_order',$data->id)}}">Delete</a>
                            @else
                                <a class="btn btn-primary" href="{{url('on_the_way',$data->id)}}">On the way</a>
                                <a class="btn btn-success" href="{{url('delivered',$data->id)}}">Delivered</a>
                                <break></break>
                                <a class="btn btn-danger" onclick="confirmation(event)" href="{{url('delete_order',$data->id)}}">Delete</a>

                            @endif
                        </td>
                    </tr>
                    @endforeach
                </table>
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