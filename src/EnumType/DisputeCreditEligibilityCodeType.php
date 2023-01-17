<?php

namespace EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for DisputeCreditEligibilityCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Enumerated type used to indicate whether or not the seller is eligible for a Final Value Fee credit if an Unpaid Item case is resolved between the buyer or seller, or if eBay customer support makes a decision on the case in the
 * seller's favor. Note that even if the item is eligible for a Final Value Fee credit, the credit is not guaranteed in any way.
 * @subpackage Enumerations
 */
class DisputeCreditEligibilityCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'InEligible'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the seller is not currently eligible for a Final Value Fee credit towards the order line item under dispute.
     * @return string 'InEligible'
     */
    const VALUE_IN_ELIGIBLE = 'InEligible';
    /**
     * Constant for value 'Eligible'
     * Meta information extracted from the WSDL
     * - documentation: This value indicates that the seller is currently eligible for a Final Value Fee credit towards the order line item under dispute.
     * @return string 'Eligible'
     */
    const VALUE_ELIGIBLE = 'Eligible';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_IN_ELIGIBLE
     * @uses self::VALUE_ELIGIBLE
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_IN_ELIGIBLE,
            self::VALUE_ELIGIBLE,
            self::VALUE_CUSTOM_CODE,
        );
    }
}
