<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for VideoDetailsType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is for internal/future use only
 * @subpackage Structs
 */
class VideoDetailsType extends AbstractStructBase
{
    /**
     * The VideoID
     * Meta information extracted from the WSDL
     * - documentation: Unique identifier of a video. This identifier is created by eBay after a video is uploaded to the system.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $VideoID;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for VideoDetailsType
     * @uses VideoDetailsType::setVideoID()
     * @uses VideoDetailsType::setAny()
     * @param string[] $videoID
     * @param \DOMDocument $any
     */
    public function __construct(array $videoID = array(), \DOMDocument $any = null)
    {
        $this
            ->setVideoID($videoID)
            ->setAny($any);
    }
    /**
     * Get VideoID value
     * @return string[]|null
     */
    public function getVideoID()
    {
        return $this->VideoID;
    }
    /**
     * This method is responsible for validating the values passed to the setVideoID method
     * This method is willingly generated in order to preserve the one-line inline validation within the setVideoID method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateVideoIDForArrayConstraintsFromSetVideoID(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $videoDetailsTypeVideoIDItem) {
            // validation for constraint: itemType
            if (!is_string($videoDetailsTypeVideoIDItem)) {
                $invalidValues[] = is_object($videoDetailsTypeVideoIDItem) ? get_class($videoDetailsTypeVideoIDItem) : sprintf('%s(%s)', gettype($videoDetailsTypeVideoIDItem), var_export($videoDetailsTypeVideoIDItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The VideoID property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set VideoID value
     * @throws \InvalidArgumentException
     * @param string[] $videoID
     * @return \StructType\VideoDetailsType
     */
    public function setVideoID(array $videoID = array())
    {
        // validation for constraint: array
        if ('' !== ($videoIDArrayErrorMessage = self::validateVideoIDForArrayConstraintsFromSetVideoID($videoID))) {
            throw new \InvalidArgumentException($videoIDArrayErrorMessage, __LINE__);
        }
        $this->VideoID = $videoID;
        return $this;
    }
    /**
     * Add item to VideoID value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \StructType\VideoDetailsType
     */
    public function addToVideoID($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The VideoID property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->VideoID[] = $item;
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
     * @return \StructType\VideoDetailsType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
