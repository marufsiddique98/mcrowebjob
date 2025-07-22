<!DOCTYPE html>
<html>
   <head>
    <title> <?php echo e(__('Paytm Payment Gateway')); ?></title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php
            $action = ($mode == 'test' ? 'https://securegw-stage.paytm.in' : 'https://securegw.paytm.in');
        ?>
      <script type="application/javascript" crossorigin="anonymous" src="<?php echo e($action); ?>/merchantpgpui/checkoutjs/merchants/<?php echo e($paytm_data['app_id']); ?>.js"></script>
   </head>
   <body>


      <div class="container text-center">
      	loading...
      </div>
      <script>
        document.addEventListener('DOMContentLoaded', function () {
            setTimeout(() => {
                openJsCheckoutPopup('<?php echo e($paytm_data['orderId']); ?>','<?php echo e($paytm_data['txnToken']); ?>','<?php echo e($paytm_data['amount']); ?>');
            }, 1000);
        });

        function openJsCheckoutPopup(orderId, txnToken, amount) {
            console.log(orderId, txnToken, amount);
            var config = {
                "root": "",
                "flow": "DEFAULT",
                "data": {
                    "orderId": orderId,
                    "token": txnToken,
                    "tokenType": "TXN_TOKEN",
                    "amount": amount
                },
                "merchant": {
                    "redirect": true
                },
                "handler": {
                    "notifyMerchant": function(eventName, data) {
                        console.log("notifyMerchant handler function called");
                        console.log("eventName => ", eventName);
                        console.log("data => ", data);
                    }
                }
            };

            if (window.Paytm && window.Paytm.CheckoutJS) {
                // initialize configuration using init method
                window.Paytm.CheckoutJS.init(config).then(function onSuccess() {
                    // after successfully updating configuration, invoke checkoutjs
                    window.Paytm.CheckoutJS.invoke();
                }).catch(function onError(error) {
                    console.log("error => ", error);
                });
            } else {
                console.log("Paytm CheckoutJS is not loaded yet.");
            }
        }
      </script>
      
   </body>
</html>
<?php /**PATH /home/sharif/Desktop/Laravel Project/mcrowebjob/packages/larapayease/resources/views/paytm.blade.php ENDPATH**/ ?>