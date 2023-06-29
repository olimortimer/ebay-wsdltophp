<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetOrderTransactionsResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: The base response type for the <b>GetOrderTransactions</b> call. This call retrieves detailed information about one or more eBay.com orders. An <b>OrderArray.Order</b> container is returned for each order that matches the input
 * criteria in the call request. <br><br> <span class="tablenote"><strong>Note:</strong> This call is deprecated and will be decommissioned on January 31, 2024. No further updates are planned for this API during the deprecation period. Developers have
 * the option of migrating to the <a href="/Devzone/XML/docs/Reference/eBay/GetOrders.html" target="_blank">GetOrders</a> call in the <b>Trading API</b>, or the <a href="/api-docs/sell/fulfillment/resources/order/methods/getOrders"
 * target="_blank">getOrders</a> method of the <a href="/api-docs/sell/fulfillment/overview.html" target="_blank">Fulfillment API</a>. Please note that the <a href="/api-docs/sell/fulfillment/overview.html" target="_blank">Fulfillment API</a> only
 * returns paid orders, so if your use case calls for retrieving both paid and unpaid orders, we recommend migrating to the <a href="/Devzone/XML/docs/Reference/eBay/GetOrders.html" target="_blank">GetOrders</a> call in the <b>Trading API</b>. </span>
 * @subpackage Structs
 */
class GetOrderTransactionsResponseType extends AbstractResponseType
{
    /**
     * The OrderArray
     * Meta information extracted from the WSDL
     * - documentation: This container consists of an array of eBay orders that match the input criteria that was passed into the call request.
     * - minOccurs: 0
     * @var \StructType\OrderArrayType
     */
    public $OrderArray;
    /**
     * Constructor method for GetOrderTransactionsResponseType
     * @uses GetOrderTransactionsResponseType::setOrderArray()
     * @param \StructType\OrderArrayType $orderArray
     */
    public function __construct(\StructType\OrderArrayType $orderArray = null)
    {
        $this
            ->setOrderArray($orderArray);
    }
    /**
     * Get OrderArray value
     * @return \StructType\OrderArrayType|null
     */
    public function getOrderArray()
    {
        return $this->OrderArray;
    }
    /**
     * Set OrderArray value
     * @param \StructType\OrderArrayType $orderArray
     * @return \StructType\GetOrderTransactionsResponseType
     */
    public function setOrderArray(\StructType\OrderArrayType $orderArray = null)
    {
        $this->OrderArray = $orderArray;
        return $this;
    }
}
