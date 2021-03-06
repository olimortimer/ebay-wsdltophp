<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddSellingManagerTemplateResponseType StructType
 * Meta information extracted from the WSDL
 * - documentation: The base response of the <b>AddSellingManagerTemplate</b> call. The response includes the unique identifier and name of the new Selling Manager template, the listing category, some information on the Selling Manager product
 * associated with the template, and the expected listing fees if a listing is created using this Selling Manager template.
 * @subpackage Structs
 */
class AddSellingManagerTemplateResponseType extends AbstractResponseType
{
    /**
     * The CategoryID
     * Meta information extracted from the WSDL
     * - documentation: The unique identifier of the eBay category in which the product associated with the Selling Manager template will be listed. The primary listing category is provided through the <b>PrimaryCategoryID</b> field of an
     * <b>AddSellingManagerProduct</b> call or through the <b>Item.PrimaryCategory.CategoryID</b> field.
     * - minOccurs: 0
     * @var int
     */
    public $CategoryID;
    /**
     * The Category2ID
     * Meta information extracted from the WSDL
     * - documentation: The unique identifier of the secondary eBay category in which the product associated with the Selling Manager template will be listed. This field will only be returned if defined through a <b>Item.SecondaryCategory.CategoryID</b>
     * field.
     * - minOccurs: 0
     * @var int
     */
    public $Category2ID;
    /**
     * The SaleTemplateID
     * Meta information extracted from the WSDL
     * - documentation: This is the unique identifier of the new Selling Manager template. This value is created by eBay upon successful creation of the Selling Manager template.
     * - minOccurs: 0
     * @var int
     */
    public $SaleTemplateID;
    /**
     * The SaleTemplateGroupID
     * Meta information extracted from the WSDL
     * - documentation: Ihis field is deprecated.
     * - minOccurs: 0
     * @var int
     */
    public $SaleTemplateGroupID;
    /**
     * The SaleTemplateName
     * Meta information extracted from the WSDL
     * - documentation: This is the unique name of the newly created Selling Manager template. This name will be the value that was provided in the <b>SaleTemplateName</b> field of the call request. If the <b>SaleTemplateName</b> field was omitted the
     * Selling Manager template inherits the name specified in the <b>Item.Title</b> field instead.
     * - minOccurs: 0
     * @var string
     */
    public $SaleTemplateName;
    /**
     * The SellingManagerProductDetails
     * Meta information extracted from the WSDL
     * - documentation: This container consists of details related to the Selling Manager product associated with the Selling Manager template, including the unique identifer, product name, and current quantity available.
     * - minOccurs: 0
     * @var \StructType\SellingManagerProductDetailsType
     */
    public $SellingManagerProductDetails;
    /**
     * The Fees
     * Meta information extracted from the WSDL
     * - documentation: This container is an array of fees associated with the creation of the listing. The fees in this container will not include any Final Value Fee, because this fee is based on the purchase price and only comes into play when the
     * listing has a sale.
     * - minOccurs: 0
     * @var \StructType\FeesType
     */
    public $Fees;
    /**
     * Constructor method for AddSellingManagerTemplateResponseType
     * @uses AddSellingManagerTemplateResponseType::setCategoryID()
     * @uses AddSellingManagerTemplateResponseType::setCategory2ID()
     * @uses AddSellingManagerTemplateResponseType::setSaleTemplateID()
     * @uses AddSellingManagerTemplateResponseType::setSaleTemplateGroupID()
     * @uses AddSellingManagerTemplateResponseType::setSaleTemplateName()
     * @uses AddSellingManagerTemplateResponseType::setSellingManagerProductDetails()
     * @uses AddSellingManagerTemplateResponseType::setFees()
     * @param int $categoryID
     * @param int $category2ID
     * @param int $saleTemplateID
     * @param int $saleTemplateGroupID
     * @param string $saleTemplateName
     * @param \StructType\SellingManagerProductDetailsType $sellingManagerProductDetails
     * @param \StructType\FeesType $fees
     */
    public function __construct($categoryID = null, $category2ID = null, $saleTemplateID = null, $saleTemplateGroupID = null, $saleTemplateName = null, \StructType\SellingManagerProductDetailsType $sellingManagerProductDetails = null, \StructType\FeesType $fees = null)
    {
        $this
            ->setCategoryID($categoryID)
            ->setCategory2ID($category2ID)
            ->setSaleTemplateID($saleTemplateID)
            ->setSaleTemplateGroupID($saleTemplateGroupID)
            ->setSaleTemplateName($saleTemplateName)
            ->setSellingManagerProductDetails($sellingManagerProductDetails)
            ->setFees($fees);
    }
    /**
     * Get CategoryID value
     * @return int|null
     */
    public function getCategoryID()
    {
        return $this->CategoryID;
    }
    /**
     * Set CategoryID value
     * @param int $categoryID
     * @return \StructType\AddSellingManagerTemplateResponseType
     */
    public function setCategoryID($categoryID = null)
    {
        // validation for constraint: int
        if (!is_null($categoryID) && !(is_int($categoryID) || ctype_digit($categoryID))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($categoryID, true), gettype($categoryID)), __LINE__);
        }
        $this->CategoryID = $categoryID;
        return $this;
    }
    /**
     * Get Category2ID value
     * @return int|null
     */
    public function getCategory2ID()
    {
        return $this->Category2ID;
    }
    /**
     * Set Category2ID value
     * @param int $category2ID
     * @return \StructType\AddSellingManagerTemplateResponseType
     */
    public function setCategory2ID($category2ID = null)
    {
        // validation for constraint: int
        if (!is_null($category2ID) && !(is_int($category2ID) || ctype_digit($category2ID))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($category2ID, true), gettype($category2ID)), __LINE__);
        }
        $this->Category2ID = $category2ID;
        return $this;
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
     * @return \StructType\AddSellingManagerTemplateResponseType
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
    /**
     * Get SaleTemplateGroupID value
     * @return int|null
     */
    public function getSaleTemplateGroupID()
    {
        return $this->SaleTemplateGroupID;
    }
    /**
     * Set SaleTemplateGroupID value
     * @param int $saleTemplateGroupID
     * @return \StructType\AddSellingManagerTemplateResponseType
     */
    public function setSaleTemplateGroupID($saleTemplateGroupID = null)
    {
        // validation for constraint: int
        if (!is_null($saleTemplateGroupID) && !(is_int($saleTemplateGroupID) || ctype_digit($saleTemplateGroupID))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($saleTemplateGroupID, true), gettype($saleTemplateGroupID)), __LINE__);
        }
        $this->SaleTemplateGroupID = $saleTemplateGroupID;
        return $this;
    }
    /**
     * Get SaleTemplateName value
     * @return string|null
     */
    public function getSaleTemplateName()
    {
        return $this->SaleTemplateName;
    }
    /**
     * Set SaleTemplateName value
     * @param string $saleTemplateName
     * @return \StructType\AddSellingManagerTemplateResponseType
     */
    public function setSaleTemplateName($saleTemplateName = null)
    {
        // validation for constraint: string
        if (!is_null($saleTemplateName) && !is_string($saleTemplateName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($saleTemplateName, true), gettype($saleTemplateName)), __LINE__);
        }
        $this->SaleTemplateName = $saleTemplateName;
        return $this;
    }
    /**
     * Get SellingManagerProductDetails value
     * @return \StructType\SellingManagerProductDetailsType|null
     */
    public function getSellingManagerProductDetails()
    {
        return $this->SellingManagerProductDetails;
    }
    /**
     * Set SellingManagerProductDetails value
     * @param \StructType\SellingManagerProductDetailsType $sellingManagerProductDetails
     * @return \StructType\AddSellingManagerTemplateResponseType
     */
    public function setSellingManagerProductDetails(\StructType\SellingManagerProductDetailsType $sellingManagerProductDetails = null)
    {
        $this->SellingManagerProductDetails = $sellingManagerProductDetails;
        return $this;
    }
    /**
     * Get Fees value
     * @return \StructType\FeesType|null
     */
    public function getFees()
    {
        return $this->Fees;
    }
    /**
     * Set Fees value
     * @param \StructType\FeesType $fees
     * @return \StructType\AddSellingManagerTemplateResponseType
     */
    public function setFees(\StructType\FeesType $fees = null)
    {
        $this->Fees = $fees;
        return $this;
    }
}
