<main class="tk-scetiondb">
    <section class="<?php if(!empty($className) ): ?> tk-sectioninvoice <?php endif; ?>">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="tb-invoiceslist <?php echo e($className); ?>">
                        <div class="tb-dhb-mainheading">
                            <h2><?php echo e(__('transaction.invoices_bills')); ?></h2>
                        </div>
                        <?php if(!$invoices->isEmpty()): ?>
                            <table class="table tb-table">
                                <thead>
                                    <tr>
                                        <th><?php echo e(__('transaction.invoice_no')); ?></th>
                                        <th> <?php echo e(__('transaction.payment_type')); ?></th>
                                        <th><?php echo e(__('transaction.invoice_date')); ?></th>
                                        <th><?php echo e(__('transaction.invoice_amount')); ?></th>
                                        <th><?php echo e(__('transaction.payment_method')); ?></th>
                                        <th><?php echo e(__('transaction.status')); ?></th>
                                        <th><?php echo e(__('general.action')); ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $invoices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $single): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td data-label="<?php echo e(__('transaction.invoice_no')); ?>"><?php echo e($single->id); ?></td>
                                            <td data-label="<?php echo e(__('transaction.payment_type')); ?>"><?php echo e(ucfirst($single->payment_type)); ?></td>
                                            <td data-label="<?php echo e(__('transaction.invoice_date')); ?>"><?php echo e(date( $date_format, strtotime( $single->created_at ))); ?></td>
                                            <td data-label="<?php echo e(__('transaction.invoice_amount')); ?>"><span><?php echo e(getPriceFormat($currency_symbol, ($single->TransactionDetail?->amount+ $single->TransactionDetail?->used_wallet_amt))); ?>  </span></td>
                                            <td data-label="<?php echo e(__('transaction.payment_method')); ?>">
                                                <div class="tb-tablepaymethod">
                                                    <img src="<?php echo e(asset('images/payment_methods/'.$single->payment_method. '.png')); ?>" alt="<?php echo e(__("settings." .$single->payment_method. "_title")); ?>">
                                                    <h6><?php echo e(__("settings." .$single->payment_method. "_title")); ?></h6>
                                                </div>
                                            </td>
                                            <td data-label="<?php echo e(__('transaction.status')); ?>"><span class="tk-project-tag tk-<?php echo e($single->status); ?>"><?php echo e($single->status); ?>  </span></td>
                                            <td data-label="<?php echo e(__('general.action')); ?>">
                                                <ul class="tk-action-icon">
                                                    <?php if($single->status == 'pending'): ?>
                                                        <li> <a href="javascript:void(0);" class="tippy tk-repayment"  data-tippy-content="Repay" onClick="rePayment(<?php echo e($single->id); ?>)"> <img src="<?php echo e(asset('images/icon-repayment.svg')); ?>" alt="<?php echo e(__('general.no_record')); ?>"></a> </li>
                                                        <li> <a href="javascript:void(0);" data-tippy-content="Delete" onClick="deleteInvoice(<?php echo e($single->id); ?>)" class="tb-delete tippy" ><i class="icon-trash-2"></i></a> </li>
                                                    <?php else: ?>    
                                                        <li> <a href="<?php echo e(route('invoice-detail', ['id' => $single->id])); ?>" class="tippy tb-viewdetails"  data-tippy-content="View"><i class="icon-eye"></i></a> </li>
                                                    <?php endif; ?>
                                                </ul>
                                            </td>

                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                            <?php echo e($invoices->links('pagination.custom')); ?>

                        <?php else: ?>
                            <div class="tk-submitreview tk-emptyview">
                                <figure>
                                    <img src="<?php echo e(asset('images/empty.png')); ?>" alt="<?php echo e(__('general.no_record')); ?>">
                                </figure>
                                <h4><?php echo e(__('general.no_record')); ?></h4>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>


<?php $__env->startPush('scripts'); ?>
<script src="<?php echo e(asset('common/js/popper-core.js')); ?>"></script>
<script src="<?php echo e(asset('common/js/tippy.js')); ?>"></script>
<script>
    window.onload = (event) => {
        jQuery(document).ready(function() {
            <?php if(!empty(session('payment_success'))): ?>
                showAlert({
                    message     : "<?php echo e(session('payment_success') ?? __('general.payment_success_desc')); ?>",
                    type        : 'success',
                    title       : "<?php echo e(__('general.payment_success')); ?>" ,
                    autoclose   : 3000
                });
            <?php endif; ?>

            <?php if(!empty(session('payment_cancel'))): ?>
                showAlert({
                    message     : "<?php echo e(session('payment_cancel')); ?>",
                    type        : 'error',
                    title       : "<?php echo e(__('general.payment_cancelled')); ?>" ,
                    autoclose   : false
                });
            <?php endif; ?>
        });
    }

    function deleteInvoice( id ){
        let title           = '<?php echo e(__("general.confirm")); ?>';
        let content         = '<?php echo e(__("general.confirm_content")); ?>';
        let action          = 'deleteInvoice';
        let type_color      = 'red';
        let btn_class      = 'danger';
        ConfirmationBox({title, content, action, id,  type_color, btn_class})
    }

    function rePayment( id ){
        let title           = '<?php echo e(__("general.confirm")); ?>';
        let content         = '<?php echo e(__("general.confirm_content")); ?>';
        let action          = 'rePay';
        let type_color      = 'green';
        let btn_class      = 'success';
        ConfirmationBox({title, content, action, id, type_color, btn_class})
    }

</script>
<?php $__env->stopPush(); ?>
<?php /**PATH /home/sharif/Desktop/Laravel Project/mcrowebjob/resources/views/livewire/earnings/invoices.blade.php ENDPATH**/ ?>