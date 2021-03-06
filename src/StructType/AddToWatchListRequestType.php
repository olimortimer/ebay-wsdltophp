<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddToWatchListRequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: Adds one or more order line items to the eBay user's Watch List. An auction item or a single-variation, fixed-price listing is identified with an <b>ItemID</b> value. To add a specific item variation to the Watch List from within a
 * multi-variation, fixed-price listing, the user will use the <b>VariationKey</b> container instead.
 * @subpackage Structs
 */
class AddToWatchListRequestType extends AbstractRequestType
{
    /**
     * The ItemID
     * Meta information extracted from the WSDL
     * - documentation: The unique identifier of the single-variation listing that is to be added to the eBay user's Watch List. The item must be a currently active item, and the total number of items in the user's Watch List (after the items in the request
     * have been added) cannot exceed the maximum allowed number of Watch List items. One or more <b>ItemID</b> fields can be specified. A separate error node will be returned for each item that was not successfully added to the Watch List.<br> <br> The
     * user must use either one or more <b>ItemID</b> values or one or more <b>VariationKey</b> containers, but the user may not use both of these entities in the same call. | Type that represents the unique identifier for an eBay listing.
     * - base: xs:string
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $ItemID;
    /**
     * The VariationKey
     * Meta information extracted from the WSDL
     * - documentation: This container is used to specify one or more item variations in a multi-variation, fixed-price listing that you want to add to the Watch List. The listing is identified through the <b>ItemID</b> value and each item variation
     * existing within that listing is identified through a <b>VariationSpecifics.NameValueList</b> container. <br> <br> The user must use either one or more <b>ItemID</b> values or one or more <b>VariationKey</b> containers, but the user may not use both
     * of these entities in the same call.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\VariationKeyType[]
     */
    public $VariationKey;
    /**
     * Constructor method for AddToWatchListRequestType
     * @uses AddToWatchListRequestType::setItemID()
     * @uses AddToWatchListRequestType::setVariationKey()
     * @param string[] $itemID
     * @param \StructType\VariationKeyType[] $variationKey
     */
    public function __construct(array $itemID = array(), array $variationKey = array())
    {
        $this
            ->setItemID($itemID)
            ->setVariationKey($variationKey);
    }
    /**
     * Get ItemID value
     * @return string[]|null
     */
    public function getItemID()
    {
        return $this->ItemID;
    }
    /**
     * This method is responsible for validating the values passed to the setItemID method
     * This method is willingly generated in order to preserve the one-line inline validation within the setItemID method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateItemIDForArrayConstraintsFromSetItemID(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $addToWatchListRequestTypeItemIDItem) {
            // validation for constraint: itemType
            if (!is_string($addToWatchListRequestTypeItemIDItem)) {
                $invalidValues[] = is_object($addToWatchListRequestTypeItemIDItem) ? get_class($addToWatchListRequestTypeItemIDItem) : sprintf('%s(%s)', gettype($addToWatchListRequestTypeItemIDItem), var_export($addToWatchListRequestTypeItemIDItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ItemID property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set ItemID value
     * @throws \InvalidArgumentException
     * @param string[] $itemID
     * @return \StructType\AddToWatchListRequestType
     */
    public function setItemID(array $itemID = array())
    {
        // validation for constraint: array
        if ('' !== ($itemIDArrayErrorMessage = self::validateItemIDForArrayConstraintsFromSetItemID($itemID))) {
            throw new \InvalidArgumentException($itemIDArrayErrorMessage, __LINE__);
        }
        $this->ItemID = $itemID;
        return $this;
    }
    /**
     * Add item to ItemID value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \StructType\AddToWatchListRequestType
     */
    public function addToItemID($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The ItemID property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ItemID[] = $item;
        return $this;
    }
    /**
     * Get VariationKey value
     * @return \StructType\VariationKeyType[]|null
     */
    public function getVariationKey()
    {
        return $this->VariationKey;
    }
    /**
     * This method is responsible for validating the values passed to the setVariationKey method
     * This method is willingly generated in order to preserve the one-line inline validation within the setVariationKey method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateVariationKeyForArrayConstraintsFromSetVariationKey(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $addToWatchListRequestTypeVariationKeyItem) {
            // validation for constraint: itemType
            if (!$addToWatchListRequestTypeVariationKeyItem instanceof \StructType\VariationKeyType) {
                $invalidValues[] = is_object($addToWatchListRequestTypeVariationKeyItem) ? get_class($addToWatchListRequestTypeVariationKeyItem) : sprintf('%s(%s)', gettype($addToWatchListRequestTypeVariationKeyItem), var_export($addToWatchListRequestTypeVariationKeyItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The VariationKey property can only contain items of type \StructType\VariationKeyType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set VariationKey value
     * @throws \InvalidArgumentException
     * @param \StructType\VariationKeyType[] $variationKey
     * @return \StructType\AddToWatchListRequestType
     */
    public function setVariationKey(array $variationKey = array())
    {
        // validation for constraint: array
        if ('' !== ($variationKeyArrayErrorMessage = self::validateVariationKeyForArrayConstraintsFromSetVariationKey($variationKey))) {
            throw new \InvalidArgumentException($variationKeyArrayErrorMessage, __LINE__);
        }
        $this->VariationKey = $variationKey;
        return $this;
    }
    /**
     * Add item to VariationKey value
     * @throws \InvalidArgumentException
     * @param \StructType\VariationKeyType $item
     * @return \StructType\AddToWatchListRequestType
     */
    public function addToVariationKey(\StructType\VariationKeyType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\VariationKeyType) {
            throw new \InvalidArgumentException(sprintf('The VariationKey property can only contain items of type \StructType\VariationKeyType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->VariationKey[] = $item;
        return $this;
    }
}
