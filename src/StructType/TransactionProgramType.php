<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TransactionProgramType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is used by the <b>Program</b> container, which provides details on whether the order line item has passed or failed the authenticity inspection.
 * @subpackage Structs
 */
class TransactionProgramType extends AbstractStructBase
{
    /**
     * The AuthenticityVerification
     * Meta information extracted from the WSDL
     * - documentation: This container gives status on whether the order line item has passed or failed the authenticity inspection.
     * - minOccurs: 0
     * @var \StructType\AuthenticityVerificationType
     */
    public $AuthenticityVerification;
    /**
     * The Fulfillment
     * Meta information extracted from the WSDL
     * - documentation: This container provides details about an order line item being handled by eBay fulfillment. It is only returned for paid orders being fulfilled by eBay or an eBay fulfillment partner.
     * - minOccurs: 0
     * @var \StructType\FulfillmentType
     */
    public $Fulfillment;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for TransactionProgramType
     * @uses TransactionProgramType::setAuthenticityVerification()
     * @uses TransactionProgramType::setFulfillment()
     * @uses TransactionProgramType::setAny()
     * @param \StructType\AuthenticityVerificationType $authenticityVerification
     * @param \StructType\FulfillmentType $fulfillment
     * @param \DOMDocument $any
     */
    public function __construct(\StructType\AuthenticityVerificationType $authenticityVerification = null, \StructType\FulfillmentType $fulfillment = null, \DOMDocument $any = null)
    {
        $this
            ->setAuthenticityVerification($authenticityVerification)
            ->setFulfillment($fulfillment)
            ->setAny($any);
    }
    /**
     * Get AuthenticityVerification value
     * @return \StructType\AuthenticityVerificationType|null
     */
    public function getAuthenticityVerification()
    {
        return $this->AuthenticityVerification;
    }
    /**
     * Set AuthenticityVerification value
     * @param \StructType\AuthenticityVerificationType $authenticityVerification
     * @return \StructType\TransactionProgramType
     */
    public function setAuthenticityVerification(\StructType\AuthenticityVerificationType $authenticityVerification = null)
    {
        $this->AuthenticityVerification = $authenticityVerification;
        return $this;
    }
    /**
     * Get Fulfillment value
     * @return \StructType\FulfillmentType|null
     */
    public function getFulfillment()
    {
        return $this->Fulfillment;
    }
    /**
     * Set Fulfillment value
     * @param \StructType\FulfillmentType $fulfillment
     * @return \StructType\TransactionProgramType
     */
    public function setFulfillment(\StructType\FulfillmentType $fulfillment = null)
    {
        $this->Fulfillment = $fulfillment;
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
     * @return \StructType\TransactionProgramType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
