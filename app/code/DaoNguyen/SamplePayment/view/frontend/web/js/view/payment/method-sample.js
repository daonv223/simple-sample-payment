define([
    'uiComponent',
    'Magento_Checkout/js/model/payment/renderer-list'
], function (Component, rendererList) {
    'use strict';

    rendererList.push({
        type: 'daonguyen_sample_payment',
        component: 'DaoNguyen_SamplePayment/js/view/payment/method-renderer/method-sample'
    });

    return Component.extend({});
});
