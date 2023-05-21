<!DOCTYPE html>
<html lang="en">
  <head>
     <?php echo $__env->make('admin.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


     <style class="text/css">
        .img_size
        {
            width:200px;
            height:200px:
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

                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                x
              </button>

                <?php echo e(session()->get('message')); ?>

                
              </div>




              <?php endif; ?>

              <div class="text-center text-success">
                <h1>All Products</h1>
                
              </div>

              <table class="table mt-4">
                <tr>

                <th> Title</th>
                <th> Price </th>
                <th> Quantity</th>
                <th> Discription</th>
                <th> Category</th>
                <th>Discount Price</th>
                <th> Image</th>
                <th>Delete</th>
                <th>Update</th>

</tr>

<?php $__currentLoopData = $product; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

<tr>
  <td><?php echo e($product->title); ?></td>
  <td><?php echo e($product->price); ?></td>
  <td><?php echo e($product->quantity); ?></td>
  <td><?php echo e($product->description); ?></td>
  <td><?php echo e($product->catagory); ?></td>
  <td><?php echo e($product->discount_price); ?></td>
  <td>
    <img class="img_size" src="/product/<?php echo e($product->image); ?>">
  </td>
  
  <td>
    <a onclick="return confirm('Are You Sure To Delete This Product')" href="<?php echo e(url('delete_product',$product->id)); ?>" class="btn btn-danger">
      Delete
    </a>                  
  </td>
  <td>
    <a href="<?php echo e(url('update_product',$product->id)); ?>" class="btn btn-primary">Update</a>
  </td>

</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                                

              
                
              </table>
             
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
</div>
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
</html><?php /**PATH C:\xampp\htdocs\new\resources\views/admin/showproduct.blade.php ENDPATH**/ ?>