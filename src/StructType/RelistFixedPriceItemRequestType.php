<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RelistFixedPriceItemRequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: Enables a seller to relist a fixed-price listing that has recently ended on a specified eBay site. A seller has to up to 90 days to relist an ended listing. When an item is relisted, it will receive a new <b>ItemID</b> value, but
 * this item will remain on other users' Watch Lists after it is relisted. The seller has the opportunity to make changes to the listing through the <b>Item</b> container, and the seller can also use one or more <b>DeletedField</b> tags to remove an
 * optional field/setting from the listing.
 * @subpackage Structs
 */
class RelistFixedPriceItemRequestType extends AbstractRequestType
{
    /**
     * The Item
     * Meta information extracted from the WSDL
     * - documentation: The <b>Item</b> container is used to configure the item that will be relisted. If the seller plans to relist the item with no changes, the only field under the <b>Item</b> container that is required is the <b>ItemID</b> field. In the
     * <b>ItemID</b> field, the seller specifies the item that will be relisted. If the seller wishes to change anything else for the listing, the seller should include this field in the call request and give it a new value. <br/><br/> If the seller wants
     * to delete one or more optional settings in the listing, the seller should use the <b>DeletedField</b> tag.
     * - minOccurs: 0
     * @var \StructType\ItemType
     */
    public $Item;
    /**
     * The DeletedField
     * Meta information extracted from the WSDL
     * - documentation: Specifies the name of the field to delete from a listing. See <a href="https://developer.ebay.com/Devzone/guides/features-guide/default.html#development/Listings-RelistingItems.html">Relisting Items</a> for rules on deleting values
     * when relisting items. Also see the relevant field descriptions to determine when to use <b>DeletedField</b> (and potential consequences). The request can contain zero, one, or many instances of <b>DeletedField</b> (one for each field to be deleted).
     * <br> <br> Some data (such as <b>Variation</b> nodes within <b>Variations</b>) can't be deleted by using a <b>DeletedField</b> tag. See the relevant field descriptions for how to delete such data. <br> <br> Case-sensitivity must be taken into account
     * when using a <b>DeletedField</b> tag to delete a field. The value passed into a <b>DeletedField</b> tag must either match the case of the schema element names in the full field path (Item.PictureDetails.GalleryURL), or the initial letter of each
     * schema element name in the full field path must be lowercase (item.pictureDetails.galleryURL). Do not change the case of letters in the middle of a field name. For example, item.picturedetails.galleryUrl is not allowed.<br><br> To delete a listing
     * enhancement like 'BoldTitle', specify the value you are deleting; for example, Item.ListingEnhancement[BoldTitle].
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $DeletedField;
    /**
     * Constructor method for RelistFixedPriceItemRequestType
     * @uses RelistFixedPriceItemRequestType::setItem()
     * @uses RelistFixedPriceItemRequestType::setDeletedField()
     * @param \StructType\ItemType $item
     * @param string[] $deletedField
     */
    public function __construct(\StructType\ItemType $item = null, array $deletedField = array())
    {
        $this
            ->setItem($item)
            ->setDeletedField($deletedField);
    }
    /**
     * Get Item value
     * @return \StructType\ItemType|null
     */
    public function getItem()
    {
        return $this->Item;
    }
    /**
     * Set Item value
     * @param \StructType\ItemType $item
     * @return \StructType\RelistFixedPriceItemRequestType
     */
    public function setItem(\StructType\ItemType $item = null)
    {
        $this->Item = $item;
        return $this;
    }
    /**
     * Get DeletedField value
     * @return string[]|null
     */
    public function getDeletedField()
    {
        return $this->DeletedField;
    }
    /**
     * This method is responsible for validating the values passed to the setDeletedField method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDeletedField method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDeletedFieldForArrayConstraintsFromSetDeletedField(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $relistFixedPriceItemRequestTypeDeletedFieldItem) {
            // validation for constraint: itemType
            if (!is_string($relistFixedPriceItemRequestTypeDeletedFieldItem)) {
                $invalidValues[] = is_object($relistFixedPriceItemRequestTypeDeletedFieldItem) ? get_class($relistFixedPriceItemRequestTypeDeletedFieldItem) : sprintf('%s(%s)', gettype($relistFixedPriceItemRequestTypeDeletedFieldItem), var_export($relistFixedPriceItemRequestTypeDeletedFieldItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The DeletedField property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set DeletedField value
     * @throws \InvalidArgumentException
     * @param string[] $deletedField
     * @return \StructType\RelistFixedPriceItemRequestType
     */
    public function setDeletedField(array $deletedField = array())
    {
        // validation for constraint: array
        if ('' !== ($deletedFieldArrayErrorMessage = self::validateDeletedFieldForArrayConstraintsFromSetDeletedField($deletedField))) {
            throw new \InvalidArgumentException($deletedFieldArrayErrorMessage, __LINE__);
        }
        $this->DeletedField = $deletedField;
        return $this;
    }
    /**
     * Add item to DeletedField value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \StructType\RelistFixedPriceItemRequestType
     */
    public function addToDeletedField($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The DeletedField property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->DeletedField[] = $item;
        return $this;
    }
}
