<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FulfillmentType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is used to provide details about an order line item being fulfilled by eBay or an eBay fulfillment partner.
 * @subpackage Structs
 */
class FulfillmentType extends AbstractStructBase
{
    /**
     * The FulfillmentBy
     * Meta information extracted from the WSDL
     * - documentation: The value returned in this field indicates the party that is handling fulfillment of the order line item.
     * - minOccurs: 0
     * @var string
     */
    public $FulfillmentBy;
    /**
     * The FulfillmentRefId
     * Meta information extracted from the WSDL
     * - documentation: The value in this field identifies the warehouse where the order line item is located.
     * - minOccurs: 0
     * @var string
     */
    public $FulfillmentRefId;
    /**
     * Constructor method for FulfillmentType
     * @uses FulfillmentType::setFulfillmentBy()
     * @uses FulfillmentType::setFulfillmentRefId()
     * @param string $fulfillmentBy
     * @param string $fulfillmentRefId
     */
    public function __construct($fulfillmentBy = null, $fulfillmentRefId = null)
    {
        $this
            ->setFulfillmentBy($fulfillmentBy)
            ->setFulfillmentRefId($fulfillmentRefId);
    }
    /**
     * Get FulfillmentBy value
     * @return string|null
     */
    public function getFulfillmentBy()
    {
        return $this->FulfillmentBy;
    }
    /**
     * Set FulfillmentBy value
     * @param string $fulfillmentBy
     * @return \StructType\FulfillmentType
     */
    public function setFulfillmentBy($fulfillmentBy = null)
    {
        // validation for constraint: string
        if (!is_null($fulfillmentBy) && !is_string($fulfillmentBy)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fulfillmentBy, true), gettype($fulfillmentBy)), __LINE__);
        }
        $this->FulfillmentBy = $fulfillmentBy;
        return $this;
    }
    /**
     * Get FulfillmentRefId value
     * @return string|null
     */
    public function getFulfillmentRefId()
    {
        return $this->FulfillmentRefId;
    }
    /**
     * Set FulfillmentRefId value
     * @param string $fulfillmentRefId
     * @return \StructType\FulfillmentType
     */
    public function setFulfillmentRefId($fulfillmentRefId = null)
    {
        // validation for constraint: string
        if (!is_null($fulfillmentRefId) && !is_string($fulfillmentRefId)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fulfillmentRefId, true), gettype($fulfillmentRefId)), __LINE__);
        }
        $this->FulfillmentRefId = $fulfillmentRefId;
        return $this;
    }
}
