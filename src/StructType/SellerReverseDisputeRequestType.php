<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SellerReverseDisputeRequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: This call allows a seller to reverse the results of an Unpaid Item case in a situation where the buyer and seller are able to reach a mutual agreement. <br> <br> <span class="tablenote"><strong>Note:</strong> This call is deprecated
 * and is scheduled for decommission on January 31, 2023. There is no alternative to this call since eBay no longer supports Unpaid Item cases. </span>
 * @subpackage Structs
 */
class SellerReverseDisputeRequestType extends AbstractRequestType
{
    /**
     * The DisputeID
     * Meta information extracted from the WSDL
     * - documentation: The unique identifier of the Unpaid Item case that the seller is attempting to reverse the results of. | The unique identifier of an Unpaid Item case involving a buyer and seller. <br/><br/> <span
     * class="tablenote"><strong>Note:</strong> Despite the name, this type is now only used to identify an Unpaid Item case, and the identifier of an eBay case uses a 'case ID' and not a 'dispute ID'. However, the <strong>DisputeID</strong> field in
     * Dispute calls handles Unpaid Item case IDs. </span>
     * - base: xs:string
     * - minOccurs: 0
     * @var string
     */
    public $DisputeID;
    /**
     * The DisputeResolutionReason
     * Meta information extracted from the WSDL
     * - documentation: The reason why the seller is attempting to reverse the results of the Unpaid Item case.
     * - minOccurs: 0
     * @var string
     */
    public $DisputeResolutionReason;
    /**
     * Constructor method for SellerReverseDisputeRequestType
     * @uses SellerReverseDisputeRequestType::setDisputeID()
     * @uses SellerReverseDisputeRequestType::setDisputeResolutionReason()
     * @param string $disputeID
     * @param string $disputeResolutionReason
     */
    public function __construct($disputeID = null, $disputeResolutionReason = null)
    {
        $this
            ->setDisputeID($disputeID)
            ->setDisputeResolutionReason($disputeResolutionReason);
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
     * @return \StructType\SellerReverseDisputeRequestType
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
     * Get DisputeResolutionReason value
     * @return string|null
     */
    public function getDisputeResolutionReason()
    {
        return $this->DisputeResolutionReason;
    }
    /**
     * Set DisputeResolutionReason value
     * @uses \EnumType\DisputeResolutionReasonCodeType::valueIsValid()
     * @uses \EnumType\DisputeResolutionReasonCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $disputeResolutionReason
     * @return \StructType\SellerReverseDisputeRequestType
     */
    public function setDisputeResolutionReason($disputeResolutionReason = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\DisputeResolutionReasonCodeType::valueIsValid($disputeResolutionReason)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\DisputeResolutionReasonCodeType', is_array($disputeResolutionReason) ? implode(', ', $disputeResolutionReason) : var_export($disputeResolutionReason, true), implode(', ', \EnumType\DisputeResolutionReasonCodeType::getValidValues())), __LINE__);
        }
        $this->DisputeResolutionReason = $disputeResolutionReason;
        return $this;
    }
}
