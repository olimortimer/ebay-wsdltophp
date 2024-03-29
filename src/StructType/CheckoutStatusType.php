<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CheckoutStatusType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type defining the <b>CheckoutStatus</b> container that is returned in <b>GetOrders</b> and <b>GetOrderTransactions</b> to indicate the current checkout status of the order.
 * @subpackage Structs
 */
class CheckoutStatusType extends AbstractStructBase
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
     * The LastModifiedTime
     * Meta information extracted from the WSDL
     * - documentation: This timestamp indicates when the order was last modified.
     * - minOccurs: 0
     * @var string
     */
    public $LastModifiedTime;
    /**
     * The PaymentMethod
     * Meta information extracted from the WSDL
     * - documentation: The payment method that the buyer selected to pay for the order. <br><br> <span class="tablenote"><b>Note: </b> Sellers no longer have to specify any electronic payment methods at listing time, but this field is still returned. The
     * value returned in this field will generally be <code>CreditCard</code>, unless an eBay gift card was used by the buyer to pay a partial or full balance of the order. If this is the case, the value returned in this field will be
     * <code>CCAccepted</code>. Either of these two values will be returned, but neither accurately reflects the actual payment method that the buyer used. If the order was paid for off of eBay's platform using an 'offline' payment method such as
     * 'CashOnPickup' or 'MOCC' (money order or cashier's check), and the seller marked the order as paid, either of those values may get returned here. </span>
     * - minOccurs: 0
     * @var string
     */
    public $PaymentMethod;
    /**
     * The Status
     * Meta information extracted from the WSDL
     * - documentation: Indicates the status of the order. This value is subject to change based on the status of the checkout flow. Generally speaking, the <b>Status</b> field reads <code>Incomplete</code> when payment has yet to be initiated,
     * <code>Pending</code> when payment has been initiated but is in process, and <code>Complete</code> when the payment process has completed. <br><br> <b>Note</b>: If the <b>PaymentMethod</b> is <code>CashOnPickup</code>, the <b>Status</b> value will
     * read <code>Complete</code> right at checkout, even though the seller may not have been officially paid yet, and the <b>eBayPaymentStatus</b> field will read <code>NoPaymentFailure</code>. The <b>Status</b> value will remain as <code>Complete</code>
     * even if the seller changes the checkout status to Pending. However, the <b>eBayPaymentStatus</b> value in <b>GetOrders</b> will change from <code>NoPaymentFailure</code> to <code>PaymentInProcess</code>.
     * - minOccurs: 0
     * @var string
     */
    public $Status;
    /**
     * The IntegratedMerchantCreditCardEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is no longer applicable as eBay sellers can no longer use iMCC gateway accounts to handle buyer payments.
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
     * The PaymentInstrument
     * Meta information extracted from the WSDL
     * - documentation: The enumeration value in this field indicates which payment method was used by the German buyer who was offered the 'Pay Upon Invoice' option. This field will only be returned if a German buyer was offered the 'Pay Upon Invoice'
     * option. Otherwise, the buyer's selected payment method is returned in the <b>PaymentMethod</b> field.
     * - minOccurs: 0
     * @var string
     */
    public $PaymentInstrument;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for CheckoutStatusType
     * @uses CheckoutStatusType::setEBayPaymentStatus()
     * @uses CheckoutStatusType::setLastModifiedTime()
     * @uses CheckoutStatusType::setPaymentMethod()
     * @uses CheckoutStatusType::setStatus()
     * @uses CheckoutStatusType::setIntegratedMerchantCreditCardEnabled()
     * @uses CheckoutStatusType::setEBayPaymentMismatchDetails()
     * @uses CheckoutStatusType::setPaymentInstrument()
     * @uses CheckoutStatusType::setAny()
     * @param string $eBayPaymentStatus
     * @param string $lastModifiedTime
     * @param string $paymentMethod
     * @param string $status
     * @param bool $integratedMerchantCreditCardEnabled
     * @param \StructType\EBayPaymentMismatchDetailsType $eBayPaymentMismatchDetails
     * @param string $paymentInstrument
     * @param \DOMDocument $any
     */
    public function __construct($eBayPaymentStatus = null, $lastModifiedTime = null, $paymentMethod = null, $status = null, $integratedMerchantCreditCardEnabled = null, \StructType\EBayPaymentMismatchDetailsType $eBayPaymentMismatchDetails = null, $paymentInstrument = null, \DOMDocument $any = null)
    {
        $this
            ->setEBayPaymentStatus($eBayPaymentStatus)
            ->setLastModifiedTime($lastModifiedTime)
            ->setPaymentMethod($paymentMethod)
            ->setStatus($status)
            ->setIntegratedMerchantCreditCardEnabled($integratedMerchantCreditCardEnabled)
            ->setEBayPaymentMismatchDetails($eBayPaymentMismatchDetails)
            ->setPaymentInstrument($paymentInstrument)
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
     * @return \StructType\CheckoutStatusType
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
     * Get LastModifiedTime value
     * @return string|null
     */
    public function getLastModifiedTime()
    {
        return $this->LastModifiedTime;
    }
    /**
     * Set LastModifiedTime value
     * @param string $lastModifiedTime
     * @return \StructType\CheckoutStatusType
     */
    public function setLastModifiedTime($lastModifiedTime = null)
    {
        // validation for constraint: string
        if (!is_null($lastModifiedTime) && !is_string($lastModifiedTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastModifiedTime, true), gettype($lastModifiedTime)), __LINE__);
        }
        $this->LastModifiedTime = $lastModifiedTime;
        return $this;
    }
    /**
     * Get PaymentMethod value
     * @return string|null
     */
    public function getPaymentMethod()
    {
        return $this->PaymentMethod;
    }
    /**
     * Set PaymentMethod value
     * @uses \EnumType\BuyerPaymentMethodCodeType::valueIsValid()
     * @uses \EnumType\BuyerPaymentMethodCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $paymentMethod
     * @return \StructType\CheckoutStatusType
     */
    public function setPaymentMethod($paymentMethod = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\BuyerPaymentMethodCodeType::valueIsValid($paymentMethod)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\BuyerPaymentMethodCodeType', is_array($paymentMethod) ? implode(', ', $paymentMethod) : var_export($paymentMethod, true), implode(', ', \EnumType\BuyerPaymentMethodCodeType::getValidValues())), __LINE__);
        }
        $this->PaymentMethod = $paymentMethod;
        return $this;
    }
    /**
     * Get Status value
     * @return string|null
     */
    public function getStatus()
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @uses \EnumType\CompleteStatusCodeType::valueIsValid()
     * @uses \EnumType\CompleteStatusCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $status
     * @return \StructType\CheckoutStatusType
     */
    public function setStatus($status = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\CompleteStatusCodeType::valueIsValid($status)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\CompleteStatusCodeType', is_array($status) ? implode(', ', $status) : var_export($status, true), implode(', ', \EnumType\CompleteStatusCodeType::getValidValues())), __LINE__);
        }
        $this->Status = $status;
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
     * @return \StructType\CheckoutStatusType
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
     * @return \StructType\CheckoutStatusType
     */
    public function setEBayPaymentMismatchDetails(\StructType\EBayPaymentMismatchDetailsType $eBayPaymentMismatchDetails = null)
    {
        $this->eBayPaymentMismatchDetails = $eBayPaymentMismatchDetails;
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
     * @return \StructType\CheckoutStatusType
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
     * @return \StructType\CheckoutStatusType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
