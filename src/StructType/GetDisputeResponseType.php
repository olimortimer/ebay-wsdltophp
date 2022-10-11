<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetDisputeResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: This is the base response type for the <b>GetDispute</b> call. This call retrieves the details of an Unpaid Item case. <br/><br/> <span class="tablenote"><strong>Note:</strong> The <b>GetDispute</b> call now only retrieves Unpaid
 * Item cases, and is no longer used to retrieve Item not Received (INR) disputes created through PayPal, since this is no longer an option for eBay buyers. eBay buyers must create an INR case through eBay's Resolution Center, and this call also does
 * not support eBay Money Back Guarantee cases. <br><br> To respond to an eBay Money Back Guarantee case, the seller should use the <a href="https://developer.ebay.com/Devzone/post-order/index.html" target="_blank">Case Management calls</a> of the
 * <b>Post-Order API</b> or manage/respond to cases manually through the eBay Resolution Center. </span>
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
