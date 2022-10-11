<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddDisputeRequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: Enables a seller to create an Unpaid Item case against a buyer. <br> <br> Although the seller is eligible to open up an Unpaid Item case as soon as four days after the buyer commits to buying the item, it is recommended that the
 * seller contact the buyer first to try and make it right before opening a case. The <a href="https://www.ebay.com/help/selling/getting-paid/resolving-unpaid-items?id=4137" target="_blank">Unpaid Items</a> help page talks more about how a seller should
 * handle an unpaid item. <br> <br> <span class="tablenote"><strong>Note:</strong> To create a cancellation request programmatically, the seller would have to use the <b>POST /post-order/v2/cancellation</b> method of the Post-Order API. </span>
 * @subpackage Structs
 */
class AddDisputeRequestType extends AbstractRequestType
{
    /**
     * The DisputeExplanation
     * Meta information extracted from the WSDL
     * - documentation: This enumerated value gives the explanation of why the seller opened a case. Not all values contained in <b>DisputeExplanationCodeType</b> are allowed in the <b>AddDispute</b> call, and the values that are allowed must match the
     * <b>DisputeReason</b> value. <br>
     * - minOccurs: 0
     * @var string
     */
    public $DisputeExplanation;
    /**
     * The DisputeReason
     * Meta information extracted from the WSDL
     * - documentation: The enumeration value passed into this required field will depend on the action being taken. The seller will pass in <code>BuyerHasNotPaid</code> if the seller is creating an Unpaid Item case against the buyer. <br>
     * - minOccurs: 0
     * @var string
     */
    public $DisputeReason;
    /**
     * The ItemID
     * Meta information extracted from the WSDL
     * - documentation: Unique identifier of an eBay listing. To identify a specific order line item, either an <b>ItemID</b>/<b>TransactionID</b> pair or an <b>OrderLineItemID</b> value must be passed in the request. So, unless <b>OrderLineItemID</b> is
     * used, this field is required. <br> | Type that represents the unique identifier for an eBay listing.
     * - base: xs:string
     * - minOccurs: 0
     * @var string
     */
    public $ItemID;
    /**
     * The TransactionID
     * Meta information extracted from the WSDL
     * - documentation: The unique identifier of a buyer's commitment to purchase. A <b>TransactionID</b> is created by eBay once a buyer commits to purchasing an item. To identify a specific order line item, either an <b>ItemID</b>/<b>TransactionID</b>
     * pair or an <b>OrderLineItemID</b> value must be passed in the request. So, unless <b>OrderLineItemID</b> is used, this field is required. <br> <br> The <b>TransactionID</b> value for auction listings is always <code>0</code> since there can be only
     * one winning bidder/one sale for an auction listing. <br>
     * - minOccurs: 0
     * @var string
     */
    public $TransactionID;
    /**
     * The OrderLineItemID
     * Meta information extracted from the WSDL
     * - documentation: <b>OrderLineItemID</b> is a unique identifier of an order line item. To identify a specific order line item, either an <b>ItemID</b>/<b>TransactionID</b> pair or an <b>OrderLineItemID</b> value must be passed in the request. So,
     * unless <b>ItemID</b>/<b>TransactionID</b> pair is used, this field is required. <br>
     * - minOccurs: 0
     * @var string
     */
    public $OrderLineItemID;
    /**
     * Constructor method for AddDisputeRequestType
     * @uses AddDisputeRequestType::setDisputeExplanation()
     * @uses AddDisputeRequestType::setDisputeReason()
     * @uses AddDisputeRequestType::setItemID()
     * @uses AddDisputeRequestType::setTransactionID()
     * @uses AddDisputeRequestType::setOrderLineItemID()
     * @param string $disputeExplanation
     * @param string $disputeReason
     * @param string $itemID
     * @param string $transactionID
     * @param string $orderLineItemID
     */
    public function __construct($disputeExplanation = null, $disputeReason = null, $itemID = null, $transactionID = null, $orderLineItemID = null)
    {
        $this
            ->setDisputeExplanation($disputeExplanation)
            ->setDisputeReason($disputeReason)
            ->setItemID($itemID)
            ->setTransactionID($transactionID)
            ->setOrderLineItemID($orderLineItemID);
    }
    /**
     * Get DisputeExplanation value
     * @return string|null
     */
    public function getDisputeExplanation()
    {
        return $this->DisputeExplanation;
    }
    /**
     * Set DisputeExplanation value
     * @uses \EnumType\DisputeExplanationCodeType::valueIsValid()
     * @uses \EnumType\DisputeExplanationCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $disputeExplanation
     * @return \StructType\AddDisputeRequestType
     */
    public function setDisputeExplanation($disputeExplanation = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\DisputeExplanationCodeType::valueIsValid($disputeExplanation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\DisputeExplanationCodeType', is_array($disputeExplanation) ? implode(', ', $disputeExplanation) : var_export($disputeExplanation, true), implode(', ', \EnumType\DisputeExplanationCodeType::getValidValues())), __LINE__);
        }
        $this->DisputeExplanation = $disputeExplanation;
        return $this;
    }
    /**
     * Get DisputeReason value
     * @return string|null
     */
    public function getDisputeReason()
    {
        return $this->DisputeReason;
    }
    /**
     * Set DisputeReason value
     * @uses \EnumType\DisputeReasonCodeType::valueIsValid()
     * @uses \EnumType\DisputeReasonCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $disputeReason
     * @return \StructType\AddDisputeRequestType
     */
    public function setDisputeReason($disputeReason = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\DisputeReasonCodeType::valueIsValid($disputeReason)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\DisputeReasonCodeType', is_array($disputeReason) ? implode(', ', $disputeReason) : var_export($disputeReason, true), implode(', ', \EnumType\DisputeReasonCodeType::getValidValues())), __LINE__);
        }
        $this->DisputeReason = $disputeReason;
        return $this;
    }
    /**
     * Get ItemID value
     * @return string|null
     */
    public function getItemID()
    {
        return $this->ItemID;
    }
    /**
     * Set ItemID value
     * @param string $itemID
     * @return \StructType\AddDisputeRequestType
     */
    public function setItemID($itemID = null)
    {
        // validation for constraint: string
        if (!is_null($itemID) && !is_string($itemID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($itemID, true), gettype($itemID)), __LINE__);
        }
        $this->ItemID = $itemID;
        return $this;
    }
    /**
     * Get TransactionID value
     * @return string|null
     */
    public function getTransactionID()
    {
        return $this->TransactionID;
    }
    /**
     * Set TransactionID value
     * @param string $transactionID
     * @return \StructType\AddDisputeRequestType
     */
    public function setTransactionID($transactionID = null)
    {
        // validation for constraint: string
        if (!is_null($transactionID) && !is_string($transactionID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transactionID, true), gettype($transactionID)), __LINE__);
        }
        $this->TransactionID = $transactionID;
        return $this;
    }
    /**
     * Get OrderLineItemID value
     * @return string|null
     */
    public function getOrderLineItemID()
    {
        return $this->OrderLineItemID;
    }
    /**
     * Set OrderLineItemID value
     * @param string $orderLineItemID
     * @return \StructType\AddDisputeRequestType
     */
    public function setOrderLineItemID($orderLineItemID = null)
    {
        // validation for constraint: string
        if (!is_null($orderLineItemID) && !is_string($orderLineItemID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orderLineItemID, true), gettype($orderLineItemID)), __LINE__);
        }
        $this->OrderLineItemID = $orderLineItemID;
        return $this;
    }
}
