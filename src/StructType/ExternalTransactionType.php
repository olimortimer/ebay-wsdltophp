<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExternalTransactionType StructType
 * Meta information extracted from the WSDL
 * - documentation: Container consisting of details related to payment of an eBay order on an external system. This container is only returned if order payment has been made on an external system. For <b>GetSellerTransaactions</b> and
 * <b>GetItemTransactions</b>, this container is not returned for multiple line item orders.
 * @subpackage Structs
 */
class ExternalTransactionType extends AbstractStructBase
{
    /**
     * The ExternalTransactionID
     * Meta information extracted from the WSDL
     * - documentation: Unique identifier for a payment of an eBay order that occurred outside of eBay's system.
     * - minOccurs: 0
     * @var string
     */
    public $ExternalTransactionID;
    /**
     * The ExternalTransactionTime
     * Meta information extracted from the WSDL
     * - documentation: Timestamp for the payment transaction.
     * - minOccurs: 0
     * @var string
     */
    public $ExternalTransactionTime;
    /**
     * The FeeOrCreditAmount
     * Meta information extracted from the WSDL
     * - documentation: Fee amount is a positive value and credit amount is a negative value.
     * - minOccurs: 0
     * @var \StructType\AmountType
     */
    public $FeeOrCreditAmount;
    /**
     * The PaymentOrRefundAmount
     * Meta information extracted from the WSDL
     * - documentation: If this dollar value is a positive amount, this is the amount that the buyer paid the seller through for purchase of the order. If this dollar value is a negative amount, this is the amount refunded to the buyer. <br><br> <span
     * class="tablenote"><b>Note: </b> If a refund is due to the buyer, the amount in this field will not include any 'Collect and Remit' tax (mandated US state sales tax or 'Goods and Services' tax in Australia or New Zealand) charged to the buyer for one
     * or more order line items, since this tax is collected by eBay and not by the seller. </span>
     * - minOccurs: 0
     * @var \StructType\AmountType
     */
    public $PaymentOrRefundAmount;
    /**
     * The ExternalTransactionStatus
     * Meta information extracted from the WSDL
     * - documentation: The current processing status of a PayPal payment for an eBay order.
     * - minOccurs: 0
     * @var string
     */
    public $ExternalTransactionStatus;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for ExternalTransactionType
     * @uses ExternalTransactionType::setExternalTransactionID()
     * @uses ExternalTransactionType::setExternalTransactionTime()
     * @uses ExternalTransactionType::setFeeOrCreditAmount()
     * @uses ExternalTransactionType::setPaymentOrRefundAmount()
     * @uses ExternalTransactionType::setExternalTransactionStatus()
     * @uses ExternalTransactionType::setAny()
     * @param string $externalTransactionID
     * @param string $externalTransactionTime
     * @param \StructType\AmountType $feeOrCreditAmount
     * @param \StructType\AmountType $paymentOrRefundAmount
     * @param string $externalTransactionStatus
     * @param \DOMDocument $any
     */
    public function __construct($externalTransactionID = null, $externalTransactionTime = null, \StructType\AmountType $feeOrCreditAmount = null, \StructType\AmountType $paymentOrRefundAmount = null, $externalTransactionStatus = null, \DOMDocument $any = null)
    {
        $this
            ->setExternalTransactionID($externalTransactionID)
            ->setExternalTransactionTime($externalTransactionTime)
            ->setFeeOrCreditAmount($feeOrCreditAmount)
            ->setPaymentOrRefundAmount($paymentOrRefundAmount)
            ->setExternalTransactionStatus($externalTransactionStatus)
            ->setAny($any);
    }
    /**
     * Get ExternalTransactionID value
     * @return string|null
     */
    public function getExternalTransactionID()
    {
        return $this->ExternalTransactionID;
    }
    /**
     * Set ExternalTransactionID value
     * @param string $externalTransactionID
     * @return \StructType\ExternalTransactionType
     */
    public function setExternalTransactionID($externalTransactionID = null)
    {
        // validation for constraint: string
        if (!is_null($externalTransactionID) && !is_string($externalTransactionID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($externalTransactionID, true), gettype($externalTransactionID)), __LINE__);
        }
        $this->ExternalTransactionID = $externalTransactionID;
        return $this;
    }
    /**
     * Get ExternalTransactionTime value
     * @return string|null
     */
    public function getExternalTransactionTime()
    {
        return $this->ExternalTransactionTime;
    }
    /**
     * Set ExternalTransactionTime value
     * @param string $externalTransactionTime
     * @return \StructType\ExternalTransactionType
     */
    public function setExternalTransactionTime($externalTransactionTime = null)
    {
        // validation for constraint: string
        if (!is_null($externalTransactionTime) && !is_string($externalTransactionTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($externalTransactionTime, true), gettype($externalTransactionTime)), __LINE__);
        }
        $this->ExternalTransactionTime = $externalTransactionTime;
        return $this;
    }
    /**
     * Get FeeOrCreditAmount value
     * @return \StructType\AmountType|null
     */
    public function getFeeOrCreditAmount()
    {
        return $this->FeeOrCreditAmount;
    }
    /**
     * Set FeeOrCreditAmount value
     * @param \StructType\AmountType $feeOrCreditAmount
     * @return \StructType\ExternalTransactionType
     */
    public function setFeeOrCreditAmount(\StructType\AmountType $feeOrCreditAmount = null)
    {
        $this->FeeOrCreditAmount = $feeOrCreditAmount;
        return $this;
    }
    /**
     * Get PaymentOrRefundAmount value
     * @return \StructType\AmountType|null
     */
    public function getPaymentOrRefundAmount()
    {
        return $this->PaymentOrRefundAmount;
    }
    /**
     * Set PaymentOrRefundAmount value
     * @param \StructType\AmountType $paymentOrRefundAmount
     * @return \StructType\ExternalTransactionType
     */
    public function setPaymentOrRefundAmount(\StructType\AmountType $paymentOrRefundAmount = null)
    {
        $this->PaymentOrRefundAmount = $paymentOrRefundAmount;
        return $this;
    }
    /**
     * Get ExternalTransactionStatus value
     * @return string|null
     */
    public function getExternalTransactionStatus()
    {
        return $this->ExternalTransactionStatus;
    }
    /**
     * Set ExternalTransactionStatus value
     * @uses \EnumType\PaymentTransactionStatusCodeType::valueIsValid()
     * @uses \EnumType\PaymentTransactionStatusCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $externalTransactionStatus
     * @return \StructType\ExternalTransactionType
     */
    public function setExternalTransactionStatus($externalTransactionStatus = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\PaymentTransactionStatusCodeType::valueIsValid($externalTransactionStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\PaymentTransactionStatusCodeType', is_array($externalTransactionStatus) ? implode(', ', $externalTransactionStatus) : var_export($externalTransactionStatus, true), implode(', ', \EnumType\PaymentTransactionStatusCodeType::getValidValues())), __LINE__);
        }
        $this->ExternalTransactionStatus = $externalTransactionStatus;
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
     * @return \StructType\ExternalTransactionType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
