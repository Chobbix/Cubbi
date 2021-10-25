<script src="https://www.paypal.com/sdk/js?client-id=AalL6GrPpgIxNDaDkesb_DED8QIEEMftQq_TFWnFh3Ty82OAreooXmMoedzVa2uVx7rBrSuzuxr5YZGV&enable-funding=venmo&currency=MXN" data-sdk-integration-source="button-factory"></script>

<script>
    
    paypal.Buttons({
        
        style: {
            shape: 'pill',
            color: 'blue',
            layout: 'horizontal',
            label: 'paypal',
        },

        createOrder: function(data, actions) {
            return actions.order.create({
                purchase_units: [{"amount":{"currency_code":"MXN","value":1000}}]
            });
        },

        onApprove: function(data, actions) {
            actions.redirect('cesta.php');
        },

        onError: function(err) {
            console.log(err);
            actions.redirect('cesta.php');
        }

    }).render('#paypal-button-container');

  //  <div id="smart-button-container">
  //    <div style="text-align: center;">
  //      <div id="paypal-button-container"></div>
  //    </div>
  //  </div>
  //<script src="https://www.paypal.com/sdk/js?client-id=sb&enable-funding=venmo&currency=MXN" data-sdk-integration-source="button-factory"></script>
  //<script>
  //  function initPayPalButton() {
  //    paypal.Buttons({
  //      style: {
  //        shape: 'pill',
  //        color: 'blue',
  //        layout: 'horizontal',
  //        label: 'paypal',
  //        
  //      },
//
  //      createOrder: function(data, actions) {
  //        return actions.order.create({
  //          purchase_units: [{"amount":{"currency_code":"MXN","value":1}}]
  //        });
  //      },
//
  //      onApprove: function(data, actions) {
  //        return actions.order.capture().then(function(orderData) {
  //          
  //          // Full available details
  //          console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
//
  //          // Show a success message within this page, e.g.
  //          const element = document.getElementById('paypal-button-container');
  //          element.innerHTML = '';
  //          element.innerHTML = '<h3>Thank you for your payment!</h3>';
//
  //          // Or go to another URL:  actions.redirect('thank_you.html');
  //          
  //        });
  //      },
//
  //      onError: function(err) {
  //        console.log(err);
  //      }
  //    }).render('#paypal-button-container');
  //  }
  //  initPayPalButton();
  //</script>

</script>