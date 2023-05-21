<!DOCTYPE html>
<html>
   <head>
    <?php echo $__env->make('frontend.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <style type="text/css">

        .center
        {
            margin:auto;
            width:100%;
            text-align:center;
            padding:30px;
        }
        .img_de
        {
            height:100px;
            width:100px;
        }
        .total_de
        {
            font-size:30px;
            padding:40px;
        }
    </style>
   </head>
   <body>
      <div class="hero_area">
         <!-- header section strats -->
         <?php echo $__env->make('frontend.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
         <!-- end header section -->

         <?php if(session()->has('message')): ?>
                 <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>

                   <?php echo e(session()->get('message')); ?>


                  </div>
 


                 <?php endif; ?>


         <div class="heading_container heading_center">
               <h2>
                  Cart <span>Products</span>
               </h2>
            </div>
         

                
         
		<div class="center">
			<table class="table">
				<tr>
                    <th>Id</th>
			
				<th>Product Title</th>
				<th>Quantity</th>
				<th>Price</th>
                <th>Total Price</th>
				<th>Image</th>
				<th>Action</th>
                <th>Edit</th>
			</tr>

            <?php

            $totalprice=0;
            ?>

            <?php $__currentLoopData = $cart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cart): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<form action="<?php echo e(url('/cart_update',$cart->id)); ?>" method="POST">
				<?php echo csrf_field(); ?>


	
			<tr>
            <td><?php echo e($cart->id); ?></td>                            
				
				<td><?php echo e($cart->product_title); ?></td>
				
				<td><input style="width:70px;" type="number" min="1" name="quantity" value="<?php echo e($cart->quantity); ?>"></td>
                <td><?php echo e($cart->price); ?></td>
                <td><?php echo e($cart->total); ?></td>
			    
				<td><img class="img_de" src="/product/<?php echo e($cart->image); ?>"></td>
				<td><a class="btn btn-danger" onclick="return confirm('Are you sure to remove this?')" href="<?php echo e(url('/remove_cart',$cart->id)); ?>"> Remove</a></td>
				<td>
                <input type="submit" name="send" value="update" class="btn btn-outline-success">
                </td>
			</tr>
           
            <?php

            $totalprice=$totalprice + $cart->total

            ?>
		
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          
          
				
			
		</form>

			

			</table>

            <h2 class="total_de">Total Price: <?php echo e($totalprice); ?></h2>

            <div>
                <h1 style="font-size:25px; padding-bottom:15px;">Proceed Order</h1>
        <a href="<?php echo e(url('/cash_order')); ?>" class="btn btn-danger"> Cash On Delivery</a>
            <a href="<?php echo e(url('/stripe',$totalprice)); ?>" class="btn btn-danger"> Pay Now</a>
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
</html><?php /**PATH C:\xampp\htdocs\new\resources\views/frontend/showcart.blade.php ENDPATH**/ ?>