<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DispatchCutoffTimePreferencesType StructType
 * Meta information extracted from the WSDL
 * - documentation: Contains a seller's cut off time preferences for same day handling for item shipping.
 * @subpackage Structs
 */
class DispatchCutoffTimePreferencesType extends AbstractStructBase
{
    /**
     * The CutoffTime
     * Meta information extracted from the WSDL
     * - documentation: If the seller specifies a <strong>DispatchTimeMax</strong> value of <code>0</code> to indicate same-day handling for an item, the seller's shipping commitment depends on the value of <strong>CutoffTime</strong> for the eBay site on
     * which the item is listed. <br/><br/> For orders placed (and cleared payment received) before the indicated cut off time, the item must be shipped by the end of the current day. For orders completed on or after the cut off time, the item must be
     * shipped by the end of the following day (excluding weekends and local holidays). <br/><br/> <span class="tablenote"> <strong>Note:</strong> For sellers opted in to the feature that supports different order cutoff times for each business day, the
     * order cutoff time is not applicable. This cutoff time cannot be changed with the <strong>SetUserPreferences</strong> call, and the value returned in the <strong>GetUserPreferences</strong> call may not be accurate if the seller has customized this
     * cutoff time for one or more business days. In order for the seller to change and/or confirm the actual order cutoff times for same-day handling, that seller should go to Shipping Preferences in My eBay. </span> <strong>CutoffTime</strong> has a
     * default initial value for each eBay site, but you can use <strong>SetUserPreferences</strong> to override the default for individual sellers. The default value for most eBay sites is 2:00PM local time. Enter times in 30 minute increments from the top
     * of the hour. That is, enter values either on the hour (:00) or 30 minutes past the hour (:30). Other values will be rounded down to the next closest 30 minute increment. Times entered should be local to the value provided for
     * <strong>TimeZoneID</strong>. <br/>
     * - minOccurs: 0
     * @var string
     */
    public $CutoffTime;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for DispatchCutoffTimePreferencesType
     * @uses DispatchCutoffTimePreferencesType::setCutoffTime()
     * @uses DispatchCutoffTimePreferencesType::setAny()
     * @param string $cutoffTime
     * @param \DOMDocument $any
     */
    public function __construct($cutoffTime = null, \DOMDocument $any = null)
    {
        $this
            ->setCutoffTime($cutoffTime)
            ->setAny($any);
    }
    /**
     * Get CutoffTime value
     * @return string|null
     */
    public function getCutoffTime()
    {
        return $this->CutoffTime;
    }
    /**
     * Set CutoffTime value
     * @param string $cutoffTime
     * @return \StructType\DispatchCutoffTimePreferencesType
     */
    public function setCutoffTime($cutoffTime = null)
    {
        // validation for constraint: string
        if (!is_null($cutoffTime) && !is_string($cutoffTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cutoffTime, true), gettype($cutoffTime)), __LINE__);
        }
        $this->CutoffTime = $cutoffTime;
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
     * @return \StructType\DispatchCutoffTimePreferencesType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
