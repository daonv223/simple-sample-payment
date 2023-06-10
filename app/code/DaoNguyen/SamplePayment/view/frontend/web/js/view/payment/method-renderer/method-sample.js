define([
    'jquery',
    'Magento_Checkout/js/view/payment/default'
], function ($, Component) {
    'use strict';

    return Component.extend({
        defaults: {
            template: 'DaoNguyen_SamplePayment/payment/form'
        },

        afterPlaceOrder: function () {
            this.redirectAfterPlaceOrder = false;
            $("#zeus_payment_form").submit();
        }
    });
});
