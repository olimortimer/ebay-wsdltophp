<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ItemBidDetailsType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is used by the <b>ItemBidDetails</b> container that is returned in <b>GetAllBidders</b>. The <b>ItemBidDetails</b> container shows a few details about a user's bid on an auction listing. An <b>ItemBidDetails</b> container
 * is returned for each bid that a user makes during the life of an auction listing. An <b>ItemBidDetails</b> container will only be returned to the seller of the auction listing or to an actual bidder for the listing.
 * @subpackage Structs
 */
class ItemBidDetailsType extends AbstractStructBase
{
    /**
     * The ItemID
     * Meta information extracted from the WSDL
     * - documentation: The unique identifier of an item listed on the eBay site. <br><br> Since a bidder's user information is anonymous, this tag will contain the real ID value only for that bidder, and the seller of an item that the user is bidding on.
     * For all other users, the real ID value will be replaced with the anonymous value, according to these rules: <br><br> When bidding on items listed on the US site: UserID is replaced with the value "a****b" where a and b are random characters from the
     * UserID. For example, if the UserID = IBidALot, it might be displayed as, "I****A". <br> Note that in this format, the anonymous bidder ID stays the same for every auction. <br><br> (<b>GetMyeBayBuying</b> only) when bidding on items listed on the US
     * site: UserID is replaced with the value "a****b" where a and b are random characters from the UserID. <br><br> When bidding on items listed on the UK and AU sites: UserID is replaced with the value "Bidder X" where X is a number indicating the order
     * of that user's first bid. For example, if the user was the third bidder, UserID = Bidder 3. <br> Note that in this format, the anonymous bidder ID stays the same for a given auction, but is different for different auctions. For example, a bidder who
     * is the third and then the seventh bidder in an auction will be listed for both bids as "Bidder 3". However, if that same bidder is the first bidder on a different auction, the bidder will be listed for that auction as "Bidder 1", not "Bidder 3".
     * <br><br> (<b>GetMyeBayBuying</b> only) when bidding on items listed on the UK and AU sites: UserID is replaced with the string "High Bidder". <br><br> (<b>GetBestOffers</b> only) - all sites: The last part of the user ID is replaced with asterisks
     * for users that submit best offers on an item. The seller of the item will be able to see the full User ID. | Type that represents the unique identifier for an eBay listing.
     * - base: xs:string
     * - minOccurs: 0
     * @var string
     */
    public $ItemID;
    /**
     * The CategoryID
     * Meta information extracted from the WSDL
     * - documentation: Unique identifier of the eBay category that the auction item is listed under.
     * - minOccurs: 0
     * @var string
     */
    public $CategoryID;
    /**
     * The BidCount
     * Meta information extracted from the WSDL
     * - documentation: The total number of bids that the user has placed on the auction item.
     * - minOccurs: 0
     * @var int
     */
    public $BidCount;
    /**
     * The SellerID
     * Meta information extracted from the WSDL
     * - documentation: The eBay ID of the seller who listed the item. <br><br> This will be returned with the anonymous value "Seller X", where X indicates where the seller falls in the sequence of sellers that the user has purchased items from. For
     * example, if the seller is the third seller that the user has purchased items from, the value "Seller 3" is returned. | This is a string wrapper for the eBay ID that uniquely identifies a user. This is used by several other types to identify a
     * specific eBay user. <br><br>For GetAllBidders, some bidder information is anonymous, to protect bidders from fraud. If the seller makes this API call, the actual IDs of all bidders on the seller's item will be returned. If a bidder makes this API
     * call, the bidder's actual ID will be returned, but information for all competing bidders or outside watchers will be returned as anonymized userIDs.
     * - base: xs:string
     * - minOccurs: 0
     * @var string
     */
    public $SellerID;
    /**
     * The LastBidTime
     * Meta information extracted from the WSDL
     * - documentation: This timestamp indicates the date/time at which the user placed the last bid on the auction item.
     * - minOccurs: 0
     * @var string
     */
    public $LastBidTime;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for ItemBidDetailsType
     * @uses ItemBidDetailsType::setItemID()
     * @uses ItemBidDetailsType::setCategoryID()
     * @uses ItemBidDetailsType::setBidCount()
     * @uses ItemBidDetailsType::setSellerID()
     * @uses ItemBidDetailsType::setLastBidTime()
     * @uses ItemBidDetailsType::setAny()
     * @param string $itemID
     * @param string $categoryID
     * @param int $bidCount
     * @param string $sellerID
     * @param string $lastBidTime
     * @param \DOMDocument $any
     */
    public function __construct($itemID = null, $categoryID = null, $bidCount = null, $sellerID = null, $lastBidTime = null, \DOMDocument $any = null)
    {
        $this
            ->setItemID($itemID)
            ->setCategoryID($categoryID)
            ->setBidCount($bidCount)
            ->setSellerID($sellerID)
            ->setLastBidTime($lastBidTime)
            ->setAny($any);
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
     * @return \StructType\ItemBidDetailsType
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
     * @return \StructType\ItemBidDetailsType
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
     * Get BidCount value
     * @return int|null
     */
    public function getBidCount()
    {
        return $this->BidCount;
    }
    /**
     * Set BidCount value
     * @param int $bidCount
     * @return \StructType\ItemBidDetailsType
     */
    public function setBidCount($bidCount = null)
    {
        // validation for constraint: int
        if (!is_null($bidCount) && !(is_int($bidCount) || ctype_digit($bidCount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($bidCount, true), gettype($bidCount)), __LINE__);
        }
        $this->BidCount = $bidCount;
        return $this;
    }
    /**
     * Get SellerID value
     * @return string|null
     */
    public function getSellerID()
    {
        return $this->SellerID;
    }
    /**
     * Set SellerID value
     * @param string $sellerID
     * @return \StructType\ItemBidDetailsType
     */
    public function setSellerID($sellerID = null)
    {
        // validation for constraint: string
        if (!is_null($sellerID) && !is_string($sellerID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sellerID, true), gettype($sellerID)), __LINE__);
        }
        $this->SellerID = $sellerID;
        return $this;
    }
    /**
     * Get LastBidTime value
     * @return string|null
     */
    public function getLastBidTime()
    {
        return $this->LastBidTime;
    }
    /**
     * Set LastBidTime value
     * @param string $lastBidTime
     * @return \StructType\ItemBidDetailsType
     */
    public function setLastBidTime($lastBidTime = null)
    {
        // validation for constraint: string
        if (!is_null($lastBidTime) && !is_string($lastBidTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastBidTime, true), gettype($lastBidTime)), __LINE__);
        }
        $this->LastBidTime = $lastBidTime;
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
     * @return \StructType\ItemBidDetailsType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
