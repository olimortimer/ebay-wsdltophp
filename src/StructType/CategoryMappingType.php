<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CategoryMappingType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is used by the <b>CategoryMapping</b> fields that are returned in the <b>GetCategoryMappings</b> response to indicate any eBay Category IDs that have changed recently.
 * @subpackage Structs
 */
class CategoryMappingType extends AbstractStructBase
{
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * The oldID
     * Meta information extracted from the WSDL
     * - documentation: This attribute value is the unique identifier of an eBay category that has been recently updated to a new Category ID, which is specified in the <b>id</b> attribute. The user will want to use the Category ID value in the <b>id</b>
     * attribute the next time they run a call that requires a Category ID. Note that Category IDs are unique to each eBay site. This attribute is always returned with the <b>CategoryMapping</b> field.
     * @var string
     */
    public $oldID;
    /**
     * The id
     * Meta information extracted from the WSDL
     * - documentation: This attribute value is the unique identifier of the currently active eBay category. The user will want to use this Category ID value the next time they run a call that requires a Category ID. Note that Category IDs are unique to
     * each eBay site. This attribute is always returned with the <b>CategoryMapping</b> field. <br><br> <span class="tablenote"><b>Note:</b> Note that more than one <b>OldID</b> values may map into the same new category (same <b>id</b> value) since
     * sometimes multiple eBay categories may be consolidated into a new, expanded category. </span>
     * @var string
     */
    public $id;
    /**
     * Constructor method for CategoryMappingType
     * @uses CategoryMappingType::setAny()
     * @uses CategoryMappingType::setOldID()
     * @uses CategoryMappingType::setId()
     * @param \DOMDocument $any
     * @param string $oldID
     * @param string $id
     */
    public function __construct(\DOMDocument $any = null, $oldID = null, $id = null)
    {
        $this
            ->setAny($any)
            ->setOldID($oldID)
            ->setId($id);
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
     * @return \StructType\CategoryMappingType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
    /**
     * Get oldID value
     * @return string|null
     */
    public function getOldID()
    {
        return $this->oldID;
    }
    /**
     * Set oldID value
     * @param string $oldID
     * @return \StructType\CategoryMappingType
     */
    public function setOldID($oldID = null)
    {
        // validation for constraint: string
        if (!is_null($oldID) && !is_string($oldID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($oldID, true), gettype($oldID)), __LINE__);
        }
        $this->oldID = $oldID;
        return $this;
    }
    /**
     * Get id value
     * @return string|null
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param string $id
     * @return \StructType\CategoryMappingType
     */
    public function setId($id = null)
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        $this->id = $id;
        return $this;
    }
}
