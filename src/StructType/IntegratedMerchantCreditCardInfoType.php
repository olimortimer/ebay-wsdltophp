<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for IntegratedMerchantCreditCardInfoType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is no longer applicable as eBay sellers can no longer use iMCC gateway accounts to handle buyer payments, and the <b>SellerInfo.IntegratedMerchantCreditCardInfo</b> container is no longer returned in <b>GetUser</b>
 * response.
 * @subpackage Structs
 */
class IntegratedMerchantCreditCardInfoType extends AbstractStructBase
{
    /**
     * The SupportedSite
     * Meta information extracted from the WSDL
     * - documentation: The <b>SellerInfo.IntegratedMerchantCreditCardInfo</b> container (and this field) are no longer returned in <b>GetUser</b> response, as eBay sellers can no longer use iMCC gateway accounts to handle buyer payments.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $SupportedSite;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for IntegratedMerchantCreditCardInfoType
     * @uses IntegratedMerchantCreditCardInfoType::setSupportedSite()
     * @uses IntegratedMerchantCreditCardInfoType::setAny()
     * @param string[] $supportedSite
     * @param \DOMDocument $any
     */
    public function __construct(array $supportedSite = array(), \DOMDocument $any = null)
    {
        $this
            ->setSupportedSite($supportedSite)
            ->setAny($any);
    }
    /**
     * Get SupportedSite value
     * @return string[]|null
     */
    public function getSupportedSite()
    {
        return $this->SupportedSite;
    }
    /**
     * This method is responsible for validating the values passed to the setSupportedSite method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSupportedSite method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSupportedSiteForArrayConstraintsFromSetSupportedSite(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $integratedMerchantCreditCardInfoTypeSupportedSiteItem) {
            // validation for constraint: enumeration
            if (!\EnumType\SiteCodeType::valueIsValid($integratedMerchantCreditCardInfoTypeSupportedSiteItem)) {
                $invalidValues[] = is_object($integratedMerchantCreditCardInfoTypeSupportedSiteItem) ? get_class($integratedMerchantCreditCardInfoTypeSupportedSiteItem) : sprintf('%s(%s)', gettype($integratedMerchantCreditCardInfoTypeSupportedSiteItem), var_export($integratedMerchantCreditCardInfoTypeSupportedSiteItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\SiteCodeType', is_array($invalidValues) ? implode(', ', $invalidValues) : var_export($invalidValues, true), implode(', ', \EnumType\SiteCodeType::getValidValues()));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set SupportedSite value
     * @uses \EnumType\SiteCodeType::valueIsValid()
     * @uses \EnumType\SiteCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $supportedSite
     * @return \StructType\IntegratedMerchantCreditCardInfoType
     */
    public function setSupportedSite(array $supportedSite = array())
    {
        // validation for constraint: array
        if ('' !== ($supportedSiteArrayErrorMessage = self::validateSupportedSiteForArrayConstraintsFromSetSupportedSite($supportedSite))) {
            throw new \InvalidArgumentException($supportedSiteArrayErrorMessage, __LINE__);
        }
        $this->SupportedSite = $supportedSite;
        return $this;
    }
    /**
     * Add item to SupportedSite value
     * @uses \EnumType\SiteCodeType::valueIsValid()
     * @uses \EnumType\SiteCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \StructType\IntegratedMerchantCreditCardInfoType
     */
    public function addToSupportedSite($item)
    {
        // validation for constraint: enumeration
        if (!\EnumType\SiteCodeType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\SiteCodeType', is_array($item) ? implode(', ', $item) : var_export($item, true), implode(', ', \EnumType\SiteCodeType::getValidValues())), __LINE__);
        }
        $this->SupportedSite[] = $item;
        return $this;
    }
    /**
     * Get any value
     * @uses \DOMDocument::loadXML()
     * @param bool $asString true: returns XML string, false: returns \DOMDocument
     * @return \DOMDocument|null
     */
    public function getAny($asString = true)
    {
        $domDocument = null;
        if (!empty($this->any) && !$asString) {
            $domDocument = new \DOMDocument('1.0', 'UTF-8');
            $domDocument->loadXML($this->any);
        }
        return $asString ? $this->any : $domDocument;
    }
    /**
     * Set any value
     * @uses \DOMDocument::hasChildNodes()
     * @uses \DOMDocument::saveXML()
     * @uses \DOMNode::item()
     * @param \DOMDocument $any
     * @return \StructType\IntegratedMerchantCreditCardInfoType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
