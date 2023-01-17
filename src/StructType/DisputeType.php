<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DisputeType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains all information describing an Unpaid Item case.
 * @subpackage Structs
 */
class DisputeType extends AbstractStructBase
{
    /**
     * The DisputeID
     * Meta information extracted from the WSDL
     * - documentation: The unique identifier of an Unpaid Item case. | The unique identifier of an Unpaid Item case involving a buyer and seller. <br/><br/> <span class="tablenote"><strong>Note:</strong> Despite the name, this type is now only used to
     * identify an Unpaid Item case, and the identifier of an eBay case uses a 'case ID' and not a 'dispute ID'. However, the <strong>DisputeID</strong> field in Dispute calls handles Unpaid Item case IDs. </span>
     * - base: xs:string
     * - minOccurs: 0
     * @var string
     */
    public $DisputeID;
    /**
     * The DisputeRecordType
     * Meta information extracted from the WSDL
     * - documentation: A value to indicate the type of dispute. <br/><br/> <span class="tablenote"><strong>Note:</strong> The <b>GetDispute</b> and <b>GetUserDisputes</b> calls now only retrieve Unpaid Item cases, so the enumeration value returned here
     * should always be <code>UnpaidItem</code>. </span>
     * - minOccurs: 0
     * @var string
     */
    public $DisputeRecordType;
    /**
     * The DisputeState
     * Meta information extracted from the WSDL
     * - documentation: The state of the dispute. The value determines which values of <b>DisputeActivity</b> are valid when responding to an Unpaid Item case with an <b>AddDisputeResponse</b>.
     * - minOccurs: 0
     * @var string
     */
    public $DisputeState;
    /**
     * The DisputeStatus
     * Meta information extracted from the WSDL
     * - documentation: The status of the dispute, which provides additional information about the dispute state.
     * - minOccurs: 0
     * @var string
     */
    public $DisputeStatus;
    /**
     * The OtherPartyRole
     * Meta information extracted from the WSDL
     * - documentation: The role of the person involved in the Unpaid Item case who is not taking action or requesting information. The role is either <b>Buyer</b> or <b>Seller</b>.
     * - minOccurs: 0
     * @var string
     */
    public $OtherPartyRole;
    /**
     * The OtherPartyName
     * Meta information extracted from the WSDL
     * - documentation: The user name of the person involved in the Unpaid Item case who is not taking action or requesting information.
     * - minOccurs: 0
     * @var string
     */
    public $OtherPartyName;
    /**
     * The UserRole
     * Meta information extracted from the WSDL
     * - documentation: The role of the person involved in the Unpaid Item case who is taking action or requesting information. The role is either <b>Buyer</b> or <b>Seller</b>.
     * - minOccurs: 0
     * @var string
     */
    public $UserRole;
    /**
     * The BuyerUserID
     * Meta information extracted from the WSDL
     * - documentation: The eBay user ID of the buyer involved in the Unpaid Item case. | This is a string wrapper for the eBay ID that uniquely identifies a user. This is used by several other types to identify a specific eBay user, such as
     * DisputeType.xsd, FeedbackInfoType.xsd, GetAllBidders, OrderType, and so on. <br><br>For GetAllBidders, some bidder information is anonymous, to protect bidders from fraud. If the seller makes this API call, the actual IDs of all bidders on the
     * seller's item will be returned. If a bidder makes this API call, the bidder's actual ID will be returned, but information for all competing bidders or outside watchers will be returned as anonymized userIDs.
     * - base: xs:string
     * - minOccurs: 0
     * @var string
     */
    public $BuyerUserID;
    /**
     * The SellerUserID
     * Meta information extracted from the WSDL
     * - documentation: The eBay user ID of the seller involved in the Unpaid Item case. | This is a string wrapper for the eBay ID that uniquely identifies a user. This is used by several other types to identify a specific eBay user, such as
     * DisputeType.xsd, FeedbackInfoType.xsd, GetAllBidders, OrderType, and so on. <br><br>For GetAllBidders, some bidder information is anonymous, to protect bidders from fraud. If the seller makes this API call, the actual IDs of all bidders on the
     * seller's item will be returned. If a bidder makes this API call, the bidder's actual ID will be returned, but information for all competing bidders or outside watchers will be returned as anonymized userIDs.
     * - base: xs:string
     * - minOccurs: 0
     * @var string
     */
    public $SellerUserID;
    /**
     * The TransactionID
     * Meta information extracted from the WSDL
     * - documentation: The unique identifier of the sales transaction with an Unpaid Item case filed against it. <br> <br> The <b>TransactionID</b> value for auction listings is always <code>0</code> since there can be only one winning bidder/one sale for
     * an auction listing.
     * - minOccurs: 0
     * @var string
     */
    public $TransactionID;
    /**
     * The Item
     * Meta information extracted from the WSDL
     * - documentation: Container consisting of high-level details about the item involved in the Unpaid Item case.
     * - minOccurs: 0
     * @var \StructType\ItemType
     */
    public $Item;
    /**
     * The DisputeReason
     * Meta information extracted from the WSDL
     * - documentation: The reason for the Unpaid Item case. Since <b>GetDispute</b> and <b>GetUserDisputes</b> calls now only retrieve Unpaid Item cases, this value should always be <code>BuyerHasNotPaid</code>.
     * - minOccurs: 0
     * @var string
     */
    public $DisputeReason;
    /**
     * The DisputeExplanation
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value provides more details about why the Unpaid Item case was created. See <b>DisputeExplanationCodeList</b> type for explanation of values.
     * - minOccurs: 0
     * @var string
     */
    public $DisputeExplanation;
    /**
     * The DisputeCreditEligibility
     * Meta information extracted from the WSDL
     * - documentation: A value to indicate whether or not the seller is currently eligible for a Final Value Fee credit. The seller becomes eligible for a Final Value Fee credit after filing and winning an Unpaid Item case. This tag only indicates credit
     * eligibility and does not mean that the case can be closed. The seller can open an Unpaid Item case as soon as two days after the listing ends. <br>
     * - minOccurs: 0
     * @var string
     */
    public $DisputeCreditEligibility;
    /**
     * The DisputeCreatedTime
     * Meta information extracted from the WSDL
     * - documentation: The date and time the Unpaid Item case was created, in GMT.
     * - minOccurs: 0
     * @var string
     */
    public $DisputeCreatedTime;
    /**
     * The DisputeModifiedTime
     * Meta information extracted from the WSDL
     * - documentation: The date and time the Unpaid Item case was last modified, in GMT.
     * - minOccurs: 0
     * @var string
     */
    public $DisputeModifiedTime;
    /**
     * The DisputeResolution
     * Meta information extracted from the WSDL
     * - documentation: This container provides more details about the results of an Unpaid Item case once it is resolved. Results could possibly include a Final Value Fee credit to the seller and an Unpaid Item strike to the buyer. This container will only
     * be returned after the Unpaid Item case is resolved.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\DisputeResolutionType[]
     */
    public $DisputeResolution;
    /**
     * The DisputeMessage
     * Meta information extracted from the WSDL
     * - documentation: This field will contain a response or message related to the Unpaid Item case, posted by either the buyer or the seller.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\DisputeMessageType[]
     */
    public $DisputeMessage;
    /**
     * The Escalation
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as <code>true</code> if the buyer is eligible to appeal a closed Unpaid Item case.
     * - minOccurs: 0
     * @var bool
     */
    public $Escalation;
    /**
     * The PurchaseProtection
     * Meta information extracted from the WSDL
     * - documentation: This field is no longer applicable, and if it is returned, it can be ignored.
     * - minOccurs: 0
     * @var bool
     */
    public $PurchaseProtection;
    /**
     * The OrderLineItemID
     * Meta information extracted from the WSDL
     * - documentation: The unique identifier of the order line item with an Unpaid Item case filed against it. <br>
     * - minOccurs: 0
     * @var string
     */
    public $OrderLineItemID;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for DisputeType
     * @uses DisputeType::setDisputeID()
     * @uses DisputeType::setDisputeRecordType()
     * @uses DisputeType::setDisputeState()
     * @uses DisputeType::setDisputeStatus()
     * @uses DisputeType::setOtherPartyRole()
     * @uses DisputeType::setOtherPartyName()
     * @uses DisputeType::setUserRole()
     * @uses DisputeType::setBuyerUserID()
     * @uses DisputeType::setSellerUserID()
     * @uses DisputeType::setTransactionID()
     * @uses DisputeType::setItem()
     * @uses DisputeType::setDisputeReason()
     * @uses DisputeType::setDisputeExplanation()
     * @uses DisputeType::setDisputeCreditEligibility()
     * @uses DisputeType::setDisputeCreatedTime()
     * @uses DisputeType::setDisputeModifiedTime()
     * @uses DisputeType::setDisputeResolution()
     * @uses DisputeType::setDisputeMessage()
     * @uses DisputeType::setEscalation()
     * @uses DisputeType::setPurchaseProtection()
     * @uses DisputeType::setOrderLineItemID()
     * @uses DisputeType::setAny()
     * @param string $disputeID
     * @param string $disputeRecordType
     * @param string $disputeState
     * @param string $disputeStatus
     * @param string $otherPartyRole
     * @param string $otherPartyName
     * @param string $userRole
     * @param string $buyerUserID
     * @param string $sellerUserID
     * @param string $transactionID
     * @param \StructType\ItemType $item
     * @param string $disputeReason
     * @param string $disputeExplanation
     * @param string $disputeCreditEligibility
     * @param string $disputeCreatedTime
     * @param string $disputeModifiedTime
     * @param \StructType\DisputeResolutionType[] $disputeResolution
     * @param \StructType\DisputeMessageType[] $disputeMessage
     * @param bool $escalation
     * @param bool $purchaseProtection
     * @param string $orderLineItemID
     * @param \DOMDocument $any
     */
    public function __construct($disputeID = null, $disputeRecordType = null, $disputeState = null, $disputeStatus = null, $otherPartyRole = null, $otherPartyName = null, $userRole = null, $buyerUserID = null, $sellerUserID = null, $transactionID = null, \StructType\ItemType $item = null, $disputeReason = null, $disputeExplanation = null, $disputeCreditEligibility = null, $disputeCreatedTime = null, $disputeModifiedTime = null, array $disputeResolution = array(), array $disputeMessage = array(), $escalation = null, $purchaseProtection = null, $orderLineItemID = null, \DOMDocument $any = null)
    {
        $this
            ->setDisputeID($disputeID)
            ->setDisputeRecordType($disputeRecordType)
            ->setDisputeState($disputeState)
            ->setDisputeStatus($disputeStatus)
            ->setOtherPartyRole($otherPartyRole)
            ->setOtherPartyName($otherPartyName)
            ->setUserRole($userRole)
            ->setBuyerUserID($buyerUserID)
            ->setSellerUserID($sellerUserID)
            ->setTransactionID($transactionID)
            ->setItem($item)
            ->setDisputeReason($disputeReason)
            ->setDisputeExplanation($disputeExplanation)
            ->setDisputeCreditEligibility($disputeCreditEligibility)
            ->setDisputeCreatedTime($disputeCreatedTime)
            ->setDisputeModifiedTime($disputeModifiedTime)
            ->setDisputeResolution($disputeResolution)
            ->setDisputeMessage($disputeMessage)
            ->setEscalation($escalation)
            ->setPurchaseProtection($purchaseProtection)
            ->setOrderLineItemID($orderLineItemID)
            ->setAny($any);
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
     * @return \StructType\DisputeType
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
     * Get DisputeRecordType value
     * @return string|null
     */
    public function getDisputeRecordType()
    {
        return $this->DisputeRecordType;
    }
    /**
     * Set DisputeRecordType value
     * @uses \EnumType\DisputeRecordTypeCodeType::valueIsValid()
     * @uses \EnumType\DisputeRecordTypeCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $disputeRecordType
     * @return \StructType\DisputeType
     */
    public function setDisputeRecordType($disputeRecordType = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\DisputeRecordTypeCodeType::valueIsValid($disputeRecordType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\DisputeRecordTypeCodeType', is_array($disputeRecordType) ? implode(', ', $disputeRecordType) : var_export($disputeRecordType, true), implode(', ', \EnumType\DisputeRecordTypeCodeType::getValidValues())), __LINE__);
        }
        $this->DisputeRecordType = $disputeRecordType;
        return $this;
    }
    /**
     * Get DisputeState value
     * @return string|null
     */
    public function getDisputeState()
    {
        return $this->DisputeState;
    }
    /**
     * Set DisputeState value
     * @uses \EnumType\DisputeStateCodeType::valueIsValid()
     * @uses \EnumType\DisputeStateCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $disputeState
     * @return \StructType\DisputeType
     */
    public function setDisputeState($disputeState = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\DisputeStateCodeType::valueIsValid($disputeState)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\DisputeStateCodeType', is_array($disputeState) ? implode(', ', $disputeState) : var_export($disputeState, true), implode(', ', \EnumType\DisputeStateCodeType::getValidValues())), __LINE__);
        }
        $this->DisputeState = $disputeState;
        return $this;
    }
    /**
     * Get DisputeStatus value
     * @return string|null
     */
    public function getDisputeStatus()
    {
        return $this->DisputeStatus;
    }
    /**
     * Set DisputeStatus value
     * @uses \EnumType\DisputeStatusCodeType::valueIsValid()
     * @uses \EnumType\DisputeStatusCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $disputeStatus
     * @return \StructType\DisputeType
     */
    public function setDisputeStatus($disputeStatus = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\DisputeStatusCodeType::valueIsValid($disputeStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\DisputeStatusCodeType', is_array($disputeStatus) ? implode(', ', $disputeStatus) : var_export($disputeStatus, true), implode(', ', \EnumType\DisputeStatusCodeType::getValidValues())), __LINE__);
        }
        $this->DisputeStatus = $disputeStatus;
        return $this;
    }
    /**
     * Get OtherPartyRole value
     * @return string|null
     */
    public function getOtherPartyRole()
    {
        return $this->OtherPartyRole;
    }
    /**
     * Set OtherPartyRole value
     * @uses \EnumType\TradingRoleCodeType::valueIsValid()
     * @uses \EnumType\TradingRoleCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $otherPartyRole
     * @return \StructType\DisputeType
     */
    public function setOtherPartyRole($otherPartyRole = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\TradingRoleCodeType::valueIsValid($otherPartyRole)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\TradingRoleCodeType', is_array($otherPartyRole) ? implode(', ', $otherPartyRole) : var_export($otherPartyRole, true), implode(', ', \EnumType\TradingRoleCodeType::getValidValues())), __LINE__);
        }
        $this->OtherPartyRole = $otherPartyRole;
        return $this;
    }
    /**
     * Get OtherPartyName value
     * @return string|null
     */
    public function getOtherPartyName()
    {
        return $this->OtherPartyName;
    }
    /**
     * Set OtherPartyName value
     * @param string $otherPartyName
     * @return \StructType\DisputeType
     */
    public function setOtherPartyName($otherPartyName = null)
    {
        // validation for constraint: string
        if (!is_null($otherPartyName) && !is_string($otherPartyName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($otherPartyName, true), gettype($otherPartyName)), __LINE__);
        }
        $this->OtherPartyName = $otherPartyName;
        return $this;
    }
    /**
     * Get UserRole value
     * @return string|null
     */
    public function getUserRole()
    {
        return $this->UserRole;
    }
    /**
     * Set UserRole value
     * @uses \EnumType\TradingRoleCodeType::valueIsValid()
     * @uses \EnumType\TradingRoleCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $userRole
     * @return \StructType\DisputeType
     */
    public function setUserRole($userRole = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\TradingRoleCodeType::valueIsValid($userRole)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\TradingRoleCodeType', is_array($userRole) ? implode(', ', $userRole) : var_export($userRole, true), implode(', ', \EnumType\TradingRoleCodeType::getValidValues())), __LINE__);
        }
        $this->UserRole = $userRole;
        return $this;
    }
    /**
     * Get BuyerUserID value
     * @return string|null
     */
    public function getBuyerUserID()
    {
        return $this->BuyerUserID;
    }
    /**
     * Set BuyerUserID value
     * @param string $buyerUserID
     * @return \StructType\DisputeType
     */
    public function setBuyerUserID($buyerUserID = null)
    {
        // validation for constraint: string
        if (!is_null($buyerUserID) && !is_string($buyerUserID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($buyerUserID, true), gettype($buyerUserID)), __LINE__);
        }
        $this->BuyerUserID = $buyerUserID;
        return $this;
    }
    /**
     * Get SellerUserID value
     * @return string|null
     */
    public function getSellerUserID()
    {
        return $this->SellerUserID;
    }
    /**
     * Set SellerUserID value
     * @param string $sellerUserID
     * @return \StructType\DisputeType
     */
    public function setSellerUserID($sellerUserID = null)
    {
        // validation for constraint: string
        if (!is_null($sellerUserID) && !is_string($sellerUserID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sellerUserID, true), gettype($sellerUserID)), __LINE__);
        }
        $this->SellerUserID = $sellerUserID;
        return $this;
    }
    /**
     * Get TransactionID value
     * @return string|null
     */
    public function getTransactionID()
    {
        return $this->TransactionID;
    }
    /**
     * Set TransactionID value
     * @param string $transactionID
     * @return \StructType\DisputeType
     */
    public function setTransactionID($transactionID = null)
    {
        // validation for constraint: string
        if (!is_null($transactionID) && !is_string($transactionID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transactionID, true), gettype($transactionID)), __LINE__);
        }
        $this->TransactionID = $transactionID;
        return $this;
    }
    /**
     * Get Item value
     * @return \StructType\ItemType|null
     */
    public function getItem()
    {
        return $this->Item;
    }
    /**
     * Set Item value
     * @param \StructType\ItemType $item
     * @return \StructType\DisputeType
     */
    public function setItem(\StructType\ItemType $item = null)
    {
        $this->Item = $item;
        return $this;
    }
    /**
     * Get DisputeReason value
     * @return string|null
     */
    public function getDisputeReason()
    {
        return $this->DisputeReason;
    }
    /**
     * Set DisputeReason value
     * @uses \EnumType\DisputeReasonCodeType::valueIsValid()
     * @uses \EnumType\DisputeReasonCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $disputeReason
     * @return \StructType\DisputeType
     */
    public function setDisputeReason($disputeReason = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\DisputeReasonCodeType::valueIsValid($disputeReason)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\DisputeReasonCodeType', is_array($disputeReason) ? implode(', ', $disputeReason) : var_export($disputeReason, true), implode(', ', \EnumType\DisputeReasonCodeType::getValidValues())), __LINE__);
        }
        $this->DisputeReason = $disputeReason;
        return $this;
    }
    /**
     * Get DisputeExplanation value
     * @return string|null
     */
    public function getDisputeExplanation()
    {
        return $this->DisputeExplanation;
    }
    /**
     * Set DisputeExplanation value
     * @uses \EnumType\DisputeExplanationCodeType::valueIsValid()
     * @uses \EnumType\DisputeExplanationCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $disputeExplanation
     * @return \StructType\DisputeType
     */
    public function setDisputeExplanation($disputeExplanation = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\DisputeExplanationCodeType::valueIsValid($disputeExplanation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\DisputeExplanationCodeType', is_array($disputeExplanation) ? implode(', ', $disputeExplanation) : var_export($disputeExplanation, true), implode(', ', \EnumType\DisputeExplanationCodeType::getValidValues())), __LINE__);
        }
        $this->DisputeExplanation = $disputeExplanation;
        return $this;
    }
    /**
     * Get DisputeCreditEligibility value
     * @return string|null
     */
    public function getDisputeCreditEligibility()
    {
        return $this->DisputeCreditEligibility;
    }
    /**
     * Set DisputeCreditEligibility value
     * @uses \EnumType\DisputeCreditEligibilityCodeType::valueIsValid()
     * @uses \EnumType\DisputeCreditEligibilityCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $disputeCreditEligibility
     * @return \StructType\DisputeType
     */
    public function setDisputeCreditEligibility($disputeCreditEligibility = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\DisputeCreditEligibilityCodeType::valueIsValid($disputeCreditEligibility)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\DisputeCreditEligibilityCodeType', is_array($disputeCreditEligibility) ? implode(', ', $disputeCreditEligibility) : var_export($disputeCreditEligibility, true), implode(', ', \EnumType\DisputeCreditEligibilityCodeType::getValidValues())), __LINE__);
        }
        $this->DisputeCreditEligibility = $disputeCreditEligibility;
        return $this;
    }
    /**
     * Get DisputeCreatedTime value
     * @return string|null
     */
    public function getDisputeCreatedTime()
    {
        return $this->DisputeCreatedTime;
    }
    /**
     * Set DisputeCreatedTime value
     * @param string $disputeCreatedTime
     * @return \StructType\DisputeType
     */
    public function setDisputeCreatedTime($disputeCreatedTime = null)
    {
        // validation for constraint: string
        if (!is_null($disputeCreatedTime) && !is_string($disputeCreatedTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($disputeCreatedTime, true), gettype($disputeCreatedTime)), __LINE__);
        }
        $this->DisputeCreatedTime = $disputeCreatedTime;
        return $this;
    }
    /**
     * Get DisputeModifiedTime value
     * @return string|null
     */
    public function getDisputeModifiedTime()
    {
        return $this->DisputeModifiedTime;
    }
    /**
     * Set DisputeModifiedTime value
     * @param string $disputeModifiedTime
     * @return \StructType\DisputeType
     */
    public function setDisputeModifiedTime($disputeModifiedTime = null)
    {
        // validation for constraint: string
        if (!is_null($disputeModifiedTime) && !is_string($disputeModifiedTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($disputeModifiedTime, true), gettype($disputeModifiedTime)), __LINE__);
        }
        $this->DisputeModifiedTime = $disputeModifiedTime;
        return $this;
    }
    /**
     * Get DisputeResolution value
     * @return \StructType\DisputeResolutionType[]|null
     */
    public function getDisputeResolution()
    {
        return $this->DisputeResolution;
    }
    /**
     * This method is responsible for validating the values passed to the setDisputeResolution method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDisputeResolution method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDisputeResolutionForArrayConstraintsFromSetDisputeResolution(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $disputeTypeDisputeResolutionItem) {
            // validation for constraint: itemType
            if (!$disputeTypeDisputeResolutionItem instanceof \StructType\DisputeResolutionType) {
                $invalidValues[] = is_object($disputeTypeDisputeResolutionItem) ? get_class($disputeTypeDisputeResolutionItem) : sprintf('%s(%s)', gettype($disputeTypeDisputeResolutionItem), var_export($disputeTypeDisputeResolutionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The DisputeResolution property can only contain items of type \StructType\DisputeResolutionType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set DisputeResolution value
     * @throws \InvalidArgumentException
     * @param \StructType\DisputeResolutionType[] $disputeResolution
     * @return \StructType\DisputeType
     */
    public function setDisputeResolution(array $disputeResolution = array())
    {
        // validation for constraint: array
        if ('' !== ($disputeResolutionArrayErrorMessage = self::validateDisputeResolutionForArrayConstraintsFromSetDisputeResolution($disputeResolution))) {
            throw new \InvalidArgumentException($disputeResolutionArrayErrorMessage, __LINE__);
        }
        $this->DisputeResolution = $disputeResolution;
        return $this;
    }
    /**
     * Add item to DisputeResolution value
     * @throws \InvalidArgumentException
     * @param \StructType\DisputeResolutionType $item
     * @return \StructType\DisputeType
     */
    public function addToDisputeResolution(\StructType\DisputeResolutionType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\DisputeResolutionType) {
            throw new \InvalidArgumentException(sprintf('The DisputeResolution property can only contain items of type \StructType\DisputeResolutionType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->DisputeResolution[] = $item;
        return $this;
    }
    /**
     * Get DisputeMessage value
     * @return \StructType\DisputeMessageType[]|null
     */
    public function getDisputeMessage()
    {
        return $this->DisputeMessage;
    }
    /**
     * This method is responsible for validating the values passed to the setDisputeMessage method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDisputeMessage method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDisputeMessageForArrayConstraintsFromSetDisputeMessage(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $disputeTypeDisputeMessageItem) {
            // validation for constraint: itemType
            if (!$disputeTypeDisputeMessageItem instanceof \StructType\DisputeMessageType) {
                $invalidValues[] = is_object($disputeTypeDisputeMessageItem) ? get_class($disputeTypeDisputeMessageItem) : sprintf('%s(%s)', gettype($disputeTypeDisputeMessageItem), var_export($disputeTypeDisputeMessageItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The DisputeMessage property can only contain items of type \StructType\DisputeMessageType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set DisputeMessage value
     * @throws \InvalidArgumentException
     * @param \StructType\DisputeMessageType[] $disputeMessage
     * @return \StructType\DisputeType
     */
    public function setDisputeMessage(array $disputeMessage = array())
    {
        // validation for constraint: array
        if ('' !== ($disputeMessageArrayErrorMessage = self::validateDisputeMessageForArrayConstraintsFromSetDisputeMessage($disputeMessage))) {
            throw new \InvalidArgumentException($disputeMessageArrayErrorMessage, __LINE__);
        }
        $this->DisputeMessage = $disputeMessage;
        return $this;
    }
    /**
     * Add item to DisputeMessage value
     * @throws \InvalidArgumentException
     * @param \StructType\DisputeMessageType $item
     * @return \StructType\DisputeType
     */
    public function addToDisputeMessage(\StructType\DisputeMessageType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\DisputeMessageType) {
            throw new \InvalidArgumentException(sprintf('The DisputeMessage property can only contain items of type \StructType\DisputeMessageType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->DisputeMessage[] = $item;
        return $this;
    }
    /**
     * Get Escalation value
     * @return bool|null
     */
    public function getEscalation()
    {
        return $this->Escalation;
    }
    /**
     * Set Escalation value
     * @param bool $escalation
     * @return \StructType\DisputeType
     */
    public function setEscalation($escalation = null)
    {
        // validation for constraint: boolean
        if (!is_null($escalation) && !is_bool($escalation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($escalation, true), gettype($escalation)), __LINE__);
        }
        $this->Escalation = $escalation;
        return $this;
    }
    /**
     * Get PurchaseProtection value
     * @return bool|null
     */
    public function getPurchaseProtection()
    {
        return $this->PurchaseProtection;
    }
    /**
     * Set PurchaseProtection value
     * @param bool $purchaseProtection
     * @return \StructType\DisputeType
     */
    public function setPurchaseProtection($purchaseProtection = null)
    {
        // validation for constraint: boolean
        if (!is_null($purchaseProtection) && !is_bool($purchaseProtection)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($purchaseProtection, true), gettype($purchaseProtection)), __LINE__);
        }
        $this->PurchaseProtection = $purchaseProtection;
        return $this;
    }
    /**
     * Get OrderLineItemID value
     * @return string|null
     */
    public function getOrderLineItemID()
    {
        return $this->OrderLineItemID;
    }
    /**
     * Set OrderLineItemID value
     * @param string $orderLineItemID
     * @return \StructType\DisputeType
     */
    public function setOrderLineItemID($orderLineItemID = null)
    {
        // validation for constraint: string
        if (!is_null($orderLineItemID) && !is_string($orderLineItemID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orderLineItemID, true), gettype($orderLineItemID)), __LINE__);
        }
        $this->OrderLineItemID = $orderLineItemID;
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
     * @return \StructType\DisputeType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
