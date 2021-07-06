<form action="search" method="GET">
    <input type="text" name="custName" class="form-control">
                <button type="submit" class="btn btn-primary">SEARCH</button>
            </div>
        </div>
        <table class="table table-bordered" width="500">
            <tr>
                <td></td>
            </tr>
            <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
               <td><?php echo e($order->name); ?></td>
               <td><?php echo e($order->photo); ?></td>
            </tr>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
