<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ItemCompatibilityType StructType
 * Meta information extracted from the WSDL
 * - documentation: All information corresponding to an individual parts compatibility by application.
 * @subpackage Structs
 */
class ItemCompatibilityType extends AbstractStructBase
{
    /**
     * The Delete
     * Meta information extracted from the WSDL
     * - documentation: Removes individual parts compatibility nodes from the compatibility list. Set to <code>true</code> within the compatibility to delete. <br/><br/> <span class="tablenote"><b>Note: </b> This field can only be used with <b>Revise</b>
     * calls or when revising a template. </span> If the listing has bids or ends within 12 hours, you cannot delete item parts compatibilities.
     * - minOccurs: 0
     * @var bool
     */
    public $Delete;
    /**
     * The NameValueList
     * Meta information extracted from the WSDL
     * - documentation: A name-value pair describing a single compatible application. The allowed names and values are specific to the primary category in which the item is listed. For example, when listing in a Parts & Accessories category, where the
     * applications are vehicles, the allowed names might include Year, Make, and Model, and the values would correspond to specific vehicles in eBay's catalog. For details and examples, see the <a
     * href="https://developer.ebay.com/DevZone/guides/features-guide/default.html#development/CompatibleParts-Listing.html#SpecifyingPartsCompatibilityManually" target="_blank">Features Guide</a>. <br><br> The eBay Germany, UK, France, Italy, Spain, and
     * Australia sites support the use of <em>K type</em> vehicle numbers to specify vehicle parts compatibility. To use a K type number, set the <b>Name</b> field to "<code>KType</code>" and set the corresponding <b>Value</b> field to the appropriate K
     * type number. <br><br> The DE and UK eBay sites also support the use of an <em>eBay Product ID</em> (or <em>ePID</em>) number/value pair to specify motorcycle and scooter parts compatibility (currently, only DE supports scooter parts compatibily). To
     * use an ePID number to specify part compatibilities, set the <b>Name</b> field to "<code>ePID</code>" and the corresponding <b>Value</b> field to the ePID number that matches the motorcycle for the part(s) you are listing. Motorcycle ePID numbers are
     * provided by the <em>Master Motorcycle List</em> (MML) file, which contains the ePID numbers and their associated vehicle mappings). For motorcycles, an ePID number contains the vehicle make, model, CCM, year, and submodel data. Please use the
     * following links to obtain the DE and UK MML data files: <br><br> - DE seller help page: http://verkaeuferportal.ebay.de/fahrzeugteile-und-zubehoer-optimal-einstellen<br> - UK seller help page:
     * http://pages.ebay.co.uk/help/sell/contextual/master-motorcycle-list-manually.html
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\NameValueListType[]
     */
    public $NameValueList;
    /**
     * The CompatibilityNotes
     * Meta information extracted from the WSDL
     * - documentation: The seller may optionally enter any notes pertaining to the parts compatibility being specified. Use this field to specify the placement of the part on a vehicle or the type of vehicle a part fits.
     * - minOccurs: 0
     * @var string
     */
    public $CompatibilityNotes;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for ItemCompatibilityType
     * @uses ItemCompatibilityType::setDelete()
     * @uses ItemCompatibilityType::setNameValueList()
     * @uses ItemCompatibilityType::setCompatibilityNotes()
     * @uses ItemCompatibilityType::setAny()
     * @param bool $delete
     * @param \StructType\NameValueListType[] $nameValueList
     * @param string $compatibilityNotes
     * @param \DOMDocument $any
     */
    public function __construct($delete = null, array $nameValueList = array(), $compatibilityNotes = null, \DOMDocument $any = null)
    {
        $this
            ->setDelete($delete)
            ->setNameValueList($nameValueList)
            ->setCompatibilityNotes($compatibilityNotes)
            ->setAny($any);
    }
    /**
     * Get Delete value
     * @return bool|null
     */
    public function getDelete()
    {
        return $this->Delete;
    }
    /**
     * Set Delete value
     * @param bool $delete
     * @return \StructType\ItemCompatibilityType
     */
    public function setDelete($delete = null)
    {
        // validation for constraint: boolean
        if (!is_null($delete) && !is_bool($delete)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($delete, true), gettype($delete)), __LINE__);
        }
        $this->Delete = $delete;
        return $this;
    }
    /**
     * Get NameValueList value
     * @return \StructType\NameValueListType[]|null
     */
    public function getNameValueList()
    {
        return $this->NameValueList;
    }
    /**
     * This method is responsible for validating the values passed to the setNameValueList method
     * This method is willingly generated in order to preserve the one-line inline validation within the setNameValueList method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateNameValueListForArrayConstraintsFromSetNameValueList(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $itemCompatibilityTypeNameValueListItem) {
            // validation for constraint: itemType
            if (!$itemCompatibilityTypeNameValueListItem instanceof \StructType\NameValueListType) {
                $invalidValues[] = is_object($itemCompatibilityTypeNameValueListItem) ? get_class($itemCompatibilityTypeNameValueListItem) : sprintf('%s(%s)', gettype($itemCompatibilityTypeNameValueListItem), var_export($itemCompatibilityTypeNameValueListItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The NameValueList property can only contain items of type \StructType\NameValueListType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set NameValueList value
     * @throws \InvalidArgumentException
     * @param \StructType\NameValueListType[] $nameValueList
     * @return \StructType\ItemCompatibilityType
     */
    public function setNameValueList(array $nameValueList = array())
    {
        // validation for constraint: array
        if ('' !== ($nameValueListArrayErrorMessage = self::validateNameValueListForArrayConstraintsFromSetNameValueList($nameValueList))) {
            throw new \InvalidArgumentException($nameValueListArrayErrorMessage, __LINE__);
        }
        $this->NameValueList = $nameValueList;
        return $this;
    }
    /**
     * Add item to NameValueList value
     * @throws \InvalidArgumentException
     * @param \StructType\NameValueListType $item
     * @return \StructType\ItemCompatibilityType
     */
    public function addToNameValueList(\StructType\NameValueListType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\NameValueListType) {
            throw new \InvalidArgumentException(sprintf('The NameValueList property can only contain items of type \StructType\NameValueListType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->NameValueList[] = $item;
        return $this;
    }
    /**
     * Get CompatibilityNotes value
     * @return string|null
     */
    public function getCompatibilityNotes()
    {
        return $this->CompatibilityNotes;
    }
    /**
     * Set CompatibilityNotes value
     * @param string $compatibilityNotes
     * @return \StructType\ItemCompatibilityType
     */
    public function setCompatibilityNotes($compatibilityNotes = null)
    {
        // validation for constraint: string
        if (!is_null($compatibilityNotes) && !is_string($compatibilityNotes)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($compatibilityNotes, true), gettype($compatibilityNotes)), __LINE__);
        }
        $this->CompatibilityNotes = $compatibilityNotes;
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
     * @return \StructType\ItemCompatibilityType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
