<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ConditionDescriptorsType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type contains the data for condition descriptors associated with an item.
 * @subpackage Structs
 */
class ConditionDescriptorsType extends AbstractStructBase
{
    /**
     * The ConditionDescriptor
     * Meta information extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> This container is currently available only in the United Kingdom (GB), with rollout to all other marketplaces in early July 2023.</span> This container is used by the seller to provide additional
     * information about the condition of an item in a structured format. Condition descriptors are name-value attributes that can be either close set or open text inputs.<br /><br />To retrieve all condition descriptor numeric IDs for a category, use the
     * <a href = "/api-docs/sell/metadata/resources/marketplace/methods/getItemConditionPolicies">getItemConditionPolicies</a> method of the <b>Metadata API</b>.<br> <span class="tablenote"><b>Note: </b> This container is currently only available for the
     * following trading card categories (<b>CategoryID</b>):<br /> <ul><li>Non-Sport Trading Card Singles (<code>183050</code>)</li> <li>CCG Individual Cards (<code>183454</code>)</li> <li>Sports Trading Card Singles (<code>261328</code>)</li></ul> </span>
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\ConditionDescriptorType[]
     */
    public $ConditionDescriptor;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for ConditionDescriptorsType
     * @uses ConditionDescriptorsType::setConditionDescriptor()
     * @uses ConditionDescriptorsType::setAny()
     * @param \StructType\ConditionDescriptorType[] $conditionDescriptor
     * @param \DOMDocument $any
     */
    public function __construct(array $conditionDescriptor = array(), \DOMDocument $any = null)
    {
        $this
            ->setConditionDescriptor($conditionDescriptor)
            ->setAny($any);
    }
    /**
     * Get ConditionDescriptor value
     * @return \StructType\ConditionDescriptorType[]|null
     */
    public function getConditionDescriptor()
    {
        return $this->ConditionDescriptor;
    }
    /**
     * This method is responsible for validating the values passed to the setConditionDescriptor method
     * This method is willingly generated in order to preserve the one-line inline validation within the setConditionDescriptor method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateConditionDescriptorForArrayConstraintsFromSetConditionDescriptor(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $conditionDescriptorsTypeConditionDescriptorItem) {
            // validation for constraint: itemType
            if (!$conditionDescriptorsTypeConditionDescriptorItem instanceof \StructType\ConditionDescriptorType) {
                $invalidValues[] = is_object($conditionDescriptorsTypeConditionDescriptorItem) ? get_class($conditionDescriptorsTypeConditionDescriptorItem) : sprintf('%s(%s)', gettype($conditionDescriptorsTypeConditionDescriptorItem), var_export($conditionDescriptorsTypeConditionDescriptorItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ConditionDescriptor property can only contain items of type \StructType\ConditionDescriptorType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set ConditionDescriptor value
     * @throws \InvalidArgumentException
     * @param \StructType\ConditionDescriptorType[] $conditionDescriptor
     * @return \StructType\ConditionDescriptorsType
     */
    public function setConditionDescriptor(array $conditionDescriptor = array())
    {
        // validation for constraint: array
        if ('' !== ($conditionDescriptorArrayErrorMessage = self::validateConditionDescriptorForArrayConstraintsFromSetConditionDescriptor($conditionDescriptor))) {
            throw new \InvalidArgumentException($conditionDescriptorArrayErrorMessage, __LINE__);
        }
        $this->ConditionDescriptor = $conditionDescriptor;
        return $this;
    }
    /**
     * Add item to ConditionDescriptor value
     * @throws \InvalidArgumentException
     * @param \StructType\ConditionDescriptorType $item
     * @return \StructType\ConditionDescriptorsType
     */
    public function addToConditionDescriptor(\StructType\ConditionDescriptorType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ConditionDescriptorType) {
            throw new \InvalidArgumentException(sprintf('The ConditionDescriptor property can only contain items of type \StructType\ConditionDescriptorType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ConditionDescriptor[] = $item;
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
     * @return \StructType\ConditionDescriptorsType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
