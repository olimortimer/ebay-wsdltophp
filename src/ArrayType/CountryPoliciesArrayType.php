<?php

namespace ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for CountryPoliciesArrayType ArrayType
 * Meta information extracted from the WSDL
 * - documentation: This type specifies custom product compliance and/or take-back policies that apply to a specified country.
 * @subpackage Arrays
 */
class CountryPoliciesArrayType extends AbstractStructArrayBase
{
    /**
     * The CountryPolicies
     * Meta information extracted from the WSDL
     * - documentation: Contains a country and the custom policy/policies for that country.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\CountryPoliciesType[]
     */
    public $CountryPolicies;
    /**
     * Constructor method for CountryPoliciesArrayType
     * @uses CountryPoliciesArrayType::setCountryPolicies()
     * @param \StructType\CountryPoliciesType[] $countryPolicies
     */
    public function __construct(array $countryPolicies = array())
    {
        $this
            ->setCountryPolicies($countryPolicies);
    }
    /**
     * Get CountryPolicies value
     * @return \StructType\CountryPoliciesType[]|null
     */
    public function getCountryPolicies()
    {
        return $this->CountryPolicies;
    }
    /**
     * This method is responsible for validating the values passed to the setCountryPolicies method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCountryPolicies method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCountryPoliciesForArrayConstraintsFromSetCountryPolicies(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $countryPoliciesArrayTypeCountryPoliciesItem) {
            // validation for constraint: itemType
            if (!$countryPoliciesArrayTypeCountryPoliciesItem instanceof \StructType\CountryPoliciesType) {
                $invalidValues[] = is_object($countryPoliciesArrayTypeCountryPoliciesItem) ? get_class($countryPoliciesArrayTypeCountryPoliciesItem) : sprintf('%s(%s)', gettype($countryPoliciesArrayTypeCountryPoliciesItem), var_export($countryPoliciesArrayTypeCountryPoliciesItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The CountryPolicies property can only contain items of type \StructType\CountryPoliciesType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set CountryPolicies value
     * @throws \InvalidArgumentException
     * @param \StructType\CountryPoliciesType[] $countryPolicies
     * @return \ArrayType\CountryPoliciesArrayType
     */
    public function setCountryPolicies(array $countryPolicies = array())
    {
        // validation for constraint: array
        if ('' !== ($countryPoliciesArrayErrorMessage = self::validateCountryPoliciesForArrayConstraintsFromSetCountryPolicies($countryPolicies))) {
            throw new \InvalidArgumentException($countryPoliciesArrayErrorMessage, __LINE__);
        }
        $this->CountryPolicies = $countryPolicies;
        return $this;
    }
    /**
     * Add item to CountryPolicies value
     * @throws \InvalidArgumentException
     * @param \StructType\CountryPoliciesType $item
     * @return \ArrayType\CountryPoliciesArrayType
     */
    public function addToCountryPolicies(\StructType\CountryPoliciesType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\CountryPoliciesType) {
            throw new \InvalidArgumentException(sprintf('The CountryPolicies property can only contain items of type \StructType\CountryPoliciesType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->CountryPolicies[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\CountryPoliciesType|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\CountryPoliciesType|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\CountryPoliciesType|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\CountryPoliciesType|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\CountryPoliciesType|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string CountryPolicies
     */
    public function getAttributeName()
    {
        return 'CountryPolicies';
    }
}
