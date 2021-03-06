<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ItemTransactionIDType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is used by the <b>ItemTransactionID</b> container in the <b>GetOrderTransactions</b> call. This container is used to specify a specific order line item to retrieve.
 * @subpackage Structs
 */
class ItemTransactionIDType extends AbstractStructBase
{
    /**
     * The ItemID
     * Meta information extracted from the WSDL
     * - documentation: Unique identifier for an eBay listing. A multiple-quantity listing can have multiple order line items, but only one <b>ItemID</b>. Unless an <b>OrderLineItemID</b> or <b>SKU</b> value is specified in the same node, this field is
     * required for each <b>ItemTransactionID</b> node included in the request. <br> | Type that represents the unique identifier for an eBay listing.
     * - base: xs:string
     * - minOccurs: 0
     * @var string
     */
    public $ItemID;
    /**
     * The TransactionID
     * Meta information extracted from the WSDL
     * - documentation: Unique identifier for an eBay order line item. The <b>TransactionID</b> should match the <b>ItemID</b> specified in each <b>ItemTransactionID</b> node included in the request. Optionally, an <b>OrderLineItemID</b> or <b>SKU</b> value
     * can substitute for the <b>ItemID</b>/<b>TransactionID</b> pair. <br> <br> The <b>TransactionID</b> value for auction listings is always <code>0</code> since there can be only one winning bidder/one sale for an auction listing. <br>
     * - minOccurs: 0
     * @var string
     */
    public $TransactionID;
    /**
     * The SKU
     * Meta information extracted from the WSDL
     * - documentation: A SKU (stock keeping unit) is a unique identifier defined and used by the seller to identify a product or variation of an item. Unless an <b>OrderLineItemID</b> value or <b>ItemID</b>/<b>TransactionID</b> pair is specified in the
     * same node, this field is required for each <b>ItemTransactionID</b> node included in the request. To retrieve order line items associated with a SKU, the <b>InventoryTrackingMethod</b> field must be set to SKU. The <b>InventoryTrackingMethod</b>
     * field is set through <b>AddFixedPriceItem</b> or <b>RelistFixedPriceItem</b>. <br> | Primitive type that represents a stock-keeping unit (SKU). The usage of this string may vary in different contexts. For usage information and rules, see the fields
     * that reference this type.
     * - base: xs:string
     * - minOccurs: 0
     * @var string
     */
    public $SKU;
    /**
     * The OrderLineItemID
     * Meta information extracted from the WSDL
     * - documentation: <b>OrderLineItemID</b> is a unique identifier for an eBay order line item. If an <b>OrderLineItemID</b> is included in an <b>ItemTransactionID</b> node in the request, the <b>ItemID</b>, <b>TransactionID</b>, and <b>SKU</b> fields
     * are not required and are ignored if they are included in the request. <br>
     * - minOccurs: 0
     * @var string
     */
    public $OrderLineItemID;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for ItemTransactionIDType
     * @uses ItemTransactionIDType::setItemID()
     * @uses ItemTransactionIDType::setTransactionID()
     * @uses ItemTransactionIDType::setSKU()
     * @uses ItemTransactionIDType::setOrderLineItemID()
     * @uses ItemTransactionIDType::setAny()
     * @param string $itemID
     * @param string $transactionID
     * @param string $sKU
     * @param string $orderLineItemID
     * @param \DOMDocument $any
     */
    public function __construct($itemID = null, $transactionID = null, $sKU = null, $orderLineItemID = null, \DOMDocument $any = null)
    {
        $this
            ->setItemID($itemID)
            ->setTransactionID($transactionID)
            ->setSKU($sKU)
            ->setOrderLineItemID($orderLineItemID)
            ->setAny($any);
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
     * @return \StructType\ItemTransactionIDType
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
     * @return \StructType\ItemTransactionIDType
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
     * Get SKU value
     * @return string|null
     */
    public function getSKU()
    {
        return $this->SKU;
    }
    /**
     * Set SKU value
     * @param string $sKU
     * @return \StructType\ItemTransactionIDType
     */
    public function setSKU($sKU = null)
    {
        // validation for constraint: string
        if (!is_null($sKU) && !is_string($sKU)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sKU, true), gettype($sKU)), __LINE__);
        }
        $this->SKU = $sKU;
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
     * @return \StructType\ItemTransactionIDType
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
     * @return \StructType\ItemTransactionIDType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
