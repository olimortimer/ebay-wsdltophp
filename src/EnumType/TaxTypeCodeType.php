<?php

namespace EnumType;

use \WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for TaxTypeCodeType EnumType
 * Meta information extracted from the WSDL
 * - documentation: Enumerated type that lists the types of taxes that may be charged to the buyer for each order line item purchased.
 * @subpackage Enumerations
 */
class TaxTypeCodeType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'SalesTax'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that standard sales tax was charged to the buyer against the order line item.
     * @return string 'SalesTax'
     */
    const VALUE_SALES_TAX = 'SalesTax';
    /**
     * Constant for value 'WasteRecyclingFee'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that an electronic waste recycling fee was charged to the buyer against the order line item.
     * @return string 'WasteRecyclingFee'
     */
    const VALUE_WASTE_RECYCLING_FEE = 'WasteRecyclingFee';
    /**
     * Constant for value 'GST'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that a Goods and Services import tax was charged to the buyer against the order line item. <br/><br/> This tax type is only applicable for items being sold by Australian or New Zealand sellers.
     * @return string 'GST'
     */
    const VALUE_GST = 'GST';
    /**
     * Constant for value 'ImportVAT'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that French VAT tax was charged to the buyer against the order line item. <br/><br/> This tax type is only applicable for items sold on the eBay France marketplaces.
     * @return string 'ImportVAT'
     */
    const VALUE_IMPORT_VAT = 'ImportVAT';
    /**
     * Constant for value 'VAT'
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates that European VAT tax was charged to the buyer against the order line item. <br/><br/> This enumeration applies to VAT tax on the UK marketplace, the Norway marketplace, and other EU marketplaces
     * (except for France).
     * @return string 'VAT'
     */
    const VALUE_VAT = 'VAT';
    /**
     * Constant for value 'CustomCode'
     * Meta information extracted from the WSDL
     * - documentation: Reserved for internal or future use.
     * @return string 'CustomCode'
     */
    const VALUE_CUSTOM_CODE = 'CustomCode';
    /**
     * Return allowed values
     * @uses self::VALUE_SALES_TAX
     * @uses self::VALUE_WASTE_RECYCLING_FEE
     * @uses self::VALUE_GST
     * @uses self::VALUE_IMPORT_VAT
     * @uses self::VALUE_VAT
     * @uses self::VALUE_CUSTOM_CODE
     * @return string[]
     */
    public static function getValidValues()
    {
        return array(
            self::VALUE_SALES_TAX,
            self::VALUE_WASTE_RECYCLING_FEE,
            self::VALUE_GST,
            self::VALUE_IMPORT_VAT,
            self::VALUE_VAT,
            self::VALUE_CUSTOM_CODE,
        );
    }
}
