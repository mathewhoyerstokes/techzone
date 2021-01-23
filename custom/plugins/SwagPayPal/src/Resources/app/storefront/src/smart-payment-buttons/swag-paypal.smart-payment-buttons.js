/* eslint-disable import/no-unresolved */

import DomAccess from 'src/helper/dom-access.helper';
import FormSerializeUtil from 'src/utility/form/form-serialize.util';
import StoreApiClient from 'src/service/store-api-client.service';
import SwagPaypalAbstractButtons from '../swag-paypal.abstract-buttons';

export default class SwagPayPalSmartPaymentButtons extends SwagPaypalAbstractButtons {
    static options = {
        /**
         * This option specifies the PayPal button color
         *
         * @type string
         */
        buttonColor: 'gold',

        /**
         * This option specifies the PayPal button shape
         *
         * @type string
         */
        buttonShape: 'rect',

        /**
         * This option specifies the PayPal button size
         *
         * @type string
         */
        buttonSize: 'small',

        /**
         * This option specifies the language of the PayPal button
         *
         * @type string
         */
        languageIso: 'en_GB',

        /**
         * This option holds the client id specified in the settings
         *
         * @type string
         */
        clientId: '',

        /**
         * This options specifies the currency of the PayPal button
         *
         * @type string
         */
        currency: 'EUR',

        /**
         * This options defines the payment intent
         *
         * @type string
         */
        intent: 'capture',

        /**
         * This option toggles the PayNow/Login text at PayPal
         *
         * @type boolean
         */
        commit: false,

        /**
         * This option toggles if credit card and ELV should be shown
         *
         * @type boolean
         */
        useAlternativePaymentMethods: true,

        /**
         * This option specifies if selected APMs should be hidden
         *
         * @type string[]
         */
        disabledAlternativePaymentMethods: [],

        /**
         * URL to create a new PayPal payment
         *
         * @deprecated tag:v3.0.0 - will be removed. Use createOrderUrl instead
         *
         * @type string
         */
        createPaymentUrl: '',

        /**
         * URL to create a new PayPal order
         *
         * @type string
         */
        createOrderUrl: '',

        /**
         * URL to the checkout confirm page
         *
         * @type string
         */
        checkoutConfirmUrl: '',

        /**
         * Is set, if the plugin is used on the order edit page
         *
         * @type string|null
         */
        orderId: null,

        /**
         * URL to the checkout confirm page
         *
         * @type string|null
         */
        accountOrderEditUrl: '',

        /**
         * Selector of the selected payment method
         *
         * @type string
         */
        checkedPaymentMethodSelector: 'input.payment-method-input[checked=checked]',

        /**
         * Selector of the order confirm form
         *
         * @type string
         */
        confirmOrderFormSelector: '#confirmOrderForm',

        /**
         * Selector of the submit button of the order confirm form
         *
         * @type string
         */
        confirmOrderButtonSelector: 'button[type="submit"]',

        /**
         * URL for adding flash error message
         *
         * @type string
         */
        addErrorUrl: ''
    };

    init() {
        this._client = new StoreApiClient();

        this.createButton();
    }

    createButton() {
        this.createScript(() => {
            const paypal = window.paypal;
            this.renderButton(paypal);
        });
    }

    renderButton(paypal) {
        this.confirmOrderForm = DomAccess.querySelector(document, this.options.confirmOrderFormSelector);

        DomAccess.querySelector(this.confirmOrderForm, this.options.confirmOrderButtonSelector).classList.add('d-none');

        return paypal.Buttons(this.getButtonConfig()).render(this.el);
    }

    getButtonConfig() {
        return {
            style: {
                size: this.options.buttonSize,
                shape: this.options.buttonShape,
                color: this.options.buttonColor,
                label: 'checkout'
            },

            /**
             * Will be called if the express button is clicked
             */
            createOrder: this.createOrder.bind(this),

            /**
             * Will be called if the payment process is approved by paypal
             */
            onApprove: this.onApprove.bind(this),

            /**
             * Will be called if an error occurs during the payment process.
             */
            onError: this.onError.bind(this)
        };
    }

    /**
     * @return {Promise}
     */
    createOrder() {
        const formData = FormSerializeUtil.serialize(this.confirmOrderForm);

        const orderId = this.options.orderId;
        if (orderId !== null) {
            formData.set('orderId', orderId);
        }

        return new Promise(resolve => {
            this._client.post(
                this.options.createOrderUrl,
                formData,
                responseText => {
                    const response = JSON.parse(responseText);
                    resolve(response.token);
                }
            );
        });
    }

    onApprove(data, actions) {
        const params = new URLSearchParams();
        let url = this.options.checkoutConfirmUrl;
        params.append('paypalOrderId', data.orderID);

        if (this.options.accountOrderEditUrl !== null) {
            url = this.options.accountOrderEditUrl;
        }

        const redirectUrl = `${url}?${params.toString()}`;

        actions.redirect(redirectUrl);
    }

    onError() {
        this.createError();
    }
}
