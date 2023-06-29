<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CustomPoliciesType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is used by the <strong>CustomPolicies</strong> container, which specifies custom policy IDs. A custom policy ID refers to the relevant policy created for product compliance and other purposes. For more information, see the
 * <b>Custom Policies</b> page for your site (for example, <a href="https://www.ebay.fr/help/selling/custom-policies/custom-policies?id=5311" target="_blank">https://www.ebay.fr/help/selling/custom-policies/custom-policies?id=5311</a>). To create and
 * manage custom policies, use the <a href="https://developer.ebay.com/api-docs/sell/account/resources/methods#h2-custom_policy" target="_blank">custom_policy</a> resource of the <b>Account API</b>.
 * @subpackage Structs
 */
class CustomPoliciesType extends AbstractStructBase
{
    /**
     * The TakeBackPolicyID
     * Meta information extracted from the WSDL
     * - documentation: <span class="tablenote"><strong>Note: </strong> Global take-back policies are currently available only on the German (DE) marketplace. </span> This field is used if the seller wants to apply a <i>global</i> take-back policy to the
     * listing. The law in some countries may require sellers to take back a used product when the buyer buys a new product.<br /><br />Use this field to specify one <i>global</i> take-back policy ID for the listing. <span class="tablenote"><strong>Note:
     * </strong> For countries that support country-specific policies, use <b>RegionalTakeBackPolicies</b> to apply them to a listing. </span>
     * - minOccurs: 0
     * @var int
     */
    public $TakeBackPolicyID;
    /**
     * The RegionalTakeBackPolicies
     * Meta information extracted from the WSDL
     * - documentation: <span class="tablenote"><strong>Note: </strong> Global take-back policies are currently available only on the German (DE) marketplace. </span> The list of unique identifiers indicating the seller-created country-specific take-back
     * policies that will be used for a listing. The law in some countries may require sellers to take back a used product when the buyer buys a new product.<br /><br /> Each listing may include one (1) country-specific take-back policy for <i>each</i> of
     * the following countries:<ul><li>United Kingdom [GB]</li><li>Germany [DE]</li><li>France [FR]</li><li>Italy [IT]</li><li>Spain [ES]</li></ul> <span class="tablenote"><strong>Note: </strong> Take-back policies that apply to <i>all</i> countries to
     * which a seller ships are specified using <b>TakeBackPolicyID</b>. </span>
     * - minOccurs: 0
     * @var \ArrayType\CountryPoliciesArrayType
     */
    public $RegionalTakeBackPolicies;
    /**
     * The ProductCompliancePolicyID
     * Meta information extracted from the WSDL
     * - documentation: <span class="tablenote"><strong>Note: </strong> Global product compliance policies are currently available only on the German (DE) marketplace. </span> This field is used if the seller wants to apply one or more seller-created
     * <i>global</i> product compliance policies that will be used in a listing. A separate <b>ProductCompliancePolicyID</b> field is required for each policy to be applied, and the seller specifies the identifier of each policy in this field.<br /> Product
     * compliance policies provide buyers with important information and disclosures about products. For example, if you sell batteries and specific disclosures are required to be shared with all potential buyers, your global product compliance policy could
     * contain the required disclosures.<br /><br />A maximum of six (6) global product compliance policies may be applied to each listing. <span class="tablenote"><strong>Note: </strong> For countries that support country-specific policies, use
     * <b>RegionalProductCompliancePolicies</b> to apply them to a listing. </span>
     * - maxOccurs: 5
     * - minOccurs: 0
     * @var int[]
     */
    public $ProductCompliancePolicyID;
    /**
     * The RegionalProductCompliancePolicies
     * Meta information extracted from the WSDL
     * - documentation: <span class="tablenote"><strong>Note: </strong> Regional product compliance policies are currently available only on the German (DE) marketplace. </span> The set of compliance policies for indicating the seller-created
     * country-specific product compliance policies that that will be used for a listing.<br /><br /> Product compliance policies provide buyers with important information and disclosures about products. For example, if you sell batteries in a country
     * requiring disclosures that apply <i>only</i> to that country, a country-specific product compliance policy could contain this information.<br /><br /> Each listing may include up to six (6) product compliance policies for <i>each</i> of the following
     * countries:<ul><li>United Kingdom [GB]</li><li>Germany [DE]</li><li>France [FR]</li><li>Italy [IT]</li><li>Spain [ES]</li></ul> For example, if a seller offers products in the UK, Germany, and Italy, each of which requires custom product compliance
     * information, up to 18 policies (in other words, 6 policies x 3 countries) may be included for each listing. <span class="tablenote"><strong>Note: </strong> Product compliance policies that apply to <i>all</i> countries to which a seller ships are
     * specified using <b>ProductCompliancePolicyID</b>. </span>
     * - minOccurs: 0
     * @var \ArrayType\CountryPoliciesArrayType
     */
    public $RegionalProductCompliancePolicies;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for CustomPoliciesType
     * @uses CustomPoliciesType::setTakeBackPolicyID()
     * @uses CustomPoliciesType::setRegionalTakeBackPolicies()
     * @uses CustomPoliciesType::setProductCompliancePolicyID()
     * @uses CustomPoliciesType::setRegionalProductCompliancePolicies()
     * @uses CustomPoliciesType::setAny()
     * @param int $takeBackPolicyID
     * @param \ArrayType\CountryPoliciesArrayType $regionalTakeBackPolicies
     * @param int[] $productCompliancePolicyID
     * @param \ArrayType\CountryPoliciesArrayType $regionalProductCompliancePolicies
     * @param \DOMDocument $any
     */
    public function __construct($takeBackPolicyID = null, \ArrayType\CountryPoliciesArrayType $regionalTakeBackPolicies = null, array $productCompliancePolicyID = array(), \ArrayType\CountryPoliciesArrayType $regionalProductCompliancePolicies = null, \DOMDocument $any = null)
    {
        $this
            ->setTakeBackPolicyID($takeBackPolicyID)
            ->setRegionalTakeBackPolicies($regionalTakeBackPolicies)
            ->setProductCompliancePolicyID($productCompliancePolicyID)
            ->setRegionalProductCompliancePolicies($regionalProductCompliancePolicies)
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
     * Get RegionalTakeBackPolicies value
     * @return \ArrayType\CountryPoliciesArrayType|null
     */
    public function getRegionalTakeBackPolicies()
    {
        return $this->RegionalTakeBackPolicies;
    }
    /**
     * Set RegionalTakeBackPolicies value
     * @param \ArrayType\CountryPoliciesArrayType $regionalTakeBackPolicies
     * @return \StructType\CustomPoliciesType
     */
    public function setRegionalTakeBackPolicies(\ArrayType\CountryPoliciesArrayType $regionalTakeBackPolicies = null)
    {
        $this->RegionalTakeBackPolicies = $regionalTakeBackPolicies;
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
     * Get RegionalProductCompliancePolicies value
     * @return \ArrayType\CountryPoliciesArrayType|null
     */
    public function getRegionalProductCompliancePolicies()
    {
        return $this->RegionalProductCompliancePolicies;
    }
    /**
     * Set RegionalProductCompliancePolicies value
     * @param \ArrayType\CountryPoliciesArrayType $regionalProductCompliancePolicies
     * @return \StructType\CustomPoliciesType
     */
    public function setRegionalProductCompliancePolicies(\ArrayType\CountryPoliciesArrayType $regionalProductCompliancePolicies = null)
    {
        $this->RegionalProductCompliancePolicies = $regionalProductCompliancePolicies;
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
