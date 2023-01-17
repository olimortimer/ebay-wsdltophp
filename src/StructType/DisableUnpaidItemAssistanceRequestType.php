<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DisableUnpaidItemAssistanceRequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: Enables a seller to disable the automatic cancellation setting for a specific line item. <br> <br> <span class="tablenote"><strong>Note:</strong> This call is deprecated and is scheduled for decommission on January 31, 2023. There is
 * no alternative to this call since eBay no longer supports Unpaid Item cases and the Unpaid Item Assistant. However, there is a page in Selling Preferences in My eBay that allows a seller to cancel and relist any items that have not been paid for
 * after a specified amount of days. </span>
 * @subpackage Structs
 */
class DisableUnpaidItemAssistanceRequestType extends AbstractRequestType
{
    /**
     * The ItemID
     * Meta information extracted from the WSDL
     * - documentation: Unique identifier for an eBay listing. A listing can have multiple order line items, but only one <b>ItemID</b>. To identify a specific order line item for which to disable the automatic cancellation setting, either an
     * <b>ItemID</b>/<b>TransactionID</b> pair, or an <b>OrderLineItemID</b> is required in the request. | Type that represents the unique identifier for an eBay listing.
     * - base: xs:string
     * - minOccurs: 0
     * @var string
     */
    public $ItemID;
    /**
     * The TransactionID
     * Meta information extracted from the WSDL
     * - documentation: The unique identifier of an order line item. An order line item is created once there is a commitment from a buyer to purchase an item. To identify a specific order line item for which to disable the automatic cancellation setting,
     * either an <b>ItemID</b>/<b>TransactionID</b> pair or an <b>OrderLineItemID</b> is required in the request. <br> <br> The <b>TransactionID</b> value for auction listings is always <code>0</code> since there can be only one winning bidder/one sale for
     * an auction listing.
     * - minOccurs: 0
     * @var string
     */
    public $TransactionID;
    /**
     * The DisputeID
     * Meta information extracted from the WSDL
     * - documentation: <b>DO NOT USE</b>. This field is no longer applicable. | The unique identifier of an Unpaid Item case involving a buyer and seller. <br/><br/> <span class="tablenote"><strong>Note:</strong> Despite the name, this type is now only
     * used to identify an Unpaid Item case, and the identifier of an eBay case uses a 'case ID' and not a 'dispute ID'. However, the <strong>DisputeID</strong> field in Dispute calls handles Unpaid Item case IDs. </span>
     * - base: xs:string
     * - minOccurs: 0
     * @var string
     */
    public $DisputeID;
    /**
     * The OrderLineItemID
     * Meta information extracted from the WSDL
     * - documentation: <b>OrderLineItemID</b> is a unique identifier for an eBay order line item. To identify a specific order line item for which to disable the Unpaid Item preferences, either an <b>ItemID</b>/<b>TransactionID</b> pair or an
     * <b>OrderLineItemID</b> is required in the request.
     * - minOccurs: 0
     * @var string
     */
    public $OrderLineItemID;
    /**
     * Constructor method for DisableUnpaidItemAssistanceRequestType
     * @uses DisableUnpaidItemAssistanceRequestType::setItemID()
     * @uses DisableUnpaidItemAssistanceRequestType::setTransactionID()
     * @uses DisableUnpaidItemAssistanceRequestType::setDisputeID()
     * @uses DisableUnpaidItemAssistanceRequestType::setOrderLineItemID()
     * @param string $itemID
     * @param string $transactionID
     * @param string $disputeID
     * @param string $orderLineItemID
     */
    public function __construct($itemID = null, $transactionID = null, $disputeID = null, $orderLineItemID = null)
    {
        $this
            ->setItemID($itemID)
            ->setTransactionID($transactionID)
            ->setDisputeID($disputeID)
            ->setOrderLineItemID($orderLineItemID);
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
     * @return \StructType\DisableUnpaidItemAssistanceRequestType
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
     * @return \StructType\DisableUnpaidItemAssistanceRequestType
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
     * Get DisputeID value
     * @return string|null
     */
    public function getDisputeID()
    {
        return $this->DisputeID;
    }
    /**
     * Set DisputeID value
     * @param string $disputeID
     * @return \StructType\DisableUnpaidItemAssistanceRequestType
     */
    public function setDisputeID($disputeID = null)
    {
        // validation for constraint: string
        if (!is_null($disputeID) && !is_string($disputeID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($disputeID, true), gettype($disputeID)), __LINE__);
        }
        $this->DisputeID = $disputeID;
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
     * @return \StructType\DisableUnpaidItemAssistanceRequestType
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
