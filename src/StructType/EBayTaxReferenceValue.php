<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for eBayTaxReferenceValue StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is used to indicate the type of tax identifier that is appearing in the <b>eBayReference</b> field. The tax identifier type which will vary by country/region.
 * @subpackage Structs
 */
class EBayTaxReferenceValue extends AbstractStructBase
{
    /**
     * The _
     * @var string
     */
    public $_;
    /**
     * The name
     * Meta information extracted from the WSDL
     * - documentation: This attribute value is returned to indicate the VAT tax type, which will vary by country/region. This string value will be one of the following:<br/><ul><li><code>ABN</code>: if this string is returned, the ID in the field is an
     * eBay Australia tax number </li><li><code>IOSS</code>: if this string is returned, the ID in the field is an eBay EU or UK IOSS number</li><li><code>IRD</code>: if this string is returned, the ID in the field is an eBay New Zealand tax
     * number</li><li><code>OSS</code>: if this string is returned, the ID in the field is an eBay Germany VAT ID</li><li><code>VOEC</code>: if this string is returned, the ID in the field is an eBay Norway tax number</li><li><code>VAT_ID</code>: if this
     * string is returned, the ID in the field is an eBay France VAT ID</li></ul>
     * @var string
     */
    public $name;
    /**
     * Constructor method for eBayTaxReferenceValue
     * @uses EBayTaxReferenceValue::set_()
     * @uses EBayTaxReferenceValue::setName()
     * @param string $_
     * @param string $name
     */
    public function __construct($_ = null, $name = null)
    {
        $this
            ->set_($_)
            ->setName($name);
    }
    /**
     * Get _ value
     * @return string|null
     */
    public function get_()
    {
        return $this->_;
    }
    /**
     * Set _ value
     * @param string $_
     * @return \StructType\EBayTaxReferenceValue
     */
    public function set_($_ = null)
    {
        // validation for constraint: string
        if (!is_null($_) && !is_string($_)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($_, true), gettype($_)), __LINE__);
        }
        $this->_ = $_;
        return $this;
    }
    /**
     * Get name value
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * Set name value
     * @param string $name
     * @return \StructType\EBayTaxReferenceValue
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->name = $name;
        return $this;
    }
}
