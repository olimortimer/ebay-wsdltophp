<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ProductRecommendationsType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Structs
 */
class ProductRecommendationsType extends AbstractStructBase
{
    /**
     * The Product
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\ProductInfoType[]
     */
    public $Product;
    /**
     * Constructor method for ProductRecommendationsType
     * @uses ProductRecommendationsType::setProduct()
     * @param \StructType\ProductInfoType[] $product
     */
    public function __construct(array $product = array())
    {
        $this
            ->setProduct($product);
    }
    /**
     * Get Product value
     * @return \StructType\ProductInfoType[]|null
     */
    public function getProduct()
    {
        return $this->Product;
    }
    /**
     * This method is responsible for validating the values passed to the setProduct method
     * This method is willingly generated in order to preserve the one-line inline validation within the setProduct method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateProductForArrayConstraintsFromSetProduct(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $productRecommendationsTypeProductItem) {
            // validation for constraint: itemType
            if (!$productRecommendationsTypeProductItem instanceof \StructType\ProductInfoType) {
                $invalidValues[] = is_object($productRecommendationsTypeProductItem) ? get_class($productRecommendationsTypeProductItem) : sprintf('%s(%s)', gettype($productRecommendationsTypeProductItem), var_export($productRecommendationsTypeProductItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Product property can only contain items of type \StructType\ProductInfoType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Product value
     * @throws \InvalidArgumentException
     * @param \StructType\ProductInfoType[] $product
     * @return \StructType\ProductRecommendationsType
     */
    public function setProduct(array $product = array())
    {
        // validation for constraint: array
        if ('' !== ($productArrayErrorMessage = self::validateProductForArrayConstraintsFromSetProduct($product))) {
            throw new \InvalidArgumentException($productArrayErrorMessage, __LINE__);
        }
        $this->Product = $product;
        return $this;
    }
    /**
     * Add item to Product value
     * @throws \InvalidArgumentException
     * @param \StructType\ProductInfoType $item
     * @return \StructType\ProductRecommendationsType
     */
    public function addToProduct(\StructType\ProductInfoType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ProductInfoType) {
            throw new \InvalidArgumentException(sprintf('The Product property can only contain items of type \StructType\ProductInfoType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Product[] = $item;
        return $this;
    }
}
