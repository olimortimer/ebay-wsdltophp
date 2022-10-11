<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TaxesType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type defining the <b>Taxes</b> container, which contains detailed tax information (sales tax and VAT) for an order line item. The information in this container supercedes/overrides the sales tax information in the
 * <b>ShippingDetails.SalesTax</b> container.
 * @subpackage Structs
 */
class TaxesType extends AbstractStructBase
{
    /**
     * The eBayReference
     * Meta information extracted from the WSDL
     * - documentation: The value returned in this field is the VAT ID for eBay, and this value may vary based on the region or country. The <b>eBayReference</b> field's <b>name</b> attribute will show the type of VAT ID, such as <code>IOSS</code>,
     * <code>OSS</code>, or <code>ABN</code>. This field will be returned if VAT tax is applicable for the order. See the <a href="types/eBayTaxReferenceValue.html">eBayTaxReferenceValue</a> type page for more information on the VAT tax type strings that
     * may appear for the <b>name</b> attribute. <br> <br> <span class="tablenote"><b>Note: </b> For all VAT ID/VATIN values to be returned (except for France), developers will need to use a Trading WSDL with a version number of 1211 (or newer). For French
     * VAT ID/VATIN values to be returned, developers will need to use a Trading WSDL with a version number of 1225 (or newer). Otherwise, the VAT information will be returned in the <b>Order.ShippingAddress.Street2</b> field. Developers will also have the
     * option of using older version, but setting the <b>X-EBAY-API-COMPATIBILITY-LEVEL</b> header value to 1211 or 1225 or higher. <br> <br> On January 31, 2022, the <b>Order.ShippingAddress.Street2</b> will stop being used to return VAT information
     * regardless of WSDL version or compatibility level. </span> <br>
     * - minOccurs: 0
     * @var \StructType\EBayTaxReferenceValue
     */
    public $eBayReference;
    /**
     * The TotalTaxAmount
     * Meta information extracted from the WSDL
     * - documentation: This value indicates the total tax amount for the order line item, for all tax types, which may include sales tax (seller-applied or 'eBay Collect and Remit'), 'Goods and Services' tax (for Australian or New Zealand sellers), or
     * other fees like an electronic waste recycling fee.
     * - minOccurs: 0
     * @var \StructType\AmountType
     */
    public $TotalTaxAmount;
    /**
     * The TaxDetails
     * Meta information extracted from the WSDL
     * - documentation: Container consisting of detailed sales tax information for an order line item, including the tax type and description, sales tax on the item cost, and sales tax related to shipping and handling.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\TaxDetailsType[]
     */
    public $TaxDetails;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for TaxesType
     * @uses TaxesType::setEBayReference()
     * @uses TaxesType::setTotalTaxAmount()
     * @uses TaxesType::setTaxDetails()
     * @uses TaxesType::setAny()
     * @param \StructType\EBayTaxReferenceValue $eBayReference
     * @param \StructType\AmountType $totalTaxAmount
     * @param \StructType\TaxDetailsType[] $taxDetails
     * @param \DOMDocument $any
     */
    public function __construct(\StructType\EBayTaxReferenceValue $eBayReference = null, \StructType\AmountType $totalTaxAmount = null, array $taxDetails = array(), \DOMDocument $any = null)
    {
        $this
            ->setEBayReference($eBayReference)
            ->setTotalTaxAmount($totalTaxAmount)
            ->setTaxDetails($taxDetails)
            ->setAny($any);
    }
    /**
     * Get eBayReference value
     * @return \StructType\EBayTaxReferenceValue|null
     */
    public function getEBayReference()
    {
        return $this->eBayReference;
    }
    /**
     * Set eBayReference value
     * @param \StructType\EBayTaxReferenceValue $eBayReference
     * @return \StructType\TaxesType
     */
    public function setEBayReference(\StructType\EBayTaxReferenceValue $eBayReference = null)
    {
        $this->eBayReference = $eBayReference;
        return $this;
    }
    /**
     * Get TotalTaxAmount value
     * @return \StructType\AmountType|null
     */
    public function getTotalTaxAmount()
    {
        return $this->TotalTaxAmount;
    }
    /**
     * Set TotalTaxAmount value
     * @param \StructType\AmountType $totalTaxAmount
     * @return \StructType\TaxesType
     */
    public function setTotalTaxAmount(\StructType\AmountType $totalTaxAmount = null)
    {
        $this->TotalTaxAmount = $totalTaxAmount;
        return $this;
    }
    /**
     * Get TaxDetails value
     * @return \StructType\TaxDetailsType[]|null
     */
    public function getTaxDetails()
    {
        return $this->TaxDetails;
    }
    /**
     * This method is responsible for validating the values passed to the setTaxDetails method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTaxDetails method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTaxDetailsForArrayConstraintsFromSetTaxDetails(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $taxesTypeTaxDetailsItem) {
            // validation for constraint: itemType
            if (!$taxesTypeTaxDetailsItem instanceof \StructType\TaxDetailsType) {
                $invalidValues[] = is_object($taxesTypeTaxDetailsItem) ? get_class($taxesTypeTaxDetailsItem) : sprintf('%s(%s)', gettype($taxesTypeTaxDetailsItem), var_export($taxesTypeTaxDetailsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The TaxDetails property can only contain items of type \StructType\TaxDetailsType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set TaxDetails value
     * @throws \InvalidArgumentException
     * @param \StructType\TaxDetailsType[] $taxDetails
     * @return \StructType\TaxesType
     */
    public function setTaxDetails(array $taxDetails = array())
    {
        // validation for constraint: array
        if ('' !== ($taxDetailsArrayErrorMessage = self::validateTaxDetailsForArrayConstraintsFromSetTaxDetails($taxDetails))) {
            throw new \InvalidArgumentException($taxDetailsArrayErrorMessage, __LINE__);
        }
        $this->TaxDetails = $taxDetails;
        return $this;
    }
    /**
     * Add item to TaxDetails value
     * @throws \InvalidArgumentException
     * @param \StructType\TaxDetailsType $item
     * @return \StructType\TaxesType
     */
    public function addToTaxDetails(\StructType\TaxDetailsType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\TaxDetailsType) {
            throw new \InvalidArgumentException(sprintf('The TaxDetails property can only contain items of type \StructType\TaxDetailsType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->TaxDetails[] = $item;
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
     * @return \StructType\TaxesType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
