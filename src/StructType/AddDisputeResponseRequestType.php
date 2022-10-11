<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddDisputeResponseRequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: This call enables the seller to update an Unpaid Item case. <br/><br/> <span class="tablenote"><strong>Note:</strong> The <strong>AddDisputeResponse</strong> call now only supports the update of Unpaid Item cases, and no longer
 * support Item not Received (INR) or Significantly not as Described (SNAD) disputes created through PayPal, since this is no longer an option for eBay buyers. eBay buyers must create an INR case through eBay's Resolution Center, and this call also does
 * not support eBay Money Back Guarantee cases. <br><br> To respond to an eBay Money Back Guarantee case, the seller should use the <a href="https://developer.ebay.com/Devzone/post-order/index.html" target="_blank">Case Management calls</a> of the
 * <b>Post-Order API</b> or manage/respond to cases manually through the eBay Resolution Center. </span>
 * @subpackage Structs
 */
class AddDisputeResponseRequestType extends AbstractRequestType
{
    /**
     * The DisputeID
     * Meta information extracted from the WSDL
     * - documentation: The unique identifier of the Unpaid Item case. This identifier is created by eBay upon case creation. | The unique identifier of an Unpaid Item case involving a buyer and seller. <br/><br/> <span
     * class="tablenote"><strong>Note:</strong> Despite the name, this type is now only used to identify an Unpaid Item case, and the identifier of an eBay case uses a 'case ID' and not a 'dispute ID'. However, the <strong>DisputeID</strong> field in
     * Dispute calls handles Unpaid Item case IDs. These calls no longer support Item not Received (INR) or Significantly not as Described (SNAD) disputes created through PayPal, since this is no longer an option for eBay buyers. eBay buyers must create an
     * INR case through eBay's Resolution Center, and these calls also do not support eBay Money Back Guarantee cases. <br/><br/> To respond to an eBay Money Back Guarantee case, the seller should use the <a
     * href="https://developer.ebay.com/Devzone/post-order/index.html" target="_blank">Case Management calls</a> of the <b>Post-Order API</b> or manage/respond to cases manually through the eBay Resolution Center. </span>
     * - base: xs:string
     * - minOccurs: 0
     * @var string
     */
    public $DisputeID;
    /**
     * The MessageText
     * Meta information extracted from the WSDL
     * - documentation: This field is used to provide a text-based comment regarding the Unpaid Item case. This field is conditionally required when <b>DisputeActivity</b> value is set to <code>SellerAddInformation</code>, <code>SellerComment</code>, or
     * <code>SellerPaymentNotReceived</code>. Otherwise, this field is optional.
     * - minOccurs: 0
     * @var string
     */
    public $MessageText;
    /**
     * The DisputeActivity
     * Meta information extracted from the WSDL
     * - documentation: This field is used to indicate the type of action or update that the seller is making with the <b>AddDisputeResponse</b> call. See <b>DisputeActivityCodeType</b> for more information on the supported enum values.
     * - minOccurs: 0
     * @var string
     */
    public $DisputeActivity;
    /**
     * The ShippingCarrierUsed
     * Meta information extracted from the WSDL
     * - documentation: <b>DO NOT USE</b>. This field is no longer applicable. This field was only applicable for PayPal INR disputes, which this call no longer supports.
     * - minOccurs: 0
     * @var string
     */
    public $ShippingCarrierUsed;
    /**
     * The ShipmentTrackNumber
     * Meta information extracted from the WSDL
     * - documentation: <b>DO NOT USE</b>. This field is no longer applicable. This field was only applicable for PayPal INR disputes, which this call no longer supports.
     * - minOccurs: 0
     * @var string
     */
    public $ShipmentTrackNumber;
    /**
     * The ShippingTime
     * Meta information extracted from the WSDL
     * - documentation: <b>DO NOT USE</b>. This field is no longer applicable. This field was only applicable for PayPal INR disputes, which this call no longer supports.
     * - minOccurs: 0
     * @var string
     */
    public $ShippingTime;
    /**
     * Constructor method for AddDisputeResponseRequestType
     * @uses AddDisputeResponseRequestType::setDisputeID()
     * @uses AddDisputeResponseRequestType::setMessageText()
     * @uses AddDisputeResponseRequestType::setDisputeActivity()
     * @uses AddDisputeResponseRequestType::setShippingCarrierUsed()
     * @uses AddDisputeResponseRequestType::setShipmentTrackNumber()
     * @uses AddDisputeResponseRequestType::setShippingTime()
     * @param string $disputeID
     * @param string $messageText
     * @param string $disputeActivity
     * @param string $shippingCarrierUsed
     * @param string $shipmentTrackNumber
     * @param string $shippingTime
     */
    public function __construct($disputeID = null, $messageText = null, $disputeActivity = null, $shippingCarrierUsed = null, $shipmentTrackNumber = null, $shippingTime = null)
    {
        $this
            ->setDisputeID($disputeID)
            ->setMessageText($messageText)
            ->setDisputeActivity($disputeActivity)
            ->setShippingCarrierUsed($shippingCarrierUsed)
            ->setShipmentTrackNumber($shipmentTrackNumber)
            ->setShippingTime($shippingTime);
    }
    /**
     * Get DisputeID value
     * @return string|null
     */
    public function getDisputeID()
    {
        return $this->DisputeID;
    }
    /**
     * Set DisputeID value
     * @param string $disputeID
     * @return \StructType\AddDisputeResponseRequestType
     */
    public function setDisputeID($disputeID = null)
    {
        // validation for constraint: string
        if (!is_null($disputeID) && !is_string($disputeID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($disputeID, true), gettype($disputeID)), __LINE__);
        }
        $this->DisputeID = $disputeID;
        return $this;
    }
    /**
     * Get MessageText value
     * @return string|null
     */
    public function getMessageText()
    {
        return $this->MessageText;
    }
    /**
     * Set MessageText value
     * @param string $messageText
     * @return \StructType\AddDisputeResponseRequestType
     */
    public function setMessageText($messageText = null)
    {
        // validation for constraint: string
        if (!is_null($messageText) && !is_string($messageText)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($messageText, true), gettype($messageText)), __LINE__);
        }
        $this->MessageText = $messageText;
        return $this;
    }
    /**
     * Get DisputeActivity value
     * @return string|null
     */
    public function getDisputeActivity()
    {
        return $this->DisputeActivity;
    }
    /**
     * Set DisputeActivity value
     * @uses \EnumType\DisputeActivityCodeType::valueIsValid()
     * @uses \EnumType\DisputeActivityCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $disputeActivity
     * @return \StructType\AddDisputeResponseRequestType
     */
    public function setDisputeActivity($disputeActivity = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\DisputeActivityCodeType::valueIsValid($disputeActivity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\DisputeActivityCodeType', is_array($disputeActivity) ? implode(', ', $disputeActivity) : var_export($disputeActivity, true), implode(', ', \EnumType\DisputeActivityCodeType::getValidValues())), __LINE__);
        }
        $this->DisputeActivity = $disputeActivity;
        return $this;
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
     * @return \StructType\AddDisputeResponseRequestType
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
     * Get ShipmentTrackNumber value
     * @return string|null
     */
    public function getShipmentTrackNumber()
    {
        return $this->ShipmentTrackNumber;
    }
    /**
     * Set ShipmentTrackNumber value
     * @param string $shipmentTrackNumber
     * @return \StructType\AddDisputeResponseRequestType
     */
    public function setShipmentTrackNumber($shipmentTrackNumber = null)
    {
        // validation for constraint: string
        if (!is_null($shipmentTrackNumber) && !is_string($shipmentTrackNumber)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shipmentTrackNumber, true), gettype($shipmentTrackNumber)), __LINE__);
        }
        $this->ShipmentTrackNumber = $shipmentTrackNumber;
        return $this;
    }
    /**
     * Get ShippingTime value
     * @return string|null
     */
    public function getShippingTime()
    {
        return $this->ShippingTime;
    }
    /**
     * Set ShippingTime value
     * @param string $shippingTime
     * @return \StructType\AddDisputeResponseRequestType
     */
    public function setShippingTime($shippingTime = null)
    {
        // validation for constraint: string
        if (!is_null($shippingTime) && !is_string($shippingTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shippingTime, true), gettype($shippingTime)), __LINE__);
        }
        $this->ShippingTime = $shippingTime;
        return $this;
    }
}
