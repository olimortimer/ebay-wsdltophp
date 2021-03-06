<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetItemShippingRequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: This is the base request type of the <b>GetItemShipping</b> call. This call takes an <b>ItemID</b> value for an item that has yet to be shipped, and then returns estimated shipping costs for every shipping service that the seller has
 * offered with the listing. This call will also return <b>PickUpInStoreDetails.EligibleForPickupDropOff</b> and <b>PickUpInStoreDetails.EligibleForPickupInStore</b> flags if the item is available for buyer pick-up through the In-Store Pickup or Click
 * and Collect features.
 * @subpackage Structs
 */
class GetItemShippingRequestType extends AbstractRequestType
{
    /**
     * The ItemID
     * Meta information extracted from the WSDL
     * - documentation: The unique identifier of the eBay listing for which to retrieve estimated shipping costs for all offered shipping service options. The <b>ItemID</b> value passed into this field should be for an listing that offers at least one
     * calculated shipping service option, and for an item that has yet to be shipped. | Type that represents the unique identifier for an eBay listing.
     * - base: xs:string
     * - minOccurs: 0
     * @var string
     */
    public $ItemID;
    /**
     * The QuantitySold
     * Meta information extracted from the WSDL
     * - documentation: This field is used to specify the quantity of the item. The <b>QuantitySold</b> value defaults to <code>1</code> if not specified. If a value greater than <code>1</code> is specified in this field, the shipping service costs returned
     * in the response will reflect the expense to ship multiple quantity of an item. <br>
     * - minOccurs: 0
     * @var int
     */
    public $QuantitySold;
    /**
     * The DestinationPostalCode
     * Meta information extracted from the WSDL
     * - documentation: The destination postal code (or zip code for US) is supplied in this field. <b>GetItemShipping</b> requires the destination of the shipment. Some countries will require both the <b>DestinationPostalCode</b> and the
     * lt;b>DestinationCountryCode</b>, and some countries will accept either one or the other.
     * - minOccurs: 0
     * @var string
     */
    public $DestinationPostalCode;
    /**
     * The DestinationCountryCode
     * Meta information extracted from the WSDL
     * - documentation: The destination country code is supplied in this field. <b>GetItemShipping</b> requires the destination of the shipment. Some countries will require both the <b>DestinationPostalCode</b> and the lt;b>DestinationCountryCode</b>, and
     * some countries will accept either one or the other. <br><br> Two-digit country codes can be found in <a href="types/CountryCodeType.html">CountryCodeType</a>. <br>
     * - minOccurs: 0
     * @var string
     */
    public $DestinationCountryCode;
    /**
     * Constructor method for GetItemShippingRequestType
     * @uses GetItemShippingRequestType::setItemID()
     * @uses GetItemShippingRequestType::setQuantitySold()
     * @uses GetItemShippingRequestType::setDestinationPostalCode()
     * @uses GetItemShippingRequestType::setDestinationCountryCode()
     * @param string $itemID
     * @param int $quantitySold
     * @param string $destinationPostalCode
     * @param string $destinationCountryCode
     */
    public function __construct($itemID = null, $quantitySold = null, $destinationPostalCode = null, $destinationCountryCode = null)
    {
        $this
            ->setItemID($itemID)
            ->setQuantitySold($quantitySold)
            ->setDestinationPostalCode($destinationPostalCode)
            ->setDestinationCountryCode($destinationCountryCode);
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
     * @return \StructType\GetItemShippingRequestType
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
     * @return \StructType\GetItemShippingRequestType
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
     * Get DestinationPostalCode value
     * @return string|null
     */
    public function getDestinationPostalCode()
    {
        return $this->DestinationPostalCode;
    }
    /**
     * Set DestinationPostalCode value
     * @param string $destinationPostalCode
     * @return \StructType\GetItemShippingRequestType
     */
    public function setDestinationPostalCode($destinationPostalCode = null)
    {
        // validation for constraint: string
        if (!is_null($destinationPostalCode) && !is_string($destinationPostalCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($destinationPostalCode, true), gettype($destinationPostalCode)), __LINE__);
        }
        $this->DestinationPostalCode = $destinationPostalCode;
        return $this;
    }
    /**
     * Get DestinationCountryCode value
     * @return string|null
     */
    public function getDestinationCountryCode()
    {
        return $this->DestinationCountryCode;
    }
    /**
     * Set DestinationCountryCode value
     * @uses \EnumType\CountryCodeType::valueIsValid()
     * @uses \EnumType\CountryCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $destinationCountryCode
     * @return \StructType\GetItemShippingRequestType
     */
    public function setDestinationCountryCode($destinationCountryCode = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\CountryCodeType::valueIsValid($destinationCountryCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\CountryCodeType', is_array($destinationCountryCode) ? implode(', ', $destinationCountryCode) : var_export($destinationCountryCode, true), implode(', ', \EnumType\CountryCodeType::getValidValues())), __LINE__);
        }
        $this->DestinationCountryCode = $destinationCountryCode;
        return $this;
    }
}
