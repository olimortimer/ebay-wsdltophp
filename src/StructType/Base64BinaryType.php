<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Base64BinaryType StructType
 * Meta information extracted from the WSDL
 * - documentation: Base64 is a binary-to-text encoding scheme that represents binary data in an ASCII string format by translating it into a radix-64 representation. The term "Base64" originates from a specific MIME content transfer encoding.
 * <br/><br/> <span class="tablenote"> <strong>Note:</strong> This type contains the name or reference ID of the binary attachment, not the attachment data. </span>
 * @subpackage Structs
 */
class Base64BinaryType extends AbstractStructBase
{
    /**
     * The _
     * @var string
     */
    public $_;
    /**
     * The contentType
     * Meta information extracted from the WSDL
     * - documentation: This optional attribute allows the binary attachment to be named.
     * @var string
     */
    public $contentType;
    /**
     * Constructor method for Base64BinaryType
     * @uses Base64BinaryType::set_()
     * @uses Base64BinaryType::setContentType()
     * @param string $_
     * @param string $contentType
     */
    public function __construct($_ = null, $contentType = null)
    {
        $this
            ->set_($_)
            ->setContentType($contentType);
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
     * @return \StructType\Base64BinaryType
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
     * Get contentType value
     * @return string|null
     */
    public function getContentType()
    {
        return $this->contentType;
    }
    /**
     * Set contentType value
     * @param string $contentType
     * @return \StructType\Base64BinaryType
     */
    public function setContentType($contentType = null)
    {
        // validation for constraint: string
        if (!is_null($contentType) && !is_string($contentType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($contentType, true), gettype($contentType)), __LINE__);
        }
        $this->contentType = $contentType;
        return $this;
    }
}
