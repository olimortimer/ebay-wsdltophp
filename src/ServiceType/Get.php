<?php

namespace ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Get ServiceType
 * @subpackage Services
 */
class Get extends AbstractSoapClientBase
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
     * Method to call the operation originally named GetAccount
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetAccountRequestType $getAccountRequest
     * @return \StructType\GetAccountResponseType|bool
     */
    public function GetAccount(\StructType\GetAccountRequestType $getAccountRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->GetAccount($getAccountRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetAdFormatLeads
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetAdFormatLeadsRequestType $getAdFormatLeadsRequest
     * @return \StructType\GetAdFormatLeadsResponseType|bool
     */
    public function GetAdFormatLeads(\StructType\GetAdFormatLeadsRequestType $getAdFormatLeadsRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->GetAdFormatLeads($getAdFormatLeadsRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetAllBidders
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetAllBiddersRequestType $getAllBiddersRequest
     * @return \StructType\GetAllBiddersResponseType|bool
     */
    public function GetAllBidders(\StructType\GetAllBiddersRequestType $getAllBiddersRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->GetAllBidders($getAllBiddersRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetBestOffers
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetBestOffersRequestType $getBestOffersRequest
     * @return \StructType\GetBestOffersResponseType|bool
     */
    public function GetBestOffers(\StructType\GetBestOffersRequestType $getBestOffersRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->GetBestOffers($getBestOffersRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetBidderList
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetBidderListRequestType $getBidderListRequest
     * @return \StructType\GetBidderListResponseType|bool
     */
    public function GetBidderList(\StructType\GetBidderListRequestType $getBidderListRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->GetBidderList($getBidderListRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetCategories
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetCategoriesRequestType $getCategoriesRequest
     * @return \StructType\GetCategoriesResponseType|bool
     */
    public function GetCategories(\StructType\GetCategoriesRequestType $getCategoriesRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->GetCategories($getCategoriesRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetCategoryFeatures
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetCategoryFeaturesRequestType $getCategoryFeaturesRequest
     * @return \StructType\GetCategoryFeaturesResponseType|bool
     */
    public function GetCategoryFeatures(\StructType\GetCategoryFeaturesRequestType $getCategoryFeaturesRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->GetCategoryFeatures($getCategoryFeaturesRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetCategoryMappings
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetCategoryMappingsRequestType $getCategoryMappingsRequest
     * @return \StructType\GetCategoryMappingsResponseType|bool
     */
    public function GetCategoryMappings(\StructType\GetCategoryMappingsRequestType $getCategoryMappingsRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->GetCategoryMappings($getCategoryMappingsRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetChallengeToken
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetChallengeTokenRequestType $getChallengeTokenRequest
     * @return \StructType\GetChallengeTokenResponseType|bool
     */
    public function GetChallengeToken(\StructType\GetChallengeTokenRequestType $getChallengeTokenRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->GetChallengeToken($getChallengeTokenRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetCharities
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetCharitiesRequestType $getCharitiesRequest
     * @return \StructType\GetCharitiesResponseType|bool
     */
    public function GetCharities(\StructType\GetCharitiesRequestType $getCharitiesRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->GetCharities($getCharitiesRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetClientAlertsAuthToken
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetClientAlertsAuthTokenRequestType $getClientAlertsAuthTokenRequest
     * @return \StructType\GetClientAlertsAuthTokenResponseType|bool
     */
    public function GetClientAlertsAuthToken(\StructType\GetClientAlertsAuthTokenRequestType $getClientAlertsAuthTokenRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->GetClientAlertsAuthToken($getClientAlertsAuthTokenRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetDescriptionTemplates
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetDescriptionTemplatesRequestType $getDescriptionTemplatesRequest
     * @return \StructType\GetDescriptionTemplatesResponseType|bool
     */
    public function GetDescriptionTemplates(\StructType\GetDescriptionTemplatesRequestType $getDescriptionTemplatesRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->GetDescriptionTemplates($getDescriptionTemplatesRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetFeedback
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetFeedbackRequestType $getFeedbackRequest
     * @return \StructType\GetFeedbackResponseType|bool
     */
    public function GetFeedback(\StructType\GetFeedbackRequestType $getFeedbackRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->GetFeedback($getFeedbackRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetItem
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetItemRequestType $getItemRequest
     * @return \StructType\GetItemResponseType|bool
     */
    public function GetItem(\StructType\GetItemRequestType $getItemRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->GetItem($getItemRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetItemShipping
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetItemShippingRequestType $getItemShippingRequest
     * @return \StructType\GetItemShippingResponseType|bool
     */
    public function GetItemShipping(\StructType\GetItemShippingRequestType $getItemShippingRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->GetItemShipping($getItemShippingRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetItemTransactions
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetItemTransactionsRequestType $getItemTransactionsRequest
     * @return \StructType\GetItemTransactionsResponseType|bool
     */
    public function GetItemTransactions(\StructType\GetItemTransactionsRequestType $getItemTransactionsRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->GetItemTransactions($getItemTransactionsRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetItemsAwaitingFeedback
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetItemsAwaitingFeedbackRequestType $getItemsAwaitingFeedbackRequest
     * @return \StructType\GetItemsAwaitingFeedbackResponseType|bool
     */
    public function GetItemsAwaitingFeedback(\StructType\GetItemsAwaitingFeedbackRequestType $getItemsAwaitingFeedbackRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->GetItemsAwaitingFeedback($getItemsAwaitingFeedbackRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetMemberMessages
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetMemberMessagesRequestType $getMemberMessagesRequest
     * @return \StructType\GetMemberMessagesResponseType|bool
     */
    public function GetMemberMessages(\StructType\GetMemberMessagesRequestType $getMemberMessagesRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->GetMemberMessages($getMemberMessagesRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetMessagePreferences
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetMessagePreferencesRequestType $getMessagePreferencesRequest
     * @return \StructType\GetMessagePreferencesResponseType|bool
     */
    public function GetMessagePreferences(\StructType\GetMessagePreferencesRequestType $getMessagePreferencesRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->GetMessagePreferences($getMessagePreferencesRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetMyMessages
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetMyMessagesRequestType $getMyMessagesRequest
     * @return \StructType\GetMyMessagesResponseType|bool
     */
    public function GetMyMessages(\StructType\GetMyMessagesRequestType $getMyMessagesRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->GetMyMessages($getMyMessagesRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetMyeBayBuying
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetMyeBayBuyingRequestType $getMyeBayBuyingRequest
     * @return \StructType\GetMyeBayBuyingResponseType|bool
     */
    public function GetMyeBayBuying(\StructType\GetMyeBayBuyingRequestType $getMyeBayBuyingRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->GetMyeBayBuying($getMyeBayBuyingRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetMyeBayReminders
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetMyeBayRemindersRequestType $getMyeBayRemindersRequest
     * @return \StructType\GetMyeBayRemindersResponseType|bool
     */
    public function GetMyeBayReminders(\StructType\GetMyeBayRemindersRequestType $getMyeBayRemindersRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->GetMyeBayReminders($getMyeBayRemindersRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetMyeBaySelling
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetMyeBaySellingRequestType $getMyeBaySellingRequest
     * @return \StructType\GetMyeBaySellingResponseType|bool
     */
    public function GetMyeBaySelling(\StructType\GetMyeBaySellingRequestType $getMyeBaySellingRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->GetMyeBaySelling($getMyeBaySellingRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetNotificationPreferences
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetNotificationPreferencesRequestType $getNotificationPreferencesRequest
     * @return \StructType\GetNotificationPreferencesResponseType|bool
     */
    public function GetNotificationPreferences(\StructType\GetNotificationPreferencesRequestType $getNotificationPreferencesRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->GetNotificationPreferences($getNotificationPreferencesRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetNotificationsUsage
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetNotificationsUsageRequestType $getNotificationsUsageRequest
     * @return \StructType\GetNotificationsUsageResponseType|bool
     */
    public function GetNotificationsUsage(\StructType\GetNotificationsUsageRequestType $getNotificationsUsageRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->GetNotificationsUsage($getNotificationsUsageRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetOrderTransactions
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetOrderTransactionsRequestType $getOrderTransactionsRequest
     * @return \StructType\GetOrderTransactionsResponseType|bool
     */
    public function GetOrderTransactions(\StructType\GetOrderTransactionsRequestType $getOrderTransactionsRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->GetOrderTransactions($getOrderTransactionsRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetOrders
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetOrdersRequestType $getOrdersRequest
     * @return \StructType\GetOrdersResponseType|bool
     */
    public function GetOrders(\StructType\GetOrdersRequestType $getOrdersRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->GetOrders($getOrdersRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetSellerDashboard
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetSellerDashboardRequestType $getSellerDashboardRequest
     * @return \StructType\GetSellerDashboardResponseType|bool
     */
    public function GetSellerDashboard(\StructType\GetSellerDashboardRequestType $getSellerDashboardRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->GetSellerDashboard($getSellerDashboardRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetSellerEvents
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetSellerEventsRequestType $getSellerEventsRequest
     * @return \StructType\GetSellerEventsResponseType|bool
     */
    public function GetSellerEvents(\StructType\GetSellerEventsRequestType $getSellerEventsRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->GetSellerEvents($getSellerEventsRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetSellerList
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetSellerListRequestType $getSellerListRequest
     * @return \StructType\GetSellerListResponseType|bool
     */
    public function GetSellerList(\StructType\GetSellerListRequestType $getSellerListRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->GetSellerList($getSellerListRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetSellerTransactions
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetSellerTransactionsRequestType $getSellerTransactionsRequest
     * @return \StructType\GetSellerTransactionsResponseType|bool
     */
    public function GetSellerTransactions(\StructType\GetSellerTransactionsRequestType $getSellerTransactionsRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->GetSellerTransactions($getSellerTransactionsRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetSessionID
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetSessionIDRequestType $getSessionIDRequest
     * @return \StructType\GetSessionIDResponseType|bool
     */
    public function GetSessionID(\StructType\GetSessionIDRequestType $getSessionIDRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->GetSessionID($getSessionIDRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetShippingDiscountProfiles
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetShippingDiscountProfilesRequestType $getShippingDiscountProfilesRequest
     * @return \StructType\GetShippingDiscountProfilesResponseType|bool
     */
    public function GetShippingDiscountProfiles(\StructType\GetShippingDiscountProfilesRequestType $getShippingDiscountProfilesRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->GetShippingDiscountProfiles($getShippingDiscountProfilesRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetStore
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetStoreRequestType $getStoreRequest
     * @return \StructType\GetStoreResponseType|bool
     */
    public function GetStore(\StructType\GetStoreRequestType $getStoreRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->GetStore($getStoreRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetStoreCategoryUpdateStatus
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetStoreCategoryUpdateStatusRequestType $getStoreCategoryUpdateStatusRequest
     * @return \StructType\GetStoreCategoryUpdateStatusResponseType|bool
     */
    public function GetStoreCategoryUpdateStatus(\StructType\GetStoreCategoryUpdateStatusRequestType $getStoreCategoryUpdateStatusRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->GetStoreCategoryUpdateStatus($getStoreCategoryUpdateStatusRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetSuggestedCategories
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetSuggestedCategoriesRequestType $getSuggestedCategoriesRequest
     * @return \StructType\GetSuggestedCategoriesResponseType|bool
     */
    public function GetSuggestedCategories(\StructType\GetSuggestedCategoriesRequestType $getSuggestedCategoriesRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->GetSuggestedCategories($getSuggestedCategoriesRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetTaxTable
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetTaxTableRequestType $getTaxTableRequest
     * @return \StructType\GetTaxTableResponseType|bool
     */
    public function GetTaxTable(\StructType\GetTaxTableRequestType $getTaxTableRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->GetTaxTable($getTaxTableRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetTokenStatus
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetTokenStatusRequestType $getTokenStatusRequest
     * @return \StructType\GetTokenStatusResponseType|bool
     */
    public function GetTokenStatus(\StructType\GetTokenStatusRequestType $getTokenStatusRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->GetTokenStatus($getTokenStatusRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetUser
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetUserRequestType $getUserRequest
     * @return \StructType\GetUserResponseType|bool
     */
    public function GetUser(\StructType\GetUserRequestType $getUserRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->GetUser($getUserRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetUserContactDetails
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetUserContactDetailsRequestType $getUserContactDetailsRequest
     * @return \StructType\GetUserContactDetailsResponseType|bool
     */
    public function GetUserContactDetails(\StructType\GetUserContactDetailsRequestType $getUserContactDetailsRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->GetUserContactDetails($getUserContactDetailsRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetUserPreferences
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetUserPreferencesRequestType $getUserPreferencesRequest
     * @return \StructType\GetUserPreferencesResponseType|bool
     */
    public function GetUserPreferences(\StructType\GetUserPreferencesRequestType $getUserPreferencesRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->GetUserPreferences($getUserPreferencesRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetVeROReasonCodeDetails
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetVeROReasonCodeDetailsRequestType $getVeROReasonCodeDetailsRequest
     * @return \StructType\GetVeROReasonCodeDetailsResponseType|bool
     */
    public function GetVeROReasonCodeDetails(\StructType\GetVeROReasonCodeDetailsRequestType $getVeROReasonCodeDetailsRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->GetVeROReasonCodeDetails($getVeROReasonCodeDetailsRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetVeROReportStatus
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetVeROReportStatusRequestType $getVeROReportStatusRequest
     * @return \StructType\GetVeROReportStatusResponseType|bool
     */
    public function GetVeROReportStatus(\StructType\GetVeROReportStatusRequestType $getVeROReportStatusRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->GetVeROReportStatus($getVeROReportStatusRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\GetAccountResponseType|\StructType\GetAdFormatLeadsResponseType|\StructType\GetAllBiddersResponseType|\StructType\GetBestOffersResponseType|\StructType\GetBidderListResponseType|\StructType\GetCategoriesResponseType|\StructType\GetCategoryFeaturesResponseType|\StructType\GetCategoryMappingsResponseType|\StructType\GetChallengeTokenResponseType|\StructType\GetCharitiesResponseType|\StructType\GetClientAlertsAuthTokenResponseType|\StructType\GetDescriptionTemplatesResponseType|\StructType\GetFeedbackResponseType|\StructType\GetItemResponseType|\StructType\GetItemsAwaitingFeedbackResponseType|\StructType\GetItemShippingResponseType|\StructType\GetItemTransactionsResponseType|\StructType\GetMemberMessagesResponseType|\StructType\GetMessagePreferencesResponseType|\StructType\GetMyeBayBuyingResponseType|\StructType\GetMyeBayRemindersResponseType|\StructType\GetMyeBaySellingResponseType|\StructType\GetMyMessagesResponseType|\StructType\GetNotificationPreferencesResponseType|\StructType\GetNotificationsUsageResponseType|\StructType\GetOrdersResponseType|\StructType\GetOrderTransactionsResponseType|\StructType\GetSellerDashboardResponseType|\StructType\GetSellerEventsResponseType|\StructType\GetSellerListResponseType|\StructType\GetSellerTransactionsResponseType|\StructType\GetSessionIDResponseType|\StructType\GetShippingDiscountProfilesResponseType|\StructType\GetStoreCategoryUpdateStatusResponseType|\StructType\GetStoreResponseType|\StructType\GetSuggestedCategoriesResponseType|\StructType\GetTaxTableResponseType|\StructType\GetTokenStatusResponseType|\StructType\GetUserContactDetailsResponseType|\StructType\GetUserPreferencesResponseType|\StructType\GetUserResponseType|\StructType\GetVeROReasonCodeDetailsResponseType|\StructType\GetVeROReportStatusResponseType
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
