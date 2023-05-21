<!DOCTYPE html>
<html>
   <head>
    <?php echo $__env->make('frontend.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
   </head>
   <body>
      <div class="hero_area">
         <!-- header section strats -->
         <?php echo $__env->make('frontend.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
         <!-- end header section -->
         <!-- slider section -->
        <?php echo $__env->make('frontend.slider', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
         <!-- end slider section -->
      </div>
      <!-- why section -->
        <?php echo $__env->make('frontend.why', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <!-- end why section -->
      
      <!-- arrival section -->
       <?php echo $__env->make('frontend.arrival', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <!-- end arrival section -->
      
      <!-- product section -->
      <?php echo $__env->make('frontend.product', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <!-- end product section -->

      <!-- subscribe section -->
      <?php echo $__env->make('frontend.subcribe', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <!-- end subscribe section -->
      <!-- client section -->
        <?php echo $__env->make('frontend.client', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <!-- end client section -->
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
</html><?php /**PATH C:\xampp\htdocs\new\resources\views/frontend/index.blade.php ENDPATH**/ ?>