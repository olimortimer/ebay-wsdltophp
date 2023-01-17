<?php

namespace EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for UnpaidItemCaseOpenTypeCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: <span class="tablenote"> <strong>Note:</strong> This type is deprecated since Unpaid Item cases are no longer supported. </span>
 * @subpackage Enumerations
 */
class UnpaidItemCaseOpenTypeCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Auto'
     * Meta information extracted from the WSDL
     * - documentation: <span class="tablenote"><strong>Note:</strong> This field is deprecated (Unpaid Item cases are no longer supported). </span>
     * @return string 'Auto'
     */
    const VALUE_AUTO = 'Auto';
    /**
     * Constant for value 'Manual'
     * Meta information extracted from the WSDL
     * - documentation: <span class="tablenote"><strong>Note:</strong> This field is deprecated (Unpaid Item cases are no longer supported). </span>
     * @return string 'Manual'
     */
    const VALUE_MANUAL = 'Manual';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: This value is reserved for future or internal use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_AUTO
     * @uses self::VALUE_MANUAL
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_AUTO,
            self::VALUE_MANUAL,
            self::VALUE_CUSTOM_CODE,
        );
    }
}
