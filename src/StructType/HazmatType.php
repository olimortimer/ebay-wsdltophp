<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HazmatType StructType
 * Meta information extracted from the WSDL
 * - documentation: <span class="tablenote"><b>Note: </b> This type is currently available only on the German (DE) marketplace.</span> <br />Type defining the <b>Pictograms</b> and <b>Statements</b> containers, and the <b>Component</b> and
 * <b>SignalWord</b> fields, that provide hazardous material related information. For additional information, see <a href="https://developer.ebay.com/api-docs/sell/static/metadata/feature-regulatorhazmatcontainer.html#Signal" target="_blank">Signal word
 * information</a>.
 * @subpackage Structs
 */
class HazmatType extends AbstractStructBase
{
    /**
     * The Pictograms
     * Meta information extracted from the WSDL
     * - documentation: This container is used by the seller to provide pictograms for the listing. This field is required if hazmat information is supplied.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\PictogramsType
     */
    public $Pictograms;
    /**
     * The SignalWord
     * Meta information extracted from the WSDL
     * - documentation: This field sets the signal word for hazardous materials in the listing. If your product contains hazardous substances or mixtures, please select a value corresponding to the signal word that is stated on your product's Safety Data
     * Sheet. The selected hazard information will be displayed on your listing. This field is required if hazmat information is supplied. Example values include: <br> <ul><li> <code>Danger</code></li><li> <code>Warning</code></li></ul><span
     * class="tablenote"><strong>Note:</strong> Use the <a href="https://developer.ebay.com/api-docs/sell/metadata/resources/marketplace/methods/getHazardousMaterialsLabels">getHazardousMaterialsLabels</a> method in the <a
     * href="https://developer.ebay.com/api-docs/sell/metadata/resources/methods">Metadata API</a> to find supported values for a specific marketplace/site. For additional information, see <a
     * href="https://developer.ebay.com/api-docs/sell/static/metadata/feature-regulatorhazmatcontainer.html#Signal" target="_blank">Signal word information</a>.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string
     */
    public $SignalWord;
    /**
     * The Statements
     * Meta information extracted from the WSDL
     * - documentation: This container is used by the seller to provide hazard statements for the listing. This field is required if hazmat information is supplied.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\StatementsType
     */
    public $Statements;
    /**
     * The Component
     * Meta information extracted from the WSDL
     * - documentation: This field is used by the seller to provide component information for the listing. For example, component information can provide the specific material of Hazmat concern.
     * - maxOccur: 1
     * - minOccurs: 0
     * @var string
     */
    public $Component;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for HazmatType
     * @uses HazmatType::setPictograms()
     * @uses HazmatType::setSignalWord()
     * @uses HazmatType::setStatements()
     * @uses HazmatType::setComponent()
     * @uses HazmatType::setAny()
     * @param \StructType\PictogramsType $pictograms
     * @param string $signalWord
     * @param \StructType\StatementsType $statements
     * @param string $component
     * @param \DOMDocument $any
     */
    public function __construct(\StructType\PictogramsType $pictograms = null, $signalWord = null, \StructType\StatementsType $statements = null, $component = null, \DOMDocument $any = null)
    {
        $this
            ->setPictograms($pictograms)
            ->setSignalWord($signalWord)
            ->setStatements($statements)
            ->setComponent($component)
            ->setAny($any);
    }
    /**
     * Get Pictograms value
     * @return \StructType\PictogramsType|null
     */
    public function getPictograms()
    {
        return $this->Pictograms;
    }
    /**
     * Set Pictograms value
     * @param \StructType\PictogramsType $pictograms
     * @return \StructType\HazmatType
     */
    public function setPictograms(\StructType\PictogramsType $pictograms = null)
    {
        $this->Pictograms = $pictograms;
        return $this;
    }
    /**
     * Get SignalWord value
     * @return string|null
     */
    public function getSignalWord()
    {
        return $this->SignalWord;
    }
    /**
     * Set SignalWord value
     * @param string $signalWord
     * @return \StructType\HazmatType
     */
    public function setSignalWord($signalWord = null)
    {
        // validation for constraint: string
        if (!is_null($signalWord) && !is_string($signalWord)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($signalWord, true), gettype($signalWord)), __LINE__);
        }
        $this->SignalWord = $signalWord;
        return $this;
    }
    /**
     * Get Statements value
     * @return \StructType\StatementsType|null
     */
    public function getStatements()
    {
        return $this->Statements;
    }
    /**
     * Set Statements value
     * @param \StructType\StatementsType $statements
     * @return \StructType\HazmatType
     */
    public function setStatements(\StructType\StatementsType $statements = null)
    {
        $this->Statements = $statements;
        return $this;
    }
    /**
     * Get Component value
     * @return string|null
     */
    public function getComponent()
    {
        return $this->Component;
    }
    /**
     * Set Component value
     * @param string $component
     * @return \StructType\HazmatType
     */
    public function setComponent($component = null)
    {
        // validation for constraint: string
        if (!is_null($component) && !is_string($component)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($component, true), gettype($component)), __LINE__);
        }
        $this->Component = $component;
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
     * @return \StructType\HazmatType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
