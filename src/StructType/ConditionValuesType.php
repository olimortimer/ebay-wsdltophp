<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ConditionValuesType StructType
 * Meta information extracted from the WSDL
 * - documentation: Fields in this type provide condition values and display names.
 * @subpackage Structs
 */
class ConditionValuesType extends AbstractStructBase
{
    /**
     * The Condition
     * Meta information extracted from the WSDL
     * - documentation: This repeatable container shows the display name and unique identifier of each item condition supported by the corresponding eBay category. All refurbished item conditions are returned in the <br> <br> <span
     * class="tablenote"><strong>Note:</strong> As of February 2022, in the US, Canada, UK, Germany, France, Italy, and Australia marketplaces, condition ID 2500 ('Seller Refurbished') can no longer be used In the following categories: <b>Cell Phones &
     * Smartphones</b> (category ID 9355); <b>Smart Watches</b> (category ID 178893); and <b>Tablets & eBook Readers</b> (category ID 171485). In these three categories, the 'Seller Refurbished' item condition has been replaced by one of three new
     * refurbished values, which include condition ID 2010 ('Excellent - Refurbished'), condition ID 2020 ('Very Good - Refurbished'), and condition ID 2030 ('Good - Refurbished'). Similar to the condition ID 2000 ('Certified Refurbished') item condition,
     * the three new seller refurbished item conditions will be returned under the <b>Category.SpecialFeatures</b> container. To use any of these new refurbished item conditions in category 9355, in category 178893, or in category 171485, sellers must go
     * through an <a href="https://pages.ebay.com/seller-center/listing-and-marketing/ebay-refurbished-program.html" target="_blank">application and qualification process</a>. The new item condition values appearing in the Category.SpecialFeatures container
     * does not necessarily indicate that a seller is eligible to list in the three categories with these item conditions. </span>
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\ConditionType[]
     */
    public $Condition;
    /**
     * The ConditionHelpURL
     * Meta information extracted from the WSDL
     * - documentation: URL to the eBay Web site's item condition help for the category. This may include policies about how to assess the condition of an item in the category. To reduce item-not-as-described cases, we recommend that you refer sellers (and
     * buyers) to these help pages. These help pages may vary for some categories.<br> <br> The Sandbox might not return valid help URLs.
     * - minOccurs: 0
     * @var string
     */
    public $ConditionHelpURL;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for ConditionValuesType
     * @uses ConditionValuesType::setCondition()
     * @uses ConditionValuesType::setConditionHelpURL()
     * @uses ConditionValuesType::setAny()
     * @param \StructType\ConditionType[] $condition
     * @param string $conditionHelpURL
     * @param \DOMDocument $any
     */
    public function __construct(array $condition = array(), $conditionHelpURL = null, \DOMDocument $any = null)
    {
        $this
            ->setCondition($condition)
            ->setConditionHelpURL($conditionHelpURL)
            ->setAny($any);
    }
    /**
     * Get Condition value
     * @return \StructType\ConditionType[]|null
     */
    public function getCondition()
    {
        return $this->Condition;
    }
    /**
     * This method is responsible for validating the values passed to the setCondition method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCondition method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateConditionForArrayConstraintsFromSetCondition(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $conditionValuesTypeConditionItem) {
            // validation for constraint: itemType
            if (!$conditionValuesTypeConditionItem instanceof \StructType\ConditionType) {
                $invalidValues[] = is_object($conditionValuesTypeConditionItem) ? get_class($conditionValuesTypeConditionItem) : sprintf('%s(%s)', gettype($conditionValuesTypeConditionItem), var_export($conditionValuesTypeConditionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Condition property can only contain items of type \StructType\ConditionType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Condition value
     * @throws \InvalidArgumentException
     * @param \StructType\ConditionType[] $condition
     * @return \StructType\ConditionValuesType
     */
    public function setCondition(array $condition = array())
    {
        // validation for constraint: array
        if ('' !== ($conditionArrayErrorMessage = self::validateConditionForArrayConstraintsFromSetCondition($condition))) {
            throw new \InvalidArgumentException($conditionArrayErrorMessage, __LINE__);
        }
        $this->Condition = $condition;
        return $this;
    }
    /**
     * Add item to Condition value
     * @throws \InvalidArgumentException
     * @param \StructType\ConditionType $item
     * @return \StructType\ConditionValuesType
     */
    public function addToCondition(\StructType\ConditionType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ConditionType) {
            throw new \InvalidArgumentException(sprintf('The Condition property can only contain items of type \StructType\ConditionType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Condition[] = $item;
        return $this;
    }
    /**
     * Get ConditionHelpURL value
     * @return string|null
     */
    public function getConditionHelpURL()
    {
        return $this->ConditionHelpURL;
    }
    /**
     * Set ConditionHelpURL value
     * @param string $conditionHelpURL
     * @return \StructType\ConditionValuesType
     */
    public function setConditionHelpURL($conditionHelpURL = null)
    {
        // validation for constraint: string
        if (!is_null($conditionHelpURL) && !is_string($conditionHelpURL)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($conditionHelpURL, true), gettype($conditionHelpURL)), __LINE__);
        }
        $this->ConditionHelpURL = $conditionHelpURL;
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
     * @return \StructType\ConditionValuesType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
