<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TimeZoneDetailsType StructType
 * Meta information extracted from the WSDL
 * - documentation: Time zone details about a region or location to which the seller is willing to ship.
 * @subpackage Structs
 */
class TimeZoneDetailsType extends AbstractStructBase
{
    /**
     * The TimeZoneID
     * Meta information extracted from the WSDL
     * - documentation: A unique identifier for a given time zone. This ID does not change for a given time zone, even if the time zone supports both standard and daylight saving time variants. Valid values for TimeZoneID correspond to OLSON IDs. These IDs
     * provide not only the information as to the offset from GMT (UTC), but also daylight saving time information. Thus, for example, America/Phoenix is distinct from America/Denver because they have different daylight saving time behavior. This value is
     * not localized.
     * - minOccurs: 0
     * @var string
     */
    public $TimeZoneID;
    /**
     * The StandardLabel
     * Meta information extracted from the WSDL
     * - documentation: Display name of a time zone in its standard (non-daylight saving) time representation. This value is localized and returned in the language for the site specified in the request (i.e., the numeric site ID that you specify in the
     * request URL for the SOAP API or the X-EBAY-API-SITEID header for the XML API).
     * - minOccurs: 0
     * @var string
     */
    public $StandardLabel;
    /**
     * The StandardOffset
     * Meta information extracted from the WSDL
     * - documentation: The offset in hours from GMT for a time zone when it is not adjusted for daylight saving time.
     * - minOccurs: 0
     * @var string
     */
    public $StandardOffset;
    /**
     * The DaylightSavingsLabel
     * Meta information extracted from the WSDL
     * - documentation: Display name of a time zone in its daylight saving time representation. This element is emitted for time zones that support daylight saving time only. The value is localized and returned in the language for the site specified in the
     * request.
     * - minOccurs: 0
     * @var string
     */
    public $DaylightSavingsLabel;
    /**
     * The DaylightSavingsOffset
     * Meta information extracted from the WSDL
     * - documentation: The offset in hours from GMT for a time zone when it is on daylight saving time. This element is emitted for time zones that support daylight saving time only.
     * - minOccurs: 0
     * @var string
     */
    public $DaylightSavingsOffset;
    /**
     * The DaylightSavingsInEffect
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether or not the time zone is currently on daylight saving time. A value of true indicates that the time zone is on daylights savings time. This element is emitted for time zones that support daylight saving time only.
     * - minOccurs: 0
     * @var bool
     */
    public $DaylightSavingsInEffect;
    /**
     * The DetailVersion
     * Meta information extracted from the WSDL
     * - documentation: Returns the latest version number for this field. The version can be used to determine if and when to refresh cached client data.
     * - minOccurs: 0
     * @var string
     */
    public $DetailVersion;
    /**
     * The UpdateTime
     * Meta information extracted from the WSDL
     * - documentation: Gives the time in GMT that the feature flags for the details were last updated. This timestamp can be used to determine if and when to refresh cached client data.
     * - minOccurs: 0
     * @var string
     */
    public $UpdateTime;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for TimeZoneDetailsType
     * @uses TimeZoneDetailsType::setTimeZoneID()
     * @uses TimeZoneDetailsType::setStandardLabel()
     * @uses TimeZoneDetailsType::setStandardOffset()
     * @uses TimeZoneDetailsType::setDaylightSavingsLabel()
     * @uses TimeZoneDetailsType::setDaylightSavingsOffset()
     * @uses TimeZoneDetailsType::setDaylightSavingsInEffect()
     * @uses TimeZoneDetailsType::setDetailVersion()
     * @uses TimeZoneDetailsType::setUpdateTime()
     * @uses TimeZoneDetailsType::setAny()
     * @param string $timeZoneID
     * @param string $standardLabel
     * @param string $standardOffset
     * @param string $daylightSavingsLabel
     * @param string $daylightSavingsOffset
     * @param bool $daylightSavingsInEffect
     * @param string $detailVersion
     * @param string $updateTime
     * @param \DOMDocument $any
     */
    public function __construct($timeZoneID = null, $standardLabel = null, $standardOffset = null, $daylightSavingsLabel = null, $daylightSavingsOffset = null, $daylightSavingsInEffect = null, $detailVersion = null, $updateTime = null, \DOMDocument $any = null)
    {
        $this
            ->setTimeZoneID($timeZoneID)
            ->setStandardLabel($standardLabel)
            ->setStandardOffset($standardOffset)
            ->setDaylightSavingsLabel($daylightSavingsLabel)
            ->setDaylightSavingsOffset($daylightSavingsOffset)
            ->setDaylightSavingsInEffect($daylightSavingsInEffect)
            ->setDetailVersion($detailVersion)
            ->setUpdateTime($updateTime)
            ->setAny($any);
    }
    /**
     * Get TimeZoneID value
     * @return string|null
     */
    public function getTimeZoneID()
    {
        return $this->TimeZoneID;
    }
    /**
     * Set TimeZoneID value
     * @param string $timeZoneID
     * @return \StructType\TimeZoneDetailsType
     */
    public function setTimeZoneID($timeZoneID = null)
    {
        // validation for constraint: string
        if (!is_null($timeZoneID) && !is_string($timeZoneID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($timeZoneID, true), gettype($timeZoneID)), __LINE__);
        }
        $this->TimeZoneID = $timeZoneID;
        return $this;
    }
    /**
     * Get StandardLabel value
     * @return string|null
     */
    public function getStandardLabel()
    {
        return $this->StandardLabel;
    }
    /**
     * Set StandardLabel value
     * @param string $standardLabel
     * @return \StructType\TimeZoneDetailsType
     */
    public function setStandardLabel($standardLabel = null)
    {
        // validation for constraint: string
        if (!is_null($standardLabel) && !is_string($standardLabel)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($standardLabel, true), gettype($standardLabel)), __LINE__);
        }
        $this->StandardLabel = $standardLabel;
        return $this;
    }
    /**
     * Get StandardOffset value
     * @return string|null
     */
    public function getStandardOffset()
    {
        return $this->StandardOffset;
    }
    /**
     * Set StandardOffset value
     * @param string $standardOffset
     * @return \StructType\TimeZoneDetailsType
     */
    public function setStandardOffset($standardOffset = null)
    {
        // validation for constraint: string
        if (!is_null($standardOffset) && !is_string($standardOffset)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($standardOffset, true), gettype($standardOffset)), __LINE__);
        }
        $this->StandardOffset = $standardOffset;
        return $this;
    }
    /**
     * Get DaylightSavingsLabel value
     * @return string|null
     */
    public function getDaylightSavingsLabel()
    {
        return $this->DaylightSavingsLabel;
    }
    /**
     * Set DaylightSavingsLabel value
     * @param string $daylightSavingsLabel
     * @return \StructType\TimeZoneDetailsType
     */
    public function setDaylightSavingsLabel($daylightSavingsLabel = null)
    {
        // validation for constraint: string
        if (!is_null($daylightSavingsLabel) && !is_string($daylightSavingsLabel)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($daylightSavingsLabel, true), gettype($daylightSavingsLabel)), __LINE__);
        }
        $this->DaylightSavingsLabel = $daylightSavingsLabel;
        return $this;
    }
    /**
     * Get DaylightSavingsOffset value
     * @return string|null
     */
    public function getDaylightSavingsOffset()
    {
        return $this->DaylightSavingsOffset;
    }
    /**
     * Set DaylightSavingsOffset value
     * @param string $daylightSavingsOffset
     * @return \StructType\TimeZoneDetailsType
     */
    public function setDaylightSavingsOffset($daylightSavingsOffset = null)
    {
        // validation for constraint: string
        if (!is_null($daylightSavingsOffset) && !is_string($daylightSavingsOffset)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($daylightSavingsOffset, true), gettype($daylightSavingsOffset)), __LINE__);
        }
        $this->DaylightSavingsOffset = $daylightSavingsOffset;
        return $this;
    }
    /**
     * Get DaylightSavingsInEffect value
     * @return bool|null
     */
    public function getDaylightSavingsInEffect()
    {
        return $this->DaylightSavingsInEffect;
    }
    /**
     * Set DaylightSavingsInEffect value
     * @param bool $daylightSavingsInEffect
     * @return \StructType\TimeZoneDetailsType
     */
    public function setDaylightSavingsInEffect($daylightSavingsInEffect = null)
    {
        // validation for constraint: boolean
        if (!is_null($daylightSavingsInEffect) && !is_bool($daylightSavingsInEffect)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($daylightSavingsInEffect, true), gettype($daylightSavingsInEffect)), __LINE__);
        }
        $this->DaylightSavingsInEffect = $daylightSavingsInEffect;
        return $this;
    }
    /**
     * Get DetailVersion value
     * @return string|null
     */
    public function getDetailVersion()
    {
        return $this->DetailVersion;
    }
    /**
     * Set DetailVersion value
     * @param string $detailVersion
     * @return \StructType\TimeZoneDetailsType
     */
    public function setDetailVersion($detailVersion = null)
    {
        // validation for constraint: string
        if (!is_null($detailVersion) && !is_string($detailVersion)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($detailVersion, true), gettype($detailVersion)), __LINE__);
        }
        $this->DetailVersion = $detailVersion;
        return $this;
    }
    /**
     * Get UpdateTime value
     * @return string|null
     */
    public function getUpdateTime()
    {
        return $this->UpdateTime;
    }
    /**
     * Set UpdateTime value
     * @param string $updateTime
     * @return \StructType\TimeZoneDetailsType
     */
    public function setUpdateTime($updateTime = null)
    {
        // validation for constraint: string
        if (!is_null($updateTime) && !is_string($updateTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($updateTime, true), gettype($updateTime)), __LINE__);
        }
        $this->UpdateTime = $updateTime;
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
     * @return \StructType\TimeZoneDetailsType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
