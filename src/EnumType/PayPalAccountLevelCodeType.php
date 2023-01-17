<?php

namespace EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for PayPalAccountLevelCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This enumeration type is deprecated.
 * @subpackage Enumerations
 */
class PayPalAccountLevelCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Unverified'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is deprecated.
     * @return string 'Unverified'
     */
    const VALUE_UNVERIFIED = 'Unverified';
    /**
     * Constant for value 'InternationalUnverified'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is deprecated.
     * @return string 'InternationalUnverified'
     */
    const VALUE_INTERNATIONAL_UNVERIFIED = 'InternationalUnverified';
    /**
     * Constant for value 'Verified'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is deprecated.
     * @return string 'Verified'
     */
    const VALUE_VERIFIED = 'Verified';
    /**
     * Constant for value 'InternationalVerified'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is deprecated.
     * @return string 'InternationalVerified'
     */
    const VALUE_INTERNATIONAL_VERIFIED = 'InternationalVerified';
    /**
     * Constant for value 'Trusted'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is deprecated.
     * @return string 'Trusted'
     */
    const VALUE_TRUSTED = 'Trusted';
    /**
     * Constant for value 'Unknown'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is deprecated.
     * @return string 'Unknown'
     */
    const VALUE_UNKNOWN = 'Unknown';
    /**
     * Constant for value 'Invalid'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is deprecated.
     * @return string 'Invalid'
     */
    const VALUE_INVALID = 'Invalid';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for internal or future use
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_UNVERIFIED
     * @uses self::VALUE_INTERNATIONAL_UNVERIFIED
     * @uses self::VALUE_VERIFIED
     * @uses self::VALUE_INTERNATIONAL_VERIFIED
     * @uses self::VALUE_TRUSTED
     * @uses self::VALUE_UNKNOWN
     * @uses self::VALUE_INVALID
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_UNVERIFIED,
            self::VALUE_INTERNATIONAL_UNVERIFIED,
            self::VALUE_VERIFIED,
            self::VALUE_INTERNATIONAL_VERIFIED,
            self::VALUE_TRUSTED,
            self::VALUE_UNKNOWN,
            self::VALUE_INVALID,
            self::VALUE_CUSTOM_CODE,
        );
    }
}
