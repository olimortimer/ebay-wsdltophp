<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VariationExtendedProducerResponsibilityType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type specifies variation-specific Extended Producer Responsibility information, specifically the <strong>EcoParticipationFee</strong>. For multiple-variation listings, this type's <b>EcoParticipationFee</b> is used and not the
 * <b>EcoParticipationFee</b> in the <b>ExtendedProducerResponsibility</b> type. This type is supported by a limited number of sites and specific categories. Use the <a
 * href="../../../../../api-docs/sell/metadata/resources/marketplace/methods/getExtendedProducerResponsibilityPolicies" target="_blank">getExtendedProducerResponsibilityPolicies</a> method of the <b>Sell Metadata API</b> to retrieve valid categories for
 * a site.
 * @subpackage Structs
 */
class VariationExtendedProducerResponsibilityType extends AbstractStructBase
{
    /**
     * The EcoParticipationFee
     * Meta information extracted from the WSDL
     * - documentation: This is the fee paid for new items to the eco-organization (for example, "eco-organisme" in France) fee for each variation in a multiple-variation listing. It is a contribution to the financing of the elimination of the item
     * responsibly. For multiple-variation listings, this <b>EcoParticipationFee</b> (in the <b>VariationExtendedProducerResponsibility</b> container) is used and not the <b>EcoParticipationFee</b> in the <b>ExtendedProducerResponsibility</b> container.
     * - minOccurs: 0
     * @var \StructType\AmountType
     */
    public $EcoParticipationFee;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for VariationExtendedProducerResponsibilityType
     * @uses VariationExtendedProducerResponsibilityType::setEcoParticipationFee()
     * @uses VariationExtendedProducerResponsibilityType::setAny()
     * @param \StructType\AmountType $ecoParticipationFee
     * @param \DOMDocument $any
     */
    public function __construct(\StructType\AmountType $ecoParticipationFee = null, \DOMDocument $any = null)
    {
        $this
            ->setEcoParticipationFee($ecoParticipationFee)
            ->setAny($any);
    }
    /**
     * Get EcoParticipationFee value
     * @return \StructType\AmountType|null
     */
    public function getEcoParticipationFee()
    {
        return $this->EcoParticipationFee;
    }
    /**
     * Set EcoParticipationFee value
     * @param \StructType\AmountType $ecoParticipationFee
     * @return \StructType\VariationExtendedProducerResponsibilityType
     */
    public function setEcoParticipationFee(\StructType\AmountType $ecoParticipationFee = null)
    {
        $this->EcoParticipationFee = $ecoParticipationFee;
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
     * @return \StructType\VariationExtendedProducerResponsibilityType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
