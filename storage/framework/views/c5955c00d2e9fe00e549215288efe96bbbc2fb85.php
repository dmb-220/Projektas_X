<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="content ">
    <div class="content">
        <div class="row">
        <div class="col-md-12">
            <div class="input-group input-group-lg border">
                <div class="input-group-prepend">
                    <button class="btn btn-danger" type="button">
                    <i class="fa fa-pencil-square-o"></i></button>
                </div>
                <input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1">
                <select class="custom-select" id="inputGroupSelect01">
                    <option selected>Choose...</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
                <div class="input-group-append">
                    <button class="btn btn-info" type="button">
                    <i class="fa fa-search"></i></button>
                </div>
            </div>
        </div>
        </div>
    </div>
    <!-- Page Content -->
    <div class="content">
    <div class="row">
        <!-- Row #3 -->
        <div class="col-md-4">
            <div class="block">
                <div class="block-content block-content-full">
                    <div class="py-20 text-center">
                        <div class="mb-20">
                            <i class="fa fa-envelope-open fa-4x text-primary"></i>
                        </div>
                        <div class="font-size-h4 font-w600">RANGOVAI</div>
                        <div class="text-muted">Your main list is growing!</div>
                        <div class="pt-20">
                            <a class="btn btn-rounded btn-alt-primary" href="javascript:void(0)">
                                <i class="fa fa-arrow-circle-o-right mr-5"></i> Žiūrėti
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="block">
                <div class="block-content block-content-full">
                    <div class="py-20 text-center">
                        <div class="mb-20">
                            <i class="fa fa-twitter fa-4x text-info"></i>
                        </div>
                        <div class="font-size-h4 font-w600">UŽSAKOVAI</div>
                        <div class="text-muted">You are doing great!</div>
                        <div class="pt-20">
                            <a class="btn btn-rounded btn-alt-info" href="javascript:void(0)">
                            <i class="fa fa-arrow-circle-o-right mr-5"></i> Žiūrėti
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="block">
                <div class="block-content block-content-full">
                    <div class="py-20 text-center">
                        <div class="mb-20">
                            <i class="fa fa-check fa-4x text-success"></i>
                        </div>
                        <div class="font-size-h4 font-w600">SKELBIMAI</div>
                        <div class="text-muted">This is your current active plan</div>
                        <div class="pt-20">
                            <a class="btn btn-rounded btn-alt-success" href="javascript:void(0)">
                            <i class="fa fa-arrow-circle-o-right mr-5"></i> Žiūrėti
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END Row #3 -->
        
    </div>
    <!-- END Page Content -->
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\Projektas_X\resources\views/home.blade.php ENDPATH**/ ?>