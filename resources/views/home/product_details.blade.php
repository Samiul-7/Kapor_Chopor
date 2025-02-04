<!DOCTYPE html>
<html>

<head>

@include('home.css')

</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
     @include('home.header')
    <!-- end header section -->
  </div>
    <!-- Details part -->

    <section class="shop_section layout_padding">
    <div class="container">
        <div class="heading_container heading_center">
            <h2>Latest Products</h2>
        </div>
        <div class="row">
            <div class="col-md-10 ">
                <div class="box">
                    
                        <div class="img-box">
                            <img src="{{$data->image}}" alt="{{$data->title}}">
                        </div>
                        <div class="detail-box">
                            <h6>{{$data->title}}</h6>
                        </div>
                        <div class="detail-box">
                            <h6>Category:{{$data->catrgory}}</h6>
                            <h6>Available quantity:{{$data->quantity}}</h6>
                            <h6>Price: <span>Tk{{$data->price}}</span></h6>
                            <p>{{$data->description}}</p>
                        </div>
                </div>
            </div>
        </div>
    </div>
</section>




    <!-- Details part end-->
  @include('home.footer')
</body>

</html>