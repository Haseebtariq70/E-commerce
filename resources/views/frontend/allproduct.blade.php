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

               <!-- product section -->
      <section class="product_section layout_padding">
         <div class="container">
            <div class="heading_container heading_center">
               <h2>
                  Our <span>Products</span>
               </h2>
            </div>
            <div class="row">
               

            @foreach($product as $products)
               <div class="col-sm-6 col-md-4 col-lg-4">
                  <div class="box">
                     <div class="option_container">
                        <div class="options">
                           <a href="{{url('/product_detail',$products->id)}}" class="option1">
                           Details
                           </a>
                           <form action="{{url('/add_cart',$products->id)}}" method="POST">

@csrf


<input type="number" name="quantity" value="1" min="1" style="width:100px;">

<div class="add-to-cart">
  <input type="submit" value="Add To Cart" class="add-to-cart-btn">

</div>
</form>
                        </div>
                     </div>
                     <div class="img-box">
                        <img src="/product/{{$products->image}}" alt="">
                     </div>
                     <div class="detail-box">
                        <h5>
                           {{$products->title}}
                        </h5>

                        @if($products->discount_price!=null)
                        <h6 style="color:red;">
                          Discount Price
                          <br>
                           {{$products->discount_price}}
                        </h6>
                        <h6 style="text-decoration:line-through; color:blue;">
                        price
                        <br>

                           {{$products->price}}
                        </h6>

                        @else

                        <h6 style="color:blue;">
                        price
                        <br>
                           {{$products->price}}
                        </h6>

                        @endif

                        
                     </div>
                  </div>
               </div>

               @endforeach

               <span style="padding-top:20px;">
               {!!$product->withQueryString()->links('pagination::bootstrap-5')!!}

               </span>

               

         </div>
      </section>
      <!-- end product section -->

      
      </div>
      
      

      
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