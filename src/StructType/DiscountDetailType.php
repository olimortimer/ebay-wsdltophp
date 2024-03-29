<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DiscountDetailType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is used by the <b>DiscountDetail</b> container, which is returned if a discount is applicable to an account entry.
 * @subpackage Structs
 */
class DiscountDetailType extends AbstractStructBase
{
    /**
     * The Discount
     * Meta information extracted from the WSDL
     * - documentation: This container indicates the discount type and amount applied to an account entry. <br> <br> <span class="tablenote"><b>Note: </b> The discount type will be shown for any account entry where a discount applies, but the discount
     * amount will only be shown if the corresponding fee was deducted from a seller payout. </span>
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\DiscountType[]
     */
    public $Discount;
    /**
     * Constructor method for DiscountDetailType
     * @uses DiscountDetailType::setDiscount()
     * @param \StructType\DiscountType[] $discount
     */
    public function __construct(array $discount = array())
    {
        $this
            ->setDiscount($discount);
    }
    /**
     * Get Discount value
     * @return \StructType\DiscountType[]|null
     */
    public function getDiscount()
    {
        return $this->Discount;
    }
    /**
     * This method is responsible for validating the values passed to the setDiscount method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDiscount method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDiscountForArrayConstraintsFromSetDiscount(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $discountDetailTypeDiscountItem) {
            // validation for constraint: itemType
            if (!$discountDetailTypeDiscountItem instanceof \StructType\DiscountType) {
                $invalidValues[] = is_object($discountDetailTypeDiscountItem) ? get_class($discountDetailTypeDiscountItem) : sprintf('%s(%s)', gettype($discountDetailTypeDiscountItem), var_export($discountDetailTypeDiscountItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Discount property can only contain items of type \StructType\DiscountType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Discount value
     * @throws \InvalidArgumentException
     * @param \StructType\DiscountType[] $discount
     * @return \StructType\DiscountDetailType
     */
    public function setDiscount(array $discount = array())
    {
        // validation for constraint: array
        if ('' !== ($discountArrayErrorMessage = self::validateDiscountForArrayConstraintsFromSetDiscount($discount))) {
            throw new \InvalidArgumentException($discountArrayErrorMessage, __LINE__);
        }
        $this->Discount = $discount;
        return $this;
    }
    /**
     * Add item to Discount value
     * @throws \InvalidArgumentException
     * @param \StructType\DiscountType $item
     * @return \StructType\DiscountDetailType
     */
    public function addToDiscount(\StructType\DiscountType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\DiscountType) {
            throw new \InvalidArgumentException(sprintf('The Discount property can only contain items of type \StructType\DiscountType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Discount[] = $item;
        return $this;
    }
}
