<?php

namespace ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Set ServiceType
 * @subpackage Services
 */
class Set extends AbstractSoapClientBase
{
    /**
     * Sets the RequesterCredentials SoapHeader param
     * @uses AbstractSoapClientBase::setSoapHeader()
     * @param \StructType\CustomSecurityHeaderType $requesterCredentials
     * @param string $nameSpace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return bool
     */
    public function setSoapHeaderRequesterCredentials(\StructType\CustomSecurityHeaderType $requesterCredentials, $nameSpace = 'urn:ebay:apis:eBLBaseComponents', $mustUnderstand = false, $actor = null)
    {
        return $this->setSoapHeader($nameSpace, 'RequesterCredentials', $requesterCredentials, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named SetMessagePreferences
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\SetMessagePreferencesRequestType $setMessagePreferencesRequest
     * @return \StructType\SetMessagePreferencesResponseType|bool
     */
    public function SetMessagePreferences(\StructType\SetMessagePreferencesRequestType $setMessagePreferencesRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->SetMessagePreferences($setMessagePreferencesRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named SetNotificationPreferences
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\SetNotificationPreferencesRequestType $setNotificationPreferencesRequest
     * @return \StructType\SetNotificationPreferencesResponseType|bool
     */
    public function SetNotificationPreferences(\StructType\SetNotificationPreferencesRequestType $setNotificationPreferencesRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->SetNotificationPreferences($setNotificationPreferencesRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named SetShippingDiscountProfiles
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\SetShippingDiscountProfilesRequestType $setShippingDiscountProfilesRequest
     * @return \StructType\SetShippingDiscountProfilesResponseType|bool
     */
    public function SetShippingDiscountProfiles(\StructType\SetShippingDiscountProfilesRequestType $setShippingDiscountProfilesRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->SetShippingDiscountProfiles($setShippingDiscountProfilesRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named SetStoreCategories
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\SetStoreCategoriesRequestType $setStoreCategoriesRequest
     * @return \StructType\SetStoreCategoriesResponseType|bool
     */
    public function SetStoreCategories(\StructType\SetStoreCategoriesRequestType $setStoreCategoriesRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->SetStoreCategories($setStoreCategoriesRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named SetTaxTable
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\SetTaxTableRequestType $setTaxTableRequest
     * @return \StructType\SetTaxTableResponseType|bool
     */
    public function SetTaxTable(\StructType\SetTaxTableRequestType $setTaxTableRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->SetTaxTable($setTaxTableRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named SetUserNotes
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\SetUserNotesRequestType $setUserNotesRequest
     * @return \StructType\SetUserNotesResponseType|bool
     */
    public function SetUserNotes(\StructType\SetUserNotesRequestType $setUserNotesRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->SetUserNotes($setUserNotesRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named SetUserPreferences
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\SetUserPreferencesRequestType $setUserPreferencesRequest
     * @return \StructType\SetUserPreferencesResponseType|bool
     */
    public function SetUserPreferences(\StructType\SetUserPreferencesRequestType $setUserPreferencesRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->SetUserPreferences($setUserPreferencesRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\SetMessagePreferencesResponseType|\StructType\SetNotificationPreferencesResponseType|\StructType\SetShippingDiscountProfilesResponseType|\StructType\SetStoreCategoriesResponseType|\StructType\SetTaxTableResponseType|\StructType\SetUserNotesResponseType|\StructType\SetUserPreferencesResponseType
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
