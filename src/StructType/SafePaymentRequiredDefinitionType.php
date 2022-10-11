<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SafePaymentRequiredDefinitionType StructType
 * Meta information extracted from the WSDL
 * - documentation: For the US, Canada and Australia sites, users are required to offer at least one safe payment method. <br><br> If a seller has a 'SafePaymentExempt' status, they are exempt from the category requirement to offer at least one safe
 * payment method when listing an item on a site that has the safe payment requirement. <br><br> <span class="tablenote"><b>Note: </b> Although the <b>SafePaymentRequired</b> field is still being returned for now, sellers never need to set the available
 * electronic payments, so this requirement is no longer applicable. </span>
 * @subpackage Structs
 */
class SafePaymentRequiredDefinitionType extends AbstractStructBase
{
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for SafePaymentRequiredDefinitionType
     * @uses SafePaymentRequiredDefinitionType::setAny()
     * @param \DOMDocument $any
     */
    public function __construct(\DOMDocument $any = null)
    {
        $this
            ->setAny($any);
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
     * @return \StructType\SafePaymentRequiredDefinitionType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
