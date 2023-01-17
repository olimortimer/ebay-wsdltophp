<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UnpaidItemAssistancePreferencesType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type defines the <b>UnpaidItemAssistancePreferences</b> container. This container is used in <b>SetUserPreferences</b> to set the preferences related to the <b>Unpaid Item Assistant</b> feature. The
 * <b>UnpaidItemAssistancePreferences</b> container is also returned in <b>GetUserPreferences</b> (if the <b>ShowUnpaidItemAssistancePreference</b> flag is included and set to true in the request). <br/><br/> See the <a
 * href="https://www.ebay.com/help/selling/getting-paid/resolving-unpaid-items?id=4137">Resolving unpaid items with buyers</a> Help topic for more information about setting up and using the Unpaid Item preferences feature.
 * @subpackage Structs
 */
class UnpaidItemAssistancePreferencesType extends AbstractStructBase
{
    /**
     * The DelayBeforeOpeningDispute
     * Meta information extracted from the WSDL
     * - documentation: This value indicates the number of days that should elapse before an unpaid order is cancelled on behalf of the seller. <b>Valid values are</b>: 4, 7, 11, 19, 27, and 30 (days). <br/><br/> This field is ignored if the
     * <b>OptInStatus</b> flag is included and set to <code>false</code> in the request, or if the seller is not currently opted into the Unpaid Item preferences feature on My eBay. <br/>
     * - minOccurs: 0
     * @var int
     */
    public $DelayBeforeOpeningDispute;
    /**
     * The OptInStatus
     * Meta information extracted from the WSDL
     * - documentation: Flag to indicate whether or not the seller has enabled Unpaid Item preferences. Unpaid Item preferences must be enabled for any of the Unpaid Item preferences to have an effect.
     * - minOccurs: 0
     * @var bool
     */
    public $OptInStatus;
    /**
     * The AutoRelist
     * Meta information extracted from the WSDL
     * - documentation: Flag to indicate whether or not the seller wants eBay to automatically relist items after an unpaid order is cancelled. For a multiple-quantity listing, the quantity is adjusted if <b>AutoRelist</b> is set to <code>true</code>.
     * <br/><br/> This field is ignored if the <b>OptInStatus</b> flag is included and set to <code>false</code> in the request, or if the seller is not currently opted into the Unpaid Item preferences feature on My eBay.
     * - default: false
     * - minOccurs: 0
     * @var bool
     */
    public $AutoRelist;
    /**
     * The RemoveAllExcludedUsers
     * Meta information extracted from the WSDL
     * - documentation: This field should be included and set to <code>true</code> if the seller wants to clear all excluded users set in Unpaid Item preferences. A seller may want to create an excluded user list if that seller prefers to work directly with
     * those buyers to work out the unpaid order situation. <br/><br/> Users can be added to Exclusion list through the <b>ExcludedUser</b> field. The <b>RemoveAllExcludedUsers</b> field is ignored if the <b>OptInStatus</b> flag is included and set to false
     * in the request, or if the seller is not currently opted into the Unpaid Item preferences feature in Unpaid Item preferences on My eBay.
     * - default: false
     * - minOccurs: 0
     * @var bool
     */
    public $RemoveAllExcludedUsers;
    /**
     * The ExcludedUser
     * Meta information extracted from the WSDL
     * - documentation: An eBay User ID to which the seller's Unpaid Item preferences do not apply. A seller may want to create an excluded user list if that seller prefers to work directly with those buyers to work out the unpaid order situation.
     * <br/><br/> One or more <b>ExcludedUser</b> fields are used in <b>SetUserPreferences</b> to add users to Unpaid Item preferences Exclusion list. Any and all <b>ExcludedUser</b> fields are ignored if the <b>OptInStatus</b> flag is included and set to
     * <code>false</code> in the request, or if the seller is not currently opted into the Unpaid Item preferences feature in Unpaid Item preferences on My eBay. <br/><br/> In <b>GetUserPreferences</b>, one or more <b>ExcludedUser</b> fields represent the
     * current Excluded user list.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $ExcludedUser;
    /**
     * The AutoOptDonationRefund
     * Meta information extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> Do not use this flag with the <b>SetUserPreferences</b> call; this flag is no longer applicable or returned for the <b>GetUserPreferences</b> call. </span>
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $AutoOptDonationRefund;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for UnpaidItemAssistancePreferencesType
     * @uses UnpaidItemAssistancePreferencesType::setDelayBeforeOpeningDispute()
     * @uses UnpaidItemAssistancePreferencesType::setOptInStatus()
     * @uses UnpaidItemAssistancePreferencesType::setAutoRelist()
     * @uses UnpaidItemAssistancePreferencesType::setRemoveAllExcludedUsers()
     * @uses UnpaidItemAssistancePreferencesType::setExcludedUser()
     * @uses UnpaidItemAssistancePreferencesType::setAutoOptDonationRefund()
     * @uses UnpaidItemAssistancePreferencesType::setAny()
     * @param int $delayBeforeOpeningDispute
     * @param bool $optInStatus
     * @param bool $autoRelist
     * @param bool $removeAllExcludedUsers
     * @param string[] $excludedUser
     * @param bool $autoOptDonationRefund
     * @param \DOMDocument $any
     */
    public function __construct($delayBeforeOpeningDispute = null, $optInStatus = null, $autoRelist = false, $removeAllExcludedUsers = false, array $excludedUser = array(), $autoOptDonationRefund = null, \DOMDocument $any = null)
    {
        $this
            ->setDelayBeforeOpeningDispute($delayBeforeOpeningDispute)
            ->setOptInStatus($optInStatus)
            ->setAutoRelist($autoRelist)
            ->setRemoveAllExcludedUsers($removeAllExcludedUsers)
            ->setExcludedUser($excludedUser)
            ->setAutoOptDonationRefund($autoOptDonationRefund)
            ->setAny($any);
    }
    /**
     * Get DelayBeforeOpeningDispute value
     * @return int|null
     */
    public function getDelayBeforeOpeningDispute()
    {
        return $this->DelayBeforeOpeningDispute;
    }
    /**
     * Set DelayBeforeOpeningDispute value
     * @param int $delayBeforeOpeningDispute
     * @return \StructType\UnpaidItemAssistancePreferencesType
     */
    public function setDelayBeforeOpeningDispute($delayBeforeOpeningDispute = null)
    {
        // validation for constraint: int
        if (!is_null($delayBeforeOpeningDispute) && !(is_int($delayBeforeOpeningDispute) || ctype_digit($delayBeforeOpeningDispute))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($delayBeforeOpeningDispute, true), gettype($delayBeforeOpeningDispute)), __LINE__);
        }
        $this->DelayBeforeOpeningDispute = $delayBeforeOpeningDispute;
        return $this;
    }
    /**
     * Get OptInStatus value
     * @return bool|null
     */
    public function getOptInStatus()
    {
        return $this->OptInStatus;
    }
    /**
     * Set OptInStatus value
     * @param bool $optInStatus
     * @return \StructType\UnpaidItemAssistancePreferencesType
     */
    public function setOptInStatus($optInStatus = null)
    {
        // validation for constraint: boolean
        if (!is_null($optInStatus) && !is_bool($optInStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($optInStatus, true), gettype($optInStatus)), __LINE__);
        }
        $this->OptInStatus = $optInStatus;
        return $this;
    }
    /**
     * Get AutoRelist value
     * @return bool|null
     */
    public function getAutoRelist()
    {
        return $this->AutoRelist;
    }
    /**
     * Set AutoRelist value
     * @param bool $autoRelist
     * @return \StructType\UnpaidItemAssistancePreferencesType
     */
    public function setAutoRelist($autoRelist = false)
    {
        // validation for constraint: boolean
        if (!is_null($autoRelist) && !is_bool($autoRelist)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($autoRelist, true), gettype($autoRelist)), __LINE__);
        }
        $this->AutoRelist = $autoRelist;
        return $this;
    }
    /**
     * Get RemoveAllExcludedUsers value
     * @return bool|null
     */
    public function getRemoveAllExcludedUsers()
    {
        return $this->RemoveAllExcludedUsers;
    }
    /**
     * Set RemoveAllExcludedUsers value
     * @param bool $removeAllExcludedUsers
     * @return \StructType\UnpaidItemAssistancePreferencesType
     */
    public function setRemoveAllExcludedUsers($removeAllExcludedUsers = false)
    {
        // validation for constraint: boolean
        if (!is_null($removeAllExcludedUsers) && !is_bool($removeAllExcludedUsers)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($removeAllExcludedUsers, true), gettype($removeAllExcludedUsers)), __LINE__);
        }
        $this->RemoveAllExcludedUsers = $removeAllExcludedUsers;
        return $this;
    }
    /**
     * Get ExcludedUser value
     * @return string[]|null
     */
    public function getExcludedUser()
    {
        return $this->ExcludedUser;
    }
    /**
     * This method is responsible for validating the values passed to the setExcludedUser method
     * This method is willingly generated in order to preserve the one-line inline validation within the setExcludedUser method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateExcludedUserForArrayConstraintsFromSetExcludedUser(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $unpaidItemAssistancePreferencesTypeExcludedUserItem) {
            // validation for constraint: itemType
            if (!is_string($unpaidItemAssistancePreferencesTypeExcludedUserItem)) {
                $invalidValues[] = is_object($unpaidItemAssistancePreferencesTypeExcludedUserItem) ? get_class($unpaidItemAssistancePreferencesTypeExcludedUserItem) : sprintf('%s(%s)', gettype($unpaidItemAssistancePreferencesTypeExcludedUserItem), var_export($unpaidItemAssistancePreferencesTypeExcludedUserItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ExcludedUser property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set ExcludedUser value
     * @throws \InvalidArgumentException
     * @param string[] $excludedUser
     * @return \StructType\UnpaidItemAssistancePreferencesType
     */
    public function setExcludedUser(array $excludedUser = array())
    {
        // validation for constraint: array
        if ('' !== ($excludedUserArrayErrorMessage = self::validateExcludedUserForArrayConstraintsFromSetExcludedUser($excludedUser))) {
            throw new \InvalidArgumentException($excludedUserArrayErrorMessage, __LINE__);
        }
        $this->ExcludedUser = $excludedUser;
        return $this;
    }
    /**
     * Add item to ExcludedUser value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \StructType\UnpaidItemAssistancePreferencesType
     */
    public function addToExcludedUser($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The ExcludedUser property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ExcludedUser[] = $item;
        return $this;
    }
    /**
     * Get AutoOptDonationRefund value
     * @return bool|null
     */
    public function getAutoOptDonationRefund()
    {
        return $this->AutoOptDonationRefund;
    }
    /**
     * Set AutoOptDonationRefund value
     * @param bool $autoOptDonationRefund
     * @return \StructType\UnpaidItemAssistancePreferencesType
     */
    public function setAutoOptDonationRefund($autoOptDonationRefund = null)
    {
        // validation for constraint: boolean
        if (!is_null($autoOptDonationRefund) && !is_bool($autoOptDonationRefund)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($autoOptDonationRefund, true), gettype($autoOptDonationRefund)), __LINE__);
        }
        $this->AutoOptDonationRefund = $autoOptDonationRefund;
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
     * @return \StructType\UnpaidItemAssistancePreferencesType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
