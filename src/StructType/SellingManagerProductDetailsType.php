<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SellingManagerProductDetailsType StructType
 * Meta information extracted from the WSDL
 * - documentation: Returned if the user is a Selling Manager user. Defines product information for Selling Manager users.
 * @subpackage Structs
 */
class SellingManagerProductDetailsType extends AbstractStructBase
{
    /**
     * The ProductName
     * Meta information extracted from the WSDL
     * - documentation: The name of a Selling Manager product.
     * - minOccurs: 0
     * @var string
     */
    public $ProductName;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for SellingManagerProductDetailsType
     * @uses SellingManagerProductDetailsType::setProductName()
     * @uses SellingManagerProductDetailsType::setAny()
     * @param string $productName
     * @param \DOMDocument $any
     */
    public function __construct($productName = null, \DOMDocument $any = null)
    {
        $this
            ->setProductName($productName)
            ->setAny($any);
    }
    /**
     * Get ProductName value
     * @return string|null
     */
    public function getProductName()
    {
        return $this->ProductName;
    }
    /**
     * Set ProductName value
     * @param string $productName
     * @return \StructType\SellingManagerProductDetailsType
     */
    public function setProductName($productName = null)
    {
        // validation for constraint: string
        if (!is_null($productName) && !is_string($productName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($productName, true), gettype($productName)), __LINE__);
        }
        $this->ProductName = $productName;
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
     * @return \StructType\SellingManagerProductDetailsType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
