<!DOCTYPE html>
<html>
   <head>
    @include('frontend.css')
   </head>
   <body>
      <div class="hero_area">
         <!-- header section strats -->
         @include('frontend.header')
         <!-- end header section -->
         <!-- slider section -->
        @include('frontend.slider')
         <!-- end slider section -->
      </div>
      <!-- why section -->
        @include('frontend.why')
      <!-- end why section -->
      
      <!-- arrival section -->
       @include('frontend.arrival')
      <!-- end arrival section -->
      
      <!-- product section -->
      @include('frontend.product')
      <!-- end product section -->

      <!-- subscribe section -->
      @include('frontend.subcribe')
      <!-- end subscribe section -->
      <!-- client section -->
        @include('frontend.client')
      <!-- end client section -->
      <!-- footer start -->
         @include('frontend.footer')
      <!-- footer end -->
      
      <!-- jQery -->
      <script src="frontend/js/jquery-3.4.1.min.js"></script>
      <!-- popper js -->
      <script src="frontend/js/popper.min.js"></script>
      <!-- bootstrap js -->
      <script src="frontend/js/bootstrap.js"></script>
      <!-- custom js -->
      <script src="frontend/js/custom.js"></script>
   </body>
</html>