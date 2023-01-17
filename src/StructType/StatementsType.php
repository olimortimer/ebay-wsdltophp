<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for StatementsType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type defining the <b>Statements</b> regulatory container used at the listing level to provide hazard statements for the listing.
 * @subpackage Structs
 */
class StatementsType extends AbstractStructBase
{
    /**
     * The Statement
     * Meta information extracted from the WSDL
     * - documentation: This field sets the statement code(s) for hazard statement(s) for the listing. If your product contains hazardous substances or mixtures, please select the values corresponding to the hazard statements that are stated on your
     * product's Safety Data Sheet. The selected hazard information will be displayed on your listing. A separate Statement field is required for each Hazard statement. The seller specifies the identifier of each statement in this field. <span
     * class="tablenote"><strong>Note:</strong> Use the <a href="https://developer.ebay.com/api-docs/sell/metadata/resources/marketplace/methods/getHazardousMaterialsLabels">getHazardousMaterialsLabels</a> method in the <a
     * href="https://developer.ebay.com/api-docs/sell/metadata/resources/methods">Metadata API</a> to find supported values for a specific marketplace/site. For sample values, see <a
     * href="https://developer.ebay.com/api-docs/sell/static/metadata/feature-regulatorhazmatcontainer.html#Hazard" target="_blank">Hazard statement sample values</a>.
     * - maxOccurs: 8
     * - minOccurs: 0
     * @var string[]
     */
    public $Statement;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for StatementsType
     * @uses StatementsType::setStatement()
     * @uses StatementsType::setAny()
     * @param string[] $statement
     * @param \DOMDocument $any
     */
    public function __construct(array $statement = array(), \DOMDocument $any = null)
    {
        $this
            ->setStatement($statement)
            ->setAny($any);
    }
    /**
     * Get Statement value
     * @return string[]|null
     */
    public function getStatement()
    {
        return $this->Statement;
    }
    /**
     * This method is responsible for validating the values passed to the setStatement method
     * This method is willingly generated in order to preserve the one-line inline validation within the setStatement method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateStatementForArrayConstraintsFromSetStatement(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $statementsTypeStatementItem) {
            // validation for constraint: itemType
            if (!is_string($statementsTypeStatementItem)) {
                $invalidValues[] = is_object($statementsTypeStatementItem) ? get_class($statementsTypeStatementItem) : sprintf('%s(%s)', gettype($statementsTypeStatementItem), var_export($statementsTypeStatementItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Statement property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set Statement value
     * @throws \InvalidArgumentException
     * @param string[] $statement
     * @return \StructType\StatementsType
     */
    public function setStatement(array $statement = array())
    {
        // validation for constraint: array
        if ('' !== ($statementArrayErrorMessage = self::validateStatementForArrayConstraintsFromSetStatement($statement))) {
            throw new \InvalidArgumentException($statementArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(8)
        if (is_array($statement) && count($statement) > 8) {
            throw new \InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 8', count($statement)), __LINE__);
        }
        $this->Statement = $statement;
        return $this;
    }
    /**
     * Add item to Statement value
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \StructType\StatementsType
     */
    public function addToStatement($item)
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new \InvalidArgumentException(sprintf('The Statement property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(8)
        if (is_array($this->Statement) && count($this->Statement) >= 8) {
            throw new \InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 8', count($this->Statement)), __LINE__);
        }
        $this->Statement[] = $item;
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
     * @return \StructType\StatementsType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
