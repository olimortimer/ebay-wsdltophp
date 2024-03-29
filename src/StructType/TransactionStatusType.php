<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TransactionStatusType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains the order status, e.g. the buyer's online payment and whether the checkout process for the order is complete.
 * @subpackage Structs
 */
class TransactionStatusType extends AbstractStructBase
{
    /**
     * The eBayPaymentStatus
     * Meta information extracted from the WSDL
     * - documentation: Indicates the status of the buyer's payment for an order. If the payment was successfuly processed, a value of <code>NoPaymentFailure</code> will be returned.
     * - minOccurs: 0
     * @var string
     */
    public $eBayPaymentStatus;
    /**
     * The CheckoutStatus
     * Meta information extracted from the WSDL
     * - documentation: Indicates the current status of the checkout flow for the order. If the payment was successfuly processed, a value of <code>CheckoutComplete</code> will be returned.
     * - minOccurs: 0
     * @var string
     */
    public $CheckoutStatus;
    /**
     * The LastTimeModified
     * Meta information extracted from the WSDL
     * - documentation: Indicates date and time an order's status was last updated (in GMT). <br> <span class="tablenote"><b>Note: </b> Please note that for a multiple line item order, if any part of the order was modified, all line items of that order may
     * be returned in the response, and each line item of that order should have the same timestamp value in this field. </span>
     * - minOccurs: 0
     * @var string
     */
    public $LastTimeModified;
    /**
     * The PaymentMethodUsed
     * Meta information extracted from the WSDL
     * - documentation: The payment method that the buyer selected to pay for the order. <br> <span class="tablenote"><b>Note: </b> Sellers no longer have to specify any electronic payment methods at listing time, but this field is still returned. The value
     * returned in this field will generally be <code>CreditCard</code>, unless an eBay gift card was used by the buyer to pay a partial or full balance of the order. If this is the case, the value returned in this field will be <code>CCAccepted</code>.
     * Either of these two values will be returned, but neither accurately reflects the actual payment method that the buyer used. If the order was paid for off of eBay's platform using an 'offline' payment method such as 'CashOnPickup' or 'MOCC' (money
     * order or cashier's check), and the seller marked the order as paid, either of those values may get returned here. </span>
     * - minOccurs: 0
     * @var string
     */
    public $PaymentMethodUsed;
    /**
     * The CompleteStatus
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether checkout is complete, incomplete, or pending for an order.
     * - minOccurs: 0
     * @var string
     */
    public $CompleteStatus;
    /**
     * The BuyerSelectedShipping
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether the buyer has selected shipping details during checkout. False indicates that the shipping service was selected by eBay for the buyer. For example, if the buyer has not yet completed the Review Your Purchase page,
     * he has not picked a shipping service. If it is false, the application should ignore <strong>ShippingServiceCost</strong> and <strong>ShippingServiceSelected</strong> (items whose values are defaulted by eBay).
     * - minOccurs: 0
     * @var bool
     */
    public $BuyerSelectedShipping;
    /**
     * The PaymentHoldStatus
     * Meta information extracted from the WSDL
     * - documentation: This field indicates the type and/or status of a payment hold on the item. <br> <span class="tablenote"><b>Note:</b> For the <strong>GetItemTransactions</strong>, <strong>GetOrders</strong>, and <strong>GetOrderTransactions</strong>
     * calls, this field is only returned to the seller of the order; this field is not returned for the buyer or third party. </span>
     * - minOccurs: 0
     * @var string
     */
    public $PaymentHoldStatus;
    /**
     * The IntegratedMerchantCreditCardEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is no longer applicable as eBay sellers can no longer use iMCC gateway accounts to handle buyer payments. <br> <span class="tablenote"><b>Note: </b> This field is deprecated and will stop being returned in order management
     * calls on January 31, 2024. </span>
     * - minOccurs: 0
     * @var bool
     */
    public $IntegratedMerchantCreditCardEnabled;
    /**
     * The eBayPaymentMismatchDetails
     * Meta information extracted from the WSDL
     * - documentation: This container is no longer used.
     * - minOccurs: 0
     * @var \StructType\EBayPaymentMismatchDetailsType
     */
    public $eBayPaymentMismatchDetails;
    /**
     * The InquiryStatus
     * Meta information extracted from the WSDL
     * - documentation: This field gives the status of a buyer's Item Not Received (INR) Inquiry. This field is only returned if the buyer has created an INR Inquiry through the site or through the Post-Order API.
     * - minOccurs: 0
     * @var string
     */
    public $InquiryStatus;
    /**
     * The ReturnStatus
     * Meta information extracted from the WSDL
     * - documentation: This field gives the status of a buyer's return request. This field is only returned if the buyer has initiated a return request, or has escalated an existing return request into a return case.
     * - minOccurs: 0
     * @var string
     */
    public $ReturnStatus;
    /**
     * The PaymentInstrument
     * Meta information extracted from the WSDL
     * - documentation: The enumeration value in this field indicates which payment method was used by the German buyer who was offered the 'Pay Upon Invoice' option. This field will only be returned if a German buyer was offered the 'Pay Upon Invoice'
     * option. Otherwise, the buyer's selected payment method is returned in the <b>PaymentMethodUsed</b> field by the <b>GetItemTransactions</b> call.
     * - minOccurs: 0
     * @var string
     */
    public $PaymentInstrument;
    /**
     * The DigitalStatus
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates the current state of a purchased digital gift card. The normal flow is for the buyer (or other recipient of the gift card) to download the gift card from the delivered email after purchase, and then
     * to activate the card for use. This field is only applicable and returned for digital gift card order line items.
     * - minOccurs: 0
     * @var string
     */
    public $DigitalStatus;
    /**
     * The CancelStatus
     * Meta information extracted from the WSDL
     * - documentation: The current status for the order cancellation request if it exists. This field is only returned if a cancellation request has been made on an order, or if the order is currently going through the cancellation process, or if the order
     * has already been cancelled.
     * - minOccurs: 0
     * @var string
     */
    public $CancelStatus;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for TransactionStatusType
     * @uses TransactionStatusType::setEBayPaymentStatus()
     * @uses TransactionStatusType::setCheckoutStatus()
     * @uses TransactionStatusType::setLastTimeModified()
     * @uses TransactionStatusType::setPaymentMethodUsed()
     * @uses TransactionStatusType::setCompleteStatus()
     * @uses TransactionStatusType::setBuyerSelectedShipping()
     * @uses TransactionStatusType::setPaymentHoldStatus()
     * @uses TransactionStatusType::setIntegratedMerchantCreditCardEnabled()
     * @uses TransactionStatusType::setEBayPaymentMismatchDetails()
     * @uses TransactionStatusType::setInquiryStatus()
     * @uses TransactionStatusType::setReturnStatus()
     * @uses TransactionStatusType::setPaymentInstrument()
     * @uses TransactionStatusType::setDigitalStatus()
     * @uses TransactionStatusType::setCancelStatus()
     * @uses TransactionStatusType::setAny()
     * @param string $eBayPaymentStatus
     * @param string $checkoutStatus
     * @param string $lastTimeModified
     * @param string $paymentMethodUsed
     * @param string $completeStatus
     * @param bool $buyerSelectedShipping
     * @param string $paymentHoldStatus
     * @param bool $integratedMerchantCreditCardEnabled
     * @param \StructType\EBayPaymentMismatchDetailsType $eBayPaymentMismatchDetails
     * @param string $inquiryStatus
     * @param string $returnStatus
     * @param string $paymentInstrument
     * @param string $digitalStatus
     * @param string $cancelStatus
     * @param \DOMDocument $any
     */
    public function __construct($eBayPaymentStatus = null, $checkoutStatus = null, $lastTimeModified = null, $paymentMethodUsed = null, $completeStatus = null, $buyerSelectedShipping = null, $paymentHoldStatus = null, $integratedMerchantCreditCardEnabled = null, \StructType\EBayPaymentMismatchDetailsType $eBayPaymentMismatchDetails = null, $inquiryStatus = null, $returnStatus = null, $paymentInstrument = null, $digitalStatus = null, $cancelStatus = null, \DOMDocument $any = null)
    {
        $this
            ->setEBayPaymentStatus($eBayPaymentStatus)
            ->setCheckoutStatus($checkoutStatus)
            ->setLastTimeModified($lastTimeModified)
            ->setPaymentMethodUsed($paymentMethodUsed)
            ->setCompleteStatus($completeStatus)
            ->setBuyerSelectedShipping($buyerSelectedShipping)
            ->setPaymentHoldStatus($paymentHoldStatus)
            ->setIntegratedMerchantCreditCardEnabled($integratedMerchantCreditCardEnabled)
            ->setEBayPaymentMismatchDetails($eBayPaymentMismatchDetails)
            ->setInquiryStatus($inquiryStatus)
            ->setReturnStatus($returnStatus)
            ->setPaymentInstrument($paymentInstrument)
            ->setDigitalStatus($digitalStatus)
            ->setCancelStatus($cancelStatus)
            ->setAny($any);
    }
    /**
     * Get eBayPaymentStatus value
     * @return string|null
     */
    public function getEBayPaymentStatus()
    {
        return $this->eBayPaymentStatus;
    }
    /**
     * Set eBayPaymentStatus value
     * @uses \EnumType\PaymentStatusCodeType::valueIsValid()
     * @uses \EnumType\PaymentStatusCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $eBayPaymentStatus
     * @return \StructType\TransactionStatusType
     */
    public function setEBayPaymentStatus($eBayPaymentStatus = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\PaymentStatusCodeType::valueIsValid($eBayPaymentStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\PaymentStatusCodeType', is_array($eBayPaymentStatus) ? implode(', ', $eBayPaymentStatus) : var_export($eBayPaymentStatus, true), implode(', ', \EnumType\PaymentStatusCodeType::getValidValues())), __LINE__);
        }
        $this->eBayPaymentStatus = $eBayPaymentStatus;
        return $this;
    }
    /**
     * Get CheckoutStatus value
     * @return string|null
     */
    public function getCheckoutStatus()
    {
        return $this->CheckoutStatus;
    }
    /**
     * Set CheckoutStatus value
     * @uses \EnumType\CheckoutStatusCodeType::valueIsValid()
     * @uses \EnumType\CheckoutStatusCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $checkoutStatus
     * @return \StructType\TransactionStatusType
     */
    public function setCheckoutStatus($checkoutStatus = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\CheckoutStatusCodeType::valueIsValid($checkoutStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\CheckoutStatusCodeType', is_array($checkoutStatus) ? implode(', ', $checkoutStatus) : var_export($checkoutStatus, true), implode(', ', \EnumType\CheckoutStatusCodeType::getValidValues())), __LINE__);
        }
        $this->CheckoutStatus = $checkoutStatus;
        return $this;
    }
    /**
     * Get LastTimeModified value
     * @return string|null
     */
    public function getLastTimeModified()
    {
        return $this->LastTimeModified;
    }
    /**
     * Set LastTimeModified value
     * @param string $lastTimeModified
     * @return \StructType\TransactionStatusType
     */
    public function setLastTimeModified($lastTimeModified = null)
    {
        // validation for constraint: string
        if (!is_null($lastTimeModified) && !is_string($lastTimeModified)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastTimeModified, true), gettype($lastTimeModified)), __LINE__);
        }
        $this->LastTimeModified = $lastTimeModified;
        return $this;
    }
    /**
     * Get PaymentMethodUsed value
     * @return string|null
     */
    public function getPaymentMethodUsed()
    {
        return $this->PaymentMethodUsed;
    }
    /**
     * Set PaymentMethodUsed value
     * @uses \EnumType\BuyerPaymentMethodCodeType::valueIsValid()
     * @uses \EnumType\BuyerPaymentMethodCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $paymentMethodUsed
     * @return \StructType\TransactionStatusType
     */
    public function setPaymentMethodUsed($paymentMethodUsed = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\BuyerPaymentMethodCodeType::valueIsValid($paymentMethodUsed)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\BuyerPaymentMethodCodeType', is_array($paymentMethodUsed) ? implode(', ', $paymentMethodUsed) : var_export($paymentMethodUsed, true), implode(', ', \EnumType\BuyerPaymentMethodCodeType::getValidValues())), __LINE__);
        }
        $this->PaymentMethodUsed = $paymentMethodUsed;
        return $this;
    }
    /**
     * Get CompleteStatus value
     * @return string|null
     */
    public function getCompleteStatus()
    {
        return $this->CompleteStatus;
    }
    /**
     * Set CompleteStatus value
     * @uses \EnumType\CompleteStatusCodeType::valueIsValid()
     * @uses \EnumType\CompleteStatusCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $completeStatus
     * @return \StructType\TransactionStatusType
     */
    public function setCompleteStatus($completeStatus = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\CompleteStatusCodeType::valueIsValid($completeStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\CompleteStatusCodeType', is_array($completeStatus) ? implode(', ', $completeStatus) : var_export($completeStatus, true), implode(', ', \EnumType\CompleteStatusCodeType::getValidValues())), __LINE__);
        }
        $this->CompleteStatus = $completeStatus;
        return $this;
    }
    /**
     * Get BuyerSelectedShipping value
     * @return bool|null
     */
    public function getBuyerSelectedShipping()
    {
        return $this->BuyerSelectedShipping;
    }
    /**
     * Set BuyerSelectedShipping value
     * @param bool $buyerSelectedShipping
     * @return \StructType\TransactionStatusType
     */
    public function setBuyerSelectedShipping($buyerSelectedShipping = null)
    {
        // validation for constraint: boolean
        if (!is_null($buyerSelectedShipping) && !is_bool($buyerSelectedShipping)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($buyerSelectedShipping, true), gettype($buyerSelectedShipping)), __LINE__);
        }
        $this->BuyerSelectedShipping = $buyerSelectedShipping;
        return $this;
    }
    /**
     * Get PaymentHoldStatus value
     * @return string|null
     */
    public function getPaymentHoldStatus()
    {
        return $this->PaymentHoldStatus;
    }
    /**
     * Set PaymentHoldStatus value
     * @uses \EnumType\PaymentHoldStatusCodeType::valueIsValid()
     * @uses \EnumType\PaymentHoldStatusCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $paymentHoldStatus
     * @return \StructType\TransactionStatusType
     */
    public function setPaymentHoldStatus($paymentHoldStatus = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\PaymentHoldStatusCodeType::valueIsValid($paymentHoldStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\PaymentHoldStatusCodeType', is_array($paymentHoldStatus) ? implode(', ', $paymentHoldStatus) : var_export($paymentHoldStatus, true), implode(', ', \EnumType\PaymentHoldStatusCodeType::getValidValues())), __LINE__);
        }
        $this->PaymentHoldStatus = $paymentHoldStatus;
        return $this;
    }
    /**
     * Get IntegratedMerchantCreditCardEnabled value
     * @return bool|null
     */
    public function getIntegratedMerchantCreditCardEnabled()
    {
        return $this->IntegratedMerchantCreditCardEnabled;
    }
    /**
     * Set IntegratedMerchantCreditCardEnabled value
     * @param bool $integratedMerchantCreditCardEnabled
     * @return \StructType\TransactionStatusType
     */
    public function setIntegratedMerchantCreditCardEnabled($integratedMerchantCreditCardEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($integratedMerchantCreditCardEnabled) && !is_bool($integratedMerchantCreditCardEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($integratedMerchantCreditCardEnabled, true), gettype($integratedMerchantCreditCardEnabled)), __LINE__);
        }
        $this->IntegratedMerchantCreditCardEnabled = $integratedMerchantCreditCardEnabled;
        return $this;
    }
    /**
     * Get eBayPaymentMismatchDetails value
     * @return \StructType\EBayPaymentMismatchDetailsType|null
     */
    public function getEBayPaymentMismatchDetails()
    {
        return $this->eBayPaymentMismatchDetails;
    }
    /**
     * Set eBayPaymentMismatchDetails value
     * @param \StructType\EBayPaymentMismatchDetailsType $eBayPaymentMismatchDetails
     * @return \StructType\TransactionStatusType
     */
    public function setEBayPaymentMismatchDetails(\StructType\EBayPaymentMismatchDetailsType $eBayPaymentMismatchDetails = null)
    {
        $this->eBayPaymentMismatchDetails = $eBayPaymentMismatchDetails;
        return $this;
    }
    /**
     * Get InquiryStatus value
     * @return string|null
     */
    public function getInquiryStatus()
    {
        return $this->InquiryStatus;
    }
    /**
     * Set InquiryStatus value
     * @uses \EnumType\InquiryStatusCodeType::valueIsValid()
     * @uses \EnumType\InquiryStatusCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $inquiryStatus
     * @return \StructType\TransactionStatusType
     */
    public function setInquiryStatus($inquiryStatus = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\InquiryStatusCodeType::valueIsValid($inquiryStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\InquiryStatusCodeType', is_array($inquiryStatus) ? implode(', ', $inquiryStatus) : var_export($inquiryStatus, true), implode(', ', \EnumType\InquiryStatusCodeType::getValidValues())), __LINE__);
        }
        $this->InquiryStatus = $inquiryStatus;
        return $this;
    }
    /**
     * Get ReturnStatus value
     * @return string|null
     */
    public function getReturnStatus()
    {
        return $this->ReturnStatus;
    }
    /**
     * Set ReturnStatus value
     * @uses \EnumType\ReturnStatusCodeType::valueIsValid()
     * @uses \EnumType\ReturnStatusCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $returnStatus
     * @return \StructType\TransactionStatusType
     */
    public function setReturnStatus($returnStatus = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\ReturnStatusCodeType::valueIsValid($returnStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\ReturnStatusCodeType', is_array($returnStatus) ? implode(', ', $returnStatus) : var_export($returnStatus, true), implode(', ', \EnumType\ReturnStatusCodeType::getValidValues())), __LINE__);
        }
        $this->ReturnStatus = $returnStatus;
        return $this;
    }
    /**
     * Get PaymentInstrument value
     * @return string|null
     */
    public function getPaymentInstrument()
    {
        return $this->PaymentInstrument;
    }
    /**
     * Set PaymentInstrument value
     * @uses \EnumType\BuyerPaymentInstrumentCodeType::valueIsValid()
     * @uses \EnumType\BuyerPaymentInstrumentCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $paymentInstrument
     * @return \StructType\TransactionStatusType
     */
    public function setPaymentInstrument($paymentInstrument = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\BuyerPaymentInstrumentCodeType::valueIsValid($paymentInstrument)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\BuyerPaymentInstrumentCodeType', is_array($paymentInstrument) ? implode(', ', $paymentInstrument) : var_export($paymentInstrument, true), implode(', ', \EnumType\BuyerPaymentInstrumentCodeType::getValidValues())), __LINE__);
        }
        $this->PaymentInstrument = $paymentInstrument;
        return $this;
    }
    /**
     * Get DigitalStatus value
     * @return string|null
     */
    public function getDigitalStatus()
    {
        return $this->DigitalStatus;
    }
    /**
     * Set DigitalStatus value
     * @uses \EnumType\DigitalStatusCodeType::valueIsValid()
     * @uses \EnumType\DigitalStatusCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $digitalStatus
     * @return \StructType\TransactionStatusType
     */
    public function setDigitalStatus($digitalStatus = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\DigitalStatusCodeType::valueIsValid($digitalStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\DigitalStatusCodeType', is_array($digitalStatus) ? implode(', ', $digitalStatus) : var_export($digitalStatus, true), implode(', ', \EnumType\DigitalStatusCodeType::getValidValues())), __LINE__);
        }
        $this->DigitalStatus = $digitalStatus;
        return $this;
    }
    /**
     * Get CancelStatus value
     * @return string|null
     */
    public function getCancelStatus()
    {
        return $this->CancelStatus;
    }
    /**
     * Set CancelStatus value
     * @uses \EnumType\CancelStatusCodeType::valueIsValid()
     * @uses \EnumType\CancelStatusCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $cancelStatus
     * @return \StructType\TransactionStatusType
     */
    public function setCancelStatus($cancelStatus = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\CancelStatusCodeType::valueIsValid($cancelStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\CancelStatusCodeType', is_array($cancelStatus) ? implode(', ', $cancelStatus) : var_export($cancelStatus, true), implode(', ', \EnumType\CancelStatusCodeType::getValidValues())), __LINE__);
        }
        $this->CancelStatus = $cancelStatus;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @param bool $asString true: returns XML string, false: returns \DOMDocument
     * @return \DOMDocument|null
     */
    public function getAny($asString = true)
    {
        $domDocument = null;
        if (!empty($this->any) && !$asString) {
            $domDocument = new \DOMDocument('1.0', 'UTF-8');
            $domDocument->loadXML($this->any);
        }
        return $asString ? $this->any : $domDocument;
    }
    /**
     * Set any value
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @param \DOMDocument $any
     * @return \StructType\TransactionStatusType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
