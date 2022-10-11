<?php

namespace ServiceType;

use \WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Add ServiceType
 * @subpackage Services
 */
class Add extends AbstractSoapClientBase
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
     * Method to call the operation originally named AddDispute
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\AddDisputeRequestType $addDisputeRequest
     * @return \StructType\AddDisputeResponseType|bool
     */
    public function AddDispute(\StructType\AddDisputeRequestType $addDisputeRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->AddDispute($addDisputeRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named AddDisputeResponse
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\AddDisputeResponseRequestType $addDisputeResponseRequest
     * @return \StructType\AddDisputeResponseResponseType|bool
     */
    public function AddDisputeResponse(\StructType\AddDisputeResponseRequestType $addDisputeResponseRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->AddDisputeResponse($addDisputeResponseRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named AddFixedPriceItem
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\AddFixedPriceItemRequestType $addFixedPriceItemRequest
     * @return \StructType\AddFixedPriceItemResponseType|bool
     */
    public function AddFixedPriceItem(\StructType\AddFixedPriceItemRequestType $addFixedPriceItemRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->AddFixedPriceItem($addFixedPriceItemRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named AddItem
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\AddItemRequestType $addItemRequest
     * @return \StructType\AddItemResponseType|bool
     */
    public function AddItem(\StructType\AddItemRequestType $addItemRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->AddItem($addItemRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named AddItems
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\AddItemsRequestType $addItemsRequest
     * @return \StructType\AddItemsResponseType|bool
     */
    public function AddItems(\StructType\AddItemsRequestType $addItemsRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->AddItems($addItemsRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named AddMemberMessageAAQToPartner
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\AddMemberMessageAAQToPartnerRequestType $addMemberMessageAAQToPartnerRequest
     * @return \StructType\AddMemberMessageAAQToPartnerResponseType|bool
     */
    public function AddMemberMessageAAQToPartner(\StructType\AddMemberMessageAAQToPartnerRequestType $addMemberMessageAAQToPartnerRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->AddMemberMessageAAQToPartner($addMemberMessageAAQToPartnerRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named AddMemberMessageRTQ
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\AddMemberMessageRTQRequestType $addMemberMessageRTQRequest
     * @return \StructType\AddMemberMessageRTQResponseType|bool
     */
    public function AddMemberMessageRTQ(\StructType\AddMemberMessageRTQRequestType $addMemberMessageRTQRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->AddMemberMessageRTQ($addMemberMessageRTQRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named AddMemberMessagesAAQToBidder
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\AddMemberMessagesAAQToBidderRequestType $addMemberMessagesAAQToBidderRequest
     * @return \StructType\AddMemberMessagesAAQToBidderResponseType|bool
     */
    public function AddMemberMessagesAAQToBidder(\StructType\AddMemberMessagesAAQToBidderRequestType $addMemberMessagesAAQToBidderRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->AddMemberMessagesAAQToBidder($addMemberMessagesAAQToBidderRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named AddOrder
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\AddOrderRequestType $addOrderRequest
     * @return \StructType\AddOrderResponseType|bool
     */
    public function AddOrder(\StructType\AddOrderRequestType $addOrderRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->AddOrder($addOrderRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named AddSecondChanceItem
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\AddSecondChanceItemRequestType $addSecondChanceItemRequest
     * @return \StructType\AddSecondChanceItemResponseType|bool
     */
    public function AddSecondChanceItem(\StructType\AddSecondChanceItemRequestType $addSecondChanceItemRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->AddSecondChanceItem($addSecondChanceItemRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named AddToItemDescription
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\AddToItemDescriptionRequestType $addToItemDescriptionRequest
     * @return \StructType\AddToItemDescriptionResponseType|bool
     */
    public function AddToItemDescription(\StructType\AddToItemDescriptionRequestType $addToItemDescriptionRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->AddToItemDescription($addToItemDescriptionRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named AddToWatchList
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\AddToWatchListRequestType $addToWatchListRequest
     * @return \StructType\AddToWatchListResponseType|bool
     */
    public function AddToWatchList(\StructType\AddToWatchListRequestType $addToWatchListRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->AddToWatchList($addToWatchListRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named AddTransactionConfirmationItem
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: RequesterCredentials
     * - SOAPHeaderNamespaces: urn:ebay:apis:eBLBaseComponents
     * - SOAPHeaderTypes: \StructType\CustomSecurityHeaderType
     * - SOAPHeaders: required
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\AddTransactionConfirmationItemRequestType $addTransactionConfirmationItemRequest
     * @return \StructType\AddTransactionConfirmationItemResponseType|bool
     */
    public function AddTransactionConfirmationItem(\StructType\AddTransactionConfirmationItemRequestType $addTransactionConfirmationItemRequest)
    {
        try {
            $this->setResult($this->getSoapClient()->AddTransactionConfirmationItem($addTransactionConfirmationItemRequest));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\AddDisputeResponseResponseType|\StructType\AddDisputeResponseType|\StructType\AddFixedPriceItemResponseType|\StructType\AddItemResponseType|\StructType\AddItemsResponseType|\StructType\AddMemberMessageAAQToPartnerResponseType|\StructType\AddMemberMessageRTQResponseType|\StructType\AddMemberMessagesAAQToBidderResponseType|\StructType\AddOrderResponseType|\StructType\AddSecondChanceItemResponseType|\StructType\AddToItemDescriptionResponseType|\StructType\AddToWatchListResponseType|\StructType\AddTransactionConfirmationItemResponseType
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
