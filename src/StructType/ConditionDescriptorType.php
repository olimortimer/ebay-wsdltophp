<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ConditionDescriptorType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type contains details like name, value, and additional information, that is provided by the seller about the specific condition of an item.
 * @subpackage Structs
 */
class ConditionDescriptorType extends AbstractStructBase
{
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - documentation: A numeric ID is passed in this field. This numeric ID maps to the name of a condition descriptor. Condition descriptor name-value pairs provide more information about an item's condition in a structured way.<br /><br />To retrieve
     * all condition descriptor numeric IDs for a category, use the <a href = "/api-docs/sell/metadata/resources/marketplace/methods/getItemConditionPolicies">getItemConditionPolicies</a> method of the <b>Metadata API</b>.<br /><br />In the case of trading
     * cards, this field is used to provide condition descriptors for a card. For graded cards, the condition descriptors for <b>Grader</b> and <b>Grade</b> are required, while the condition descriptor for <b>Certification Number</b> is optional. For
     * ungraded cards, only the <b>Card Condition</b> condition descriptor is required.
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    public $Name;
    /**
     * The Value
     * Meta information extracted from the WSDL
     * - documentation: One or more numeric IDs are passed in this field. Commas are used as delimiters between successive name/value pairs. These numeric IDs map to the values associated with a condition descriptor name. Condition descriptor name-value
     * pairs provide more information about an item's condition in a structured way.<br /><br />To retrieve all condition descriptor numeric IDs for a category, use the <a href =
     * "/api-docs/sell/metadata/resources/marketplace/methods/getItemConditionPolicies">getItemConditionPolicies</a> method of the <b>Metadata API</b>.<br /><br />In the case of trading cards, this field houses the information on the <b>Grader</b> and
     * <b>Grade</b> descriptors of graded cards and the <b>Card Condition</b> descriptor for ungraded cards.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $Value;
    /**
     * The AdditionalInfo
     * Meta information extracted from the WSDL
     * - documentation: Open text is passed in this field. This text provides additional information about a condition descriptor.<br><br>In the case of trading cards, this field houses the optional <b>Certification Number</b> condition descriptor for
     * graded cards.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $AdditionalInfo;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for ConditionDescriptorType
     * @uses ConditionDescriptorType::setName()
     * @uses ConditionDescriptorType::setValue()
     * @uses ConditionDescriptorType::setAdditionalInfo()
     * @uses ConditionDescriptorType::setAny()
     * @param string $name
     * @param string[] $value
     * @param string $additionalInfo
     * @param \DOMDocument $any
     */
    public function __construct($name = null, array $value = array(), $additionalInfo = null, \DOMDocument $any = null)
    {
        $this
            ->setName($name)
            ->setValue($value)
            ->setAdditionalInfo($additionalInfo)
            ->setAny($any);
    }
    /**
     * Get Name value
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \StructType\ConditionDescriptorType
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->Name = $name;
        return $this;
    }
    /**
     * Get Value value
     * @return string[]|null
     */
    public function getValue()
    {
        return $this->Value;
    }
    /**
     * This method is responsible for validating the values passed to the setValue method
     * This method is willingly generated in order to preserve the one-line inline validation within the setValue method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateValueForArrayConstraintsFromSetValue(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $conditionDescriptorTypeValueItem) {
            // validation for constraint: itemType
            if (!is_string($conditionDescriptorTypeValueItem)) {
                $invalidValues[] = is_object($conditionDescriptorTypeValueItem) ? get_class($conditionDescriptorTypeValueItem) : sprintf('%s(%s)', gettype($conditionDescriptorTypeValueItem), var_export($conditionDescriptorTypeValueItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Value property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Value value
     * @throws \InvalidArgumentException
     * @param string[] $value
     * @return \StructType\ConditionDescriptorType
     */
    public function setValue(array $value = array())
    {
        // validation for constraint: array
        if ('' !== ($valueArrayErrorMessage = self::validateValueForArrayConstraintsFromSetValue($value))) {
            throw new \InvalidArgumentException($valueArrayErrorMessage, __LINE__);
        }
        $this->Value = $value;
        return $this;
    }
    /**
     * Add item to Value value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \StructType\ConditionDescriptorType
     */
    public function addToValue($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The Value property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Value[] = $item;
        return $this;
    }
    /**
     * Get AdditionalInfo value
     * @return string|null
     */
    public function getAdditionalInfo()
    {
        return $this->AdditionalInfo;
    }
    /**
     * Set AdditionalInfo value
     * @param string $additionalInfo
     * @return \StructType\ConditionDescriptorType
     */
    public function setAdditionalInfo($additionalInfo = null)
    {
        // validation for constraint: string
        if (!is_null($additionalInfo) && !is_string($additionalInfo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($additionalInfo, true), gettype($additionalInfo)), __LINE__);
        }
        $this->AdditionalInfo = $additionalInfo;
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
     * @return \StructType\ConditionDescriptorType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
