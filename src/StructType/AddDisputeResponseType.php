<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddDisputeResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type defining the response of the <b>AddDispute</b> call. <br> <br> <span class="tablenote"><strong>Note:</strong> The <b>AddDispute</b> call is deprecated and is scheduled for decommission on January 31, 2023. The alternative API to
 * create cancellation requests is the <a href="https://developer.ebay.com/devzone/post-order/post-order_v2_cancellation__post.html" target="_blank">Create Cancellation Request</a> method of the <a
 * href="https://developer.ebay.com/devzone/post-order/index.html" target="_blank">Post-Order API </a>. </span>
 * @subpackage Structs
 */
class AddDisputeResponseType extends AbstractResponseType
{
    /**
     * The DisputeID
     * Meta information extracted from the WSDL
     * - documentation: This field will show the unique identifier of an Unpaid Item case that was created. | The unique identifier of an Unpaid Item case involving a buyer and seller. <br/><br/> <span class="tablenote"><strong>Note:</strong> Despite the
     * name, this type is now only used to identify an Unpaid Item case, and the identifier of an eBay case uses a 'case ID' and not a 'dispute ID'. However, the <strong>DisputeID</strong> field in Dispute calls handles Unpaid Item case IDs. </span>
     * - base: xs:string
     * - minOccurs: 0
     * @var string
     */
    public $DisputeID;
    /**
     * Constructor method for AddDisputeResponseType
     * @uses AddDisputeResponseType::setDisputeID()
     * @param string $disputeID
     */
    public function __construct($disputeID = null)
    {
        $this
            ->setDisputeID($disputeID);
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
     * @return \StructType\AddDisputeResponseType
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
}
