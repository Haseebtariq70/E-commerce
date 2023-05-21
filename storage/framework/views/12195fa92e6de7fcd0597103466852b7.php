<!DOCTYPE html>
<html lang="en">
  <head>
     <?php echo $__env->make('admin.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

     <style type="text/css">

        .div_center
        {
            text-align: center;
            padding-top: 40px;

        }
        .h1_font
        {
            font-size: 40px;
            padding-bottom: 40px;
        }
        .input_color
        {
            color : black;
        }
        .center
        {
            margin:auto;
            width:50%;
            text-align: center;
            margin-top: 20px;
            border:3px solid gray;
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

                  <h1 class="h1_font">Add Catagory</h1>

                 <form action="<?php echo e(url('/add_catagory')); ?>" method="POST">

                    <?php echo csrf_field(); ?>

                 <input class="input_color" type="text" name="catagory_name" placeholder="Write Catagory name">

                 <input type="submit" class="btn btn-primary" name="submit" value="Add Catagory">
                 </form>

                  </div>
                  <table class="center">
                    <tr>
                        <td>Catagory Nmae</td>
                        <td>Action</td>
                    </tr>

                    <?php $__currentLoopData = $catagory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <tr>
                        <td><?php echo e($data->catagory_name); ?></td>
                        <td>
                            <a onclick="return confirm('Are you sure to delete this.')" href="<?php echo e(url('/delete_catagory',$data->id)); ?>" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </table>

                </div>
                
              
            </div>
             
                     <!-- content-wrapper ends -->
                  <!-- partial:partials/_footer.html -->
          
                  <!-- partial -->
        </div>
          <!-- main-panel ends -->
        
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <?php echo $__env->make('admin.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </body>
</html><?php /**PATH C:\xampp\htdocs\new\resources\views/admin/catagory.blade.php ENDPATH**/ ?>