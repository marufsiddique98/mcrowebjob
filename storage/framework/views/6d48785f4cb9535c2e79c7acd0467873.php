<html>
<head>
    <title> <?php echo e(__('Payfast Payment Gateway')); ?></title>
</head>
<body>
<div class="stripe-payment-wrapper">
    <div class="srtipe-payment-inner-wrapper">
        <?php
            $action = $mode == 'test' ? 'https://sandbox.payfast.co.za/eng/process' : 'https://www.payfast.co.za/eng/process' ;
        ?>
        <form id="payfast-pay-form" action="<?php echo e($action); ?>" method="post">
            <?php $__currentLoopData = $payfast_data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $field_name => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if(!empty($value) || $value === 0): ?>
                    <input type="hidden" name="<?php echo e($field_name); ?>"  value="<?php echo e($value); ?>"/>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </form>
        <div class="btn-wrapper">
            <button id="payment_submit_btn" type="submit">Redirecting please wait...</button>
        </div>
    </div>
</div>

<script>
    (function($){
        "use strict";
        var submitBtn = document.getElementById('payment_submit_btn');
        document.addEventListener('DOMContentLoaded',function (){
            document.getElementById('payfast-pay-form').submit();
        },false);
    })();
</script>
</body>
</html>
<?php /**PATH /home/sharif/Desktop/Laravel Project/mcrowebjob/packages/larapayease/resources/views/payfast.blade.php ENDPATH**/ ?>