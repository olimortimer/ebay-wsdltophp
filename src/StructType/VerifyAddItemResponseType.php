<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VerifyAddItemResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: Returns the listing recommendations (if applicable), the estimated fees for the proposed new listing (except the Final Value Fee, which isn't calculated until the item has sold), and other details.
 * @subpackage Structs
 */
class VerifyAddItemResponseType extends AbstractResponseType
{
    /**
     * The ItemID
     * Meta information extracted from the WSDL
     * - documentation: With a successful <b>VerifyAddItem</b> call, this field is always returned, but the returned value is always <code>0</code>, since this call only validates the data passed in through the request payload and does not actually create
     * an active listing. | Type that represents the unique identifier for an eBay listing.
     * - base: xs:string
     * - minOccurs: 0
     * @var string
     */
    public $ItemID;
    /**
     * The Fees
     * Meta information extracted from the WSDL
     * - documentation: This container is an array of fees that would incur if the listing defined in request payload of the <b>VerifyAddItem<b> call was published. The fees in this container will not include any fees that are based on the purchase price
     * (such as Final Value Fee) and only come into play when the listing has a sale. <br> <br> All listing fee types are returned, even if those fees are not applicable for the listing and are '0.0'. <br> <br> <span class="tablenote"><b>Note:</b> The
     * currency used for all fees returned under the <b>Fees</b> container reflects the currency used for the listing site, and not necessarily in the seller's default/home currency. For example, if a Canadian seller is using the <b>VerifyAddItem</b> call
     * to verify a listing on the eBay US site, the currency type shown for each fee will be <code>USD</code> and not <code>CAD</code>. </span>
     * - minOccurs: 0
     * @var \StructType\FeesType
     */
    public $Fees;
    /**
     * The ExpressListing
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var bool
     */
    public $ExpressListing;
    /**
     * The ExpressItemRequirements
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var \StructType\ExpressItemRequirementsType
     */
    public $ExpressItemRequirements;
    /**
     * The CategoryID
     * Meta information extracted from the WSDL
     * - documentation: ID of the primary category in which the item would be listed. Only returned if you set Item.CategoryMappingAllowed to true in the request and the ID you passed in PrimaryCategory was mapped to a new ID by eBay. If the primary
     * category has not changed or it has expired with no replacement, CategoryID does not return a value.
     * - minOccurs: 0
     * @var string
     */
    public $CategoryID;
    /**
     * The Category2ID
     * Meta information extracted from the WSDL
     * - documentation: ID of the secondary category in which the item would be listed. Only returned if you set Item.CategoryMappingAllowed to true in the request and the ID you passed in SecondaryCategory was mapped to a new ID by eBay. If the secondary
     * category has not changed or it has expired with no replacement, Category2ID does not return a value.
     * - minOccurs: 0
     * @var string
     */
    public $Category2ID;
    /**
     * The DiscountReason
     * Meta information extracted from the WSDL
     * - documentation: The nature of the discount, if a discount would have applied had this actually been listed at this time.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $DiscountReason;
    /**
     * The ProductSuggestions
     * Meta information extracted from the WSDL
     * - documentation: Provides a list of products recommended by eBay which match the item information provided by the seller.
     * - minOccurs: 0
     * @var \StructType\ProductSuggestionsType
     */
    public $ProductSuggestions;
    /**
     * Constructor method for VerifyAddItemResponseType
     * @uses VerifyAddItemResponseType::setItemID()
     * @uses VerifyAddItemResponseType::setFees()
     * @uses VerifyAddItemResponseType::setExpressListing()
     * @uses VerifyAddItemResponseType::setExpressItemRequirements()
     * @uses VerifyAddItemResponseType::setCategoryID()
     * @uses VerifyAddItemResponseType::setCategory2ID()
     * @uses VerifyAddItemResponseType::setDiscountReason()
     * @uses VerifyAddItemResponseType::setProductSuggestions()
     * @param string $itemID
     * @param \StructType\FeesType $fees
     * @param bool $expressListing
     * @param \StructType\ExpressItemRequirementsType $expressItemRequirements
     * @param string $categoryID
     * @param string $category2ID
     * @param string[] $discountReason
     * @param \StructType\ProductSuggestionsType $productSuggestions
     */
    public function __construct($itemID = null, \StructType\FeesType $fees = null, $expressListing = null, \StructType\ExpressItemRequirementsType $expressItemRequirements = null, $categoryID = null, $category2ID = null, array $discountReason = array(), \StructType\ProductSuggestionsType $productSuggestions = null)
    {
        $this
            ->setItemID($itemID)
            ->setFees($fees)
            ->setExpressListing($expressListing)
            ->setExpressItemRequirements($expressItemRequirements)
            ->setCategoryID($categoryID)
            ->setCategory2ID($category2ID)
            ->setDiscountReason($discountReason)
            ->setProductSuggestions($productSuggestions);
    }
    /**
     * Get ItemID value
     * @return string|null
     */
    public function getItemID()
    {
        return $this->ItemID;
    }
    /**
     * Set ItemID value
     * @param string $itemID
     * @return \StructType\VerifyAddItemResponseType
     */
    public function setItemID($itemID = null)
    {
        // validation for constraint: string
        if (!is_null($itemID) && !is_string($itemID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($itemID, true), gettype($itemID)), __LINE__);
        }
        $this->ItemID = $itemID;
        return $this;
    }
    /**
     * Get Fees value
     * @return \StructType\FeesType|null
     */
    public function getFees()
    {
        return $this->Fees;
    }
    /**
     * Set Fees value
     * @param \StructType\FeesType $fees
     * @return \StructType\VerifyAddItemResponseType
     */
    public function setFees(\StructType\FeesType $fees = null)
    {
        $this->Fees = $fees;
        return $this;
    }
    /**
     * Get ExpressListing value
     * @return bool|null
     */
    public function getExpressListing()
    {
        return $this->ExpressListing;
    }
    /**
     * Set ExpressListing value
     * @param bool $expressListing
     * @return \StructType\VerifyAddItemResponseType
     */
    public function setExpressListing($expressListing = null)
    {
        // validation for constraint: boolean
        if (!is_null($expressListing) && !is_bool($expressListing)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($expressListing, true), gettype($expressListing)), __LINE__);
        }
        $this->ExpressListing = $expressListing;
        return $this;
    }
    /**
     * Get ExpressItemRequirements value
     * @return \StructType\ExpressItemRequirementsType|null
     */
    public function getExpressItemRequirements()
    {
        return $this->ExpressItemRequirements;
    }
    /**
     * Set ExpressItemRequirements value
     * @param \StructType\ExpressItemRequirementsType $expressItemRequirements
     * @return \StructType\VerifyAddItemResponseType
     */
    public function setExpressItemRequirements(\StructType\ExpressItemRequirementsType $expressItemRequirements = null)
    {
        $this->ExpressItemRequirements = $expressItemRequirements;
        return $this;
    }
    /**
     * Get CategoryID value
     * @return string|null
     */
    public function getCategoryID()
    {
        return $this->CategoryID;
    }
    /**
     * Set CategoryID value
     * @param string $categoryID
     * @return \StructType\VerifyAddItemResponseType
     */
    public function setCategoryID($categoryID = null)
    {
        // validation for constraint: string
        if (!is_null($categoryID) && !is_string($categoryID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($categoryID, true), gettype($categoryID)), __LINE__);
        }
        $this->CategoryID = $categoryID;
        return $this;
    }
    /**
     * Get Category2ID value
     * @return string|null
     */
    public function getCategory2ID()
    {
        return $this->Category2ID;
    }
    /**
     * Set Category2ID value
     * @param string $category2ID
     * @return \StructType\VerifyAddItemResponseType
     */
    public function setCategory2ID($category2ID = null)
    {
        // validation for constraint: string
        if (!is_null($category2ID) && !is_string($category2ID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($category2ID, true), gettype($category2ID)), __LINE__);
        }
        $this->Category2ID = $category2ID;
        return $this;
    }
    /**
     * Get DiscountReason value
     * @return string[]|null
     */
    public function getDiscountReason()
    {
        return $this->DiscountReason;
    }
    /**
     * This method is responsible for validating the values passed to the setDiscountReason method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDiscountReason method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDiscountReasonForArrayConstraintsFromSetDiscountReason(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $verifyAddItemResponseTypeDiscountReasonItem) {
            // validation for constraint: enumeration
            if (!\EnumType\DiscountReasonCodeType::valueIsValid($verifyAddItemResponseTypeDiscountReasonItem)) {
                $invalidValues[] = is_object($verifyAddItemResponseTypeDiscountReasonItem) ? get_class($verifyAddItemResponseTypeDiscountReasonItem) : sprintf('%s(%s)', gettype($verifyAddItemResponseTypeDiscountReasonItem), var_export($verifyAddItemResponseTypeDiscountReasonItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\DiscountReasonCodeType', is_array($invalidValues) ? implode(', ', $invalidValues) : var_export($invalidValues, true), implode(', ', \EnumType\DiscountReasonCodeType::getValidValues()));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set DiscountReason value
     * @uses \EnumType\DiscountReasonCodeType::valueIsValid()
     * @uses \EnumType\DiscountReasonCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $discountReason
     * @return \StructType\VerifyAddItemResponseType
     */
    public function setDiscountReason(array $discountReason = array())
    {
        // validation for constraint: array
        if ('' !== ($discountReasonArrayErrorMessage = self::validateDiscountReasonForArrayConstraintsFromSetDiscountReason($discountReason))) {
            throw new \InvalidArgumentException($discountReasonArrayErrorMessage, __LINE__);
        }
        $this->DiscountReason = $discountReason;
        return $this;
    }
    /**
     * Add item to DiscountReason value
     * @uses \EnumType\DiscountReasonCodeType::valueIsValid()
     * @uses \EnumType\DiscountReasonCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \StructType\VerifyAddItemResponseType
     */
    public function addToDiscountReason($item)
    {
        // validation for constraint: enumeration
        if (!\EnumType\DiscountReasonCodeType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\DiscountReasonCodeType', is_array($item) ? implode(', ', $item) : var_export($item, true), implode(', ', \EnumType\DiscountReasonCodeType::getValidValues())), __LINE__);
        }
        $this->DiscountReason[] = $item;
        return $this;
    }
    /**
     * Get ProductSuggestions value
     * @return \StructType\ProductSuggestionsType|null
     */
    public function getProductSuggestions()
    {
        return $this->ProductSuggestions;
    }
    /**
     * Set ProductSuggestions value
     * @param \StructType\ProductSuggestionsType $productSuggestions
     * @return \StructType\VerifyAddItemResponseType
     */
    public function setProductSuggestions(\StructType\ProductSuggestionsType $productSuggestions = null)
    {
        $this->ProductSuggestions = $productSuggestions;
        return $this;
    }
}
