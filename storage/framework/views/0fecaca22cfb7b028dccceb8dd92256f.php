<!DOCTYPE html>
<html lang="en">
  <head>

  <base href="/public">
     <?php echo $__env->make('admin.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

     <style type="text/css">
        .div_center
        {
            text-align: center;
            padding-top: 40px;
        }
        .h1_size
        {
            font-size: 40px;
            padding-bottom: 40px;
        }
        .text_color
        {
            color:black;
            padding-bottom: 20px;
        }
        lable 
        {
          display:inline-block;
          width:200px;
        }

     </style>
  </head>
  <body>
    <div class="container-scroller">
        <?php echo $__env->make('admin.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <!-- partial -->
        <div class="container-fluid page-body-wrapper">
           <!-- partial:partials/_navbar.html -->
            <?php echo $__env->make('admin.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
         <!-- partial -->
            <div class="main-panel">
             <div class="content-wrapper">

             <?php if(session()->has('message')): ?>
                 <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>

                   <?php echo e(session()->get('message')); ?>


                  </div>
 


                 <?php endif; ?>

               <div class="div_center">

               <h1 class="h1_size">Update Products</h1>

               <form action="<?php echo e(url('/all_product_update',$product->id)); ?>" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>

               <div>
               <label> Product Title:</label>
                <input class="text_color" type="text" name="title" placeholder="Write Title" required="" value="<?php echo e($product->title); ?>">
               </div>

               <br>


               <div>
               <label> Product Description:</label>
                <input class="text_color" type="text" name="description" placeholder="Write description" required="" value="<?php echo e($product->description); ?>">
               </div>

               <br>

               <div>
               <label> Product Price:</label>
                <input class="text_color" type="number" name="price" placeholder="Write Price" required="" value="<?php echo e($product->price); ?>">
               </div>

               <br>

               <div>
               <label> Product Quantity:</label>
                <input class="text_color" type="number" name="quantity" min="0" placeholder="Write Quantity" required="" value="<?php echo e($product->quantity); ?>">
               </div>

               <br>

               <div>
               <label> Product Discount Price:</label>
                <input class="text_color" type="number" name="disprice" placeholder="Write Disct Price" value="<?php echo e($product->discount_price); ?>">
               </div>

               <br>

               <div>
               <label> Product Catagory:</label>
                <select class="text_color" name="catagory" required="" >
                  <option value="<?php echo e($product->catagory); ?>" selected=""><?php echo e($product->catagory); ?> </option>

                  <?php $__currentLoopData = $catagory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $catagory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($catagory->catagory_name); ?>"> <?php echo e($catagory->catagory_name); ?></option>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                  
                </select>
               </div>

               <br>

               <div>
               <label> Current Product Image:</label>
                <img style="margin:auto" height="100" width="100" src="/product/<?php echo e($product->image); ?>">
               </div>
               <br>

               <div>
               <label> Change Product Image:</label>
                <input type="file" name="image" >
               </div>

               <br>

               <div>
                <input type="submit" value="Update Product" class="btn btn-primary">
               </div>

      </form>


               </div>

             </div>
            
                
                
              
            
             
              <!-- content-wrapper ends -->
             <!-- partial:partials/_footer.html -->
          
             <!-- partial -->

             </div>
          
          <!-- main-panel ends -->
        </div>
       <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <?php echo $__env->make('admin.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </body>
</html><?php /**PATH C:\xampp\htdocs\new\resources\views/admin/update_product.blade.php ENDPATH**/ ?>