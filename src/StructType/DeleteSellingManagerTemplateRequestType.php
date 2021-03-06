<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteSellingManagerTemplateRequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: Deletes a Selling Manager template. This call is subject to change without notice; the deprecation process is inapplicable to this call.
 * @subpackage Structs
 */
class DeleteSellingManagerTemplateRequestType extends AbstractRequestType
{
    /**
     * The SaleTemplateID
     * Meta information extracted from the WSDL
     * - documentation: Unique identifier of the Selling Manager template to be deleted. You can obtain a <b>SaleTemplateID</b> by calling <b>GetSellingManagerInventory</b>.
     * - minOccurs: 0
     * @var int
     */
    public $SaleTemplateID;
    /**
     * Constructor method for DeleteSellingManagerTemplateRequestType
     * @uses DeleteSellingManagerTemplateRequestType::setSaleTemplateID()
     * @param int $saleTemplateID
     */
    public function __construct($saleTemplateID = null)
    {
        $this
            ->setSaleTemplateID($saleTemplateID);
    }
    /**
     * Get SaleTemplateID value
     * @return int|null
     */
    public function getSaleTemplateID()
    {
        return $this->SaleTemplateID;
    }
    /**
     * Set SaleTemplateID value
     * @param int $saleTemplateID
     * @return \StructType\DeleteSellingManagerTemplateRequestType
     */
    public function setSaleTemplateID($saleTemplateID = null)
    {
        // validation for constraint: int
        if (!is_null($saleTemplateID) && !(is_int($saleTemplateID) || ctype_digit($saleTemplateID))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($saleTemplateID, true), gettype($saleTemplateID)), __LINE__);
        }
        $this->SaleTemplateID = $saleTemplateID;
        return $this;
    }
}
