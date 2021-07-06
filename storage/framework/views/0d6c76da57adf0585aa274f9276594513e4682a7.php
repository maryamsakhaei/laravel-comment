<?php $__env->startSection('title'); ?>
    comment
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<body>
    <div class="container-fluid main-img">
        
            <div class="container">
                    <div class="row"> 
                        <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <br><br><br>
                        <i class="fa fa-user-circle" style="font-size:24px"><p class="sing-in">Sign in</p></i>
                        <br><br><br>
                        <form action="searchengin" method="post">
                            <?php echo csrf_field(); ?>
                            <div class="input-group">
                            <span class="input-group-btn">
                                <input type="text" class="form-control" placeholder="جستجو..." name="name">
                                <button type="submit"class="btn btn-default search-icon" type="button"> 
                                 <i class="glyphicon glyphicon-search  search-btn"></i></button>
                            </span>

                            </div><!-- /input-group -->
                        </form>
                    </div>
                    <div class="col-md-3"></div> 
                </div>
            </div>
        
    </div><!--main container-->
    <ul class="slideshow">
        <li><span></span><div><h3>Search every things that you want</h3></div></li>
        <li><span></span></li>
        <li><span></span></li>
        <li><span></span></li>
        <li><span></span></li>
        <li><span></span></li>
      </ul>
        <div class="container">
          <header>
            
        </header>
      </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master/layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>