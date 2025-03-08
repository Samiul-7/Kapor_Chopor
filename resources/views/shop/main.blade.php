<!DOCTYPE html>
<html>

<head>

@include('home.css')

</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
     @include('shop.navbar')
    <!-- end header section -->
  </div>
  <!-- end hero area -->

  <!-- shop section -->
   @include('shop.body')
  
  <!-- end shop section -->
  <!-- info section -->

  @include('home.footer')
</body>

</html>