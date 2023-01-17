<?php

namespace EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for HitCounterCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: This type is deprecated.
 * @subpackage Enumerations
 */
class HitCounterCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'NoHitCounter'
     * Meta information extracted from the WSDL
     * - documentation: This value is deprecated.
     * @return string 'NoHitCounter'
     */
    const VALUE_NO_HIT_COUNTER = 'NoHitCounter';
    /**
     * Constant for value 'HonestyStyle'
     * Meta information extracted from the WSDL
     * - documentation: This value is deprecated.
     * @return string 'HonestyStyle'
     */
    const VALUE_HONESTY_STYLE = 'HonestyStyle';
    /**
     * Constant for value 'GreenLED'
     * Meta information extracted from the WSDL
     * - documentation: This value is deprecated.
     * @return string 'GreenLED'
     */
    const VALUE_GREEN_LED = 'GreenLED';
    /**
     * Constant for value 'Hidden'
     * Meta information extracted from the WSDL
     * - documentation: This value is deprecated.
     * @return string 'Hidden'
     */
    const VALUE_HIDDEN = 'Hidden';
    /**
     * Constant for value 'BasicStyle'
     * Meta information extracted from the WSDL
     * - documentation: This value is deprecated.
     * @return string 'BasicStyle'
     */
    const VALUE_BASIC_STYLE = 'BasicStyle';
    /**
     * Constant for value 'RetroStyle'
     * Meta information extracted from the WSDL
     * - documentation: This value is deprecated.
     * @return string 'RetroStyle'
     */
    const VALUE_RETRO_STYLE = 'RetroStyle';
    /**
     * Constant for value 'HiddenStyle'
     * Meta information extracted from the WSDL
     * - documentation: This value is deprecated.
     * @return string 'HiddenStyle'
     */
    const VALUE_HIDDEN_STYLE = 'HiddenStyle';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for internal or future use
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_NO_HIT_COUNTER
     * @uses self::VALUE_HONESTY_STYLE
     * @uses self::VALUE_GREEN_LED
     * @uses self::VALUE_HIDDEN
     * @uses self::VALUE_BASIC_STYLE
     * @uses self::VALUE_RETRO_STYLE
     * @uses self::VALUE_HIDDEN_STYLE
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_NO_HIT_COUNTER,
            self::VALUE_HONESTY_STYLE,
            self::VALUE_GREEN_LED,
            self::VALUE_HIDDEN,
            self::VALUE_BASIC_STYLE,
            self::VALUE_RETRO_STYLE,
            self::VALUE_HIDDEN_STYLE,
            self::VALUE_CUSTOM_CODE,
        );
    }
}
