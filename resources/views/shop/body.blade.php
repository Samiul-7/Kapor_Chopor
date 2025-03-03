<section class="shop_section layout_padding">
    <div class="container">
        <div class="heading_container heading_center">
            <h2>Latest Products</h2>
        </div>

        <!-- Search Box -->
        <form action="{{ url('searchProducts') }}" method="GET" class="mb-4 text-center">
            <input type="text" name="text" placeholder="Search Products..." value="{{ request('text') }}" class="form-control d-inline-block w-50">
            <button type="submit" class="btn btn-primary">Search</button>
        </form>

        <div class="row">
            @if($product->isEmpty())
                <p class="text-center">No products found.</p>
            @else
                @foreach($product as $products)
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="box">
                        <a href="">
                            <div class="img-box">
                                <img src="{{$products->image}}" alt="{{$products->title}}">
                            </div>
                            <div class="detail-box">
                                <h6>{{$products->title}}</h6>
                                <h6>Price: <span>Tk{{$products->price}}</span></h6>
                            </div>
                            <div>
                                <a class="btn btn-danger" href="{{ url('product_details', $products->id) }}">Details</a>
                                <a class="btn btn-primary" href="{{ url('add_cart', $products->id) }}">Add to Cart</a>
                            </div>
                        </a>
                    </div>
                </div>
                @endforeach
            @endif
        </div>
    </div>
</section>
