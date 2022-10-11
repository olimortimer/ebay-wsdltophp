<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUserDisputesRequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: The base request type for the <b>GetUserDisputes</b> call. This call is used to retrieve a list of Unpaid Item cases that the user is involved in as a buyer or seller. <br/><br/> <span class="tablenote"><strong>Note:</strong> The
 * <b>GetUserDisputes</b> call now only retrieves Unpaid Item cases, and is no longer used to retrieve Item not Received (INR) disputes created through PayPal, since this is no longer an option for eBay buyers. eBay buyers must create an INR case
 * through eBay's Resolution Center, and this call also does not support eBay Money Back Guarantee cases. <br><br> To respond to an eBay Money Back Guarantee case, the seller should use the <a
 * href="https://developer.ebay.com/Devzone/post-order/index.html" target="_blank">Case Management calls</a> of the <b>Post-Order API</b> or manage/respond to cases manually through the eBay Resolution Center. </span>
 * @subpackage Structs
 */
class GetUserDisputesRequestType extends AbstractRequestType
{
    /**
     * The DisputeFilterType
     * Meta information extracted from the WSDL
     * - documentation: An inclusive filter that isolates the returned disputes to a certain type such as Unpaid Item cases.
     * - minOccurs: 0
     * @var string
     */
    public $DisputeFilterType;
    /**
     * The DisputeSortType
     * Meta information extracted from the WSDL
     * - documentation: One of the values defined in <b>DisputeSortTypeCodeType</b> is used here to control the order of cases that are returned.
     * - minOccurs: 0
     * @var string
     */
    public $DisputeSortType;
    /**
     * The ModTimeFrom
     * Meta information extracted from the WSDL
     * - documentation: A filter that retrieves cases whose <b>DisputeModifiedTime</b> is later than or equal to this value. Specify the time value in GMT. For more precise control of the date range filter, it is a good practice to also specify
     * <b>ModTimeTo</b>. Otherwise, the end of the date range is the present time. Filtering by date range is optional. You can use date range filters in combination with other filters like <b>DisputeFilterType</b> to control the amount of data returned.
     * - minOccurs: 0
     * @var string
     */
    public $ModTimeFrom;
    /**
     * The ModTimeTo
     * Meta information extracted from the WSDL
     * - documentation: A filter that retrieves cases whose <b>DisputeModifiedTime</b> is earlier than or equal to this value. Specify the time value in GMT. For more precise control of the date range filter, it is a good practice to also specify
     * <b>ModTimeFrom</b>. Otherwise, all available cases modified prior to the <b>ModTimeTo</b> value are returned. Filtering by date range is optional. You can use date range filters in combination with other filters like <b>DisputeFilterType</b> to
     * control the amount of data returned.
     * - minOccurs: 0
     * @var string
     */
    public $ModTimeTo;
    /**
     * The Pagination
     * Meta information extracted from the WSDL
     * - documentation: This container is used to set the number of records to retrieve per page of data and also what page of data you want to view. If there are multiple pages of data in the result set, the user would have to make subsequent calls while
     * upticking the <b>PageNumber</b> by 1 each time to view additional pages. <br/><br/> <span class="tablenote"><strong>Note:</strong> <b>PaginationType</b> is a type used by multiple Trading API calls, and the minimum, maximum, and default values for
     * <b>EntriesPerPage</b> can vary depending on the call. For <b>GetUserDisputes</b>, the <b>EntriesPerPage</b> value will always default to <code>200</code>, regardless of the value that is input by the user. For <b>PageNumber</b>, some Trading API
     * calls use <code>0</code> for the first page of data in the result set, and some calls use <code>1</code> for the first page of data in the result set. For <b>GetUserDisputes</b>, <code>0</code> is used for the first page and it will default to
     * <code>0</code> if the <b>PageNumber</b> is not included. <br/><br/> Technically, you can run a <b>GetUserDisputes</b> call without using the <b>Pagination</b> container at all (and default values will be used), but a warning message will be triggered
     * if you don't use this container. </span>
     * - minOccurs: 0
     * @var \StructType\PaginationType
     */
    public $Pagination;
    /**
     * Constructor method for GetUserDisputesRequestType
     * @uses GetUserDisputesRequestType::setDisputeFilterType()
     * @uses GetUserDisputesRequestType::setDisputeSortType()
     * @uses GetUserDisputesRequestType::setModTimeFrom()
     * @uses GetUserDisputesRequestType::setModTimeTo()
     * @uses GetUserDisputesRequestType::setPagination()
     * @param string $disputeFilterType
     * @param string $disputeSortType
     * @param string $modTimeFrom
     * @param string $modTimeTo
     * @param \StructType\PaginationType $pagination
     */
    public function __construct($disputeFilterType = null, $disputeSortType = null, $modTimeFrom = null, $modTimeTo = null, \StructType\PaginationType $pagination = null)
    {
        $this
            ->setDisputeFilterType($disputeFilterType)
            ->setDisputeSortType($disputeSortType)
            ->setModTimeFrom($modTimeFrom)
            ->setModTimeTo($modTimeTo)
            ->setPagination($pagination);
    }
    /**
     * Get DisputeFilterType value
     * @return string|null
     */
    public function getDisputeFilterType()
    {
        return $this->DisputeFilterType;
    }
    /**
     * Set DisputeFilterType value
     * @uses \EnumType\DisputeFilterTypeCodeType::valueIsValid()
     * @uses \EnumType\DisputeFilterTypeCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $disputeFilterType
     * @return \StructType\GetUserDisputesRequestType
     */
    public function setDisputeFilterType($disputeFilterType = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\DisputeFilterTypeCodeType::valueIsValid($disputeFilterType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\DisputeFilterTypeCodeType', is_array($disputeFilterType) ? implode(', ', $disputeFilterType) : var_export($disputeFilterType, true), implode(', ', \EnumType\DisputeFilterTypeCodeType::getValidValues())), __LINE__);
        }
        $this->DisputeFilterType = $disputeFilterType;
        return $this;
    }
    /**
     * Get DisputeSortType value
     * @return string|null
     */
    public function getDisputeSortType()
    {
        return $this->DisputeSortType;
    }
    /**
     * Set DisputeSortType value
     * @uses \EnumType\DisputeSortTypeCodeType::valueIsValid()
     * @uses \EnumType\DisputeSortTypeCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $disputeSortType
     * @return \StructType\GetUserDisputesRequestType
     */
    public function setDisputeSortType($disputeSortType = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\DisputeSortTypeCodeType::valueIsValid($disputeSortType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\DisputeSortTypeCodeType', is_array($disputeSortType) ? implode(', ', $disputeSortType) : var_export($disputeSortType, true), implode(', ', \EnumType\DisputeSortTypeCodeType::getValidValues())), __LINE__);
        }
        $this->DisputeSortType = $disputeSortType;
        return $this;
    }
    /**
     * Get ModTimeFrom value
     * @return string|null
     */
    public function getModTimeFrom()
    {
        return $this->ModTimeFrom;
    }
    /**
     * Set ModTimeFrom value
     * @param string $modTimeFrom
     * @return \StructType\GetUserDisputesRequestType
     */
    public function setModTimeFrom($modTimeFrom = null)
    {
        // validation for constraint: string
        if (!is_null($modTimeFrom) && !is_string($modTimeFrom)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($modTimeFrom, true), gettype($modTimeFrom)), __LINE__);
        }
        $this->ModTimeFrom = $modTimeFrom;
        return $this;
    }
    /**
     * Get ModTimeTo value
     * @return string|null
     */
    public function getModTimeTo()
    {
        return $this->ModTimeTo;
    }
    /**
     * Set ModTimeTo value
     * @param string $modTimeTo
     * @return \StructType\GetUserDisputesRequestType
     */
    public function setModTimeTo($modTimeTo = null)
    {
        // validation for constraint: string
        if (!is_null($modTimeTo) && !is_string($modTimeTo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($modTimeTo, true), gettype($modTimeTo)), __LINE__);
        }
        $this->ModTimeTo = $modTimeTo;
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
     * @return \StructType\GetUserDisputesRequestType
     */
    public function setPagination(\StructType\PaginationType $pagination = null)
    {
        $this->Pagination = $pagination;
        return $this;
    }
}
