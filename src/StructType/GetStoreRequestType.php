<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetStoreRequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: This call is used to retrieve information on a seller's eBay Store, including detailed information on all customized Store categories that the seller has set up.
 * @subpackage Structs
 */
class GetStoreRequestType extends AbstractRequestType
{
    /**
     * The CategoryStructureOnly
     * Meta information extracted from the WSDL
     * - documentation: Include this field and set its value to <code>true</code> if you wish to restrict the call response to only the store category hierarchy data.
     * - minOccurs: 0
     * @var bool
     */
    public $CategoryStructureOnly;
    /**
     * The RootCategoryID
     * Meta information extracted from the WSDL
     * - documentation: The unique identifier of an eBay Store category. This field is used if the user wants to isolate the category hierarchy data to one particular eBay category (and its subcategories if applicable). The <b>LevelLimit</b> value will
     * determine how many additional levels of categories are returned.
     * - minOccurs: 0
     * @var int
     */
    public $RootCategoryID;
    /**
     * The LevelLimit
     * Meta information extracted from the WSDL
     * - documentation: This field allows the seller to limit the number of levels of eBay Store categories that are returned. To return only top-level eBay Store categories, the user can include this field and set its value to <code>1</code> (and not use a
     * <b>RootCategoryID</b> value). To retrieve a specific eBay Store Category and that category's child categories, the user could specify the unique eBay Store Category ID in the <b>RootCategoryID</b> field and then set the <b>LevelLimit</b> value to
     * <code>2</code>. <br/><br/> If <b>LevelLimit</b> is omitted, the complete eBay Store Category hierarchy is returned, or all of specified store category's child categories. eBay Stores support only three levels of store categories.
     * - minOccurs: 0
     * @var int
     */
    public $LevelLimit;
    /**
     * The UserID
     * Meta information extracted from the WSDL
     * - documentation: The eBay user ID of the eBay seller that owns the eBay Store to be retrieved. This field is only needed if the user wants to view the eBay Store information owned by a different seller (than the seller associated with the
     * authenticated user token). If this field is omitted, the eBay Store information for the seller associated with the authenticated user token is returned. | This is a string wrapper for the eBay ID that uniquely identifies a user. This is used by
     * several other types to identify a specific eBay user. <br><br>For GetAllBidders, some bidder information is anonymous, to protect bidders from fraud. If the seller makes this API call, the actual IDs of all bidders on the seller's item will be
     * returned. If a bidder makes this API call, the bidder's actual ID will be returned, but information for all competing bidders or outside watchers will be returned as anonymized userIDs.
     * - base: xs:string
     * - minOccurs: 0
     * @var string
     */
    public $UserID;
    /**
     * Constructor method for GetStoreRequestType
     * @uses GetStoreRequestType::setCategoryStructureOnly()
     * @uses GetStoreRequestType::setRootCategoryID()
     * @uses GetStoreRequestType::setLevelLimit()
     * @uses GetStoreRequestType::setUserID()
     * @param bool $categoryStructureOnly
     * @param int $rootCategoryID
     * @param int $levelLimit
     * @param string $userID
     */
    public function __construct($categoryStructureOnly = null, $rootCategoryID = null, $levelLimit = null, $userID = null)
    {
        $this
            ->setCategoryStructureOnly($categoryStructureOnly)
            ->setRootCategoryID($rootCategoryID)
            ->setLevelLimit($levelLimit)
            ->setUserID($userID);
    }
    /**
     * Get CategoryStructureOnly value
     * @return bool|null
     */
    public function getCategoryStructureOnly()
    {
        return $this->CategoryStructureOnly;
    }
    /**
     * Set CategoryStructureOnly value
     * @param bool $categoryStructureOnly
     * @return \StructType\GetStoreRequestType
     */
    public function setCategoryStructureOnly($categoryStructureOnly = null)
    {
        // validation for constraint: boolean
        if (!is_null($categoryStructureOnly) && !is_bool($categoryStructureOnly)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($categoryStructureOnly, true), gettype($categoryStructureOnly)), __LINE__);
        }
        $this->CategoryStructureOnly = $categoryStructureOnly;
        return $this;
    }
    /**
     * Get RootCategoryID value
     * @return int|null
     */
    public function getRootCategoryID()
    {
        return $this->RootCategoryID;
    }
    /**
     * Set RootCategoryID value
     * @param int $rootCategoryID
     * @return \StructType\GetStoreRequestType
     */
    public function setRootCategoryID($rootCategoryID = null)
    {
        // validation for constraint: int
        if (!is_null($rootCategoryID) && !(is_int($rootCategoryID) || ctype_digit($rootCategoryID))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($rootCategoryID, true), gettype($rootCategoryID)), __LINE__);
        }
        $this->RootCategoryID = $rootCategoryID;
        return $this;
    }
    /**
     * Get LevelLimit value
     * @return int|null
     */
    public function getLevelLimit()
    {
        return $this->LevelLimit;
    }
    /**
     * Set LevelLimit value
     * @param int $levelLimit
     * @return \StructType\GetStoreRequestType
     */
    public function setLevelLimit($levelLimit = null)
    {
        // validation for constraint: int
        if (!is_null($levelLimit) && !(is_int($levelLimit) || ctype_digit($levelLimit))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($levelLimit, true), gettype($levelLimit)), __LINE__);
        }
        $this->LevelLimit = $levelLimit;
        return $this;
    }
    /**
     * Get UserID value
     * @return string|null
     */
    public function getUserID()
    {
        return $this->UserID;
    }
    /**
     * Set UserID value
     * @param string $userID
     * @return \StructType\GetStoreRequestType
     */
    public function setUserID($userID = null)
    {
        // validation for constraint: string
        if (!is_null($userID) && !is_string($userID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($userID, true), gettype($userID)), __LINE__);
        }
        $this->UserID = $userID;
        return $this;
    }
}
