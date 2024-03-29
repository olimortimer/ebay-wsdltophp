<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BuyingGuideType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is not used by any Trading API calls.
 * @subpackage Structs
 */
class BuyingGuideType extends AbstractStructBase
{
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - documentation: Display name of the buying guide.
     * - minOccurs: 0
     * @var string
     */
    public $Name;
    /**
     * The URL
     * Meta information extracted from the WSDL
     * - documentation: URL for the buying guide. Your application can present this as a link. Use the value of Name as the link's display name.
     * - minOccurs: 0
     * @var string
     */
    public $URL;
    /**
     * The CategoryID
     * Meta information extracted from the WSDL
     * - documentation: Identifies the category (if any) that is associated with the buying guide.
     * - minOccurs: 0
     * @var string
     */
    public $CategoryID;
    /**
     * The ProductFinderID
     * Meta information extracted from the WSDL
     * - documentation: Identifies the product finder (if any) that is associated with the buying guide. Only returned for product finder searches.
     * - minOccurs: 0
     * @var int
     */
    public $ProductFinderID;
    /**
     * The Title
     * Meta information extracted from the WSDL
     * - documentation: The title of the buying guide.
     * - minOccurs: 0
     * @var string
     */
    public $Title;
    /**
     * The Text
     * Meta information extracted from the WSDL
     * - documentation: The text of the guide. If the guide is longer than 2000 characters, the text is cut off and it ends with "...". See BuyingGuide.URL for a link to the full text of the review.
     * - minOccurs: 0
     * @var string
     */
    public $Text;
    /**
     * The CreationTime
     * Meta information extracted from the WSDL
     * - documentation: The time and date when the guide was posted.
     * - minOccurs: 0
     * @var string
     */
    public $CreationTime;
    /**
     * The UserID
     * Meta information extracted from the WSDL
     * - documentation: The author's eBay user ID. | This is a string wrapper for the eBay ID that uniquely identifies a user. This is used by several other types to identify a specific eBay user. <br><br>For GetAllBidders, some bidder information is
     * anonymous, to protect bidders from fraud. If the seller makes this API call, the actual IDs of all bidders on the seller's item will be returned. If a bidder makes this API call, the bidder's actual ID will be returned, but information for all
     * competing bidders or outside watchers will be returned as anonymized userIDs.
     * - base: xs:string
     * - minOccurs: 0
     * @var string
     */
    public $UserID;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for BuyingGuideType
     * @uses BuyingGuideType::setName()
     * @uses BuyingGuideType::setURL()
     * @uses BuyingGuideType::setCategoryID()
     * @uses BuyingGuideType::setProductFinderID()
     * @uses BuyingGuideType::setTitle()
     * @uses BuyingGuideType::setText()
     * @uses BuyingGuideType::setCreationTime()
     * @uses BuyingGuideType::setUserID()
     * @uses BuyingGuideType::setAny()
     * @param string $name
     * @param string $uRL
     * @param string $categoryID
     * @param int $productFinderID
     * @param string $title
     * @param string $text
     * @param string $creationTime
     * @param string $userID
     * @param \DOMDocument $any
     */
    public function __construct($name = null, $uRL = null, $categoryID = null, $productFinderID = null, $title = null, $text = null, $creationTime = null, $userID = null, \DOMDocument $any = null)
    {
        $this
            ->setName($name)
            ->setURL($uRL)
            ->setCategoryID($categoryID)
            ->setProductFinderID($productFinderID)
            ->setTitle($title)
            ->setText($text)
            ->setCreationTime($creationTime)
            ->setUserID($userID)
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
     * @return \StructType\BuyingGuideType
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
     * @return \StructType\BuyingGuideType
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
     * Get CategoryID value
     * @return string|null
     */
    public function getCategoryID()
    {
        return $this->CategoryID;
    }
    /**
     * Set CategoryID value
     * @param string $categoryID
     * @return \StructType\BuyingGuideType
     */
    public function setCategoryID($categoryID = null)
    {
        // validation for constraint: string
        if (!is_null($categoryID) && !is_string($categoryID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($categoryID, true), gettype($categoryID)), __LINE__);
        }
        $this->CategoryID = $categoryID;
        return $this;
    }
    /**
     * Get ProductFinderID value
     * @return int|null
     */
    public function getProductFinderID()
    {
        return $this->ProductFinderID;
    }
    /**
     * Set ProductFinderID value
     * @param int $productFinderID
     * @return \StructType\BuyingGuideType
     */
    public function setProductFinderID($productFinderID = null)
    {
        // validation for constraint: int
        if (!is_null($productFinderID) && !(is_int($productFinderID) || ctype_digit($productFinderID))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($productFinderID, true), gettype($productFinderID)), __LINE__);
        }
        $this->ProductFinderID = $productFinderID;
        return $this;
    }
    /**
     * Get Title value
     * @return string|null
     */
    public function getTitle()
    {
        return $this->Title;
    }
    /**
     * Set Title value
     * @param string $title
     * @return \StructType\BuyingGuideType
     */
    public function setTitle($title = null)
    {
        // validation for constraint: string
        if (!is_null($title) && !is_string($title)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($title, true), gettype($title)), __LINE__);
        }
        $this->Title = $title;
        return $this;
    }
    /**
     * Get Text value
     * @return string|null
     */
    public function getText()
    {
        return $this->Text;
    }
    /**
     * Set Text value
     * @param string $text
     * @return \StructType\BuyingGuideType
     */
    public function setText($text = null)
    {
        // validation for constraint: string
        if (!is_null($text) && !is_string($text)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($text, true), gettype($text)), __LINE__);
        }
        $this->Text = $text;
        return $this;
    }
    /**
     * Get CreationTime value
     * @return string|null
     */
    public function getCreationTime()
    {
        return $this->CreationTime;
    }
    /**
     * Set CreationTime value
     * @param string $creationTime
     * @return \StructType\BuyingGuideType
     */
    public function setCreationTime($creationTime = null)
    {
        // validation for constraint: string
        if (!is_null($creationTime) && !is_string($creationTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creationTime, true), gettype($creationTime)), __LINE__);
        }
        $this->CreationTime = $creationTime;
        return $this;
    }
    /**
     * Get UserID value
     * @return string|null
     */
    public function getUserID()
    {
        return $this->UserID;
    }
    /**
     * Set UserID value
     * @param string $userID
     * @return \StructType\BuyingGuideType
     */
    public function setUserID($userID = null)
    {
        // validation for constraint: string
        if (!is_null($userID) && !is_string($userID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($userID, true), gettype($userID)), __LINE__);
        }
        $this->UserID = $userID;
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
     * @return \StructType\BuyingGuideType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
