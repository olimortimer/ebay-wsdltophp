<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for LinkedLineItemArrayType ArrayType
 * Meta information extracted from the WSDL
 * - documentation: Contains data that links line item objects from separate orders.
 * @subpackage Arrays
 */
class LinkedLineItemArrayType extends AbstractStructArrayBase
{
    /**
     * The LinkedLineItem
     * Meta information extracted from the WSDL
     * - documentation: This container shows a line item that is related to the corresponding order, but not a part of that order. Details can identify the linked seller and also include delivery times, item information, and order information.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\LinkedLineItemType[]
     */
    public $LinkedLineItem;
    /**
     * Constructor method for LinkedLineItemArrayType
     * @uses LinkedLineItemArrayType::setLinkedLineItem()
     * @param \StructType\LinkedLineItemType[] $linkedLineItem
     */
    public function __construct(array $linkedLineItem = array())
    {
        $this
            ->setLinkedLineItem($linkedLineItem);
    }
    /**
     * Get LinkedLineItem value
     * @return \StructType\LinkedLineItemType[]|null
     */
    public function getLinkedLineItem()
    {
        return $this->LinkedLineItem;
    }
    /**
     * This method is responsible for validating the values passed to the setLinkedLineItem method
     * This method is willingly generated in order to preserve the one-line inline validation within the setLinkedLineItem method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateLinkedLineItemForArrayConstraintsFromSetLinkedLineItem(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $linkedLineItemArrayTypeLinkedLineItemItem) {
            // validation for constraint: itemType
            if (!$linkedLineItemArrayTypeLinkedLineItemItem instanceof \StructType\LinkedLineItemType) {
                $invalidValues[] = is_object($linkedLineItemArrayTypeLinkedLineItemItem) ? get_class($linkedLineItemArrayTypeLinkedLineItemItem) : sprintf('%s(%s)', gettype($linkedLineItemArrayTypeLinkedLineItemItem), var_export($linkedLineItemArrayTypeLinkedLineItemItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The LinkedLineItem property can only contain items of type \StructType\LinkedLineItemType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set LinkedLineItem value
     * @throws \InvalidArgumentException
     * @param \StructType\LinkedLineItemType[] $linkedLineItem
     * @return \ArrayType\LinkedLineItemArrayType
     */
    public function setLinkedLineItem(array $linkedLineItem = array())
    {
        // validation for constraint: array
        if ('' !== ($linkedLineItemArrayErrorMessage = self::validateLinkedLineItemForArrayConstraintsFromSetLinkedLineItem($linkedLineItem))) {
            throw new \InvalidArgumentException($linkedLineItemArrayErrorMessage, __LINE__);
        }
        $this->LinkedLineItem = $linkedLineItem;
        return $this;
    }
    /**
     * Add item to LinkedLineItem value
     * @throws \InvalidArgumentException
     * @param \StructType\LinkedLineItemType $item
     * @return \ArrayType\LinkedLineItemArrayType
     */
    public function addToLinkedLineItem(\StructType\LinkedLineItemType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\LinkedLineItemType) {
            throw new \InvalidArgumentException(sprintf('The LinkedLineItem property can only contain items of type \StructType\LinkedLineItemType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->LinkedLineItem[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\LinkedLineItemType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\LinkedLineItemType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\LinkedLineItemType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\LinkedLineItemType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\LinkedLineItemType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string LinkedLineItem
     */
    public function getAttributeName()
    {
        return 'LinkedLineItem';
    }
}
