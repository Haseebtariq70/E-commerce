<!DOCTYPE html>
<html>
   <head>
    <base href="/public">
    <?php echo $__env->make('frontend.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   </head>
   <body>
      <div class="hero_area">
         <!-- header section strats -->
         <?php echo $__env->make('frontend.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
         <!-- end header section -->


         <div class="container">
         <div class="heading_container heading_center">
               <h2>
                  Product <span>Details</span>
               </h2>
            </div>
   <div class="row">
       <div class="col-sm-6">
       <img style="margin-top:20px; margin-left:50px;"src="/product/<?php echo e($product->image); ?>" alt="">
       </div>
       <div class="col-sm-6">
           
       <h1><?php echo e($product->title); ?></h1>
       
       <h4>Details: <?php echo e($product->description); ?></h4>
       
       <h4>category: <?php echo e($product['category']); ?></h4>
       

       <?php if($product->discount_price!=null): ?>
                        <h2 style="color:red;">
                          Discount Price
                          <br>
                           $<?php echo e($product->discount_price); ?>

                        </h2>
                        <h2 style="text-decoration:line-through; color:blue;">
                        price
                        <br>

                           $<?php echo e($product->price); ?>

                        </h2>

                        <?php else: ?>

                        <h2 style="color:blue;">
                        price
                        <br>
                           $<?php echo e($product->price); ?>

                        </h2>

                        <?php endif; ?>


       
      
       <form action="<?php echo e(url('/add_cart',$product->id)); ?>" method="POST">

<?php echo csrf_field(); ?>


<input type="number" name="quantity" value="1" min="1" style="width:100px;">
<br>

               <input style="border-radius:20px;" type="submit" value="Add Cart">



               <a href="" class="btn btn-success">Buy Now</a>
               <a href="<?php echo e(url('/')); ?>" class="btn btn-primary">Go Back</a>

       </form>
       <br>
        
       <br><br>
    </div>
   </div>
</div>
</div>
         

      <!-- footer start -->
         <?php echo $__env->make('frontend.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
</html><?php /**PATH C:\xampp\htdocs\new\resources\views/frontend/detail.blade.php ENDPATH**/ ?>