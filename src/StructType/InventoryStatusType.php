<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InventoryStatusType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is used by the <b>ReviseInventoryStatus</b> call to update the price and/or quantity of an item or an item variation within a single-variation or multiple-variation, fixed-price listing.
 * @subpackage Structs
 */
class InventoryStatusType extends AbstractStructBase
{
    /**
     * The SKU
     * Meta information extracted from the WSDL
     * - documentation: This value is the seller-defined SKU value of the item being revised. <br> <br> For a single-variation listing, either the <b>ItemID</b> of the listing or the <b>SKU</b> value of the item (if it exists) is required, and which one to
     * use will depend on the value of the <b>InventoryTrackingMethod</b> setting. If the value of <b>InventoryTrackingMethod</b> is <code>ItemID</code>, the <b>ItemID</b> field should be used. If the value of <b>InventoryTrackingMethod</b> is
     * <code>SKU</code>, the <b>SKU</b> field should be used. <code>ItemID</code> is the default value of <b>InventoryTrackingMethod</b>, and its value can only be set/changed to <code>SKU</code> through either an <b>AddFixedPriceItem</b> or
     * <b>RelistFixedPriceItem</b> call. <br> <br> For a multiple-variation listing, the <b>SKU</b> value of the item variation is required in order to identify a specific item variation. An <b>ItemID</b> field is also required if the
     * <b>InventoryTrackingMethod</b> value is set to <code>ItemID</code>. However, if the <b>InventoryTrackingMethod</b> value is set to <code>SKU</code>, only the <b>SKU</b> value of the item variation is needed to identify a specific item variation. Note
     * that a seller-defined <b>SKU</b> value is required when a seller creates a multiple-variation listing, regardless of whether they decide to track inventory by Item ID or SKU. <br> <span class="tablenote"><b>Note: </b> When using an
     * LMS_REVISE_INVENTORY_STATUS upload feed in <b>Sell Feed API</b> to revise the price and/or quantity for multiple SKUs for a multiple-SKU listing, you must include both the <b>ItemID</b> and <b>SKU</b> values for each variation. See the <a
     * href="/api-docs/sell/static/feed/trading-upload-flow.html#upload-flow">Upload flow</a> and <a href="/api-docs/sell/static/feed/lms-feeds-quick-reference.html#Trading">Inventory upload feed types</a> for more information.</span> The <b>SKU</b> field
     * is always returned in the response, and if a SKU value doesn't exist for a single-variation listing, it is returned as an empty tag. | Primitive type that represents a stock-keeping unit (SKU). The usage of this string may vary in different contexts.
     * For usage information and rules, see the fields that reference this type.
     * - base: xs:string
     * - minOccurs: 0
     * @var string
     */
    public $SKU;
    /**
     * The ItemID
     * Meta information extracted from the WSDL
     * - documentation: The unique identifier of the listing being revised. <br> <br> For a single-variation listing, either the <b>ItemID</b> of the listing or the <b>SKU</b> value of the item (if it exists) is required, and which one to use will depend on
     * the value of the <b>InventoryTrackingMethod</b> setting. If the value of <b>InventoryTrackingMethod</b> is <code>ItemID</code>, the <b>ItemID</b> field should be used. If the value of <b>InventoryTrackingMethod</b> is <code>SKU</code>, the <b>SKU</b>
     * field should be used. <code>ItemID</code> is the default value of <b>InventoryTrackingMethod</b>, and its value can only be set/changed to <code>SKU</code> through either an <b>AddFixedPriceItem</b> or <b>RelistFixedPriceItem</b> call. <br> <br> For
     * a multiple-variation listing, the <b>SKU</b> value of the item variation is required in order to identify a specific item variation. An <b>ItemID</b> field is also required if the <b>InventoryTrackingMethod</b> value is set to <code>ItemID</code>.
     * However, if the <b>InventoryTrackingMethod</b> value is set to <code>SKU</code>, only the <b>SKU</b> value of the item variation is needed to identify a specific item variation. Note that a seller-defined <b>SKU</b> value is required when a seller
     * creates a multiple-variation listing, regardless of whether they decide to track inventory by Item ID or SKU. <br> <span class="tablenote"><b>Note: </b> When using an LMS_REVISE_INVENTORY_STATUS upload feed in <b>Sell Feed API</b> to revise the price
     * and/or quantity for multiple SKUs for a multiple-SKU listing, you must include both the <b>ItemID</b> and <b>SKU</b> values for each variation. See the <a href="/api-docs/sell/static/feed/trading-upload-flow.html#upload-flow">Upload flow</a> and <a
     * href="/api-docs/sell/static/feed/lms-feeds-quick-reference.html#Trading">Inventory upload feed types</a> for more information.</span> Please note that the same <b>ItemID</b> value can be used multiple times in the same call if you revise several item
     * variations from the same multiple-variation listing. <br> <br> The <b>ItemID</b> field is always returned in the response, even if an <b>ItemID</b> value was not included in the request. | Type that represents the unique identifier for an eBay
     * listing.
     * - base: xs:string
     * - minOccurs: 0
     * @var string
     */
    public $ItemID;
    /**
     * The StartPrice
     * Meta information extracted from the WSDL
     * - documentation: This field is used to update the price of a fixed-price item, or to update the price of an item variation within a multiple-variation listing. To update the price of an item variation, both the <b>ItemID</b> and <b>SKU</b> fields are
     * required to identify the listing and the specific variation within that listing, respectively. <br> <br> In each <b>InventoryStatus</b> container, either <b>StartPrice</b> or <b>Quantity</b> (or both) are required. <br> <span
     * class="tablenote"><b>Note: </b> The <b>StartPrice</b> field should no longer appear in the response payload. If it does appear, it can be ignored. Sellers can leverage the <a
     * href="https://developer.ebay.com/Devzone/XML/docs/Reference/eBay/GetItem.html">GetItem</a> call to verify that the requested price updates were successful.</span>
     * - minOccurs: 0
     * @var \StructType\AmountType
     */
    public $StartPrice;
    /**
     * The Quantity
     * Meta information extracted from the WSDL
     * - documentation: This field is used to update the quantity of a fixed-price listing, or to update the quantity of a variation within a multiple-variation listing. To update a variation, both the <b>ItemID</b> and <b>SKU</b> fields are required to
     * identify the listing and the specific variation within that listing, respectively. <br> <br> In each <b>InventoryStatus</b> container, either <b>StartPrice</b> or <b>Quantity</b> (or both) are required. <br> <span class="tablenote"><b>Note: </b> The
     * <b>Quantity</b> field should no longer appear in the response payload. If it does appear, it can be ignored. Sellers can leverage the <a href="https://developer.ebay.com/Devzone/XML/docs/Reference/eBay/GetItem.html">GetItem</a> call to verify that
     * the requested quantity updates were successful.</span>
     * - minOccurs: 0
     * @var int
     */
    public $Quantity;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for InventoryStatusType
     * @uses InventoryStatusType::setSKU()
     * @uses InventoryStatusType::setItemID()
     * @uses InventoryStatusType::setStartPrice()
     * @uses InventoryStatusType::setQuantity()
     * @uses InventoryStatusType::setAny()
     * @param string $sKU
     * @param string $itemID
     * @param \StructType\AmountType $startPrice
     * @param int $quantity
     * @param \DOMDocument $any
     */
    public function __construct($sKU = null, $itemID = null, \StructType\AmountType $startPrice = null, $quantity = null, \DOMDocument $any = null)
    {
        $this
            ->setSKU($sKU)
            ->setItemID($itemID)
            ->setStartPrice($startPrice)
            ->setQuantity($quantity)
            ->setAny($any);
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
     * @return \StructType\InventoryStatusType
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
     * @return \StructType\InventoryStatusType
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
     * Get StartPrice value
     * @return \StructType\AmountType|null
     */
    public function getStartPrice()
    {
        return $this->StartPrice;
    }
    /**
     * Set StartPrice value
     * @param \StructType\AmountType $startPrice
     * @return \StructType\InventoryStatusType
     */
    public function setStartPrice(\StructType\AmountType $startPrice = null)
    {
        $this->StartPrice = $startPrice;
        return $this;
    }
    /**
     * Get Quantity value
     * @return int|null
     */
    public function getQuantity()
    {
        return $this->Quantity;
    }
    /**
     * Set Quantity value
     * @param int $quantity
     * @return \StructType\InventoryStatusType
     */
    public function setQuantity($quantity = null)
    {
        // validation for constraint: int
        if (!is_null($quantity) && !(is_int($quantity) || ctype_digit($quantity))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($quantity, true), gettype($quantity)), __LINE__);
        }
        $this->Quantity = $quantity;
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
     * @return \StructType\InventoryStatusType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
