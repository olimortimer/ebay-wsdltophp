<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AdFormatLeadType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is used by the <b>AdFormatLead</b> container that is returned in the <b>GetAdFormatLeads</b> call response. An <b>AdFormatLead</b> container will be returned for each user that has expressed interest in the Classified Ad
 * listing that was specified by the seller in the <b>GetAdFormatLeads</b> call request. Each <b>AdFormatLead</b> container consists of prospective buyer contact information and other details associated with a lead for a Classified Ad listing.
 * @subpackage Structs
 */
class AdFormatLeadType extends AbstractStructBase
{
    /**
     * The AdditionalInformation
     * Meta information extracted from the WSDL
     * - documentation: This field shows the message that was sent from the prospective buyer to the seller. This will be the same content that is returned in the <b>AdFormatLead.MemberMessage.MemberMessageExchange.Question.Body</b> field (that is only
     * displayed if the <b>IncludeMemberMessages</b> boolean field is included in the request and set to <code>true</code>). The advantage of retrieving the <b>MemberMessageExchange</b> node, however, is that you retrieve the entire exchange between the
     * seller and the prospective buyer.
     * - minOccurs: 0
     * @var string
     */
    public $AdditionalInformation;
    /**
     * The Address
     * Meta information extracted from the WSDL
     * - documentation: This container consists of contact information for the prospective buyer. This container will not be returned if the buyer did not provide any contact information.
     * - minOccurs: 0
     * @var \StructType\AddressType
     */
    public $Address;
    /**
     * The BestTimeToCall
     * Meta information extracted from the WSDL
     * - documentation: The time of day when the prospective buyer prefers to be contacted by the seller. This field is not returned if this information is unavailable.
     * - minOccurs: 0
     * @var string
     */
    public $BestTimeToCall;
    /**
     * The Email
     * Meta information extracted from the WSDL
     * - documentation: Email address for the prospective buyer. If the prospective buyer chooses to hide his email address when contacting the seller, this element contains two dashes (--) instead of an email address.
     * - minOccurs: 0
     * @var string
     */
    public $Email;
    /**
     * The SubmittedTime
     * Meta information extracted from the WSDL
     * - documentation: Date and time (in GMT) that the lead was submitted.
     * - minOccurs: 0
     * @var string
     */
    public $SubmittedTime;
    /**
     * The ItemID
     * Meta information extracted from the WSDL
     * - documentation: The unique identifier of the listing. | Type that represents the unique identifier for an eBay listing.
     * - base: xs:string
     * - minOccurs: 0
     * @var string
     */
    public $ItemID;
    /**
     * The ItemTitle
     * Meta information extracted from the WSDL
     * - documentation: The title of the listing.
     * - minOccurs: 0
     * @var string
     */
    public $ItemTitle;
    /**
     * The UserID
     * Meta information extracted from the WSDL
     * - documentation: The eBay user ID of the user who is interested in the seller's item. | This is a string wrapper for the eBay ID that uniquely identifies a user. This is used by several other types to identify a specific eBay user. <br><br>For
     * GetAllBidders, some bidder information is anonymous, to protect bidders from fraud. If the seller makes this API call, the actual IDs of all bidders on the seller's item will be returned. If a bidder makes this API call, the bidder's actual ID will
     * be returned, but information for all competing bidders or outside watchers will be returned as anonymized userIDs.
     * - base: xs:string
     * - minOccurs: 0
     * @var string
     */
    public $UserID;
    /**
     * The MemberMessage
     * Meta information extracted from the WSDL
     * - documentation: Contains any mail message content shared between the seller and prospective buyer.
     * - minOccurs: 0
     * @var \ArrayType\MemberMessageExchangeArrayType
     */
    public $MemberMessage;
    /**
     * The Status
     * Meta information extracted from the WSDL
     * - documentation: The enumeration value in this field will indicate whether or not the seller has responded to the lead.
     * - minOccurs: 0
     * @var string
     */
    public $Status;
    /**
     * The LeadFee
     * Meta information extracted from the WSDL
     * - documentation: The pay-per-lead feature is no longer available, and this field is scheduled to be removed from the WSDL.
     * - minOccurs: 0
     * @var \StructType\AmountType
     */
    public $LeadFee;
    /**
     * The ExternalEmail
     * Meta information extracted from the WSDL
     * - documentation: Email address for the prospective buyer as entered in the lead form on the View Item page. Provides a way for sellers to contact prospective buyers who choose not to log in to eBay. This applies to only eBay Motors and eBay Motors
     * categories.
     * - minOccurs: 0
     * @var string
     */
    public $ExternalEmail;
    /**
     * The PurchaseTimeFrame
     * Meta information extracted from the WSDL
     * - documentation: Prospective buyer's time frame for purchasing a vehicle as entered in the Lead form on View Item page for eBay Motors and eBay Motors categories. Purchasing Time Frames include: <ul> <li> within next 3 days </li> <li> within a week
     * </li> <li> within a month </li> <li> within three months </li> <li> in more than three months </li> <li> within an undecided time frame </li> </ul>
     * - minOccurs: 0
     * @var string
     */
    public $PurchaseTimeFrame;
    /**
     * The TradeInYear
     * Meta information extracted from the WSDL
     * - documentation: The year of the vehicle the prospective buyer would like to trade in. Entered on the lead form on the View Item page. Applies to eBay Motors and Motors categories only.
     * - minOccurs: 0
     * @var string
     */
    public $TradeInYear;
    /**
     * The TradeInMake
     * Meta information extracted from the WSDL
     * - documentation: The make of the vehicle the prospective buyer would like to trade in. Entered on the lead form on the View Item page. Applies to eBay Motors and Motors categories only.
     * - minOccurs: 0
     * @var string
     */
    public $TradeInMake;
    /**
     * The TradeInModel
     * Meta information extracted from the WSDL
     * - documentation: The model of the vehicle the prospective buyer would like to trade in. Entered on the lead form on the View Item page. Applies to eBay Motors and Motors categories only.
     * - minOccurs: 0
     * @var string
     */
    public $TradeInModel;
    /**
     * The FinancingAnswer
     * Meta information extracted from the WSDL
     * - documentation: Prospective buyer answer whether or not the prospective buyer would like financing. Entered on the lead form on the View Item page. Applies to eBay Motors and Motors categories only. Financing response meanings: 0= no response,1=
     * yes, 2= no.
     * - minOccurs: 0
     * @var bool
     */
    public $FinancingAnswer;
    /**
     * The Answer1
     * Meta information extracted from the WSDL
     * - documentation: This field corresponds to a configurable question on the lead form in the View Item web page. The corresponding question is site-specific. To determine the question for a specific site, you must view the form in the web flow for the
     * given site. This field applies to Classified Ad format listings in Motors categories only.
     * - minOccurs: 0
     * @var bool
     */
    public $Answer1;
    /**
     * The Answer2
     * Meta information extracted from the WSDL
     * - documentation: This field corresponds to a configurable question on the lead form in the View Item web page. The corresponding question is site-specific. To determine the question for a specific site, you must view the form in the web flow for the
     * given site. This field applies to Classified Ad format listings in Motors categories only.
     * - minOccurs: 0
     * @var bool
     */
    public $Answer2;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for AdFormatLeadType
     * @uses AdFormatLeadType::setAdditionalInformation()
     * @uses AdFormatLeadType::setAddress()
     * @uses AdFormatLeadType::setBestTimeToCall()
     * @uses AdFormatLeadType::setEmail()
     * @uses AdFormatLeadType::setSubmittedTime()
     * @uses AdFormatLeadType::setItemID()
     * @uses AdFormatLeadType::setItemTitle()
     * @uses AdFormatLeadType::setUserID()
     * @uses AdFormatLeadType::setMemberMessage()
     * @uses AdFormatLeadType::setStatus()
     * @uses AdFormatLeadType::setLeadFee()
     * @uses AdFormatLeadType::setExternalEmail()
     * @uses AdFormatLeadType::setPurchaseTimeFrame()
     * @uses AdFormatLeadType::setTradeInYear()
     * @uses AdFormatLeadType::setTradeInMake()
     * @uses AdFormatLeadType::setTradeInModel()
     * @uses AdFormatLeadType::setFinancingAnswer()
     * @uses AdFormatLeadType::setAnswer1()
     * @uses AdFormatLeadType::setAnswer2()
     * @uses AdFormatLeadType::setAny()
     * @param string $additionalInformation
     * @param \StructType\AddressType $address
     * @param string $bestTimeToCall
     * @param string $email
     * @param string $submittedTime
     * @param string $itemID
     * @param string $itemTitle
     * @param string $userID
     * @param \ArrayType\MemberMessageExchangeArrayType $memberMessage
     * @param string $status
     * @param \StructType\AmountType $leadFee
     * @param string $externalEmail
     * @param string $purchaseTimeFrame
     * @param string $tradeInYear
     * @param string $tradeInMake
     * @param string $tradeInModel
     * @param bool $financingAnswer
     * @param bool $answer1
     * @param bool $answer2
     * @param \DOMDocument $any
     */
    public function __construct($additionalInformation = null, \StructType\AddressType $address = null, $bestTimeToCall = null, $email = null, $submittedTime = null, $itemID = null, $itemTitle = null, $userID = null, \ArrayType\MemberMessageExchangeArrayType $memberMessage = null, $status = null, \StructType\AmountType $leadFee = null, $externalEmail = null, $purchaseTimeFrame = null, $tradeInYear = null, $tradeInMake = null, $tradeInModel = null, $financingAnswer = null, $answer1 = null, $answer2 = null, \DOMDocument $any = null)
    {
        $this
            ->setAdditionalInformation($additionalInformation)
            ->setAddress($address)
            ->setBestTimeToCall($bestTimeToCall)
            ->setEmail($email)
            ->setSubmittedTime($submittedTime)
            ->setItemID($itemID)
            ->setItemTitle($itemTitle)
            ->setUserID($userID)
            ->setMemberMessage($memberMessage)
            ->setStatus($status)
            ->setLeadFee($leadFee)
            ->setExternalEmail($externalEmail)
            ->setPurchaseTimeFrame($purchaseTimeFrame)
            ->setTradeInYear($tradeInYear)
            ->setTradeInMake($tradeInMake)
            ->setTradeInModel($tradeInModel)
            ->setFinancingAnswer($financingAnswer)
            ->setAnswer1($answer1)
            ->setAnswer2($answer2)
            ->setAny($any);
    }
    /**
     * Get AdditionalInformation value
     * @return string|null
     */
    public function getAdditionalInformation()
    {
        return $this->AdditionalInformation;
    }
    /**
     * Set AdditionalInformation value
     * @param string $additionalInformation
     * @return \StructType\AdFormatLeadType
     */
    public function setAdditionalInformation($additionalInformation = null)
    {
        // validation for constraint: string
        if (!is_null($additionalInformation) && !is_string($additionalInformation)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($additionalInformation, true), gettype($additionalInformation)), __LINE__);
        }
        $this->AdditionalInformation = $additionalInformation;
        return $this;
    }
    /**
     * Get Address value
     * @return \StructType\AddressType|null
     */
    public function getAddress()
    {
        return $this->Address;
    }
    /**
     * Set Address value
     * @param \StructType\AddressType $address
     * @return \StructType\AdFormatLeadType
     */
    public function setAddress(\StructType\AddressType $address = null)
    {
        $this->Address = $address;
        return $this;
    }
    /**
     * Get BestTimeToCall value
     * @return string|null
     */
    public function getBestTimeToCall()
    {
        return $this->BestTimeToCall;
    }
    /**
     * Set BestTimeToCall value
     * @param string $bestTimeToCall
     * @return \StructType\AdFormatLeadType
     */
    public function setBestTimeToCall($bestTimeToCall = null)
    {
        // validation for constraint: string
        if (!is_null($bestTimeToCall) && !is_string($bestTimeToCall)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bestTimeToCall, true), gettype($bestTimeToCall)), __LINE__);
        }
        $this->BestTimeToCall = $bestTimeToCall;
        return $this;
    }
    /**
     * Get Email value
     * @return string|null
     */
    public function getEmail()
    {
        return $this->Email;
    }
    /**
     * Set Email value
     * @param string $email
     * @return \StructType\AdFormatLeadType
     */
    public function setEmail($email = null)
    {
        // validation for constraint: string
        if (!is_null($email) && !is_string($email)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($email, true), gettype($email)), __LINE__);
        }
        $this->Email = $email;
        return $this;
    }
    /**
     * Get SubmittedTime value
     * @return string|null
     */
    public function getSubmittedTime()
    {
        return $this->SubmittedTime;
    }
    /**
     * Set SubmittedTime value
     * @param string $submittedTime
     * @return \StructType\AdFormatLeadType
     */
    public function setSubmittedTime($submittedTime = null)
    {
        // validation for constraint: string
        if (!is_null($submittedTime) && !is_string($submittedTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($submittedTime, true), gettype($submittedTime)), __LINE__);
        }
        $this->SubmittedTime = $submittedTime;
        return $this;
    }
    /**
     * Get ItemID value
     * @return string|null
     */
    public function getItemID()
    {
        return $this->ItemID;
    }
    /**
     * Set ItemID value
     * @param string $itemID
     * @return \StructType\AdFormatLeadType
     */
    public function setItemID($itemID = null)
    {
        // validation for constraint: string
        if (!is_null($itemID) && !is_string($itemID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($itemID, true), gettype($itemID)), __LINE__);
        }
        $this->ItemID = $itemID;
        return $this;
    }
    /**
     * Get ItemTitle value
     * @return string|null
     */
    public function getItemTitle()
    {
        return $this->ItemTitle;
    }
    /**
     * Set ItemTitle value
     * @param string $itemTitle
     * @return \StructType\AdFormatLeadType
     */
    public function setItemTitle($itemTitle = null)
    {
        // validation for constraint: string
        if (!is_null($itemTitle) && !is_string($itemTitle)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($itemTitle, true), gettype($itemTitle)), __LINE__);
        }
        $this->ItemTitle = $itemTitle;
        return $this;
    }
    /**
     * Get UserID value
     * @return string|null
     */
    public function getUserID()
    {
        return $this->UserID;
    }
    /**
     * Set UserID value
     * @param string $userID
     * @return \StructType\AdFormatLeadType
     */
    public function setUserID($userID = null)
    {
        // validation for constraint: string
        if (!is_null($userID) && !is_string($userID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($userID, true), gettype($userID)), __LINE__);
        }
        $this->UserID = $userID;
        return $this;
    }
    /**
     * Get MemberMessage value
     * @return \ArrayType\MemberMessageExchangeArrayType|null
     */
    public function getMemberMessage()
    {
        return $this->MemberMessage;
    }
    /**
     * Set MemberMessage value
     * @param \ArrayType\MemberMessageExchangeArrayType $memberMessage
     * @return \StructType\AdFormatLeadType
     */
    public function setMemberMessage(\ArrayType\MemberMessageExchangeArrayType $memberMessage = null)
    {
        $this->MemberMessage = $memberMessage;
        return $this;
    }
    /**
     * Get Status value
     * @return string|null
     */
    public function getStatus()
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @uses \EnumType\AdFormatLeadStatusCodeType::valueIsValid()
     * @uses \EnumType\AdFormatLeadStatusCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $status
     * @return \StructType\AdFormatLeadType
     */
    public function setStatus($status = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\AdFormatLeadStatusCodeType::valueIsValid($status)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\AdFormatLeadStatusCodeType', is_array($status) ? implode(', ', $status) : var_export($status, true), implode(', ', \EnumType\AdFormatLeadStatusCodeType::getValidValues())), __LINE__);
        }
        $this->Status = $status;
        return $this;
    }
    /**
     * Get LeadFee value
     * @return \StructType\AmountType|null
     */
    public function getLeadFee()
    {
        return $this->LeadFee;
    }
    /**
     * Set LeadFee value
     * @param \StructType\AmountType $leadFee
     * @return \StructType\AdFormatLeadType
     */
    public function setLeadFee(\StructType\AmountType $leadFee = null)
    {
        $this->LeadFee = $leadFee;
        return $this;
    }
    /**
     * Get ExternalEmail value
     * @return string|null
     */
    public function getExternalEmail()
    {
        return $this->ExternalEmail;
    }
    /**
     * Set ExternalEmail value
     * @param string $externalEmail
     * @return \StructType\AdFormatLeadType
     */
    public function setExternalEmail($externalEmail = null)
    {
        // validation for constraint: string
        if (!is_null($externalEmail) && !is_string($externalEmail)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($externalEmail, true), gettype($externalEmail)), __LINE__);
        }
        $this->ExternalEmail = $externalEmail;
        return $this;
    }
    /**
     * Get PurchaseTimeFrame value
     * @return string|null
     */
    public function getPurchaseTimeFrame()
    {
        return $this->PurchaseTimeFrame;
    }
    /**
     * Set PurchaseTimeFrame value
     * @param string $purchaseTimeFrame
     * @return \StructType\AdFormatLeadType
     */
    public function setPurchaseTimeFrame($purchaseTimeFrame = null)
    {
        // validation for constraint: string
        if (!is_null($purchaseTimeFrame) && !is_string($purchaseTimeFrame)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($purchaseTimeFrame, true), gettype($purchaseTimeFrame)), __LINE__);
        }
        $this->PurchaseTimeFrame = $purchaseTimeFrame;
        return $this;
    }
    /**
     * Get TradeInYear value
     * @return string|null
     */
    public function getTradeInYear()
    {
        return $this->TradeInYear;
    }
    /**
     * Set TradeInYear value
     * @param string $tradeInYear
     * @return \StructType\AdFormatLeadType
     */
    public function setTradeInYear($tradeInYear = null)
    {
        // validation for constraint: string
        if (!is_null($tradeInYear) && !is_string($tradeInYear)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tradeInYear, true), gettype($tradeInYear)), __LINE__);
        }
        $this->TradeInYear = $tradeInYear;
        return $this;
    }
    /**
     * Get TradeInMake value
     * @return string|null
     */
    public function getTradeInMake()
    {
        return $this->TradeInMake;
    }
    /**
     * Set TradeInMake value
     * @param string $tradeInMake
     * @return \StructType\AdFormatLeadType
     */
    public function setTradeInMake($tradeInMake = null)
    {
        // validation for constraint: string
        if (!is_null($tradeInMake) && !is_string($tradeInMake)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tradeInMake, true), gettype($tradeInMake)), __LINE__);
        }
        $this->TradeInMake = $tradeInMake;
        return $this;
    }
    /**
     * Get TradeInModel value
     * @return string|null
     */
    public function getTradeInModel()
    {
        return $this->TradeInModel;
    }
    /**
     * Set TradeInModel value
     * @param string $tradeInModel
     * @return \StructType\AdFormatLeadType
     */
    public function setTradeInModel($tradeInModel = null)
    {
        // validation for constraint: string
        if (!is_null($tradeInModel) && !is_string($tradeInModel)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tradeInModel, true), gettype($tradeInModel)), __LINE__);
        }
        $this->TradeInModel = $tradeInModel;
        return $this;
    }
    /**
     * Get FinancingAnswer value
     * @return bool|null
     */
    public function getFinancingAnswer()
    {
        return $this->FinancingAnswer;
    }
    /**
     * Set FinancingAnswer value
     * @param bool $financingAnswer
     * @return \StructType\AdFormatLeadType
     */
    public function setFinancingAnswer($financingAnswer = null)
    {
        // validation for constraint: boolean
        if (!is_null($financingAnswer) && !is_bool($financingAnswer)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($financingAnswer, true), gettype($financingAnswer)), __LINE__);
        }
        $this->FinancingAnswer = $financingAnswer;
        return $this;
    }
    /**
     * Get Answer1 value
     * @return bool|null
     */
    public function getAnswer1()
    {
        return $this->Answer1;
    }
    /**
     * Set Answer1 value
     * @param bool $answer1
     * @return \StructType\AdFormatLeadType
     */
    public function setAnswer1($answer1 = null)
    {
        // validation for constraint: boolean
        if (!is_null($answer1) && !is_bool($answer1)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($answer1, true), gettype($answer1)), __LINE__);
        }
        $this->Answer1 = $answer1;
        return $this;
    }
    /**
     * Get Answer2 value
     * @return bool|null
     */
    public function getAnswer2()
    {
        return $this->Answer2;
    }
    /**
     * Set Answer2 value
     * @param bool $answer2
     * @return \StructType\AdFormatLeadType
     */
    public function setAnswer2($answer2 = null)
    {
        // validation for constraint: boolean
        if (!is_null($answer2) && !is_bool($answer2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($answer2, true), gettype($answer2)), __LINE__);
        }
        $this->Answer2 = $answer2;
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
     * @return \StructType\AdFormatLeadType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
