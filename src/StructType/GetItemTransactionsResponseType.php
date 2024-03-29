<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetItemTransactionsResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: Returns an array of order line item data for the item specified in the request. The results can be used to create a report of data that is commonly necessary for order processing. Zero, one, or many <b>Transaction</b> objects can be
 * returned in the <b>TransactionArray</b>. The set of order line items returned is limited to those that were modified between the times specified in the request's <b>ModTimeFrom</b> and <b>ModTime</b> filters. Also returns the <b>Item</b> object that
 * spawned the order line items. If pagination filters were specified in the request, returns meta-data describing the effects of those filters on the current response and the estimated effects if the same filters are used in subsequent calls. <br><br>
 * Data from the <b>TransactionArray</b> may be used to trigger the following Platform Notifications: <b>EndOfAuction</b>, <b>AuctionCheckoutComplete</b>, <b>FixedPriceTransaction</b>, <b>CheckoutBuyerRequestsTotal</b>, <b>ItemMarkedShipped</b>, and
 * <b>ItemMarkedPaid</b>. Each notification will be based on the state of the item (a 'snapshot' of the item) at the time the order line item was created.
 * @subpackage Structs
 */
class GetItemTransactionsResponseType extends AbstractResponseType
{
    /**
     * The PaginationResult
     * Meta information extracted from the WSDL
     * - documentation: Contains the total number of pages (<b>TotalNumberOfPages</b>) and the total number of entries (<b>TotalNumberOfEntries</b>) that could be returned given repeated calls that use the same selection criteria as the call that returned
     * this response.
     * - minOccurs: 0
     * @var \StructType\PaginationResultType
     */
    public $PaginationResult;
    /**
     * The HasMoreTransactions
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether there are additional order line items to retrieve. That is, indicates whether more pages of data are available to be returned, given the filters that were specified in the request. Returns false for the last page of
     * data.
     * - minOccurs: 0
     * @var bool
     */
    public $HasMoreTransactions;
    /**
     * The TransactionsPerPage
     * Meta information extracted from the WSDL
     * - documentation: Number of order line items returned per page (per call). May be a higher value than <b>ReturnedTransactionCountActual</b> if the page returned is the last page and more than one page of data exists.
     * - minOccurs: 0
     * @var int
     */
    public $TransactionsPerPage;
    /**
     * The PageNumber
     * Meta information extracted from the WSDL
     * - documentation: Page number for the page of order line items the response returned.
     * - minOccurs: 0
     * @var int
     */
    public $PageNumber;
    /**
     * The ReturnedTransactionCountActual
     * Meta information extracted from the WSDL
     * - documentation: Number of order line items retrieved in the current page of results just returned. May be a lower value than <b>TransactionsPerPage</b> if the page returned is the last page and more than one page of data exists.
     * - minOccurs: 0
     * @var int
     */
    public $ReturnedTransactionCountActual;
    /**
     * The Item
     * Meta information extracted from the WSDL
     * - documentation: <b>Item</b> object that spawned the order line item. It is a purchase from this item's listing that the order line item represents.
     * - minOccurs: 0
     * @var \StructType\ItemType
     */
    public $Item;
    /**
     * The TransactionArray
     * Meta information extracted from the WSDL
     * - documentation: List of <b>Transaction</b> objects representing the order line items resulting from the listing. Each <b>Transaction</b> object contains the data for one purchase (of one or more items in the same listing). The
     * <b>Transaction.Item</b> field is not returned because the <b>Item</b> object is returned at the root level of the response. See the reference guide for more information about the fields that are returned.
     * - minOccurs: 0
     * @var \ArrayType\TransactionArrayType
     */
    public $TransactionArray;
    /**
     * The PayPalPreferred
     * Meta information extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> This field is deprecated and will be removed from WSDL and docs on January 31, 2024. </span>
     * - minOccurs: 0
     * @var bool
     */
    public $PayPalPreferred;
    /**
     * Constructor method for GetItemTransactionsResponseType
     * @uses GetItemTransactionsResponseType::setPaginationResult()
     * @uses GetItemTransactionsResponseType::setHasMoreTransactions()
     * @uses GetItemTransactionsResponseType::setTransactionsPerPage()
     * @uses GetItemTransactionsResponseType::setPageNumber()
     * @uses GetItemTransactionsResponseType::setReturnedTransactionCountActual()
     * @uses GetItemTransactionsResponseType::setItem()
     * @uses GetItemTransactionsResponseType::setTransactionArray()
     * @uses GetItemTransactionsResponseType::setPayPalPreferred()
     * @param \StructType\PaginationResultType $paginationResult
     * @param bool $hasMoreTransactions
     * @param int $transactionsPerPage
     * @param int $pageNumber
     * @param int $returnedTransactionCountActual
     * @param \StructType\ItemType $item
     * @param \ArrayType\TransactionArrayType $transactionArray
     * @param bool $payPalPreferred
     */
    public function __construct(\StructType\PaginationResultType $paginationResult = null, $hasMoreTransactions = null, $transactionsPerPage = null, $pageNumber = null, $returnedTransactionCountActual = null, \StructType\ItemType $item = null, \ArrayType\TransactionArrayType $transactionArray = null, $payPalPreferred = null)
    {
        $this
            ->setPaginationResult($paginationResult)
            ->setHasMoreTransactions($hasMoreTransactions)
            ->setTransactionsPerPage($transactionsPerPage)
            ->setPageNumber($pageNumber)
            ->setReturnedTransactionCountActual($returnedTransactionCountActual)
            ->setItem($item)
            ->setTransactionArray($transactionArray)
            ->setPayPalPreferred($payPalPreferred);
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
     * @return \StructType\GetItemTransactionsResponseType
     */
    public function setPaginationResult(\StructType\PaginationResultType $paginationResult = null)
    {
        $this->PaginationResult = $paginationResult;
        return $this;
    }
    /**
     * Get HasMoreTransactions value
     * @return bool|null
     */
    public function getHasMoreTransactions()
    {
        return $this->HasMoreTransactions;
    }
    /**
     * Set HasMoreTransactions value
     * @param bool $hasMoreTransactions
     * @return \StructType\GetItemTransactionsResponseType
     */
    public function setHasMoreTransactions($hasMoreTransactions = null)
    {
        // validation for constraint: boolean
        if (!is_null($hasMoreTransactions) && !is_bool($hasMoreTransactions)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($hasMoreTransactions, true), gettype($hasMoreTransactions)), __LINE__);
        }
        $this->HasMoreTransactions = $hasMoreTransactions;
        return $this;
    }
    /**
     * Get TransactionsPerPage value
     * @return int|null
     */
    public function getTransactionsPerPage()
    {
        return $this->TransactionsPerPage;
    }
    /**
     * Set TransactionsPerPage value
     * @param int $transactionsPerPage
     * @return \StructType\GetItemTransactionsResponseType
     */
    public function setTransactionsPerPage($transactionsPerPage = null)
    {
        // validation for constraint: int
        if (!is_null($transactionsPerPage) && !(is_int($transactionsPerPage) || ctype_digit($transactionsPerPage))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($transactionsPerPage, true), gettype($transactionsPerPage)), __LINE__);
        }
        $this->TransactionsPerPage = $transactionsPerPage;
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
     * @return \StructType\GetItemTransactionsResponseType
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
     * Get ReturnedTransactionCountActual value
     * @return int|null
     */
    public function getReturnedTransactionCountActual()
    {
        return $this->ReturnedTransactionCountActual;
    }
    /**
     * Set ReturnedTransactionCountActual value
     * @param int $returnedTransactionCountActual
     * @return \StructType\GetItemTransactionsResponseType
     */
    public function setReturnedTransactionCountActual($returnedTransactionCountActual = null)
    {
        // validation for constraint: int
        if (!is_null($returnedTransactionCountActual) && !(is_int($returnedTransactionCountActual) || ctype_digit($returnedTransactionCountActual))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($returnedTransactionCountActual, true), gettype($returnedTransactionCountActual)), __LINE__);
        }
        $this->ReturnedTransactionCountActual = $returnedTransactionCountActual;
        return $this;
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
     * @return \StructType\GetItemTransactionsResponseType
     */
    public function setItem(\StructType\ItemType $item = null)
    {
        $this->Item = $item;
        return $this;
    }
    /**
     * Get TransactionArray value
     * @return \ArrayType\TransactionArrayType|null
     */
    public function getTransactionArray()
    {
        return $this->TransactionArray;
    }
    /**
     * Set TransactionArray value
     * @param \ArrayType\TransactionArrayType $transactionArray
     * @return \StructType\GetItemTransactionsResponseType
     */
    public function setTransactionArray(\ArrayType\TransactionArrayType $transactionArray = null)
    {
        $this->TransactionArray = $transactionArray;
        return $this;
    }
    /**
     * Get PayPalPreferred value
     * @return bool|null
     */
    public function getPayPalPreferred()
    {
        return $this->PayPalPreferred;
    }
    /**
     * Set PayPalPreferred value
     * @param bool $payPalPreferred
     * @return \StructType\GetItemTransactionsResponseType
     */
    public function setPayPalPreferred($payPalPreferred = null)
    {
        // validation for constraint: boolean
        if (!is_null($payPalPreferred) && !is_bool($payPalPreferred)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($payPalPreferred, true), gettype($payPalPreferred)), __LINE__);
        }
        $this->PayPalPreferred = $payPalPreferred;
        return $this;
    }
}
