<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ShipmentTrackingDetailsType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type details the shipping carrier and shipment tracking number associated with a package shipment. It also contains information about the line items shipped through the Global Shipping program.
 * @subpackage Structs
 */
class ShipmentTrackingDetailsType extends AbstractStructBase
{
    /**
     * The ShippingCarrierUsed
     * Meta information extracted from the WSDL
     * - documentation: The name of the shipping carrier used to ship the item. This field and the <strong>ShipmentTrackingNumber</strong> field are mutually dependent. When you submit <strong>ShippingCarrierUsed</strong>, you must also supply a value for
     * <strong>ShipmentTrackingNumber</strong>. When you submit <strong>ShipmentTrackingNumber</strong>, you must also supply a value for <strong>ShippingCarrierUsed</strong>. <br/><br/> When the site ID is Austria, Poland, or UK,
     * <strong>ShippingCarrierUsed</strong> can be any value, because it is not checked by eBay. For all other sites, only the following characters are allowed: letters (<code>a-z</code>, <code>A-Z</code>), numbers (<code>0-9</code>), space, and dash
     * (<code>-</code>). The site ID is specified in the <b>CompleteSale</b> request header. <br/><br/> <span class="tablenote"> <strong>Note:</strong> Commonly used shipping carriers can be found by calling <b>GeteBayDetails</b> with <b>DetailName</b> set
     * to <code>ShippingCarrierDetails</code> and examining the returned <b>ShippingCarrierDetails.ShippingCarrier</b> field. <a href="https://developer.ebay.com/Devzone/XML/docs/Reference/eBay/types/ShippingCarrierCodeType.html">ShippingCarrierCodeType</a>
     * also has a list of valid shipping carriers, but eBay cannot guarantee that this enumerated type contains a full, updated list of shipping carriers. </span> <strong>For the CompleteSale call</strong>: <ul> <li>This field is not case sensitive in the
     * <strong>CompleteSale</strong> request.</li> <li>When using UPS Mail Innovations, supply the value <code>UPS-MI</code>. Buyers will subsequently be sent to the UPS Mail Innovations website for tracking status. </li> <li>When using FedEx SmartPost,
     * supply the value <code>FedEx</code>. Buyers will subsequently be sent to the FedEx web site for tracking status. </li> </ul> <strong>For the Get calls</strong>: When using the Global Shipping Program, this field returns a value of <code>PBI</code>.
     * - minOccurs: 0
     * @var string
     */
    public $ShippingCarrierUsed;
    /**
     * The ShipmentTrackingNumber
     * Meta information extracted from the WSDL
     * - documentation: The tracking number assigned by the shipping carrier to the item shipment. This field and the <b>ShippingCarrierUsed</b> field are mutually dependent. When you submit <strong>ShipmentTrackingNumber</strong>, you must also supply a
     * value for <strong>ShippingCarrierUsed</strong>. When you submit <strong>ShippingCarrierUsed</strong>, you must also supply a value for <strong>ShipmentTrackingNumber</strong>. <br/><br/> The seller is responsible for the accuracy of the shipment
     * tracking number, as eBay only verifies that the tracking number is consistent with the numbering scheme used by the specified shipping carrier, but cannot verify the accuracy of the tracking number. For order management calls, <br><br> <b>For
     * GetOrders, GetOrderTransactions, GetSellerTransactions, and GetItemTransactions only:</b> This field is only returned if a valid tracking number is set. With the exception of the <b>GetSellerTransactions</b> (where it is only returned to the seller
     * and not buyer), the tracking number will only be returned to the seller or buyer. If a user is using a Trading WSDL Version 1019 or above, this field will only be returned to the buyer or seller, and no longer returned at all to third parties. If
     * using a Trading WSDL older than Version 1019, this field is returned to third parties, but the string value returned in the field will be <code>Unavailable</code>. <br><br> <span class="tablenote"><b>Note: </b> The Trading API only supports
     * alphanumeric characters for shipment tracking numbers, and any other characters are not supported, including spaces, hyphens, and all other special characters. Users should not enter spaces even if spaces are shown for the tracking number on the
     * shipping label. </span>
     * - minOccurs: 0
     * @var string
     */
    public $ShipmentTrackingNumber;
    /**
     * The ShipmentLineItem
     * Meta information extracted from the WSDL
     * - documentation: Contains information about one or more order line items in a Global Shipping Program package. Required or returned if the value of <strong>ShippingCarrierUsed</strong> is <code>PBI</code>.
     * - minOccurs: 0
     * @var \StructType\ShipmentLineItemType
     */
    public $ShipmentLineItem;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for ShipmentTrackingDetailsType
     * @uses ShipmentTrackingDetailsType::setShippingCarrierUsed()
     * @uses ShipmentTrackingDetailsType::setShipmentTrackingNumber()
     * @uses ShipmentTrackingDetailsType::setShipmentLineItem()
     * @uses ShipmentTrackingDetailsType::setAny()
     * @param string $shippingCarrierUsed
     * @param string $shipmentTrackingNumber
     * @param \StructType\ShipmentLineItemType $shipmentLineItem
     * @param \DOMDocument $any
     */
    public function __construct($shippingCarrierUsed = null, $shipmentTrackingNumber = null, \StructType\ShipmentLineItemType $shipmentLineItem = null, \DOMDocument $any = null)
    {
        $this
            ->setShippingCarrierUsed($shippingCarrierUsed)
            ->setShipmentTrackingNumber($shipmentTrackingNumber)
            ->setShipmentLineItem($shipmentLineItem)
            ->setAny($any);
    }
    /**
     * Get ShippingCarrierUsed value
     * @return string|null
     */
    public function getShippingCarrierUsed()
    {
        return $this->ShippingCarrierUsed;
    }
    /**
     * Set ShippingCarrierUsed value
     * @param string $shippingCarrierUsed
     * @return \StructType\ShipmentTrackingDetailsType
     */
    public function setShippingCarrierUsed($shippingCarrierUsed = null)
    {
        // validation for constraint: string
        if (!is_null($shippingCarrierUsed) && !is_string($shippingCarrierUsed)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shippingCarrierUsed, true), gettype($shippingCarrierUsed)), __LINE__);
        }
        $this->ShippingCarrierUsed = $shippingCarrierUsed;
        return $this;
    }
    /**
     * Get ShipmentTrackingNumber value
     * @return string|null
     */
    public function getShipmentTrackingNumber()
    {
        return $this->ShipmentTrackingNumber;
    }
    /**
     * Set ShipmentTrackingNumber value
     * @param string $shipmentTrackingNumber
     * @return \StructType\ShipmentTrackingDetailsType
     */
    public function setShipmentTrackingNumber($shipmentTrackingNumber = null)
    {
        // validation for constraint: string
        if (!is_null($shipmentTrackingNumber) && !is_string($shipmentTrackingNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shipmentTrackingNumber, true), gettype($shipmentTrackingNumber)), __LINE__);
        }
        $this->ShipmentTrackingNumber = $shipmentTrackingNumber;
        return $this;
    }
    /**
     * Get ShipmentLineItem value
     * @return \StructType\ShipmentLineItemType|null
     */
    public function getShipmentLineItem()
    {
        return $this->ShipmentLineItem;
    }
    /**
     * Set ShipmentLineItem value
     * @param \StructType\ShipmentLineItemType $shipmentLineItem
     * @return \StructType\ShipmentTrackingDetailsType
     */
    public function setShipmentLineItem(\StructType\ShipmentLineItemType $shipmentLineItem = null)
    {
        $this->ShipmentLineItem = $shipmentLineItem;
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
     * @return \StructType\ShipmentTrackingDetailsType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
