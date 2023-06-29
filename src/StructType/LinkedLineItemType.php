<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LinkedLineItemType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains details of linked line item objects.
 * @subpackage Structs
 */
class LinkedLineItemType extends AbstractStructBase
{
    /**
     * The OrderID
     * Meta information extracted from the WSDL
     * - documentation: The unique identifier of the order to which the linked line item belongs.
     * - minOccurs: 0
     * @var string
     */
    public $OrderID;
    /**
     * The OrderLineItemID
     * Meta information extracted from the WSDL
     * - documentation: The unique identifier of the linked order line item. For example, the order line item ID of the tire.
     * - minOccurs: 0
     * @var string
     */
    public $OrderLineItemID;
    /**
     * The SellerUserID
     * Meta information extracted from the WSDL
     * - documentation: The eBay user ID of the seller who sold the linked line item. For example, the user ID of the tire seller.
     * - minOccurs: 0
     * @var string
     */
    public $SellerUserID;
    /**
     * The EstimatedDeliveryTimeMax
     * Meta information extracted from the WSDL
     * - documentation: The <b>EstimatedDeliveryTimeMin</b> and <b>EstimatedDeliveryTimeMax</b> timestamps indicate the original estimated window during which delivery can be expected. The <b>EstimatedDeliveryTimeMax</b> value indicates the latest date and
     * time to receive the order.
     * - minOccurs: 0
     * @var string
     */
    public $EstimatedDeliveryTimeMax;
    /**
     * The EstimatedDeliveryTimeMin
     * Meta information extracted from the WSDL
     * - documentation: The <b>EstimatedDeliveryTimeMin</b> and <b>EstimatedDeliveryTimeMax</b> timestamps indicate the original estimated window during which delivery can be expected. The <b>EstimatedDeliveryTimeMin</b> value indicates the earliest date
     * and time to receive the order.
     * - minOccurs: 0
     * @var string
     */
    public $EstimatedDeliveryTimeMin;
    /**
     * The Item
     * Meta information extracted from the WSDL
     * - documentation: Container consisting of details about the linked item. <span class="tablenote"><strong>Note:</strong> All item specifics for the listing are returned. The name/value pairs returned are in the language of the linked line item's
     * listing site, which may vary from the seller's language. </span>
     * - minOccurs: 0
     * @var \StructType\ItemType
     */
    public $Item;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for LinkedLineItemType
     * @uses LinkedLineItemType::setOrderID()
     * @uses LinkedLineItemType::setOrderLineItemID()
     * @uses LinkedLineItemType::setSellerUserID()
     * @uses LinkedLineItemType::setEstimatedDeliveryTimeMax()
     * @uses LinkedLineItemType::setEstimatedDeliveryTimeMin()
     * @uses LinkedLineItemType::setItem()
     * @uses LinkedLineItemType::setAny()
     * @param string $orderID
     * @param string $orderLineItemID
     * @param string $sellerUserID
     * @param string $estimatedDeliveryTimeMax
     * @param string $estimatedDeliveryTimeMin
     * @param \StructType\ItemType $item
     * @param \DOMDocument $any
     */
    public function __construct($orderID = null, $orderLineItemID = null, $sellerUserID = null, $estimatedDeliveryTimeMax = null, $estimatedDeliveryTimeMin = null, \StructType\ItemType $item = null, \DOMDocument $any = null)
    {
        $this
            ->setOrderID($orderID)
            ->setOrderLineItemID($orderLineItemID)
            ->setSellerUserID($sellerUserID)
            ->setEstimatedDeliveryTimeMax($estimatedDeliveryTimeMax)
            ->setEstimatedDeliveryTimeMin($estimatedDeliveryTimeMin)
            ->setItem($item)
            ->setAny($any);
    }
    /**
     * Get OrderID value
     * @return string|null
     */
    public function getOrderID()
    {
        return $this->OrderID;
    }
    /**
     * Set OrderID value
     * @param string $orderID
     * @return \StructType\LinkedLineItemType
     */
    public function setOrderID($orderID = null)
    {
        // validation for constraint: string
        if (!is_null($orderID) && !is_string($orderID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orderID, true), gettype($orderID)), __LINE__);
        }
        $this->OrderID = $orderID;
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
     * @return \StructType\LinkedLineItemType
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
    /**
     * Get SellerUserID value
     * @return string|null
     */
    public function getSellerUserID()
    {
        return $this->SellerUserID;
    }
    /**
     * Set SellerUserID value
     * @param string $sellerUserID
     * @return \StructType\LinkedLineItemType
     */
    public function setSellerUserID($sellerUserID = null)
    {
        // validation for constraint: string
        if (!is_null($sellerUserID) && !is_string($sellerUserID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sellerUserID, true), gettype($sellerUserID)), __LINE__);
        }
        $this->SellerUserID = $sellerUserID;
        return $this;
    }
    /**
     * Get EstimatedDeliveryTimeMax value
     * @return string|null
     */
    public function getEstimatedDeliveryTimeMax()
    {
        return $this->EstimatedDeliveryTimeMax;
    }
    /**
     * Set EstimatedDeliveryTimeMax value
     * @param string $estimatedDeliveryTimeMax
     * @return \StructType\LinkedLineItemType
     */
    public function setEstimatedDeliveryTimeMax($estimatedDeliveryTimeMax = null)
    {
        // validation for constraint: string
        if (!is_null($estimatedDeliveryTimeMax) && !is_string($estimatedDeliveryTimeMax)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($estimatedDeliveryTimeMax, true), gettype($estimatedDeliveryTimeMax)), __LINE__);
        }
        $this->EstimatedDeliveryTimeMax = $estimatedDeliveryTimeMax;
        return $this;
    }
    /**
     * Get EstimatedDeliveryTimeMin value
     * @return string|null
     */
    public function getEstimatedDeliveryTimeMin()
    {
        return $this->EstimatedDeliveryTimeMin;
    }
    /**
     * Set EstimatedDeliveryTimeMin value
     * @param string $estimatedDeliveryTimeMin
     * @return \StructType\LinkedLineItemType
     */
    public function setEstimatedDeliveryTimeMin($estimatedDeliveryTimeMin = null)
    {
        // validation for constraint: string
        if (!is_null($estimatedDeliveryTimeMin) && !is_string($estimatedDeliveryTimeMin)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($estimatedDeliveryTimeMin, true), gettype($estimatedDeliveryTimeMin)), __LINE__);
        }
        $this->EstimatedDeliveryTimeMin = $estimatedDeliveryTimeMin;
        return $this;
    }
    /**
     * Get Item value
     * @return \StructType\ItemType|null
     */
    public function getItem()
    {
        return $this->Item;
    }
    /**
     * Set Item value
     * @param \StructType\ItemType $item
     * @return \StructType\LinkedLineItemType
     */
    public function setItem(\StructType\ItemType $item = null)
    {
        $this->Item = $item;
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
     * @return \StructType\LinkedLineItemType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
