<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BuyerRequirementDetailsType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type defining the <b>BuyerRequirementDetails</b> container, which indicates if the seller has set any buyer requirements that apply to a listing. Sellers use buyer requirements if they want to avoid working with 'risky' buyers, who
 * may be brand new to eBay, have low/poor Feedback scores, or who have some unpaid item strikes or buyer-initiated cancellations.
 * @subpackage Structs
 */
class BuyerRequirementDetailsType extends AbstractStructBase
{
    /**
     * The ShipToRegistrationCountry
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as <code>true</code> if the seller has enabled the setting to block buyers/bidders who reside (according to their eBay primary shipping address) in countries that are on the seller's ship-to exclusion list.
     * <br>
     * - minOccurs: 0
     * @var bool
     */
    public $ShipToRegistrationCountry;
    /**
     * The ZeroFeedbackScore
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as <code>true</code> if the seller has enabled the setting to block buyers/bidders with a feedback score of 0 from buying items. <br/>
     * - minOccurs: 0
     * @var bool
     */
    public $ZeroFeedbackScore;
    /**
     * The MaximumItemRequirements
     * Meta information extracted from the WSDL
     * - documentation: This container is returned if the seller has set a maximum quantity threshold buyer requirement. With this buyer requirement, a buyer is limited in regards to the quantity of a line item that may be purchased. <br/><br/> This buyer
     * requirement is only applicable to fixed-price listings where multiple quantity is available for purchase. <br/><br/> In addition to setting a maximum quantity threshold buyer requirement, the seller can also choose to apply this threshold to only
     * those prospective buyers who don't meet or exceed the minimum Feedback score threshold.
     * - minOccurs: 0
     * @var \StructType\MaximumItemRequirementsType
     */
    public $MaximumItemRequirements;
    /**
     * The MaximumUnpaidItemStrikesInfo
     * Meta information extracted from the WSDL
     * - documentation: This container is returned if the seller has enabled a setting to block prospective buyers who have one or more unpaid items and/or buyer-initiated cancellations on their account during a specified time period.
     * - minOccurs: 0
     * @var \StructType\MaximumUnpaidItemStrikesInfoType
     */
    public $MaximumUnpaidItemStrikesInfo;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for BuyerRequirementDetailsType
     * @uses BuyerRequirementDetailsType::setShipToRegistrationCountry()
     * @uses BuyerRequirementDetailsType::setZeroFeedbackScore()
     * @uses BuyerRequirementDetailsType::setMaximumItemRequirements()
     * @uses BuyerRequirementDetailsType::setMaximumUnpaidItemStrikesInfo()
     * @uses BuyerRequirementDetailsType::setAny()
     * @param bool $shipToRegistrationCountry
     * @param bool $zeroFeedbackScore
     * @param \StructType\MaximumItemRequirementsType $maximumItemRequirements
     * @param \StructType\MaximumUnpaidItemStrikesInfoType $maximumUnpaidItemStrikesInfo
     * @param \DOMDocument $any
     */
    public function __construct($shipToRegistrationCountry = null, $zeroFeedbackScore = null, \StructType\MaximumItemRequirementsType $maximumItemRequirements = null, \StructType\MaximumUnpaidItemStrikesInfoType $maximumUnpaidItemStrikesInfo = null, \DOMDocument $any = null)
    {
        $this
            ->setShipToRegistrationCountry($shipToRegistrationCountry)
            ->setZeroFeedbackScore($zeroFeedbackScore)
            ->setMaximumItemRequirements($maximumItemRequirements)
            ->setMaximumUnpaidItemStrikesInfo($maximumUnpaidItemStrikesInfo)
            ->setAny($any);
    }
    /**
     * Get ShipToRegistrationCountry value
     * @return bool|null
     */
    public function getShipToRegistrationCountry()
    {
        return $this->ShipToRegistrationCountry;
    }
    /**
     * Set ShipToRegistrationCountry value
     * @param bool $shipToRegistrationCountry
     * @return \StructType\BuyerRequirementDetailsType
     */
    public function setShipToRegistrationCountry($shipToRegistrationCountry = null)
    {
        // validation for constraint: boolean
        if (!is_null($shipToRegistrationCountry) && !is_bool($shipToRegistrationCountry)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($shipToRegistrationCountry, true), gettype($shipToRegistrationCountry)), __LINE__);
        }
        $this->ShipToRegistrationCountry = $shipToRegistrationCountry;
        return $this;
    }
    /**
     * Get ZeroFeedbackScore value
     * @return bool|null
     */
    public function getZeroFeedbackScore()
    {
        return $this->ZeroFeedbackScore;
    }
    /**
     * Set ZeroFeedbackScore value
     * @param bool $zeroFeedbackScore
     * @return \StructType\BuyerRequirementDetailsType
     */
    public function setZeroFeedbackScore($zeroFeedbackScore = null)
    {
        // validation for constraint: boolean
        if (!is_null($zeroFeedbackScore) && !is_bool($zeroFeedbackScore)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($zeroFeedbackScore, true), gettype($zeroFeedbackScore)), __LINE__);
        }
        $this->ZeroFeedbackScore = $zeroFeedbackScore;
        return $this;
    }
    /**
     * Get MaximumItemRequirements value
     * @return \StructType\MaximumItemRequirementsType|null
     */
    public function getMaximumItemRequirements()
    {
        return $this->MaximumItemRequirements;
    }
    /**
     * Set MaximumItemRequirements value
     * @param \StructType\MaximumItemRequirementsType $maximumItemRequirements
     * @return \StructType\BuyerRequirementDetailsType
     */
    public function setMaximumItemRequirements(\StructType\MaximumItemRequirementsType $maximumItemRequirements = null)
    {
        $this->MaximumItemRequirements = $maximumItemRequirements;
        return $this;
    }
    /**
     * Get MaximumUnpaidItemStrikesInfo value
     * @return \StructType\MaximumUnpaidItemStrikesInfoType|null
     */
    public function getMaximumUnpaidItemStrikesInfo()
    {
        return $this->MaximumUnpaidItemStrikesInfo;
    }
    /**
     * Set MaximumUnpaidItemStrikesInfo value
     * @param \StructType\MaximumUnpaidItemStrikesInfoType $maximumUnpaidItemStrikesInfo
     * @return \StructType\BuyerRequirementDetailsType
     */
    public function setMaximumUnpaidItemStrikesInfo(\StructType\MaximumUnpaidItemStrikesInfoType $maximumUnpaidItemStrikesInfo = null)
    {
        $this->MaximumUnpaidItemStrikesInfo = $maximumUnpaidItemStrikesInfo;
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
     * @return \StructType\BuyerRequirementDetailsType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
