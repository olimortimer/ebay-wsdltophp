<?php

namespace EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for DisputeStatusCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Enumerated type that defines the possible statuses of an order dispute between buyer and seller. The <b>DisputeState</b> and <b>DisputeStatus</b> values returned for each dispute complement one another. <br/><br/> If the
 * <b>DisputeSortType</b> filter is used in a <b>GetUserDisputes</b> call and set to <code>DisputeStatusAscending</code>, retrieved disputes will be sorted in the following order according to <b>DisputeStatus</b>: <ol>
 * <li><code>WaitingForSellerResponse</code></li> <li><code>WaitingForBuyerResponse</code></li> <li><code>ClosedFVFCreditStrike</code></li> <li><code>ClosedNoFVFCreditStrike</code></li> <li><code>ClosedFVFCreditNoStrike</code></li>
 * <li><code>ClosedNoFVFCreditNoStrike</code></li> <li><code>Closed</code></li> <li><code>StrikeAppealedAfterClosing</code></li> <li><code>FVFCreditReversedAfterClosing</code></li> <li><code>StrikeAppealedAndFVFCreditReversed</code></li> </ol><br/> If
 * the <b>DisputeSortType</b> value is set to <code>DisputeStatusDescending</code> instead, retrieved disputes will be sorted in the opposite order of the ones listed above. <br/><br/> <span class="tablenote"><strong>Note:</strong> 'Item Not Received'
 * or 'Significantly Not As Described' cases, initiated by buyers through the eBay Money Back Guarantee program, are not returned with <b>GetDispute</b> or <b>GetUserDisputes</b>. The <a
 * href="https://developer.ebay.com/Devzone/post-order/post-order_v2_casemanagement-caseId__get.html#overview">getCase</a> method of the <a href="https://developer.ebay.com/Devzone/post-order/concepts/UsageGuide.html">Post-Order API</a> is used to
 * retrieve Money Back Guarantee cases programmatically. </span>
 * @subpackage Enumerations
 */
class DisputeStatusCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Closed'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the dispute is closed.
     * @return string 'Closed'
     */
    const VALUE_CLOSED = 'Closed';
    /**
     * Constant for value 'WaitingForSellerResponse'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the dispute is waiting for the seller's response.
     * @return string 'WaitingForSellerResponse'
     */
    const VALUE_WAITING_FOR_SELLER_RESPONSE = 'WaitingForSellerResponse';
    /**
     * Constant for value 'WaitingForBuyerResponse'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the dispute is waiting for the buyer's response.
     * @return string 'WaitingForBuyerResponse'
     */
    const VALUE_WAITING_FOR_BUYER_RESPONSE = 'WaitingForBuyerResponse';
    /**
     * Constant for value 'ClosedFVFCreditStrike'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the Unpaid Item dispute is closed, the seller received a Final Value Fee credit, and the buyer received a strike.
     * @return string 'ClosedFVFCreditStrike'
     */
    const VALUE_CLOSED_FVFCREDIT_STRIKE = 'ClosedFVFCreditStrike';
    /**
     * Constant for value 'ClosedNoFVFCreditStrike'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the Unpaid Item dispute is closed, the seller did not receive a Final Value Fee credit, and the buyer received a strike.
     * @return string 'ClosedNoFVFCreditStrike'
     */
    const VALUE_CLOSED_NO_FVFCREDIT_STRIKE = 'ClosedNoFVFCreditStrike';
    /**
     * Constant for value 'ClosedFVFCreditNoStrike'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the Unpaid Item dispute is closed, the seller received a Final Value Fee credit, and the buyer did not receive a strike.
     * @return string 'ClosedFVFCreditNoStrike'
     */
    const VALUE_CLOSED_FVFCREDIT_NO_STRIKE = 'ClosedFVFCreditNoStrike';
    /**
     * Constant for value 'ClosedNoFVFCreditNoStrike'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the Unpaid Item dispute is closed, the seller did not receive a Final Value Fee credit, and the buyer did not receive a strike.
     * @return string 'ClosedNoFVFCreditNoStrike'
     */
    const VALUE_CLOSED_NO_FVFCREDIT_NO_STRIKE = 'ClosedNoFVFCreditNoStrike';
    /**
     * Constant for value 'StrikeAppealedAfterClosing'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the Unpaid Item dispute was closed with a buyer's strike, but the buyer has appealed that strike.
     * @return string 'StrikeAppealedAfterClosing'
     */
    const VALUE_STRIKE_APPEALED_AFTER_CLOSING = 'StrikeAppealedAfterClosing';
    /**
     * Constant for value 'FVFCreditReversedAfterClosing'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the seller's Final Value Fee credit was reversed after the Unpaid Item dispute was closed.
     * @return string 'FVFCreditReversedAfterClosing'
     */
    const VALUE_FVFCREDIT_REVERSED_AFTER_CLOSING = 'FVFCreditReversedAfterClosing';
    /**
     * Constant for value 'StrikeAppealedAndFVFCreditReversed'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the seller's Final Value Fee credit was reversed and the buyer's strike was appealed after the Unpaid Item dispute was closed.
     * @return string 'StrikeAppealedAndFVFCreditReversed'
     */
    const VALUE_STRIKE_APPEALED_AND_FVFCREDIT_REVERSED = 'StrikeAppealedAndFVFCreditReversed';
    /**
     * Constant for value 'ClaimOpened'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the claim was assigned to an adjuster.
     * @return string 'ClaimOpened'
     */
    const VALUE_CLAIM_OPENED = 'ClaimOpened';
    /**
     * Constant for value 'NoDocumentation'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the buyer was contacted by eBay and asked to submit paperwork.
     * @return string 'NoDocumentation'
     */
    const VALUE_NO_DOCUMENTATION = 'NoDocumentation';
    /**
     * Constant for value 'ClaimClosed'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the claim was closed due to the buyer not responding to verification or due to missing paperwork.
     * @return string 'ClaimClosed'
     */
    const VALUE_CLAIM_CLOSED = 'ClaimClosed';
    /**
     * Constant for value 'ClaimDenied'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the claim was denied.
     * @return string 'ClaimDenied'
     */
    const VALUE_CLAIM_DENIED = 'ClaimDenied';
    /**
     * Constant for value 'ClaimInProcess'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that paperwork was received for the claim, and the claim is being investigated.
     * @return string 'ClaimInProcess'
     */
    const VALUE_CLAIM_IN_PROCESS = 'ClaimInProcess';
    /**
     * Constant for value 'ClaimApproved'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the claim was approved for reimbursement, and sent to accounts payable for payment.
     * @return string 'ClaimApproved'
     */
    const VALUE_CLAIM_APPROVED = 'ClaimApproved';
    /**
     * Constant for value 'ClaimPaid'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the claim was paid.
     * @return string 'ClaimPaid'
     */
    const VALUE_CLAIM_PAID = 'ClaimPaid';
    /**
     * Constant for value 'ClaimResolved'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the buyer's dispute against the seller was resolved, due to the seller sending the item or refunding the buyer.
     * @return string 'ClaimResolved'
     */
    const VALUE_CLAIM_RESOLVED = 'ClaimResolved';
    /**
     * Constant for value 'ClaimSubmitted'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the claim was submitted via Web.
     * @return string 'ClaimSubmitted'
     */
    const VALUE_CLAIM_SUBMITTED = 'ClaimSubmitted';
    /**
     * Constant for value 'UnpaidItemOpened'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that an Unpaid Item dispute was opened by the seller against the buyer.
     * @return string 'UnpaidItemOpened'
     */
    const VALUE_UNPAID_ITEM_OPENED = 'UnpaidItemOpened';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_CLOSED
     * @uses self::VALUE_WAITING_FOR_SELLER_RESPONSE
     * @uses self::VALUE_WAITING_FOR_BUYER_RESPONSE
     * @uses self::VALUE_CLOSED_FVFCREDIT_STRIKE
     * @uses self::VALUE_CLOSED_NO_FVFCREDIT_STRIKE
     * @uses self::VALUE_CLOSED_FVFCREDIT_NO_STRIKE
     * @uses self::VALUE_CLOSED_NO_FVFCREDIT_NO_STRIKE
     * @uses self::VALUE_STRIKE_APPEALED_AFTER_CLOSING
     * @uses self::VALUE_FVFCREDIT_REVERSED_AFTER_CLOSING
     * @uses self::VALUE_STRIKE_APPEALED_AND_FVFCREDIT_REVERSED
     * @uses self::VALUE_CLAIM_OPENED
     * @uses self::VALUE_NO_DOCUMENTATION
     * @uses self::VALUE_CLAIM_CLOSED
     * @uses self::VALUE_CLAIM_DENIED
     * @uses self::VALUE_CLAIM_IN_PROCESS
     * @uses self::VALUE_CLAIM_APPROVED
     * @uses self::VALUE_CLAIM_PAID
     * @uses self::VALUE_CLAIM_RESOLVED
     * @uses self::VALUE_CLAIM_SUBMITTED
     * @uses self::VALUE_UNPAID_ITEM_OPENED
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_CLOSED,
            self::VALUE_WAITING_FOR_SELLER_RESPONSE,
            self::VALUE_WAITING_FOR_BUYER_RESPONSE,
            self::VALUE_CLOSED_FVFCREDIT_STRIKE,
            self::VALUE_CLOSED_NO_FVFCREDIT_STRIKE,
            self::VALUE_CLOSED_FVFCREDIT_NO_STRIKE,
            self::VALUE_CLOSED_NO_FVFCREDIT_NO_STRIKE,
            self::VALUE_STRIKE_APPEALED_AFTER_CLOSING,
            self::VALUE_FVFCREDIT_REVERSED_AFTER_CLOSING,
            self::VALUE_STRIKE_APPEALED_AND_FVFCREDIT_REVERSED,
            self::VALUE_CLAIM_OPENED,
            self::VALUE_NO_DOCUMENTATION,
            self::VALUE_CLAIM_CLOSED,
            self::VALUE_CLAIM_DENIED,
            self::VALUE_CLAIM_IN_PROCESS,
            self::VALUE_CLAIM_APPROVED,
            self::VALUE_CLAIM_PAID,
            self::VALUE_CLAIM_RESOLVED,
            self::VALUE_CLAIM_SUBMITTED,
            self::VALUE_UNPAID_ITEM_OPENED,
            self::VALUE_CUSTOM_CODE,
        );
    }
}
