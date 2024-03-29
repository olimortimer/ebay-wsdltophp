<?php

namespace EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for PaymentStatusCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Type defining the values that can be returned in the <b>eBayPaymentStatus</b> field of order management calls. These values indicate the current status of the buyer's payment for an order.
 * @subpackage Enumerations
 */
class PaymentStatusCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'NoPaymentFailure'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the buyer's payment for the order has cleared. A <b>CheckoutStatus.eBayPaymentStatus</b> value of 'NoPaymentFailure' and a <b>CheckoutStatus.Status</b> value of 'Complete' indicates that checkout is
     * complete.
     * @return string 'NoPaymentFailure'
     */
    const VALUE_NO_PAYMENT_FAILURE = 'NoPaymentFailure';
    /**
     * Constant for value 'BuyerECheckBounced'
     * Meta information extracted from the WSDL
     * - documentation: This value should no longer be returned as electronic checks are no longer a valid buyer payment method on any eBay marketplace.
     * @return string 'BuyerECheckBounced'
     */
    const VALUE_BUYER_ECHECK_BOUNCED = 'BuyerECheckBounced';
    /**
     * Constant for value 'BuyerCreditCardFailed'
     * Meta information extracted from the WSDL
     * - documentation: This value should no longer be returned as the buyer's form of electronic payment is no longer exposed to the seller since eBay now receives payment from the buyer.
     * @return string 'BuyerCreditCardFailed'
     */
    const VALUE_BUYER_CREDIT_CARD_FAILED = 'BuyerCreditCardFailed';
    /**
     * Constant for value 'BuyerFailedPaymentReportedBySeller'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the seller reported the buyer's offline payment as failed. This enumeration value would only be applicable for a sales transaction that occurred off of eBay's platform.
     * @return string 'BuyerFailedPaymentReportedBySeller'
     */
    const VALUE_BUYER_FAILED_PAYMENT_REPORTED_BY_SELLER = 'BuyerFailedPaymentReportedBySeller';
    /**
     * Constant for value 'PayPalPaymentInProcess'
     * Meta information extracted from the WSDL
     * - documentation: This value should no longer be returned as the buyer's form of electronic payment is no longer exposed to the seller since eBay now receives payment from the buyer.
     * @return string 'PayPalPaymentInProcess'
     */
    const VALUE_PAY_PAL_PAYMENT_IN_PROCESS = 'PayPalPaymentInProcess';
    /**
     * Constant for value 'PaymentInProcess'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the buyer's payment is in process, but has not yet cleared. <br/> <br/> <span class="tablenote"><b>Note:</b> This value may also get returned for a sales transaction that occurred off of eBay's platform, and
     * the payment status may stay in this state unless the seller marks the order as paid.</span>
     * @return string 'PaymentInProcess'
     */
    const VALUE_PAYMENT_IN_PROCESS = 'PaymentInProcess';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_NO_PAYMENT_FAILURE
     * @uses self::VALUE_BUYER_ECHECK_BOUNCED
     * @uses self::VALUE_BUYER_CREDIT_CARD_FAILED
     * @uses self::VALUE_BUYER_FAILED_PAYMENT_REPORTED_BY_SELLER
     * @uses self::VALUE_PAY_PAL_PAYMENT_IN_PROCESS
     * @uses self::VALUE_PAYMENT_IN_PROCESS
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NO_PAYMENT_FAILURE,
            self::VALUE_BUYER_ECHECK_BOUNCED,
            self::VALUE_BUYER_CREDIT_CARD_FAILED,
            self::VALUE_BUYER_FAILED_PAYMENT_REPORTED_BY_SELLER,
            self::VALUE_PAY_PAL_PAYMENT_IN_PROCESS,
            self::VALUE_PAYMENT_IN_PROCESS,
            self::VALUE_CUSTOM_CODE,
        );
    }
}
