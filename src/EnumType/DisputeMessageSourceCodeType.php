<?php

namespace EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for DisputeMessageSourceCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Enumeration type that defines the parties who may be the source of a message related to an <i>Unpaid Item</i> case.
 * @subpackage Enumerations
 */
class DisputeMessageSourceCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Buyer'
     * Meta information extracted from the WSDL
     * - documentation: The buyer involved in the Unpaid Item case.
     * @return string 'Buyer'
     */
    const VALUE_BUYER = 'Buyer';
    /**
     * Constant for value 'Seller'
     * Meta information extracted from the WSDL
     * - documentation: The seller involved in the Unpaid Item case.
     * @return string 'Seller'
     */
    const VALUE_SELLER = 'Seller';
    /**
     * Constant for value 'eBay'
     * Meta information extracted from the WSDL
     * - documentation: eBay, either an administrator or the site itself.
     * @return string 'eBay'
     */
    const VALUE_E_BAY = 'eBay';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_BUYER
     * @uses self::VALUE_SELLER
     * @uses self::VALUE_E_BAY
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_BUYER,
            self::VALUE_SELLER,
            self::VALUE_E_BAY,
            self::VALUE_CUSTOM_CODE,
        );
    }
}
