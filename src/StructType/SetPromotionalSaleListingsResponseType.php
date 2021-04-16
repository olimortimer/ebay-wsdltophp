<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetPromotionalSaleListingsResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: <span class="tablenote"><b>Note: </b> The <b>SetPromotionalSaleListings</b> call is being deprecated. No new features and/or fields will be added to <b>SetPromotionalSaleListings</b>, and it will no longer be supported after May 17,
 * 2021. eBay recommends that sellers use the Marketing API, which provides all Promotions Manager and Promoted Listings capabilities. The Marketing API will continue to be improved and enhanced as more marketing features become available to sellers.
 * </span> The base response of the <b>SetPromotionalSaleListings</b> call. Contains the status of a promotional sale.
 * @subpackage Structs
 */
class SetPromotionalSaleListingsResponseType extends AbstractResponseType
{
    /**
     * The Status
     * Meta information extracted from the WSDL
     * - documentation: The enumeration value in this field indicates the status of the promotional sale action (add or delete). See <b>PromotionalSaleStatusCodeType</b> for more information on status values.
     * - minOccurs: 0
     * @var string
     */
    public $Status;
    /**
     * Constructor method for SetPromotionalSaleListingsResponseType
     * @uses SetPromotionalSaleListingsResponseType::setStatus()
     * @param string $status
     */
    public function __construct($status = null)
    {
        $this
            ->setStatus($status);
    }
    /**
     * Get Status value
     * @return string|null
     */
    public function getStatus()
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @uses \EnumType\PromotionalSaleStatusCodeType::valueIsValid()
     * @uses \EnumType\PromotionalSaleStatusCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $status
     * @return \StructType\SetPromotionalSaleListingsResponseType
     */
    public function setStatus($status = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\PromotionalSaleStatusCodeType::valueIsValid($status)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\PromotionalSaleStatusCodeType', is_array($status) ? implode(', ', $status) : var_export($status, true), implode(', ', \EnumType\PromotionalSaleStatusCodeType::getValidValues())), __LINE__);
        }
        $this->Status = $status;
        return $this;
    }
}
