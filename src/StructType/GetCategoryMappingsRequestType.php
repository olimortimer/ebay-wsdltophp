<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCategoryMappingsRequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: Retrieves a map of old category IDs and corresponding active category IDs defined for the site to which the request is sent.
 * @subpackage Structs
 */
class GetCategoryMappingsRequestType extends AbstractRequestType
{
    /**
     * The CategoryVersion
     * Meta information extracted from the WSDL
     * - documentation: A version of the category mapping for the site. Filters out data from the call to return only the category mappings for which the data has changed since the specified version. If not specified, all category mappings are returned.
     * Typically, an application passes the version value of the last set of category mappings that the application stored locally. The latest version value is not necessarily greater than the previous value that was returned. Therefore, when comparing
     * versions, only compare whether the value has changed.
     * - minOccurs: 0
     * @var string
     */
    public $CategoryVersion;
    /**
     * Constructor method for GetCategoryMappingsRequestType
     * @uses GetCategoryMappingsRequestType::setCategoryVersion()
     * @param string $categoryVersion
     */
    public function __construct($categoryVersion = null)
    {
        $this
            ->setCategoryVersion($categoryVersion);
    }
    /**
     * Get CategoryVersion value
     * @return string|null
     */
    public function getCategoryVersion()
    {
        return $this->CategoryVersion;
    }
    /**
     * Set CategoryVersion value
     * @param string $categoryVersion
     * @return \StructType\GetCategoryMappingsRequestType
     */
    public function setCategoryVersion($categoryVersion = null)
    {
        // validation for constraint: string
        if (!is_null($categoryVersion) && !is_string($categoryVersion)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($categoryVersion, true), gettype($categoryVersion)), __LINE__);
        }
        $this->CategoryVersion = $categoryVersion;
        return $this;
    }
}
