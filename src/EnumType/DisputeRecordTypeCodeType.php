<?php

namespace EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for DisputeRecordTypeCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Enumerated type that lists the different types of order disputes/cases that can occur between buyer and seller.
 * @subpackage Enumerations
 */
class DisputeRecordTypeCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'UnpaidItem'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that the dispute is an Unpaid Item case created by the seller against the buyer.
     * @return string 'UnpaidItem'
     */
    const VALUE_UNPAID_ITEM = 'UnpaidItem';
    /**
     * Constant for value 'ItemNotReceived'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is no longer applicable since the <b>GetDispute</b> and <b>GetUserDisputes</b> calls will not return any INR disputes.
     * @return string 'ItemNotReceived'
     */
    const VALUE_ITEM_NOT_RECEIVED = 'ItemNotReceived';
    /**
     * Constant for value 'HalfDispute'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value is no longer applicable as the Half.com marketplace is shut down.
     * @return string 'HalfDispute'
     */
    const VALUE_HALF_DISPUTE = 'HalfDispute';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_UNPAID_ITEM
     * @uses self::VALUE_ITEM_NOT_RECEIVED
     * @uses self::VALUE_HALF_DISPUTE
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_UNPAID_ITEM,
            self::VALUE_ITEM_NOT_RECEIVED,
            self::VALUE_HALF_DISPUTE,
            self::VALUE_CUSTOM_CODE,
        );
    }
}
