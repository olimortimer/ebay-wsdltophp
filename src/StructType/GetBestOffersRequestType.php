<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetBestOffersRequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: This is the base request type of the <b>GetBestOffers</b> call. Depending on the input parameters that are used, this call can be used by a seller to retrieve all active Best Offers, all Best Offers on a specific listing, a specific
 * Best Offer for a specific listing, or Best Offers in a specific state. <br/><br/> <span class="tablenote"><b>Note: </b> The Best Offer feature is now available for auction listings on the following sites: US, Canada, UK, Germany, Australia, France,
 * Italy, and Spain. However, sellers must choose between offering Best Offer or Buy It Now on an auction listing, as both features cannot be enabled on the same auction listing. </span>
 * @subpackage Structs
 */
class GetBestOffersRequestType extends AbstractRequestType
{
    /**
     * The ItemID
     * Meta information extracted from the WSDL
     * - documentation: The unique identifier of an eBay listing. If an <b>ItemID</b> is used by itself in the call request, all Best Offers in all states are retrieved for this listing. However, the seller can also combine <b>ItemID</b> and a
     * <b>BestOfferStatus</b> value if that seller only wants to see Best Offers in a specific state. If a <b>BestOfferID</b> field is included in the call request, any <b>ItemID</b> value will be ignored since eBay will only search for and return the Best
     * Offer identified in the <b>BestOfferID</b> field. | Type that represents the unique identifier for an eBay listing.
     * - base: xs:string
     * - minOccurs: 0
     * @var string
     */
    public $ItemID;
    /**
     * The BestOfferID
     * Meta information extracted from the WSDL
     * - documentation: The unique identifier of a Best Offer. An identifier for a Best Offer is automatically created by eBay once a prospective buyer makes a Best Offer on a Best Offer-enabled listing. If a <b>BestOfferID</b> value is supplied in the call
     * request, any <b>ItemID</b> or <b>BestOfferStatus</b> values will be ignored. Only the Best Offer identified by the <b>BestOfferID</b> value will be returned. | Unique identifier for a Best Offer. This identifier is created once a prospective buyer
     * makes a Best Offer on an item.
     * - base: xs:string
     * - minOccurs: 0
     * @var string
     */
    public $BestOfferID;
    /**
     * The BestOfferStatus
     * Meta information extracted from the WSDL
     * - documentation: This field can be used if the seller wants to retrieve Best Offers in a specific state. The typical use case for this field is when the seller wants to retrieve Best Offers in all states for a specific listing. In fact, the
     * <b>All</b> value can only be used if an <b>ItemID</b> value is also supplied in the call request. If a <b>BestOfferID</b> field is included in the call request, any <b>BestOfferStatus</b> value will be ignored since eBay will only search for and
     * return the Best Offer identified in the <b>BestOfferID</b> field. <br/>
     * - minOccurs: 0
     * @var string
     */
    public $BestOfferStatus;
    /**
     * The Pagination
     * Meta information extracted from the WSDL
     * - documentation: This container can be used if the seller is expecting that the <b>GetBestOffers</b> call will retrieve a large number of results, so that seller wishes to view just a subset (one page of multiple pages) of those results at a time.
     * See this container's child fields for more information on how pagination is used.
     * - minOccurs: 0
     * @var \StructType\PaginationType
     */
    public $Pagination;
    /**
     * Constructor method for GetBestOffersRequestType
     * @uses GetBestOffersRequestType::setItemID()
     * @uses GetBestOffersRequestType::setBestOfferID()
     * @uses GetBestOffersRequestType::setBestOfferStatus()
     * @uses GetBestOffersRequestType::setPagination()
     * @param string $itemID
     * @param string $bestOfferID
     * @param string $bestOfferStatus
     * @param \StructType\PaginationType $pagination
     */
    public function __construct($itemID = null, $bestOfferID = null, $bestOfferStatus = null, \StructType\PaginationType $pagination = null)
    {
        $this
            ->setItemID($itemID)
            ->setBestOfferID($bestOfferID)
            ->setBestOfferStatus($bestOfferStatus)
            ->setPagination($pagination);
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
     * @return \StructType\GetBestOffersRequestType
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
     * Get BestOfferID value
     * @return string|null
     */
    public function getBestOfferID()
    {
        return $this->BestOfferID;
    }
    /**
     * Set BestOfferID value
     * @param string $bestOfferID
     * @return \StructType\GetBestOffersRequestType
     */
    public function setBestOfferID($bestOfferID = null)
    {
        // validation for constraint: string
        if (!is_null($bestOfferID) && !is_string($bestOfferID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bestOfferID, true), gettype($bestOfferID)), __LINE__);
        }
        $this->BestOfferID = $bestOfferID;
        return $this;
    }
    /**
     * Get BestOfferStatus value
     * @return string|null
     */
    public function getBestOfferStatus()
    {
        return $this->BestOfferStatus;
    }
    /**
     * Set BestOfferStatus value
     * @uses \EnumType\BestOfferStatusCodeType::valueIsValid()
     * @uses \EnumType\BestOfferStatusCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $bestOfferStatus
     * @return \StructType\GetBestOffersRequestType
     */
    public function setBestOfferStatus($bestOfferStatus = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\BestOfferStatusCodeType::valueIsValid($bestOfferStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\BestOfferStatusCodeType', is_array($bestOfferStatus) ? implode(', ', $bestOfferStatus) : var_export($bestOfferStatus, true), implode(', ', \EnumType\BestOfferStatusCodeType::getValidValues())), __LINE__);
        }
        $this->BestOfferStatus = $bestOfferStatus;
        return $this;
    }
    /**
     * Get Pagination value
     * @return \StructType\PaginationType|null
     */
    public function getPagination()
    {
        return $this->Pagination;
    }
    /**
     * Set Pagination value
     * @param \StructType\PaginationType $pagination
     * @return \StructType\GetBestOffersRequestType
     */
    public function setPagination(\StructType\PaginationType $pagination = null)
    {
        $this->Pagination = $pagination;
        return $this;
    }
}
