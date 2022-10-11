<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CustomPoliciesType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is used by the <strong>CustomPolicies</strong> container, which specifies custom policy IDs. A custom policy ID refers to the relevant policy created for product compliance and other purposes. See the <a
 * href="https://www.ebay.com/help/selling/custom-policies/custom-policies?id=5311" target="_blank">Custom Policies</a> help page for additional information. To create and manage custom policies, use the <a
 * href="https://developer.ebay.com/api-docs/sell/account/resources/methods#h2-custom_policy" target="_blank">custom_policy</a> resource of the <b>Account API</b>.
 * @subpackage Structs
 */
class CustomPoliciesType extends AbstractStructBase
{
    /**
     * The TakeBackPolicyID
     * Meta information extracted from the WSDL
     * - documentation: This field is used if the seller wants to apply a take-back policy to the listing. The seller will specify the identifier of the take-back policy in this field. The law in some countries may require sellers to take back a used
     * product when the buyer buys a new product. Use this field to specify one take-back policy ID for the listing.
     * - minOccurs: 0
     * @var int
     */
    public $TakeBackPolicyID;
    /**
     * The ProductCompliancePolicyID
     * Meta information extracted from the WSDL
     * - documentation: This field is used if the seller wants to apply one or more product compliance policies to the listing. A separate <b>ProductCompliancePolicyID</b> field is required for each policy to be applied, and the seller specifies the
     * identifier of each policy in this field.
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var int[]
     */
    public $ProductCompliancePolicyID;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for CustomPoliciesType
     * @uses CustomPoliciesType::setTakeBackPolicyID()
     * @uses CustomPoliciesType::setProductCompliancePolicyID()
     * @uses CustomPoliciesType::setAny()
     * @param int $takeBackPolicyID
     * @param int[] $productCompliancePolicyID
     * @param \DOMDocument $any
     */
    public function __construct($takeBackPolicyID = null, array $productCompliancePolicyID = array(), \DOMDocument $any = null)
    {
        $this
            ->setTakeBackPolicyID($takeBackPolicyID)
            ->setProductCompliancePolicyID($productCompliancePolicyID)
            ->setAny($any);
    }
    /**
     * Get TakeBackPolicyID value
     * @return int|null
     */
    public function getTakeBackPolicyID()
    {
        return $this->TakeBackPolicyID;
    }
    /**
     * Set TakeBackPolicyID value
     * @param int $takeBackPolicyID
     * @return \StructType\CustomPoliciesType
     */
    public function setTakeBackPolicyID($takeBackPolicyID = null)
    {
        // validation for constraint: int
        if (!is_null($takeBackPolicyID) && !(is_int($takeBackPolicyID) || ctype_digit($takeBackPolicyID))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($takeBackPolicyID, true), gettype($takeBackPolicyID)), __LINE__);
        }
        $this->TakeBackPolicyID = $takeBackPolicyID;
        return $this;
    }
    /**
     * Get ProductCompliancePolicyID value
     * @return int[]|null
     */
    public function getProductCompliancePolicyID()
    {
        return $this->ProductCompliancePolicyID;
    }
    /**
     * This method is responsible for validating the values passed to the setProductCompliancePolicyID method
     * This method is willingly generated in order to preserve the one-line inline validation within the setProductCompliancePolicyID method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateProductCompliancePolicyIDForArrayConstraintsFromSetProductCompliancePolicyID(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $customPoliciesTypeProductCompliancePolicyIDItem) {
            // validation for constraint: itemType
            if (!(is_int($customPoliciesTypeProductCompliancePolicyIDItem) || ctype_digit($customPoliciesTypeProductCompliancePolicyIDItem))) {
                $invalidValues[] = is_object($customPoliciesTypeProductCompliancePolicyIDItem) ? get_class($customPoliciesTypeProductCompliancePolicyIDItem) : sprintf('%s(%s)', gettype($customPoliciesTypeProductCompliancePolicyIDItem), var_export($customPoliciesTypeProductCompliancePolicyIDItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ProductCompliancePolicyID property can only contain items of type long, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set ProductCompliancePolicyID value
     * @throws \InvalidArgumentException
     * @param int[] $productCompliancePolicyID
     * @return \StructType\CustomPoliciesType
     */
    public function setProductCompliancePolicyID(array $productCompliancePolicyID = array())
    {
        // validation for constraint: array
        if ('' !== ($productCompliancePolicyIDArrayErrorMessage = self::validateProductCompliancePolicyIDForArrayConstraintsFromSetProductCompliancePolicyID($productCompliancePolicyID))) {
            throw new \InvalidArgumentException($productCompliancePolicyIDArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(5)
        if (is_array($productCompliancePolicyID) && count($productCompliancePolicyID) > 5) {
            throw new \InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 5', count($productCompliancePolicyID)), __LINE__);
        }
        $this->ProductCompliancePolicyID = $productCompliancePolicyID;
        return $this;
    }
    /**
     * Add item to ProductCompliancePolicyID value
     * @throws \InvalidArgumentException
     * @param int $item
     * @return \StructType\CustomPoliciesType
     */
    public function addToProductCompliancePolicyID($item)
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new \InvalidArgumentException(sprintf('The ProductCompliancePolicyID property can only contain items of type long, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(5)
        if (is_array($this->ProductCompliancePolicyID) && count($this->ProductCompliancePolicyID) >= 5) {
            throw new \InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 5', count($this->ProductCompliancePolicyID)), __LINE__);
        }
        $this->ProductCompliancePolicyID[] = $item;
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
     * @return \StructType\CustomPoliciesType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
