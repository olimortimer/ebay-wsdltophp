<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ExtendedProducerResponsibilityType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is used by the <b>ExtendedProducerResponsibility</b> container, which provides IDs for the producer or importer related to the new item, packaging, added documentation, or an eco-participation fee. In some markets, such as
 * in France, this may be the importer of the item. For more information, see the <b>Extended Producer Responsibility for business sellers</b> page for your site (for example, <a
 * href="https://www.ebay.com/help/selling/all-about-selling/selling-internationally/extended-producer-responsibility-for-business-sellers?id=5314"
 * target="_blank">https://www.ebay.com/help/selling/all-about-selling/selling-internationally/extended-producer-responsibility-for-business-sellers?id=5314</a>). This field is supported by a limited number of sites and specific categories. Use the <a
 * href="https://developer.ebay.com/api-docs/sell/metadata/resources/marketplace/methods/getExtendedProducerResponsibilityPolicies" target="_blank">getExtendedProducerResponsibilityPolicies</a> method of the <b>Sell Metadata API</b> to retrieve valid
 * categories for a site. <br/><br/>For <b>GetItem</b> calls, this container is only returned to the listing owner, if the container is available.
 * @subpackage Structs
 */
class ExtendedProducerResponsibilityType extends AbstractStructBase
{
    /**
     * The ProducerProductID
     * Meta information extracted from the WSDL
     * - documentation: This ID is the Unique Identifier of the producer related to the item. For instance, if the seller is selling a cell phone, it is the ID related to the cell phone.
     * - minOccurs: 0
     * @var string
     */
    public $ProducerProductID;
    /**
     * The ProductPackageID
     * Meta information extracted from the WSDL
     * - documentation: This ID is the Unique Identifier of the producer of any packaging related to the product added by the seller. This does not include packaging in which the product is shipped (see <b>ShipmentPackageID</b>). For instance, if the seller
     * adds bubble wrap, it is the ID related to the bubble wrap.
     * - minOccurs: 0
     * @var string
     */
    public $ProductPackageID;
    /**
     * The ShipmentPackageID
     * Meta information extracted from the WSDL
     * - documentation: This ID is the Unique Identifier of the producer of any packaging used by the seller to ship the item. This does not include non-shipping packaging added to the product (see <b>ProductPackageID</b>). This ID is required when the
     * seller uses packaging to ship the item. For instance, if the seller uses a different box to ship the item, it is the ID related to the box.
     * - minOccurs: 0
     * @var string
     */
    public $ShipmentPackageID;
    /**
     * The ProductDocumentationID
     * Meta information extracted from the WSDL
     * - documentation: This ID is the Unique Identifier of the producer of any paper added to the parcel of the item by the seller. For example, this ID concerns any notice, leaflet, or paper that the seller adds to a cell phone parcel.
     * - minOccurs: 0
     * @var string
     */
    public $ProductDocumentationID;
    /**
     * The EcoParticipationFee
     * Meta information extracted from the WSDL
     * - documentation: This is the fee paid for new items to the eco-organization (for example, "eco-organisme" in France). It is a contribution to the financing of the elimination of the item responsibly. For multiple-variation listings, the
     * <b>EcoParticipationFee</b> in the <b>VariationExtendedProducerResponsibility</b> container is used for each variation in the listing, and not the <b>EcoParticipationFee</b> in the <b>ExtendedProducerResponsibility</b> container.
     * - minOccurs: 0
     * @var \StructType\AmountType
     */
    public $EcoParticipationFee;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for ExtendedProducerResponsibilityType
     * @uses ExtendedProducerResponsibilityType::setProducerProductID()
     * @uses ExtendedProducerResponsibilityType::setProductPackageID()
     * @uses ExtendedProducerResponsibilityType::setShipmentPackageID()
     * @uses ExtendedProducerResponsibilityType::setProductDocumentationID()
     * @uses ExtendedProducerResponsibilityType::setEcoParticipationFee()
     * @uses ExtendedProducerResponsibilityType::setAny()
     * @param string $producerProductID
     * @param string $productPackageID
     * @param string $shipmentPackageID
     * @param string $productDocumentationID
     * @param \StructType\AmountType $ecoParticipationFee
     * @param \DOMDocument $any
     */
    public function __construct($producerProductID = null, $productPackageID = null, $shipmentPackageID = null, $productDocumentationID = null, \StructType\AmountType $ecoParticipationFee = null, \DOMDocument $any = null)
    {
        $this
            ->setProducerProductID($producerProductID)
            ->setProductPackageID($productPackageID)
            ->setShipmentPackageID($shipmentPackageID)
            ->setProductDocumentationID($productDocumentationID)
            ->setEcoParticipationFee($ecoParticipationFee)
            ->setAny($any);
    }
    /**
     * Get ProducerProductID value
     * @return string|null
     */
    public function getProducerProductID()
    {
        return $this->ProducerProductID;
    }
    /**
     * Set ProducerProductID value
     * @param string $producerProductID
     * @return \StructType\ExtendedProducerResponsibilityType
     */
    public function setProducerProductID($producerProductID = null)
    {
        // validation for constraint: string
        if (!is_null($producerProductID) && !is_string($producerProductID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($producerProductID, true), gettype($producerProductID)), __LINE__);
        }
        $this->ProducerProductID = $producerProductID;
        return $this;
    }
    /**
     * Get ProductPackageID value
     * @return string|null
     */
    public function getProductPackageID()
    {
        return $this->ProductPackageID;
    }
    /**
     * Set ProductPackageID value
     * @param string $productPackageID
     * @return \StructType\ExtendedProducerResponsibilityType
     */
    public function setProductPackageID($productPackageID = null)
    {
        // validation for constraint: string
        if (!is_null($productPackageID) && !is_string($productPackageID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($productPackageID, true), gettype($productPackageID)), __LINE__);
        }
        $this->ProductPackageID = $productPackageID;
        return $this;
    }
    /**
     * Get ShipmentPackageID value
     * @return string|null
     */
    public function getShipmentPackageID()
    {
        return $this->ShipmentPackageID;
    }
    /**
     * Set ShipmentPackageID value
     * @param string $shipmentPackageID
     * @return \StructType\ExtendedProducerResponsibilityType
     */
    public function setShipmentPackageID($shipmentPackageID = null)
    {
        // validation for constraint: string
        if (!is_null($shipmentPackageID) && !is_string($shipmentPackageID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shipmentPackageID, true), gettype($shipmentPackageID)), __LINE__);
        }
        $this->ShipmentPackageID = $shipmentPackageID;
        return $this;
    }
    /**
     * Get ProductDocumentationID value
     * @return string|null
     */
    public function getProductDocumentationID()
    {
        return $this->ProductDocumentationID;
    }
    /**
     * Set ProductDocumentationID value
     * @param string $productDocumentationID
     * @return \StructType\ExtendedProducerResponsibilityType
     */
    public function setProductDocumentationID($productDocumentationID = null)
    {
        // validation for constraint: string
        if (!is_null($productDocumentationID) && !is_string($productDocumentationID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($productDocumentationID, true), gettype($productDocumentationID)), __LINE__);
        }
        $this->ProductDocumentationID = $productDocumentationID;
        return $this;
    }
    /**
     * Get EcoParticipationFee value
     * @return \StructType\AmountType|null
     */
    public function getEcoParticipationFee()
    {
        return $this->EcoParticipationFee;
    }
    /**
     * Set EcoParticipationFee value
     * @param \StructType\AmountType $ecoParticipationFee
     * @return \StructType\ExtendedProducerResponsibilityType
     */
    public function setEcoParticipationFee(\StructType\AmountType $ecoParticipationFee = null)
    {
        $this->EcoParticipationFee = $ecoParticipationFee;
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
     * @return \StructType\ExtendedProducerResponsibilityType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
