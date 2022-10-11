<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ServiceCostType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type used by the <b>ServiceCost</b> container to display any service cost to the buyer for an item that will go through the Authenticity Guarantee process.
 * @subpackage Structs
 */
class ServiceCostType extends AbstractStructBase
{
    /**
     * The Amount
     * Meta information extracted from the WSDL
     * - documentation: The amount charged to the buyer for any service cost related to an item going through the Authenticity Guarantee process. This amount is given in the currency of the listing site.
     * - minOccurs: 0
     * @var \StructType\AmountType
     */
    public $Amount;
    /**
     * The ConvertedFromAmount
     * Meta information extracted from the WSDL
     * - documentation: The amount (in the buyer's currency) charged to the buyer for any service cost related to an item going through the Authenticity Guarantee process. This amount is only applicable if the buyer resides in another country that uses a
     * different currency than the currency of the listing site.
     * - minOccurs: 0
     * @var \StructType\AmountType
     */
    public $ConvertedFromAmount;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for ServiceCostType
     * @uses ServiceCostType::setAmount()
     * @uses ServiceCostType::setConvertedFromAmount()
     * @uses ServiceCostType::setAny()
     * @param \StructType\AmountType $amount
     * @param \StructType\AmountType $convertedFromAmount
     * @param \DOMDocument $any
     */
    public function __construct(\StructType\AmountType $amount = null, \StructType\AmountType $convertedFromAmount = null, \DOMDocument $any = null)
    {
        $this
            ->setAmount($amount)
            ->setConvertedFromAmount($convertedFromAmount)
            ->setAny($any);
    }
    /**
     * Get Amount value
     * @return \StructType\AmountType|null
     */
    public function getAmount()
    {
        return $this->Amount;
    }
    /**
     * Set Amount value
     * @param \StructType\AmountType $amount
     * @return \StructType\ServiceCostType
     */
    public function setAmount(\StructType\AmountType $amount = null)
    {
        $this->Amount = $amount;
        return $this;
    }
    /**
     * Get ConvertedFromAmount value
     * @return \StructType\AmountType|null
     */
    public function getConvertedFromAmount()
    {
        return $this->ConvertedFromAmount;
    }
    /**
     * Set ConvertedFromAmount value
     * @param \StructType\AmountType $convertedFromAmount
     * @return \StructType\ServiceCostType
     */
    public function setConvertedFromAmount(\StructType\AmountType $convertedFromAmount = null)
    {
        $this->ConvertedFromAmount = $convertedFromAmount;
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
     * @return \StructType\ServiceCostType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
