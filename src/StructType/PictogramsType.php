<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PictogramsType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type defining the <b>Pictogram</b> container used at the listing level to provide pictograms for the listing.
 * @subpackage Structs
 */
class PictogramsType extends AbstractStructBase
{
    /**
     * The Pictogram
     * Meta information extracted from the WSDL
     * - documentation: This field sets the pictogram code(s) for Hazard Pictogram(s) for the listing. If your product contains hazardous substances or mixtures, please select the values corresponding to the hazard pictograms that are stated on your
     * product's Safety Data Sheet. The selected hazard information will be displayed on your listing. The seller specifies the identifier of each pictogram in this field. A separate Pictogram field is required for each Hazard pictogram. <span
     * class="tablenote"><strong>Note:</strong> Use the <a href="https://developer.ebay.com/api-docs/sell/metadata/resources/marketplace/methods/getHazardousMaterialsLabels">getHazardousMaterialsLabels</a> method in the <a
     * href="https://developer.ebay.com/api-docs/sell/metadata/resources/methods">Metadata API</a> to find supported values for a specific marketplace/site. For sample values, see <a
     * href="https://developer.ebay.com/api-docs/sell/static/metadata/feature-regulatorhazmatcontainer.html#Pictogra" target="_blank">Pictogram sample values</a>.
     * - maxOccurs: 4
     * - minOccurs: 0
     * @var string[]
     */
    public $Pictogram;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for PictogramsType
     * @uses PictogramsType::setPictogram()
     * @uses PictogramsType::setAny()
     * @param string[] $pictogram
     * @param \DOMDocument $any
     */
    public function __construct(array $pictogram = array(), \DOMDocument $any = null)
    {
        $this
            ->setPictogram($pictogram)
            ->setAny($any);
    }
    /**
     * Get Pictogram value
     * @return string[]|null
     */
    public function getPictogram()
    {
        return $this->Pictogram;
    }
    /**
     * This method is responsible for validating the values passed to the setPictogram method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPictogram method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePictogramForArrayConstraintsFromSetPictogram(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $pictogramsTypePictogramItem) {
            // validation for constraint: itemType
            if (!is_string($pictogramsTypePictogramItem)) {
                $invalidValues[] = is_object($pictogramsTypePictogramItem) ? get_class($pictogramsTypePictogramItem) : sprintf('%s(%s)', gettype($pictogramsTypePictogramItem), var_export($pictogramsTypePictogramItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Pictogram property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Pictogram value
     * @throws \InvalidArgumentException
     * @param string[] $pictogram
     * @return \StructType\PictogramsType
     */
    public function setPictogram(array $pictogram = array())
    {
        // validation for constraint: array
        if ('' !== ($pictogramArrayErrorMessage = self::validatePictogramForArrayConstraintsFromSetPictogram($pictogram))) {
            throw new \InvalidArgumentException($pictogramArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(4)
        if (is_array($pictogram) && count($pictogram) > 4) {
            throw new \InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 4', count($pictogram)), __LINE__);
        }
        $this->Pictogram = $pictogram;
        return $this;
    }
    /**
     * Add item to Pictogram value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \StructType\PictogramsType
     */
    public function addToPictogram($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The Pictogram property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(4)
        if (is_array($this->Pictogram) && count($this->Pictogram) >= 4) {
            throw new \InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 4', count($this->Pictogram)), __LINE__);
        }
        $this->Pictogram[] = $item;
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
     * @return \StructType\PictogramsType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
