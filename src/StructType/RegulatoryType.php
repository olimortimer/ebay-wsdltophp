<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RegulatoryType StructType
 * Meta information extracted from the WSDL
 * - documentation: <span class="tablenote"><b>Note: </b> This type is currently available only on the German (DE) marketplace. The <b>RepairScore</b> field is provided for future use (not presently available). </span> <br />Type defining the
 * <b>EnergyEfficiencyLabel</b>, <b>Hazmat</b>, and <b>RepairScore</b> regulatory containers that are used at the listing level to provide Energy Efficiency Label information, hazardous material related information, and the repair score.
 * @subpackage Structs
 */
class RegulatoryType extends AbstractStructBase
{
    /**
     * The EnergyEfficiencyLabel
     * Meta information extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> This container is currently available only on the German (DE) marketplace.</span> This container provides information about the energy efficiency for certain durable goods.<br /> <span
     * class="tablenote"><b>Note: </b> As a part of Digital Services Act (DSA) requirements, all sellers who list products in Germany (DE) must provide Energy Efficiency Label information and Product Information Sheets for listings for certain durable
     * goods.</span>
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\EnergyEfficiencyType
     */
    public $EnergyEfficiencyLabel;
    /**
     * The Hazmat
     * Meta information extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> This container is currently available only on the German (DE) marketplace.</span> This container is used by the seller to provide hazardous material information for the listing. Three elements
     * are required to complete the Hazmat section of a listing: <b>Pictograms</b>, <b>SignalWord</b>, and <b>Statements</b>. The fourth element, <b>Component</b>, is optional. For more information, see <a href="
     * /api-docs/sell/static/metadata/feature-regulatorhazmatcontainer.html" target="_blank">Specifying hazardous material related information</a>.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\HazmatType
     */
    public $Hazmat;
    /**
     * The RepairScore
     * Meta information extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> For future use.</span> This field represents the repair index for the listing.<br>The repair index identifies the manufacturer's repair score for a product (how easy is it to repair the product).
     * This field is a floating point value between 0 and 10 but may only have one digit beyond the decimal point, for example: <code>7.9</code><br>
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var float
     */
    public $RepairScore;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for RegulatoryType
     * @uses RegulatoryType::setEnergyEfficiencyLabel()
     * @uses RegulatoryType::setHazmat()
     * @uses RegulatoryType::setRepairScore()
     * @uses RegulatoryType::setAny()
     * @param \StructType\EnergyEfficiencyType $energyEfficiencyLabel
     * @param \StructType\HazmatType $hazmat
     * @param float $repairScore
     * @param \DOMDocument $any
     */
    public function __construct(\StructType\EnergyEfficiencyType $energyEfficiencyLabel = null, \StructType\HazmatType $hazmat = null, $repairScore = null, \DOMDocument $any = null)
    {
        $this
            ->setEnergyEfficiencyLabel($energyEfficiencyLabel)
            ->setHazmat($hazmat)
            ->setRepairScore($repairScore)
            ->setAny($any);
    }
    /**
     * Get EnergyEfficiencyLabel value
     * @return \StructType\EnergyEfficiencyType|null
     */
    public function getEnergyEfficiencyLabel()
    {
        return $this->EnergyEfficiencyLabel;
    }
    /**
     * Set EnergyEfficiencyLabel value
     * @param \StructType\EnergyEfficiencyType $energyEfficiencyLabel
     * @return \StructType\RegulatoryType
     */
    public function setEnergyEfficiencyLabel(\StructType\EnergyEfficiencyType $energyEfficiencyLabel = null)
    {
        $this->EnergyEfficiencyLabel = $energyEfficiencyLabel;
        return $this;
    }
    /**
     * Get Hazmat value
     * @return \StructType\HazmatType|null
     */
    public function getHazmat()
    {
        return $this->Hazmat;
    }
    /**
     * Set Hazmat value
     * @param \StructType\HazmatType $hazmat
     * @return \StructType\RegulatoryType
     */
    public function setHazmat(\StructType\HazmatType $hazmat = null)
    {
        $this->Hazmat = $hazmat;
        return $this;
    }
    /**
     * Get RepairScore value
     * @return float|null
     */
    public function getRepairScore()
    {
        return $this->RepairScore;
    }
    /**
     * Set RepairScore value
     * @param float $repairScore
     * @return \StructType\RegulatoryType
     */
    public function setRepairScore($repairScore = null)
    {
        // validation for constraint: float
        if (!is_null($repairScore) && !(is_float($repairScore) || is_numeric($repairScore))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($repairScore, true), gettype($repairScore)), __LINE__);
        }
        $this->RepairScore = $repairScore;
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
     * @return \StructType\RegulatoryType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
