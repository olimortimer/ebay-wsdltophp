<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for StoreLogoType StructType
 * Meta information extracted from the WSDL
 * - documentation: Store logo. <br> <br> <span class="tablenote"><strong>Note:</strong> The <b>Store.Logo</b> container can no longer be used in a <b>SetStore</b> call to upload a new logo to a store, and the <b>SetStore</b> call will be decommissioned
 * on September 30, 2022. <br> <br> The <b>GetStore</b> call now only returns the <b>Logo.URL</b> value, but not <b>Logo.LogoID</b> or <b>Logo.Name</b>. </span>
 * @subpackage Structs
 */
class StoreLogoType extends AbstractStructBase
{
    /**
     * The URL
     * Meta information extracted from the WSDL
     * - documentation: The URL of the seller's store logo.
     * - minOccurs: 0
     * @var string
     */
    public $URL;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for StoreLogoType
     * @uses StoreLogoType::setURL()
     * @uses StoreLogoType::setAny()
     * @param string $uRL
     * @param \DOMDocument $any
     */
    public function __construct($uRL = null, \DOMDocument $any = null)
    {
        $this
            ->setURL($uRL)
            ->setAny($any);
    }
    /**
     * Get URL value
     * @return string|null
     */
    public function getURL()
    {
        return $this->URL;
    }
    /**
     * Set URL value
     * @param string $uRL
     * @return \StructType\StoreLogoType
     */
    public function setURL($uRL = null)
    {
        // validation for constraint: string
        if (!is_null($uRL) && !is_string($uRL)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($uRL, true), gettype($uRL)), __LINE__);
        }
        $this->URL = $uRL;
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
     * @return \StructType\StoreLogoType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
