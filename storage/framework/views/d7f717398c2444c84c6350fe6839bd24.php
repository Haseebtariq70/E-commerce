<!DOCTYPE html>
<html lang="en">
  <head>
     <?php echo $__env->make('admin.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
            
                
                
              
            <h1 style="font-size:30px; text-align:center; font-weigth:bold; padding-bottom:15px;">All Orders</h1>

            <div style="padding-left:450px; padding-bottom:15px;">
              <form action="<?php echo e(url('/search')); ?>" method="GET">
                <?php echo csrf_field(); ?>
                <input style="color:black;" type="text" name="search" placeholder="Search For Something">
                <input type="submit" value="Search" class="btn btn-outline-primary">
              </form>
            </div>

            <table class="table" style="text-align:center;">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Address</th>
      <th scope="col">Product Title</th>
      <th scope="col">Quantity</th>
      <th scope="col">Price</th>
      <th scope="col">Payment Status</th>
      <th scope="col">Delivery Status</th>
      <th scope="col">Image</th>
      <th scope="col">Delivered</th>
      
    </tr>
  </thead>
  <tbody>
            

             <?php $__empty_1 = true; $__currentLoopData = $order; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
             <tr>
                <td><?php echo e($order->name); ?></td>
                <td><?php echo e($order->email); ?></td>
                <td><?php echo e($order->phone); ?></td>
                <td><?php echo e($order->address); ?></td>
                <td><?php echo e($order->product_title); ?></td>
                <td><?php echo e($order->quantity); ?></td>
                <td><?php echo e($order->price); ?></td>
                <td><?php echo e($order->payment_status); ?></td>
                <td><?php echo e($order->delivery_status); ?></td>
                <td>
                    <img style="width:200px; height:80px;"src="/product/<?php echo e($order->image); ?>">
                </td>

                <td>
                    <?php if($order->delivery_status=='Processing'): ?>
                    <a onclick="return confirm('Are you to delivered this item.')" href="<?php echo e(url('/delivered',$order->id)); ?>" class="btn btn-success">Delivered</a>

                  <?php else: ?>
                  <p style="color:blue;">delivered</p>

                    <?php endif; ?> 
                </td>

             </tr>

             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
             <tr>
              <td colspan="16">
                No data found
              </td>
             </tr>

             <?php endif; ?>
    
  </tbody>
</table>

             
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
</html><?php /**PATH C:\xampp\htdocs\new\resources\views/admin/order.blade.php ENDPATH**/ ?>