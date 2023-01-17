<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetDisputeResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: This is the base response type for the <b>GetDispute</b> call. <br> <br> <span class="tablenote"><strong>Note:</strong> The <b>GetDispute</b> call is deprecated and is scheduled for decommission on January 31, 2023. The alternative
 * API to retrieve a specific cancellation request is the <a href="https://developer.ebay.com/devzone/post-order/post-order_v2_cancellation-cancelId__get.html" target="_blank">Get Cancellation</a> method of the <a
 * href="https://developer.ebay.com/devzone/post-order/index.html" target="_blank">Post-Order API </a>. </span>
 * @subpackage Structs
 */
class GetDisputeResponseType extends AbstractResponseType
{
    /**
     * The Dispute
     * Meta information extracted from the WSDL
     * - documentation: If the Unpaid Item case that is specified in the call request is found, this <b>Dispute</b> container is returned in the response. This container includes detailed information about the Unpaid Item case, the buyer and seller user
     * IDs, and information on the listing that is associated with the dispute.
     * - minOccurs: 0
     * @var \StructType\DisputeType
     */
    public $Dispute;
    /**
     * Constructor method for GetDisputeResponseType
     * @uses GetDisputeResponseType::setDispute()
     * @param \StructType\DisputeType $dispute
     */
    public function __construct(\StructType\DisputeType $dispute = null)
    {
        $this
            ->setDispute($dispute);
    }
    /**
     * Get Dispute value
     * @return \StructType\DisputeType|null
     */
    public function getDispute()
    {
        return $this->Dispute;
    }
    /**
     * Set Dispute value
     * @param \StructType\DisputeType $dispute
     * @return \StructType\GetDisputeResponseType
     */
    public function setDispute(\StructType\DisputeType $dispute = null)
    {
        $this->Dispute = $dispute;
        return $this;
    }
}
