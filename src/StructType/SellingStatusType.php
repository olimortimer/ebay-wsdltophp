<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SellingStatusType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains various details about the current status of a listing. These values are computed by eBay and cannot be specified at listing time.
 * @subpackage Structs
 */
class SellingStatusType extends AbstractStructBase
{
    /**
     * The BidCount
     * Meta information extracted from the WSDL
     * - documentation: Number of bids placed so far against the auction item.
     * - minOccurs: 0
     * @var int
     */
    public $BidCount;
    /**
     * The BidIncrement
     * Meta information extracted from the WSDL
     * - documentation: The minimum amount a progressive bid must be above the current high bid to be accepted. This field is only applicable to auction listings. The value of this field will always be '0.00' for Classified Ad and fixed-price listings.
     * - minOccurs: 0
     * @var \StructType\AmountType
     */
    public $BidIncrement;
    /**
     * The ConvertedCurrentPrice
     * Meta information extracted from the WSDL
     * - documentation: Converted value of the <b>CurrentPrice</b> in the currency of the site that returned this response. For active items, refresh the listing's data every 24 hours to pick up the current conversion rates. Only returned when the item's
     * <b>CurrentPrice</b> on the listing site is in different currency than the currency of the host site for the user/application making the API call. <b>ConvertedCurrentPrice</b> is not returned for Classified listings (Classified listings are not
     * available on all sites).<br> <br> In multi-variation listings, this value matches the lowest-priced variation that is still available for sale.
     * - minOccurs: 0
     * @var \StructType\AmountType
     */
    public $ConvertedCurrentPrice;
    /**
     * The CurrentPrice
     * Meta information extracted from the WSDL
     * - documentation: The current price of the item in the original listing currency. <br><br> For auction listings, this price is the starting minimum price (if the listing has no bids) or the current highest bid (if bids have been placed) for the item.
     * This does not reflect the <b>BuyItNow</b> price. <br><br> For fixed-price and ad format listings, this is the current listing price. <br><br> In multi-variation, fixed-price listings, this value matches the lowest-priced variation that is still
     * available for sale.
     * - minOccurs: 0
     * @var \StructType\AmountType
     */
    public $CurrentPrice;
    /**
     * The HighBidder
     * Meta information extracted from the WSDL
     * - documentation: For ended auction listings that have a winning bidder, this field is a container for the high bidder's user ID. For ended, single-item, fixed-price listings, this field is a container for the user ID of the purchaser. This field
     * isn't returned for auctions with no bids, or for active fixed-price listings. <br/><br/> In the case of <b>PlaceOffer</b>, for auction listings, this field is a container for the high bidder's user ID. In the <b>PlaceOffer</b> response, the following
     * applies: For multiple-quantity, fixed-price listings, the high bidder is only returned if there is just one order line item (or only for the first order line item that is created).
     * - minOccurs: 0
     * @var \StructType\UserType
     */
    public $HighBidder;
    /**
     * The LeadCount
     * Meta information extracted from the WSDL
     * - documentation: Applicable to Ad type listings only. Indicates how many leads to potential buyers are associated with this item. Returns 0 (zero) for listings in other formats. You must be the seller of the item to retrieve the lead count.
     * - minOccurs: 0
     * @var int
     */
    public $LeadCount;
    /**
     * The MinimumToBid
     * Meta information extracted from the WSDL
     * - documentation: Smallest amount the next bid on the item can be. Returns same value as <b>Item.StartPrice</b> (if no bids have yet been placed) or <b>CurrentPrice</b> plus <b>BidIncrement</b> (if at least one bid has been placed). Only applicable to
     * auction listings. Returns null for fixed-price and Ad type listings. <br><br> In multi-variation listings, this value matches the lowest-priced variation that is still available for sale.
     * - minOccurs: 0
     * @var \StructType\AmountType
     */
    public $MinimumToBid;
    /**
     * The QuantitySold
     * Meta information extracted from the WSDL
     * - documentation: The total number of items purchased so far (in the listing's lifetime). Subtract this from <b>Quantity</b> to determine the quantity available. <br><br> If the listing has Item Variations, then in <b>GetItem</b> (and related calls)
     * and <b>GetItemTransactions</b>, <b>Item.SellingStatus.QuantitySold</b> contains the sum of all quantities sold across all variations in the listing, and <b>Variation.SellingStatus.QuantitySold</b> contains the number of items sold for that variation.
     * <br/><br/> In <b>GetSellerTransactions</b>, <b>Transaction.Item.SellingStatus.QuantitySold</b> contains the number of items sold in that order line item.<br> <br> For order line item calls, also see <b>Transaction.QuantityPurchased</b> for the number
     * of items purchased in the order line item.<br> In multi-variation listings, this value matches total quantity sold across all variations.
     * - minOccurs: 0
     * @var int
     */
    public $QuantitySold;
    /**
     * The ReserveMet
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether the reserve price has been met for the listing. Returns true if the reserve price was met or no reserve price was specified.
     * - minOccurs: 0
     * @var bool
     */
    public $ReserveMet;
    /**
     * The SecondChanceEligible
     * Meta information extracted from the WSDL
     * - documentation: Part of the Second Chance Offer feature, indicates whether the seller can extend a second chance offer for the item.
     * - minOccurs: 0
     * @var bool
     */
    public $SecondChanceEligible;
    /**
     * The BidderCount
     * Meta information extracted from the WSDL
     * - documentation: Number of bidders for an item. Only applicable to auction listings. Only returned for the seller of the item.
     * - minOccurs: 0
     * @var int
     */
    public $BidderCount;
    /**
     * The ListingStatus
     * Meta information extracted from the WSDL
     * - documentation: Specifies an active or ended listing's status in eBay's processing workflow. <b></b> <ul> <li>If a listing ends with a sale (or sales), eBay needs to update the sale details (e.g., total price and buyer/high bidder) and the final
     * value fee. This processing can take several minutes.</li> <li>If you retrieve a sold item and no details about the buyer/high bidder are returned or no final value fee is available, use this listing status information to determine whether eBay has
     * finished processing the listing.</li> </ul>
     * - minOccurs: 0
     * @var string
     */
    public $ListingStatus;
    /**
     * The FinalValueFee
     * Meta information extracted from the WSDL
     * - documentation: A seller is changed a Final Value Fee (FVF) when the item is sold, ends with a winning bid, or is purchased. This fee applies whether or not the sale is completed with the buyer and is generated before the buyer makes a payment.
     * <br/><br/> The FVF is calculated using a percentage. This percentage is based on whether the seller has a Store subscription or not. If a seller does have a Store subscription, the FVF is calculated based on the level of that plan. For complete
     * information about selling fees and eBay Store subscription plans, see the <a href="http://www.feectr.ebay.com/feecenter/home">Fee Center Home Page</a>. <br/><br/> The Final Value Fee for each order line item is returned by
     * <b>GetSellerTransactions</b>, <b>GetItemTransactions</b>, <b>GetOrders</b>, and <b>GetOrderTransactions</b>, regardless of the checkout status. <br><br> If a seller requests a Final Value Fee credit, the value of <b>Transaction.FinalValueFee</b> will
     * not change if a credit is issued. The credit only appears in the seller's account data. <br> <br> See the <a href="https://www.ebay.com/help/selling/fees-credits-invoices/selling-fees?id=4822" target="_blank">Selling fees</a> help page for more
     * information about how Final Value Fees are calculated.
     * - minOccurs: 0
     * @var \StructType\AmountType
     */
    public $FinalValueFee;
    /**
     * The PromotionalSaleDetails
     * Meta information extracted from the WSDL
     * - documentation: If a seller has reduced the price of a listed item with the Promotional Price Display feature, this field contains the original price of the discounted item, along with the start-time and end-time of the discount.
     * - minOccurs: 0
     * @var \StructType\PromotionalSaleDetailsType
     */
    public $PromotionalSaleDetails;
    /**
     * The AdminEnded
     * Meta information extracted from the WSDL
     * - documentation: If included in the response as <code>true</code>, indicates that the listing was administratively canceled due to a violation of eBay's listing policies and that the item can be relisted using <b>RelistItem</b>. <br/><br/> <span
     * class="tablenote"><b>Note: </b> <b>GetItem</b> returns an error (invalid item ID) in the response if <b>Item.SellingStatus.AdminEnded</b> = <code>true</code> and the requesting user is not the seller of the item. </span>
     * - minOccurs: 0
     * @var bool
     */
    public $AdminEnded;
    /**
     * The SoldAsBin
     * Meta information extracted from the WSDL
     * - documentation: If this flag appears in the <b>GetItem</b> response, the auction has ended due to the item being sold to a seller using the <b>Buy It Now</b> option. This flag is not relevant for fixed-priced listings.
     * - minOccurs: 0
     * @var bool
     */
    public $SoldAsBin;
    /**
     * The QuantitySoldByPickupInStore
     * Meta information extracted from the WSDL
     * - documentation: Indicates the total quantity of items sold and picked up by buyers using the In-Store Pickup option. This value is the total number of items purchased by one or more buyers using the In-Store Pickup option, and is not the total
     * number of In-Store Pickup orders. So, if two buyers selected the In-Store Pickup option, but each of these buyers bought a quantity of five of these items (in same purchase), the <b>Item.SellingStatus.QuantitySoldByPickupInStore</b> value would be
     * '10' and not '2'. <br> <br> In the case of multi-variation, fixed-price listings, each <b>Item.Variations.Variation.SellingStatus.QuantitySoldByPickupInStore</b> value indicates the total quantity of that corresponding item variation (for example,
     * large blue shirts) sold and picked up by buyers using the In-Store Pickup option, and the <b>Item.SellingStatus.QuantitySoldByPickupInStore</b> value would be the total quantity of all item variations sold for the listing. <br> <br> This field is
     * returned only if the listing is eligible for In-Store Pickup (<b>EligibleForPickupInStore</b> is returned as <code>true</code>). <br/><br/> <span class="tablenote"> <strong>Note:</strong> At this time, the In-Store Pickup feature is generally only
     * available to large retail merchants, and can only be applied to multi-quantity, fixed-price listings. </span>
     * - minOccurs: 0
     * @var int
     */
    public $QuantitySoldByPickupInStore;
    /**
     * The SuggestedBidValues
     * Meta information extracted from the WSDL
     * - documentation: This container is only returned if the buyer is attempting to bid on an auction item. To bid on an auction item, the buyer sets the value of the <b>Offer.Action</b> field to <code>Bid</code>, and sets the maximum bid amount in the
     * <b>Offer.MaxBid</b> field. <br><br> The <b>SuggestedBidValues</b> container consists of an array of incremental bid values (up to the dollar value in the <b>Offer.MaxBid</b> field) that eBay will bid on behalf of the buyer each time that buyer is
     * outbid for the auction item.
     * - minOccurs: 0
     * @var \StructType\SuggestedBidValueType
     */
    public $SuggestedBidValues;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for SellingStatusType
     * @uses SellingStatusType::setBidCount()
     * @uses SellingStatusType::setBidIncrement()
     * @uses SellingStatusType::setConvertedCurrentPrice()
     * @uses SellingStatusType::setCurrentPrice()
     * @uses SellingStatusType::setHighBidder()
     * @uses SellingStatusType::setLeadCount()
     * @uses SellingStatusType::setMinimumToBid()
     * @uses SellingStatusType::setQuantitySold()
     * @uses SellingStatusType::setReserveMet()
     * @uses SellingStatusType::setSecondChanceEligible()
     * @uses SellingStatusType::setBidderCount()
     * @uses SellingStatusType::setListingStatus()
     * @uses SellingStatusType::setFinalValueFee()
     * @uses SellingStatusType::setPromotionalSaleDetails()
     * @uses SellingStatusType::setAdminEnded()
     * @uses SellingStatusType::setSoldAsBin()
     * @uses SellingStatusType::setQuantitySoldByPickupInStore()
     * @uses SellingStatusType::setSuggestedBidValues()
     * @uses SellingStatusType::setAny()
     * @param int $bidCount
     * @param \StructType\AmountType $bidIncrement
     * @param \StructType\AmountType $convertedCurrentPrice
     * @param \StructType\AmountType $currentPrice
     * @param \StructType\UserType $highBidder
     * @param int $leadCount
     * @param \StructType\AmountType $minimumToBid
     * @param int $quantitySold
     * @param bool $reserveMet
     * @param bool $secondChanceEligible
     * @param int $bidderCount
     * @param string $listingStatus
     * @param \StructType\AmountType $finalValueFee
     * @param \StructType\PromotionalSaleDetailsType $promotionalSaleDetails
     * @param bool $adminEnded
     * @param bool $soldAsBin
     * @param int $quantitySoldByPickupInStore
     * @param \StructType\SuggestedBidValueType $suggestedBidValues
     * @param \DOMDocument $any
     */
    public function __construct($bidCount = null, \StructType\AmountType $bidIncrement = null, \StructType\AmountType $convertedCurrentPrice = null, \StructType\AmountType $currentPrice = null, \StructType\UserType $highBidder = null, $leadCount = null, \StructType\AmountType $minimumToBid = null, $quantitySold = null, $reserveMet = null, $secondChanceEligible = null, $bidderCount = null, $listingStatus = null, \StructType\AmountType $finalValueFee = null, \StructType\PromotionalSaleDetailsType $promotionalSaleDetails = null, $adminEnded = null, $soldAsBin = null, $quantitySoldByPickupInStore = null, \StructType\SuggestedBidValueType $suggestedBidValues = null, \DOMDocument $any = null)
    {
        $this
            ->setBidCount($bidCount)
            ->setBidIncrement($bidIncrement)
            ->setConvertedCurrentPrice($convertedCurrentPrice)
            ->setCurrentPrice($currentPrice)
            ->setHighBidder($highBidder)
            ->setLeadCount($leadCount)
            ->setMinimumToBid($minimumToBid)
            ->setQuantitySold($quantitySold)
            ->setReserveMet($reserveMet)
            ->setSecondChanceEligible($secondChanceEligible)
            ->setBidderCount($bidderCount)
            ->setListingStatus($listingStatus)
            ->setFinalValueFee($finalValueFee)
            ->setPromotionalSaleDetails($promotionalSaleDetails)
            ->setAdminEnded($adminEnded)
            ->setSoldAsBin($soldAsBin)
            ->setQuantitySoldByPickupInStore($quantitySoldByPickupInStore)
            ->setSuggestedBidValues($suggestedBidValues)
            ->setAny($any);
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
     * @return \StructType\SellingStatusType
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
     * Get BidIncrement value
     * @return \StructType\AmountType|null
     */
    public function getBidIncrement()
    {
        return $this->BidIncrement;
    }
    /**
     * Set BidIncrement value
     * @param \StructType\AmountType $bidIncrement
     * @return \StructType\SellingStatusType
     */
    public function setBidIncrement(\StructType\AmountType $bidIncrement = null)
    {
        $this->BidIncrement = $bidIncrement;
        return $this;
    }
    /**
     * Get ConvertedCurrentPrice value
     * @return \StructType\AmountType|null
     */
    public function getConvertedCurrentPrice()
    {
        return $this->ConvertedCurrentPrice;
    }
    /**
     * Set ConvertedCurrentPrice value
     * @param \StructType\AmountType $convertedCurrentPrice
     * @return \StructType\SellingStatusType
     */
    public function setConvertedCurrentPrice(\StructType\AmountType $convertedCurrentPrice = null)
    {
        $this->ConvertedCurrentPrice = $convertedCurrentPrice;
        return $this;
    }
    /**
     * Get CurrentPrice value
     * @return \StructType\AmountType|null
     */
    public function getCurrentPrice()
    {
        return $this->CurrentPrice;
    }
    /**
     * Set CurrentPrice value
     * @param \StructType\AmountType $currentPrice
     * @return \StructType\SellingStatusType
     */
    public function setCurrentPrice(\StructType\AmountType $currentPrice = null)
    {
        $this->CurrentPrice = $currentPrice;
        return $this;
    }
    /**
     * Get HighBidder value
     * @return \StructType\UserType|null
     */
    public function getHighBidder()
    {
        return $this->HighBidder;
    }
    /**
     * Set HighBidder value
     * @param \StructType\UserType $highBidder
     * @return \StructType\SellingStatusType
     */
    public function setHighBidder(\StructType\UserType $highBidder = null)
    {
        $this->HighBidder = $highBidder;
        return $this;
    }
    /**
     * Get LeadCount value
     * @return int|null
     */
    public function getLeadCount()
    {
        return $this->LeadCount;
    }
    /**
     * Set LeadCount value
     * @param int $leadCount
     * @return \StructType\SellingStatusType
     */
    public function setLeadCount($leadCount = null)
    {
        // validation for constraint: int
        if (!is_null($leadCount) && !(is_int($leadCount) || ctype_digit($leadCount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($leadCount, true), gettype($leadCount)), __LINE__);
        }
        $this->LeadCount = $leadCount;
        return $this;
    }
    /**
     * Get MinimumToBid value
     * @return \StructType\AmountType|null
     */
    public function getMinimumToBid()
    {
        return $this->MinimumToBid;
    }
    /**
     * Set MinimumToBid value
     * @param \StructType\AmountType $minimumToBid
     * @return \StructType\SellingStatusType
     */
    public function setMinimumToBid(\StructType\AmountType $minimumToBid = null)
    {
        $this->MinimumToBid = $minimumToBid;
        return $this;
    }
    /**
     * Get QuantitySold value
     * @return int|null
     */
    public function getQuantitySold()
    {
        return $this->QuantitySold;
    }
    /**
     * Set QuantitySold value
     * @param int $quantitySold
     * @return \StructType\SellingStatusType
     */
    public function setQuantitySold($quantitySold = null)
    {
        // validation for constraint: int
        if (!is_null($quantitySold) && !(is_int($quantitySold) || ctype_digit($quantitySold))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($quantitySold, true), gettype($quantitySold)), __LINE__);
        }
        $this->QuantitySold = $quantitySold;
        return $this;
    }
    /**
     * Get ReserveMet value
     * @return bool|null
     */
    public function getReserveMet()
    {
        return $this->ReserveMet;
    }
    /**
     * Set ReserveMet value
     * @param bool $reserveMet
     * @return \StructType\SellingStatusType
     */
    public function setReserveMet($reserveMet = null)
    {
        // validation for constraint: boolean
        if (!is_null($reserveMet) && !is_bool($reserveMet)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($reserveMet, true), gettype($reserveMet)), __LINE__);
        }
        $this->ReserveMet = $reserveMet;
        return $this;
    }
    /**
     * Get SecondChanceEligible value
     * @return bool|null
     */
    public function getSecondChanceEligible()
    {
        return $this->SecondChanceEligible;
    }
    /**
     * Set SecondChanceEligible value
     * @param bool $secondChanceEligible
     * @return \StructType\SellingStatusType
     */
    public function setSecondChanceEligible($secondChanceEligible = null)
    {
        // validation for constraint: boolean
        if (!is_null($secondChanceEligible) && !is_bool($secondChanceEligible)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($secondChanceEligible, true), gettype($secondChanceEligible)), __LINE__);
        }
        $this->SecondChanceEligible = $secondChanceEligible;
        return $this;
    }
    /**
     * Get BidderCount value
     * @return int|null
     */
    public function getBidderCount()
    {
        return $this->BidderCount;
    }
    /**
     * Set BidderCount value
     * @param int $bidderCount
     * @return \StructType\SellingStatusType
     */
    public function setBidderCount($bidderCount = null)
    {
        // validation for constraint: int
        if (!is_null($bidderCount) && !(is_int($bidderCount) || ctype_digit($bidderCount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($bidderCount, true), gettype($bidderCount)), __LINE__);
        }
        $this->BidderCount = $bidderCount;
        return $this;
    }
    /**
     * Get ListingStatus value
     * @return string|null
     */
    public function getListingStatus()
    {
        return $this->ListingStatus;
    }
    /**
     * Set ListingStatus value
     * @uses \EnumType\ListingStatusCodeType::valueIsValid()
     * @uses \EnumType\ListingStatusCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $listingStatus
     * @return \StructType\SellingStatusType
     */
    public function setListingStatus($listingStatus = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\ListingStatusCodeType::valueIsValid($listingStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\ListingStatusCodeType', is_array($listingStatus) ? implode(', ', $listingStatus) : var_export($listingStatus, true), implode(', ', \EnumType\ListingStatusCodeType::getValidValues())), __LINE__);
        }
        $this->ListingStatus = $listingStatus;
        return $this;
    }
    /**
     * Get FinalValueFee value
     * @return \StructType\AmountType|null
     */
    public function getFinalValueFee()
    {
        return $this->FinalValueFee;
    }
    /**
     * Set FinalValueFee value
     * @param \StructType\AmountType $finalValueFee
     * @return \StructType\SellingStatusType
     */
    public function setFinalValueFee(\StructType\AmountType $finalValueFee = null)
    {
        $this->FinalValueFee = $finalValueFee;
        return $this;
    }
    /**
     * Get PromotionalSaleDetails value
     * @return \StructType\PromotionalSaleDetailsType|null
     */
    public function getPromotionalSaleDetails()
    {
        return $this->PromotionalSaleDetails;
    }
    /**
     * Set PromotionalSaleDetails value
     * @param \StructType\PromotionalSaleDetailsType $promotionalSaleDetails
     * @return \StructType\SellingStatusType
     */
    public function setPromotionalSaleDetails(\StructType\PromotionalSaleDetailsType $promotionalSaleDetails = null)
    {
        $this->PromotionalSaleDetails = $promotionalSaleDetails;
        return $this;
    }
    /**
     * Get AdminEnded value
     * @return bool|null
     */
    public function getAdminEnded()
    {
        return $this->AdminEnded;
    }
    /**
     * Set AdminEnded value
     * @param bool $adminEnded
     * @return \StructType\SellingStatusType
     */
    public function setAdminEnded($adminEnded = null)
    {
        // validation for constraint: boolean
        if (!is_null($adminEnded) && !is_bool($adminEnded)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($adminEnded, true), gettype($adminEnded)), __LINE__);
        }
        $this->AdminEnded = $adminEnded;
        return $this;
    }
    /**
     * Get SoldAsBin value
     * @return bool|null
     */
    public function getSoldAsBin()
    {
        return $this->SoldAsBin;
    }
    /**
     * Set SoldAsBin value
     * @param bool $soldAsBin
     * @return \StructType\SellingStatusType
     */
    public function setSoldAsBin($soldAsBin = null)
    {
        // validation for constraint: boolean
        if (!is_null($soldAsBin) && !is_bool($soldAsBin)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($soldAsBin, true), gettype($soldAsBin)), __LINE__);
        }
        $this->SoldAsBin = $soldAsBin;
        return $this;
    }
    /**
     * Get QuantitySoldByPickupInStore value
     * @return int|null
     */
    public function getQuantitySoldByPickupInStore()
    {
        return $this->QuantitySoldByPickupInStore;
    }
    /**
     * Set QuantitySoldByPickupInStore value
     * @param int $quantitySoldByPickupInStore
     * @return \StructType\SellingStatusType
     */
    public function setQuantitySoldByPickupInStore($quantitySoldByPickupInStore = null)
    {
        // validation for constraint: int
        if (!is_null($quantitySoldByPickupInStore) && !(is_int($quantitySoldByPickupInStore) || ctype_digit($quantitySoldByPickupInStore))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($quantitySoldByPickupInStore, true), gettype($quantitySoldByPickupInStore)), __LINE__);
        }
        $this->QuantitySoldByPickupInStore = $quantitySoldByPickupInStore;
        return $this;
    }
    /**
     * Get SuggestedBidValues value
     * @return \StructType\SuggestedBidValueType|null
     */
    public function getSuggestedBidValues()
    {
        return $this->SuggestedBidValues;
    }
    /**
     * Set SuggestedBidValues value
     * @param \StructType\SuggestedBidValueType $suggestedBidValues
     * @return \StructType\SellingStatusType
     */
    public function setSuggestedBidValues(\StructType\SuggestedBidValueType $suggestedBidValues = null)
    {
        $this->SuggestedBidValues = $suggestedBidValues;
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
     * @return \StructType\SellingStatusType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
