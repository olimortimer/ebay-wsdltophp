<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetUserDisputesResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: The base response type for the <b>GetUserDisputes</b>, a call that retrieves a list of cases that the user is involved in as a buyer or seller. <br> <br> <span class="tablenote"><strong>Note:</strong> The <b>GetUserDisputes</b> call
 * is deprecated and is scheduled for decommission on January 31, 2023. The alternative API to search for cancellation requests is the <a href="https://developer.ebay.com/devzone/post-order/post-order_v2_cancellation_search__get.html"
 * target="_blank">Search Cancellations</a> method of the <a href="https://developer.ebay.com/devzone/post-order/index.html" target="_blank">Post-Order API </a>. </span>
 * @subpackage Structs
 */
class GetUserDisputesResponseType extends AbstractResponseType
{
    /**
     * The StartingDisputeID
     * Meta information extracted from the WSDL
     * - documentation: The index of the first dispute in the current result set, relative to the total number of disputes available. Primarily useful for interpreting paginated results. For example, if 228 disputes are available and 200 results are
     * returned per page: The first page returns a <b>StartingDisputeID</b> value of 0 (since a zero-based index is used) and the second page returns a <b>StartingDisputeID</b> value of 200. | The unique identifier of an Unpaid Item case involving a buyer
     * and seller. <br/><br/> <span class="tablenote"><strong>Note:</strong> Despite the name, this type is now only used to identify an Unpaid Item case, and the identifier of an eBay case uses a 'case ID' and not a 'dispute ID'. However, the
     * <strong>DisputeID</strong> field in Dispute calls handles Unpaid Item case IDs. </span>
     * - base: xs:string
     * - minOccurs: 0
     * @var string
     */
    public $StartingDisputeID;
    /**
     * The EndingDisputeID
     * Meta information extracted from the WSDL
     * - documentation: The index of the last dispute in the current result set, relative to the total number of disputes available. Primarily useful for interpreting paginated results. For example, if 228 disputes are available and 200 results are returned
     * per page: The first page returns an <b>EndingDisputeID</b> value of 199 (since a zero-based index is used) and the second page returns an <b>EndingDisputeID</b> value of 227. | The unique identifier of an Unpaid Item case involving a buyer and
     * seller. <br/><br/> <span class="tablenote"><strong>Note:</strong> Despite the name, this type is now only used to identify an Unpaid Item case, and the identifier of an eBay case uses a 'case ID' and not a 'dispute ID'. However, the
     * <strong>DisputeID</strong> field in Dispute calls handles Unpaid Item case IDs. </span>
     * - base: xs:string
     * - minOccurs: 0
     * @var string
     */
    public $EndingDisputeID;
    /**
     * The DisputeArray
     * Meta information extracted from the WSDL
     * - documentation: The array of disputes that match the input criteria in the request. It will be returned as empty if no disputes match the input criteria.
     * - minOccurs: 0
     * @var \ArrayType\DisputeArrayType
     */
    public $DisputeArray;
    /**
     * The ItemsPerPage
     * Meta information extracted from the WSDL
     * - documentation: The maximum number of records that will be displayed per page of data. This value will always be <code>200</code> since the <b>EntriesPerPage</b> value defaults to and can only be set to <code>200</code>.
     * - minOccurs: 0
     * @var int
     */
    public $ItemsPerPage;
    /**
     * The PageNumber
     * Meta information extracted from the WSDL
     * - documentation: The page number of the result set that is currently being viewed. Keep in mind that the <b>GetUserDisputes</b> call uses a zero-based index for pagination, so the first page of data in the result set will actually have a value of
     * lt;code>0</code>.
     * - minOccurs: 0
     * @var int
     */
    public $PageNumber;
    /**
     * The DisputeFilterCount
     * Meta information extracted from the WSDL
     * - documentation: This container will be returned for the different types/categories of disputes. The <b>TotalAvailable</b> field will indicate how many disputes of that type/category (identified in the corresponding <b>DisputeFilterType</b> field)
     * match the input criteria.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\DisputeFilterCountType[]
     */
    public $DisputeFilterCount;
    /**
     * The PaginationResult
     * Meta information extracted from the WSDL
     * - documentation: The result of the pagination, including the total number of virtual pages in the result set and the total number of records returned.
     * - minOccurs: 0
     * @var \StructType\PaginationResultType
     */
    public $PaginationResult;
    /**
     * Constructor method for GetUserDisputesResponseType
     * @uses GetUserDisputesResponseType::setStartingDisputeID()
     * @uses GetUserDisputesResponseType::setEndingDisputeID()
     * @uses GetUserDisputesResponseType::setDisputeArray()
     * @uses GetUserDisputesResponseType::setItemsPerPage()
     * @uses GetUserDisputesResponseType::setPageNumber()
     * @uses GetUserDisputesResponseType::setDisputeFilterCount()
     * @uses GetUserDisputesResponseType::setPaginationResult()
     * @param string $startingDisputeID
     * @param string $endingDisputeID
     * @param \ArrayType\DisputeArrayType $disputeArray
     * @param int $itemsPerPage
     * @param int $pageNumber
     * @param \StructType\DisputeFilterCountType[] $disputeFilterCount
     * @param \StructType\PaginationResultType $paginationResult
     */
    public function __construct($startingDisputeID = null, $endingDisputeID = null, \ArrayType\DisputeArrayType $disputeArray = null, $itemsPerPage = null, $pageNumber = null, array $disputeFilterCount = array(), \StructType\PaginationResultType $paginationResult = null)
    {
        $this
            ->setStartingDisputeID($startingDisputeID)
            ->setEndingDisputeID($endingDisputeID)
            ->setDisputeArray($disputeArray)
            ->setItemsPerPage($itemsPerPage)
            ->setPageNumber($pageNumber)
            ->setDisputeFilterCount($disputeFilterCount)
            ->setPaginationResult($paginationResult);
    }
    /**
     * Get StartingDisputeID value
     * @return string|null
     */
    public function getStartingDisputeID()
    {
        return $this->StartingDisputeID;
    }
    /**
     * Set StartingDisputeID value
     * @param string $startingDisputeID
     * @return \StructType\GetUserDisputesResponseType
     */
    public function setStartingDisputeID($startingDisputeID = null)
    {
        // validation for constraint: string
        if (!is_null($startingDisputeID) && !is_string($startingDisputeID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($startingDisputeID, true), gettype($startingDisputeID)), __LINE__);
        }
        $this->StartingDisputeID = $startingDisputeID;
        return $this;
    }
    /**
     * Get EndingDisputeID value
     * @return string|null
     */
    public function getEndingDisputeID()
    {
        return $this->EndingDisputeID;
    }
    /**
     * Set EndingDisputeID value
     * @param string $endingDisputeID
     * @return \StructType\GetUserDisputesResponseType
     */
    public function setEndingDisputeID($endingDisputeID = null)
    {
        // validation for constraint: string
        if (!is_null($endingDisputeID) && !is_string($endingDisputeID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($endingDisputeID, true), gettype($endingDisputeID)), __LINE__);
        }
        $this->EndingDisputeID = $endingDisputeID;
        return $this;
    }
    /**
     * Get DisputeArray value
     * @return \ArrayType\DisputeArrayType|null
     */
    public function getDisputeArray()
    {
        return $this->DisputeArray;
    }
    /**
     * Set DisputeArray value
     * @param \ArrayType\DisputeArrayType $disputeArray
     * @return \StructType\GetUserDisputesResponseType
     */
    public function setDisputeArray(\ArrayType\DisputeArrayType $disputeArray = null)
    {
        $this->DisputeArray = $disputeArray;
        return $this;
    }
    /**
     * Get ItemsPerPage value
     * @return int|null
     */
    public function getItemsPerPage()
    {
        return $this->ItemsPerPage;
    }
    /**
     * Set ItemsPerPage value
     * @param int $itemsPerPage
     * @return \StructType\GetUserDisputesResponseType
     */
    public function setItemsPerPage($itemsPerPage = null)
    {
        // validation for constraint: int
        if (!is_null($itemsPerPage) && !(is_int($itemsPerPage) || ctype_digit($itemsPerPage))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($itemsPerPage, true), gettype($itemsPerPage)), __LINE__);
        }
        $this->ItemsPerPage = $itemsPerPage;
        return $this;
    }
    /**
     * Get PageNumber value
     * @return int|null
     */
    public function getPageNumber()
    {
        return $this->PageNumber;
    }
    /**
     * Set PageNumber value
     * @param int $pageNumber
     * @return \StructType\GetUserDisputesResponseType
     */
    public function setPageNumber($pageNumber = null)
    {
        // validation for constraint: int
        if (!is_null($pageNumber) && !(is_int($pageNumber) || ctype_digit($pageNumber))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($pageNumber, true), gettype($pageNumber)), __LINE__);
        }
        $this->PageNumber = $pageNumber;
        return $this;
    }
    /**
     * Get DisputeFilterCount value
     * @return \StructType\DisputeFilterCountType[]|null
     */
    public function getDisputeFilterCount()
    {
        return $this->DisputeFilterCount;
    }
    /**
     * This method is responsible for validating the values passed to the setDisputeFilterCount method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDisputeFilterCount method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDisputeFilterCountForArrayConstraintsFromSetDisputeFilterCount(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getUserDisputesResponseTypeDisputeFilterCountItem) {
            // validation for constraint: itemType
            if (!$getUserDisputesResponseTypeDisputeFilterCountItem instanceof \StructType\DisputeFilterCountType) {
                $invalidValues[] = is_object($getUserDisputesResponseTypeDisputeFilterCountItem) ? get_class($getUserDisputesResponseTypeDisputeFilterCountItem) : sprintf('%s(%s)', gettype($getUserDisputesResponseTypeDisputeFilterCountItem), var_export($getUserDisputesResponseTypeDisputeFilterCountItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The DisputeFilterCount property can only contain items of type \StructType\DisputeFilterCountType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set DisputeFilterCount value
     * @throws \InvalidArgumentException
     * @param \StructType\DisputeFilterCountType[] $disputeFilterCount
     * @return \StructType\GetUserDisputesResponseType
     */
    public function setDisputeFilterCount(array $disputeFilterCount = array())
    {
        // validation for constraint: array
        if ('' !== ($disputeFilterCountArrayErrorMessage = self::validateDisputeFilterCountForArrayConstraintsFromSetDisputeFilterCount($disputeFilterCount))) {
            throw new \InvalidArgumentException($disputeFilterCountArrayErrorMessage, __LINE__);
        }
        $this->DisputeFilterCount = $disputeFilterCount;
        return $this;
    }
    /**
     * Add item to DisputeFilterCount value
     * @throws \InvalidArgumentException
     * @param \StructType\DisputeFilterCountType $item
     * @return \StructType\GetUserDisputesResponseType
     */
    public function addToDisputeFilterCount(\StructType\DisputeFilterCountType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\DisputeFilterCountType) {
            throw new \InvalidArgumentException(sprintf('The DisputeFilterCount property can only contain items of type \StructType\DisputeFilterCountType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->DisputeFilterCount[] = $item;
        return $this;
    }
    /**
     * Get PaginationResult value
     * @return \StructType\PaginationResultType|null
     */
    public function getPaginationResult()
    {
        return $this->PaginationResult;
    }
    /**
     * Set PaginationResult value
     * @param \StructType\PaginationResultType $paginationResult
     * @return \StructType\GetUserDisputesResponseType
     */
    public function setPaginationResult(\StructType\PaginationResultType $paginationResult = null)
    {
        $this->PaginationResult = $paginationResult;
        return $this;
    }
}
