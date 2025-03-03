<!DOCTYPE html>
<html>
  <head>
    @include('admin.css')
    <style type="text/css">
      /* Change body background to pure black */
      body {
        background-color: black;
        color: white; /* Change text color to white for better contrast */
      }

      /* Align the form title and inputs */
      .form-container {
        text-align: center; /* Center align the form container */
        margin-top: 50px; /* Space above the form */
      }

      .form-container h2 {
        font-size: 24px;
        margin-bottom: 15px;
        color: white;
      }

      /* Styling input field */
      input[type='text'] {
        width: 300px;
        height: 40px;
        font-size: 16px;
        padding: 5px;
        margin-right: 10px;
      }

      /* Style for Add Category button */
      .btn-primary {
        background-color: red !important; /* Set background color to red */
        border-color: red !important; /* Set border color to red */
      }

      .btn-primary:hover {
        background-color: darkred !important; /* Darker red on hover */
        border-color: darkred !important;
      }

      /* Style for the table */
      .table-container table {
        margin: 20px auto; /* Center table with margin */
        border-collapse: collapse; /* Remove border spacing */
        width: 70%; /* Adjust table width */
      }

      .table-container th,
      .table-container td {
        border: 1px solid yellowgreen;
        padding: 10px;
        text-align: left; /* Align text to the left */
      }

      .table-container th {
        background-color: skyblue;
        font-size: 18px;
        color: white;
      }

      .table-container td {
        background-color: #333; /* Dark background for table rows */
        color: white;
      }
    </style>
  </head>
  <body>
    @include('admin.header')

    @include('admin.sidebar')

    <div class="page-content">
        <div class="page-header>">
            <div class="container-fluid"></div>
            <div class="form-container">
      <h2>Add Category</h2>
      <form action="{{url('add_category')}}" method="post">
        @csrf
        <div>
          <input type="text" name="category" placeholder="Enter category name">
          <input class="btn btn-primary" type="submit" value="Add Category">
        </div>
      </form>
    </div>

    <div class="table-container">
      <table>
        <tr>
          <th>Category Name</th>
          <th>Edit</th>
          <th>Delete</th>
        </tr>
        @foreach($data as $data)
        <tr>
          <td>{{$data->category_name}}</td>

            <td>
                <a class="btn btn-success" href="{{url('edit_category',$data->id)}}">Edit</a>
            </td>

          <td>
            <a class="btn btn-danger" onclick="confirmation(event)" href="{{url('delete_category',$data->id)}}">Delete</a>
          </td>
        </tr>
        @endforeach
      </table>
    </div>

        </div>
    </div>
    
    <!-- Extensions used -->
    <script type="text/javascript">
        function confirmation(ev){
            ev.preventDefault();
            var urlToRedirect = ev.currentTarget.getAttribute('href');
            console.log(urlToRedirect);

            swal({
                title:"Are You Sure to Delete This Category?",
                text: "This delete will be parmanent",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })

            .then((willCancel)=>{
                if(willCancel){
                    window.location.href=urlToRedirect;
                }
            });
        }
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="{{asset('admincss/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('admincss/vendor/popper.js/umd/popper.min.js')}}"></script>
    <script src="{{asset('admincss/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
  </body>
</html>
