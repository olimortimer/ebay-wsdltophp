<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for StoreType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is used to provide details about a seller's eBay Store.
 * @subpackage Structs
 */
class StoreType extends AbstractStructBase
{
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - documentation: Name of the eBay Store. The name is shown at the top of the Store page.
     * - minOccurs: 0
     * @var string
     */
    public $Name;
    /**
     * The URLPath
     * Meta information extracted from the WSDL
     * - documentation: The URL path of the Store (58 characters maximum). Only if you are using Chinese characters in the Name property do you need to use this field, such as if you are opening a Store on the Taiwan site. The reason for this is that the
     * URL path is normally derived from the Store name, but it cannot be derived from the name of the Store if it contains Chinese characters because URLs cannot contain Chinese characters.
     * - minOccurs: 0
     * @var string
     */
    public $URLPath;
    /**
     * The URL
     * Meta information extracted from the WSDL
     * - documentation: The complete URL of the user's Store. This field is only ever returned, and does not need to be explicitly set.
     * - minOccurs: 0
     * @var string
     */
    public $URL;
    /**
     * The SubscriptionLevel
     * Meta information extracted from the WSDL
     * - documentation: The value returned in this field indicates the user's eBay Store subscription level. <br><br> <span class="tablenote"><b>Note:</b> This field is deprecated and will stop being returned beginning on March 31, 2023. The <a
     * href="/api-docs/sell/account/resources/subscription/methods/getSubscription" target="_blank">getSubscription</a> method of the <a href="/api-docs/sell/account/overview.html" target="_blank">Account API</a> can be used to retrieve information on a
     * seller's eBay store subscription.</span>
     * - minOccurs: 0
     * @var string
     */
    public $SubscriptionLevel;
    /**
     * The Description
     * Meta information extracted from the WSDL
     * - documentation: The seller-provided description of the eBay Store.
     * - minOccurs: 0
     * @var string
     */
    public $Description;
    /**
     * The Logo
     * Meta information extracted from the WSDL
     * - documentation: This container provides information about a Store logo. <br> <br> The <b>GetStore</b> call now only returns the <b>Logo.URL</b> value, but not <b>Logo.LogoID</b> or <b>Logo.Name</b>.
     * - minOccurs: 0
     * @var \StructType\StoreLogoType
     */
    public $Logo;
    /**
     * The CustomCategories
     * Meta information extracted from the WSDL
     * - documentation: Container consisting of an array of one or more <b>CustomCategory</b> containers. Each <b>CustomCategory</b> container consists of details related to an eBay Store custom category. <br> <br> To modify an eBay Store's custom
     * categories, an eBay Store owner would use the <b>StoreCategories</b> container in the request of a <b>SetStoreCategories</b> call.
     * - minOccurs: 0
     * @var \ArrayType\StoreCustomCategoryArrayType
     */
    public $CustomCategories;
    /**
     * The MerchDisplay
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $MerchDisplay;
    /**
     * The LastOpenedTime
     * Meta information extracted from the WSDL
     * - documentation: Indicates the time the store was last opened or reopened.
     * - minOccurs: 0
     * @var string
     */
    public $LastOpenedTime;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for StoreType
     * @uses StoreType::setName()
     * @uses StoreType::setURLPath()
     * @uses StoreType::setURL()
     * @uses StoreType::setSubscriptionLevel()
     * @uses StoreType::setDescription()
     * @uses StoreType::setLogo()
     * @uses StoreType::setCustomCategories()
     * @uses StoreType::setMerchDisplay()
     * @uses StoreType::setLastOpenedTime()
     * @uses StoreType::setAny()
     * @param string $name
     * @param string $uRLPath
     * @param string $uRL
     * @param string $subscriptionLevel
     * @param string $description
     * @param \StructType\StoreLogoType $logo
     * @param \ArrayType\StoreCustomCategoryArrayType $customCategories
     * @param string $merchDisplay
     * @param string $lastOpenedTime
     * @param \DOMDocument $any
     */
    public function __construct($name = null, $uRLPath = null, $uRL = null, $subscriptionLevel = null, $description = null, \StructType\StoreLogoType $logo = null, \ArrayType\StoreCustomCategoryArrayType $customCategories = null, $merchDisplay = null, $lastOpenedTime = null, \DOMDocument $any = null)
    {
        $this
            ->setName($name)
            ->setURLPath($uRLPath)
            ->setURL($uRL)
            ->setSubscriptionLevel($subscriptionLevel)
            ->setDescription($description)
            ->setLogo($logo)
            ->setCustomCategories($customCategories)
            ->setMerchDisplay($merchDisplay)
            ->setLastOpenedTime($lastOpenedTime)
            ->setAny($any);
    }
    /**
     * Get Name value
     * @return string|null
     */
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \StructType\StoreType
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->Name = $name;
        return $this;
    }
    /**
     * Get URLPath value
     * @return string|null
     */
    public function getURLPath()
    {
        return $this->URLPath;
    }
    /**
     * Set URLPath value
     * @param string $uRLPath
     * @return \StructType\StoreType
     */
    public function setURLPath($uRLPath = null)
    {
        // validation for constraint: string
        if (!is_null($uRLPath) && !is_string($uRLPath)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($uRLPath, true), gettype($uRLPath)), __LINE__);
        }
        $this->URLPath = $uRLPath;
        return $this;
    }
    /**
     * Get URL value
     * @return string|null
     */
    public function getURL()
    {
        return $this->URL;
    }
    /**
     * Set URL value
     * @param string $uRL
     * @return \StructType\StoreType
     */
    public function setURL($uRL = null)
    {
        // validation for constraint: string
        if (!is_null($uRL) && !is_string($uRL)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($uRL, true), gettype($uRL)), __LINE__);
        }
        $this->URL = $uRL;
        return $this;
    }
    /**
     * Get SubscriptionLevel value
     * @return string|null
     */
    public function getSubscriptionLevel()
    {
        return $this->SubscriptionLevel;
    }
    /**
     * Set SubscriptionLevel value
     * @uses \EnumType\StoreSubscriptionLevelCodeType::valueIsValid()
     * @uses \EnumType\StoreSubscriptionLevelCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $subscriptionLevel
     * @return \StructType\StoreType
     */
    public function setSubscriptionLevel($subscriptionLevel = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\StoreSubscriptionLevelCodeType::valueIsValid($subscriptionLevel)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\StoreSubscriptionLevelCodeType', is_array($subscriptionLevel) ? implode(', ', $subscriptionLevel) : var_export($subscriptionLevel, true), implode(', ', \EnumType\StoreSubscriptionLevelCodeType::getValidValues())), __LINE__);
        }
        $this->SubscriptionLevel = $subscriptionLevel;
        return $this;
    }
    /**
     * Get Description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param string $description
     * @return \StructType\StoreType
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->Description = $description;
        return $this;
    }
    /**
     * Get Logo value
     * @return \StructType\StoreLogoType|null
     */
    public function getLogo()
    {
        return $this->Logo;
    }
    /**
     * Set Logo value
     * @param \StructType\StoreLogoType $logo
     * @return \StructType\StoreType
     */
    public function setLogo(\StructType\StoreLogoType $logo = null)
    {
        $this->Logo = $logo;
        return $this;
    }
    /**
     * Get CustomCategories value
     * @return \ArrayType\StoreCustomCategoryArrayType|null
     */
    public function getCustomCategories()
    {
        return $this->CustomCategories;
    }
    /**
     * Set CustomCategories value
     * @param \ArrayType\StoreCustomCategoryArrayType $customCategories
     * @return \StructType\StoreType
     */
    public function setCustomCategories(\ArrayType\StoreCustomCategoryArrayType $customCategories = null)
    {
        $this->CustomCategories = $customCategories;
        return $this;
    }
    /**
     * Get MerchDisplay value
     * @return string|null
     */
    public function getMerchDisplay()
    {
        return $this->MerchDisplay;
    }
    /**
     * Set MerchDisplay value
     * @uses \EnumType\MerchDisplayCodeType::valueIsValid()
     * @uses \EnumType\MerchDisplayCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $merchDisplay
     * @return \StructType\StoreType
     */
    public function setMerchDisplay($merchDisplay = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\MerchDisplayCodeType::valueIsValid($merchDisplay)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\MerchDisplayCodeType', is_array($merchDisplay) ? implode(', ', $merchDisplay) : var_export($merchDisplay, true), implode(', ', \EnumType\MerchDisplayCodeType::getValidValues())), __LINE__);
        }
        $this->MerchDisplay = $merchDisplay;
        return $this;
    }
    /**
     * Get LastOpenedTime value
     * @return string|null
     */
    public function getLastOpenedTime()
    {
        return $this->LastOpenedTime;
    }
    /**
     * Set LastOpenedTime value
     * @param string $lastOpenedTime
     * @return \StructType\StoreType
     */
    public function setLastOpenedTime($lastOpenedTime = null)
    {
        // validation for constraint: string
        if (!is_null($lastOpenedTime) && !is_string($lastOpenedTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastOpenedTime, true), gettype($lastOpenedTime)), __LINE__);
        }
        $this->LastOpenedTime = $lastOpenedTime;
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
     * @return \StructType\StoreType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
