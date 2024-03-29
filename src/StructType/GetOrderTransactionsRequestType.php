<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetOrderTransactionsRequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: The base request type for the <b>GetOrderTransactions</b> call. This call retrieves detailed information about one or more orders or order line items created (or modified) in the last 90 days. <br><br> <span
 * class="tablenote"><strong>Note:</strong> This call is deprecated and will be decommissioned on January 31, 2024. No further updates are planned for this API during the deprecation period. Developers have the option of migrating to the <a
 * href="/Devzone/XML/docs/Reference/eBay/GetOrders.html" target="_blank">GetOrders</a> call in the <b>Trading API</b>, or the <a href="/api-docs/sell/fulfillment/resources/order/methods/getOrders" target="_blank">getOrders</a> method of the <a
 * href="/api-docs/sell/fulfillment/overview.html" target="_blank">Fulfillment API</a>. Please note that the <a href="/api-docs/sell/fulfillment/overview.html" target="_blank">Fulfillment API</a> only returns paid orders, so if your use case calls for
 * retrieving both paid and unpaid orders, we recommend migrating to the <a href="/Devzone/XML/docs/Reference/eBay/GetOrders.html" target="_blank">GetOrders</a> call in the <b>Trading API</b>. </span> <br> Unlike <b>GetOrders</b>, which can be used to
 * retrieve specific orders, or orders created (or modified) within a specific time period, the <b>GetOrderTransactions</b> call only supports the retrieval of specific orders and/or order line items.
 * @subpackage Structs
 */
class GetOrderTransactionsRequestType extends AbstractRequestType
{
    /**
     * The ItemTransactionIDArray
     * Meta information extracted from the WSDL
     * - documentation: This container is used if the seller wants to retrieve for one or more order line items. An <b>ItemTransactionID</b> container is required for each order line item that is to be retrieved. An order line item can be identified with an
     * <b>ItemID</b>/<b>TransactionID</b> pair, with an <b>OrderLineItemID</b> value, or with a <b>SKU</b> value (if a SKU is defined for the order line item).
     * - minOccurs: 0
     * @var \ArrayType\ItemTransactionIDArrayType
     */
    public $ItemTransactionIDArray;
    /**
     * The OrderIDArray
     * Meta information extracted from the WSDL
     * - documentation: This container is used if the seller wants to search for one or more orders. An <b>OrderID</b> field is required for each order that is to be retrieved. Up to 20 <b>OrderID</b> fields can be used. <br><br> <span
     * class="tablenote"><b>Note: </b> As of June 2019, eBay has changed the format of order identifier values. The new format is a non-parsable string, globally unique across all eBay marketplaces, and consistent for both single line item and multiple line
     * item orders. Unlike in the past, instead of just being known and exposed to the seller, these unique order identifiers will also be known and used/referenced by the buyer and eBay customer support. <br><br> For developers and sellers who are already
     * integrated with the Trading API's order management calls, this change shouldn't impact your integration unless you parse the existing order identifiers (e.g., <b>OrderID</b> or <b>OrderLineItemID</b>), or otherwise infer meaning from the format
     * (e.g., differentiating between a single line item order versus a multiple line item order). Because we realize that some integrations may have logic that is dependent upon the old identifier format, eBay is rolling out this Trading API change with
     * version control to support a transition period of approximately 9 months before applications must switch to the new format completely. <br><br> During the transition period, for developers/sellers using a Trading WSDL older than Version 1113, they
     * can use the <b>X-EBAY-API-COMPATIBILITY-LEVEL</b> HTTP header in API calls to control whether the new or old <b>OrderID</b> format is returned in call response payloads. To get the new <b>OrderID</b> format, the value of the
     * <b>X-EBAY-API-COMPATIBILITY-LEVEL</b> HTTP header must be set to <code>1113</code>. During the transition period and even after, the new and old <b>OrderID</b> formats will still be supported/accepted in all Trading API call request payloads. After
     * the transition period (which will be announced), only the new <b>OrderID</b> format will be returned in all Trading API call response payloads, regardless of the Trading WSDL version used or specified compatibility level. </span> <br> <span
     * class="tablenote"><b>Note: </b> For sellers integrated with the new order ID format, please note that the identifier for an order will change as it goes from unpaid to paid status. Sellers can check to see if an order has been paid by looking for a
     * value of 'Complete' in the <b>CheckoutStatus.Status</b> field in the response of <b>GetOrders</b> or <b>GetOrderTransactions</b> call, or in the <b>Status.CompleteStatus</b> field in the response of <b>GetItemTransactions</b> or
     * <b>GetSellerTransactions</b> call. Sellers should not fulfill orders until buyer has made payment. When using a <b>GetOrders</b> or <b>GetOrderTransactions</b> call to retrieve specific order(s), either of these order IDs (paid or unpaid status) can
     * be used to retrieve an order. </span>
     * - minOccurs: 0
     * @var \ArrayType\OrderIDArrayType
     */
    public $OrderIDArray;
    /**
     * The Platform
     * Meta information extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> This field should no longer be used since its sole purpose was to allow the seller to filter between eBay orders and Half.com orders, and the Half.com site no longer exists. </span>
     * - minOccurs: 0
     * @var string
     */
    public $Platform;
    /**
     * The IncludeFinalValueFees
     * Meta information extracted from the WSDL
     * - documentation: This field is included and set to <code>true</code> if the user wants to view the Final Value Fee (FVF) for all order line items in the response. The Final Value Fee is returned in the <b>Transaction.FinalValueFee</b> field. The
     * Final Value Fee is assessed right after the creation of an order line item. <br> <br> See the <a href="https://www.ebay.com/help/selling/fees-credits-invoices/selling-fees?id=4822" target="_blank">Selling fees</a> help page for more information about
     * how Final Value Fees are calculated.
     * - minOccurs: 0
     * @var bool
     */
    public $IncludeFinalValueFees;
    /**
     * Constructor method for GetOrderTransactionsRequestType
     * @uses GetOrderTransactionsRequestType::setItemTransactionIDArray()
     * @uses GetOrderTransactionsRequestType::setOrderIDArray()
     * @uses GetOrderTransactionsRequestType::setPlatform()
     * @uses GetOrderTransactionsRequestType::setIncludeFinalValueFees()
     * @param \ArrayType\ItemTransactionIDArrayType $itemTransactionIDArray
     * @param \ArrayType\OrderIDArrayType $orderIDArray
     * @param string $platform
     * @param bool $includeFinalValueFees
     */
    public function __construct(\ArrayType\ItemTransactionIDArrayType $itemTransactionIDArray = null, \ArrayType\OrderIDArrayType $orderIDArray = null, $platform = null, $includeFinalValueFees = null)
    {
        $this
            ->setItemTransactionIDArray($itemTransactionIDArray)
            ->setOrderIDArray($orderIDArray)
            ->setPlatform($platform)
            ->setIncludeFinalValueFees($includeFinalValueFees);
    }
    /**
     * Get ItemTransactionIDArray value
     * @return \ArrayType\ItemTransactionIDArrayType|null
     */
    public function getItemTransactionIDArray()
    {
        return $this->ItemTransactionIDArray;
    }
    /**
     * Set ItemTransactionIDArray value
     * @param \ArrayType\ItemTransactionIDArrayType $itemTransactionIDArray
     * @return \StructType\GetOrderTransactionsRequestType
     */
    public function setItemTransactionIDArray(\ArrayType\ItemTransactionIDArrayType $itemTransactionIDArray = null)
    {
        $this->ItemTransactionIDArray = $itemTransactionIDArray;
        return $this;
    }
    /**
     * Get OrderIDArray value
     * @return \ArrayType\OrderIDArrayType|null
     */
    public function getOrderIDArray()
    {
        return $this->OrderIDArray;
    }
    /**
     * Set OrderIDArray value
     * @param \ArrayType\OrderIDArrayType $orderIDArray
     * @return \StructType\GetOrderTransactionsRequestType
     */
    public function setOrderIDArray(\ArrayType\OrderIDArrayType $orderIDArray = null)
    {
        $this->OrderIDArray = $orderIDArray;
        return $this;
    }
    /**
     * Get Platform value
     * @return string|null
     */
    public function getPlatform()
    {
        return $this->Platform;
    }
    /**
     * Set Platform value
     * @uses \EnumType\TransactionPlatformCodeType::valueIsValid()
     * @uses \EnumType\TransactionPlatformCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $platform
     * @return \StructType\GetOrderTransactionsRequestType
     */
    public function setPlatform($platform = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\TransactionPlatformCodeType::valueIsValid($platform)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\TransactionPlatformCodeType', is_array($platform) ? implode(', ', $platform) : var_export($platform, true), implode(', ', \EnumType\TransactionPlatformCodeType::getValidValues())), __LINE__);
        }
        $this->Platform = $platform;
        return $this;
    }
    /**
     * Get IncludeFinalValueFees value
     * @return bool|null
     */
    public function getIncludeFinalValueFees()
    {
        return $this->IncludeFinalValueFees;
    }
    /**
     * Set IncludeFinalValueFees value
     * @param bool $includeFinalValueFees
     * @return \StructType\GetOrderTransactionsRequestType
     */
    public function setIncludeFinalValueFees($includeFinalValueFees = null)
    {
        // validation for constraint: boolean
        if (!is_null($includeFinalValueFees) && !is_bool($includeFinalValueFees)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($includeFinalValueFees, true), gettype($includeFinalValueFees)), __LINE__);
        }
        $this->IncludeFinalValueFees = $includeFinalValueFees;
        return $this;
    }
}
