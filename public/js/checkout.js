const methodCheckOut = document.querySelectorAll('.method-checkout')
const btnMethodOnline = document.querySelector('#btn-checkout-online')
const btnMethodOffline = document.querySelector('.btn-checkout-offline')
const order = {
    method: null,
    total: document.querySelector('.total-price').textContent / 23000,
}
function ChangeMethodCheckOut() {
    methodCheckOut.forEach((item) => {
        item.addEventListener('click', (e) => {
            if (item.value == 1) {
                btnMethodOnline.style.display = 'none';
                btnMethodOffline.style.display = 'block';
            } else {
                btnMethodOnline.style.display = 'block';
                btnMethodOffline.style.display = 'none';
            }
        })
    })
}
ChangeMethodCheckOut()
paypal.Button.render({
    // Configure environment
    env: 'sandbox',
    client: {
        sandbox: 'ATkc0RIsTwc1itF7oRdhr_ZXJL2y45_wzvchC4wZbnkmwPGO1tnDEn6OnmRsZFRKn_pxZ7T0khmzH2IK',
        production: 'demo_production_client_id'
    },
    // Customize button (optional)
    locale: 'en_US',
    style: {
        size: 'small',
        color: 'gold',
        shape: 'pill',
    },

    // Enable Pay Now checkout flow (optional)
    commit: true,
    // Set up a payment
    payment: function (data, actions) {
        return actions.payment.create({
            transactions: [{
                amount: {
                    total: `${order.total.toFixed(2)}`,
                    currency: 'USD'
                }
            }]
        });
    },
    // Execute the payment
    onAuthorize: function (data, actions) {
        return actions.payment.execute().then(function () {
            fetch('http://localhost/santmdt/modules/api/delete.php')
                .then(res => res.json())
                .then(data => {
                    if (data.message == 'success') {
                        alert('Thanh toán thành công!');
                        window.location = 'http://localhost/santmdt/';
                    } else {
                        alert('Thanh toán không thành công!');
                    }
                })
        });
    }
}, '#btn-checkout-online');