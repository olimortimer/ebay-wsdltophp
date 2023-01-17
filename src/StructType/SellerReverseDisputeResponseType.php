<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SellerReverseDisputeResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: The response of a <b>SellerReverseDispute</b> call only includes the standard response fields for Trading API calls, such as the <b>Ack</b> field (to indicate the success or failure of the call), the timestamp, and an <b>Errors</b>
 * container (if there were any errors and/or warnings). <br> <br> <span class="tablenote"><strong>Note:</strong> The <b>SellerReverseDispute</b> call is deprecated and is scheduled for decommission on January 31, 2023. There is no alternative to this
 * call since eBay no longer supports Unpaid Item cases. </span>
 * @subpackage Structs
 */
class SellerReverseDisputeResponseType extends AbstractResponseType
{
}
