<section class="slider_section">
  <div class="slider_container">
    <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="container-fluid">
            <div class="row align-items-center">
              <!-- Text Content -->
              <div class="col-md-6">
                <div class="detail-box">
                  <h1 class="animate_animated animate_fadeInLeft">
                    Welcome To <br>
                    <span class="brand-name">Kapor-Chopor</span>
                  </h1>
                  <p class="animate_animated animate_fadeInUp">
                    Discover the best deals on your favorite products. <br>
                    Shop now for exclusive offers, top-notch quality, and a seamless shopping experience. <br>
                    ✨ Your one-stop shop for everything you love. ✨
                  </p>
                  <a class="nav-link" href="{{ url('/shop') }}">
                  Shop Now
                  </a>
                </div>
              </div>
              <!-- Image Content -->
              <div class="col-md-6">
                <div class="img-box text-center">
                  <img class="animate_animated animate_zoomIn" src="images/image3.jpeg" alt="Shop Now" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Bootstrap & Animations -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
<style>
  .slider_section {
    background: linear-gradient(135deg, rgb(7, 131, 168),rgb(46, 211, 240));
    padding: 80px 0;
  }
  
  .detail-box h1 {
    font-size: 3rem;
    font-weight: bold;
    color: #fff;
  }
  
  .brand-name {
    color:lightgreen;
    font-style: italic;
  }
  
  .detail-box p {
    font-size: 1.2rem;
    color: #fff;
    margin-top: 15px;
    line-height: 1.6;
  }

  .shop-btn {
    display: inline-block;
    padding: 12px 30px;
    background:lightgreen;
    color: lightgreen;
    font-weight: bold;
    border-radius: 30px;
    text-decoration: none;
    margin-top: 20px;
    transition: all 0.3s ease;
  }
  
  .shop-btn:hover {
    background: lightgreen;
    transform: scale(1.05);
  }

  .img-box img {
    max-width: 160%; 
    border-radius: 15px;
    box-shadow: 0px 8px 20px rgba(1, 240, 61, 0.2);
    transform: scale(1.1); /* Slightly enlarge */
    transition: transform 0.3s ease;
  }

  .img-box img:hover {
    transform: scale(1.15); /* Hover effect */
  }

  @media (max-width: 768px) {
    .detail-box h1 {
      font-size: 2.5rem;
    }
    .img-box img {
      max-width: 100%;
      transform: scale(1);
    }
  }
</style>