<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CharityInfoType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type defining the <b>Charity</b> container returned in <b>GetCharities</b>, which consists of all details related to a nonprofit charity organization.
 * @subpackage Structs
 */
class CharityInfoType extends AbstractStructBase
{
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - documentation: The name of a nonprofit charity organization. <br/><br/>
     * - minOccurs: 0
     * @var string
     */
    public $Name;
    /**
     * The ListingNPEmailNotifPref
     * Meta information extracted from the WSDL
     * - documentation: This flag is for internal use only.
     * - minOccurs: 0
     * @var bool
     */
    public $ListingNPEmailNotifPref;
    /**
     * The ListingNPEmail
     * Meta information extracted from the WSDL
     * - documentation: This field is for internal use only.
     * - minOccurs: 0
     * @var string
     */
    public $ListingNPEmail;
    /**
     * The ListingNPContactName
     * Meta information extracted from the WSDL
     * - documentation: This field is for internal use only.
     * - minOccurs: 0
     * @var string
     */
    public $ListingNPContactName;
    /**
     * The Mission
     * Meta information extracted from the WSDL
     * - documentation: The mission statement of the nonprofit charity organization. This field will be returned if the organization's mission statement is available. <br/><br/>
     * - minOccurs: 0
     * @var string
     */
    public $Mission;
    /**
     * The LogoURL
     * Meta information extracted from the WSDL
     * - documentation: The URL to the nonprofit charity organization's logo image. The image file will be in JPG or GIF format. This logo is displayed in charitable listings in the eBay for Charity section of the View Item page. This field is returned if
     * available for the nonprofit organization.
     * - minOccurs: 0
     * @var string
     */
    public $LogoURL;
    /**
     * The Status
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates whether or not the nonprofit organization is a valid eBay for Charity organization, and is able to receive proceeds from eBay sales.
     * - minOccurs: 0
     * @var string
     */
    public $Status;
    /**
     * The SearchableString
     * Meta information extracted from the WSDL
     * - documentation: Keyword string to be used for search purposes.
     * - minOccurs: 0
     * @var string
     */
    public $SearchableString;
    /**
     * The CharityRegion
     * Meta information extracted from the WSDL
     * - documentation: Integer value that indicates the nonprofit charity organization's region. Each nonprofit charity organization may only be associated with one region.
     * - minOccurs: 0
     * @var int
     */
    public $CharityRegion;
    /**
     * The CharityDomain
     * Meta information extracted from the WSDL
     * - documentation: Integer value that indicates the domain (mission area) of the nonprofit charity organization. A nonprofit charity organization does not have to specify a charity domain, so it is possible that this field will not be returned in
     * <b>GetCharities</b>. Each nonprofit charity organization can belong to as many as three charity domains.
     * - maxOccurs: 3
     * - minOccurs: 0
     * @var int[]
     */
    public $CharityDomain;
    /**
     * The CharityID
     * Meta information extracted from the WSDL
     * - documentation: This field is no longer returned. eBay's unique identifier for nonprofit organizations is now returned in the <b>id</b> attribute of the the opening <b>Charity</b> tag instead.
     * - minOccurs: 0
     * @var string
     */
    public $CharityID;
    /**
     * The LogoURLSelling
     * Meta information extracted from the WSDL
     * - documentation: An alternative to the <b>LogoURL</b> value. This URL indicates the location of the nonprofit charity organization's logo image. The image file will be in JPG or GIF format. This URL will be used if the <b>LogoURL</b> value points to
     * a broken link or if that location either contains no image or contains an image that does not meet the eBay requirements - GIF or JPG file; maximum size of 50 KB. A nonprofit charity organization's logo is displayed in the eBay for Charity section of
     * the View Item page for a charitable listing.
     * - minOccurs: 0
     * @var string
     */
    public $LogoURLSelling;
    /**
     * The DisplayLogoSelling
     * Meta information extracted from the WSDL
     * - documentation: This boolean value indicates if the <b>LogoURLSelling</b> image will appear in the eBay for Charity section of the View Item page for a charitable listing.
     * - minOccurs: 0
     * @var bool
     */
    public $DisplayLogoSelling;
    /**
     * The DisplayNameInCheckout
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var bool
     */
    public $DisplayNameInCheckout;
    /**
     * The Description
     * Meta information extracted from the WSDL
     * - documentation: This field provides a description about the nonprofit charity organization's primary purpose. "I want to support" will be added to the beginning of the contents of this field. For example, if the description is "the fight against
     * cancer", then on the checkout page "I want to support the fight against cancer" will be displayed. This field is returned if available for the nonprofit organization. <br/>
     * - minOccurs: 0
     * @var string
     */
    public $Description;
    /**
     * The ShowMultipleDonationAmountInCheckout
     * Meta information extracted from the WSDL
     * - documentation: This field must be used with the DisplayNameInCheckout field to control the options that are visible to a buyer during checkout. If the DisplayNameInCheckout field is set to True, and the ShowMultipleDonationAmountInCheckout field is
     * set to False, a checkbox with the one dollar option will be displayed during checkout. If the DisplayNameInCheckout field is set to False, and the ShowMultipleDonationAmountInCheckout field is set to False, no options will be displayed during
     * checkout. <br><br> Reserved for future use. If the DisplayNameInCheckout field is set to True, and the ShowMultipleDonationAmountInCheckout field is set to True, a dropdown with multiple donation amounts will be displayed during checkout. If the
     * DisplayNameInCheckout field is set to False, and the ShowMultipleDonationAmountInCheckout field is set to True, no options will be displayed during checkout, but the multiple donation amount field will be set.
     * - minOccurs: 0
     * @var bool
     */
    public $ShowMultipleDonationAmountInCheckout;
    /**
     * The PopularityIndex
     * Meta information extracted from the WSDL
     * - documentation: An integer value that indicates a nonprofit charity organization's popularity rank in comparison with other registered eBay for Charity organizations. This value is determined and managed by PayPal Giving Fund and is based on various
     * factors. This value is always returned for nonprofit organizations registered with PayPal Giving Fund.
     * - minOccurs: 0
     * @var int
     */
    public $PopularityIndex;
    /**
     * The EIN
     * Meta information extracted from the WSDL
     * - documentation: This value is the Employer Identification Number (EIN) of the nonprofit charity organization. A nonprofit company's EIN is used for tax purposes by the Internal Revenue Service. This value is returned if the nonprofit organization
     * has an EIN and it has been set.
     * - minOccurs: 0
     * @var string
     */
    public $EIN;
    /**
     * The NonProfitSecondName
     * Meta information extracted from the WSDL
     * - documentation: An alternative name for the nonprofit charity organization. This value is used by PayPal to search for nonprofit organizations. This value is returned if set.
     * - minOccurs: 0
     * @var string
     */
    public $NonProfitSecondName;
    /**
     * The NonProfitAddress
     * Meta information extracted from the WSDL
     * - documentation: Container consisting of the address (including latitude and longitude) of a nonprofit charity organization. This container is always returned if it is set.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\NonProfitAddressType[]
     */
    public $NonProfitAddress;
    /**
     * The NonProfitSocialAddress
     * Meta information extracted from the WSDL
     * - documentation: Container consisting of the nonprofit charity organization's social networking site ID/handle. A <b>NonProfitSocialAddress</b> container will exist for each social networking site that the charity organization is associated with.
     * Supported social networking sites include Facebook, Twitter, LinkedIn, Google+, MySpace, and Orkut. One or more of these containers are returned if set.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\NonProfitSocialAddressType[]
     */
    public $NonProfitSocialAddress;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * The id
     * Meta information extracted from the WSDL
     * - documentation: This attribute is the eBay-assigned, unique identifier of the nonprofit charity organization.
     * @var string
     */
    public $id;
    /**
     * Constructor method for CharityInfoType
     * @uses CharityInfoType::setName()
     * @uses CharityInfoType::setListingNPEmailNotifPref()
     * @uses CharityInfoType::setListingNPEmail()
     * @uses CharityInfoType::setListingNPContactName()
     * @uses CharityInfoType::setMission()
     * @uses CharityInfoType::setLogoURL()
     * @uses CharityInfoType::setStatus()
     * @uses CharityInfoType::setSearchableString()
     * @uses CharityInfoType::setCharityRegion()
     * @uses CharityInfoType::setCharityDomain()
     * @uses CharityInfoType::setCharityID()
     * @uses CharityInfoType::setLogoURLSelling()
     * @uses CharityInfoType::setDisplayLogoSelling()
     * @uses CharityInfoType::setDisplayNameInCheckout()
     * @uses CharityInfoType::setDescription()
     * @uses CharityInfoType::setShowMultipleDonationAmountInCheckout()
     * @uses CharityInfoType::setPopularityIndex()
     * @uses CharityInfoType::setEIN()
     * @uses CharityInfoType::setNonProfitSecondName()
     * @uses CharityInfoType::setNonProfitAddress()
     * @uses CharityInfoType::setNonProfitSocialAddress()
     * @uses CharityInfoType::setAny()
     * @uses CharityInfoType::setId()
     * @param string $name
     * @param bool $listingNPEmailNotifPref
     * @param string $listingNPEmail
     * @param string $listingNPContactName
     * @param string $mission
     * @param string $logoURL
     * @param string $status
     * @param string $searchableString
     * @param int $charityRegion
     * @param int[] $charityDomain
     * @param string $charityID
     * @param string $logoURLSelling
     * @param bool $displayLogoSelling
     * @param bool $displayNameInCheckout
     * @param string $description
     * @param bool $showMultipleDonationAmountInCheckout
     * @param int $popularityIndex
     * @param string $eIN
     * @param string $nonProfitSecondName
     * @param \StructType\NonProfitAddressType[] $nonProfitAddress
     * @param \StructType\NonProfitSocialAddressType[] $nonProfitSocialAddress
     * @param \DOMDocument $any
     * @param string $id
     */
    public function __construct($name = null, $listingNPEmailNotifPref = null, $listingNPEmail = null, $listingNPContactName = null, $mission = null, $logoURL = null, $status = null, $searchableString = null, $charityRegion = null, array $charityDomain = array(), $charityID = null, $logoURLSelling = null, $displayLogoSelling = null, $displayNameInCheckout = null, $description = null, $showMultipleDonationAmountInCheckout = null, $popularityIndex = null, $eIN = null, $nonProfitSecondName = null, array $nonProfitAddress = array(), array $nonProfitSocialAddress = array(), \DOMDocument $any = null, $id = null)
    {
        $this
            ->setName($name)
            ->setListingNPEmailNotifPref($listingNPEmailNotifPref)
            ->setListingNPEmail($listingNPEmail)
            ->setListingNPContactName($listingNPContactName)
            ->setMission($mission)
            ->setLogoURL($logoURL)
            ->setStatus($status)
            ->setSearchableString($searchableString)
            ->setCharityRegion($charityRegion)
            ->setCharityDomain($charityDomain)
            ->setCharityID($charityID)
            ->setLogoURLSelling($logoURLSelling)
            ->setDisplayLogoSelling($displayLogoSelling)
            ->setDisplayNameInCheckout($displayNameInCheckout)
            ->setDescription($description)
            ->setShowMultipleDonationAmountInCheckout($showMultipleDonationAmountInCheckout)
            ->setPopularityIndex($popularityIndex)
            ->setEIN($eIN)
            ->setNonProfitSecondName($nonProfitSecondName)
            ->setNonProfitAddress($nonProfitAddress)
            ->setNonProfitSocialAddress($nonProfitSocialAddress)
            ->setAny($any)
            ->setId($id);
    }
    /**
     * Get Name value
     * @return string|null
     */
    public function getName()
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \StructType\CharityInfoType
     */
    public function setName($name = null)
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        $this->Name = $name;
        return $this;
    }
    /**
     * Get ListingNPEmailNotifPref value
     * @return bool|null
     */
    public function getListingNPEmailNotifPref()
    {
        return $this->ListingNPEmailNotifPref;
    }
    /**
     * Set ListingNPEmailNotifPref value
     * @param bool $listingNPEmailNotifPref
     * @return \StructType\CharityInfoType
     */
    public function setListingNPEmailNotifPref($listingNPEmailNotifPref = null)
    {
        // validation for constraint: boolean
        if (!is_null($listingNPEmailNotifPref) && !is_bool($listingNPEmailNotifPref)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($listingNPEmailNotifPref, true), gettype($listingNPEmailNotifPref)), __LINE__);
        }
        $this->ListingNPEmailNotifPref = $listingNPEmailNotifPref;
        return $this;
    }
    /**
     * Get ListingNPEmail value
     * @return string|null
     */
    public function getListingNPEmail()
    {
        return $this->ListingNPEmail;
    }
    /**
     * Set ListingNPEmail value
     * @param string $listingNPEmail
     * @return \StructType\CharityInfoType
     */
    public function setListingNPEmail($listingNPEmail = null)
    {
        // validation for constraint: string
        if (!is_null($listingNPEmail) && !is_string($listingNPEmail)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($listingNPEmail, true), gettype($listingNPEmail)), __LINE__);
        }
        $this->ListingNPEmail = $listingNPEmail;
        return $this;
    }
    /**
     * Get ListingNPContactName value
     * @return string|null
     */
    public function getListingNPContactName()
    {
        return $this->ListingNPContactName;
    }
    /**
     * Set ListingNPContactName value
     * @param string $listingNPContactName
     * @return \StructType\CharityInfoType
     */
    public function setListingNPContactName($listingNPContactName = null)
    {
        // validation for constraint: string
        if (!is_null($listingNPContactName) && !is_string($listingNPContactName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($listingNPContactName, true), gettype($listingNPContactName)), __LINE__);
        }
        $this->ListingNPContactName = $listingNPContactName;
        return $this;
    }
    /**
     * Get Mission value
     * @return string|null
     */
    public function getMission()
    {
        return $this->Mission;
    }
    /**
     * Set Mission value
     * @param string $mission
     * @return \StructType\CharityInfoType
     */
    public function setMission($mission = null)
    {
        // validation for constraint: string
        if (!is_null($mission) && !is_string($mission)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mission, true), gettype($mission)), __LINE__);
        }
        $this->Mission = $mission;
        return $this;
    }
    /**
     * Get LogoURL value
     * @return string|null
     */
    public function getLogoURL()
    {
        return $this->LogoURL;
    }
    /**
     * Set LogoURL value
     * @param string $logoURL
     * @return \StructType\CharityInfoType
     */
    public function setLogoURL($logoURL = null)
    {
        // validation for constraint: string
        if (!is_null($logoURL) && !is_string($logoURL)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($logoURL, true), gettype($logoURL)), __LINE__);
        }
        $this->LogoURL = $logoURL;
        return $this;
    }
    /**
     * Get Status value
     * @return string|null
     */
    public function getStatus()
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @uses \EnumType\CharityStatusCodeType::valueIsValid()
     * @uses \EnumType\CharityStatusCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $status
     * @return \StructType\CharityInfoType
     */
    public function setStatus($status = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\CharityStatusCodeType::valueIsValid($status)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\CharityStatusCodeType', is_array($status) ? implode(', ', $status) : var_export($status, true), implode(', ', \EnumType\CharityStatusCodeType::getValidValues())), __LINE__);
        }
        $this->Status = $status;
        return $this;
    }
    /**
     * Get SearchableString value
     * @return string|null
     */
    public function getSearchableString()
    {
        return $this->SearchableString;
    }
    /**
     * Set SearchableString value
     * @param string $searchableString
     * @return \StructType\CharityInfoType
     */
    public function setSearchableString($searchableString = null)
    {
        // validation for constraint: string
        if (!is_null($searchableString) && !is_string($searchableString)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($searchableString, true), gettype($searchableString)), __LINE__);
        }
        $this->SearchableString = $searchableString;
        return $this;
    }
    /**
     * Get CharityRegion value
     * @return int|null
     */
    public function getCharityRegion()
    {
        return $this->CharityRegion;
    }
    /**
     * Set CharityRegion value
     * @param int $charityRegion
     * @return \StructType\CharityInfoType
     */
    public function setCharityRegion($charityRegion = null)
    {
        // validation for constraint: int
        if (!is_null($charityRegion) && !(is_int($charityRegion) || ctype_digit($charityRegion))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($charityRegion, true), gettype($charityRegion)), __LINE__);
        }
        $this->CharityRegion = $charityRegion;
        return $this;
    }
    /**
     * Get CharityDomain value
     * @return int[]|null
     */
    public function getCharityDomain()
    {
        return $this->CharityDomain;
    }
    /**
     * This method is responsible for validating the values passed to the setCharityDomain method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCharityDomain method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCharityDomainForArrayConstraintsFromSetCharityDomain(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $charityInfoTypeCharityDomainItem) {
            // validation for constraint: itemType
            if (!(is_int($charityInfoTypeCharityDomainItem) || ctype_digit($charityInfoTypeCharityDomainItem))) {
                $invalidValues[] = is_object($charityInfoTypeCharityDomainItem) ? get_class($charityInfoTypeCharityDomainItem) : sprintf('%s(%s)', gettype($charityInfoTypeCharityDomainItem), var_export($charityInfoTypeCharityDomainItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The CharityDomain property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set CharityDomain value
     * @throws \InvalidArgumentException
     * @param int[] $charityDomain
     * @return \StructType\CharityInfoType
     */
    public function setCharityDomain(array $charityDomain = array())
    {
        // validation for constraint: array
        if ('' !== ($charityDomainArrayErrorMessage = self::validateCharityDomainForArrayConstraintsFromSetCharityDomain($charityDomain))) {
            throw new \InvalidArgumentException($charityDomainArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(3)
        if (is_array($charityDomain) && count($charityDomain) > 3) {
            throw new \InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 3', count($charityDomain)), __LINE__);
        }
        $this->CharityDomain = $charityDomain;
        return $this;
    }
    /**
     * Add item to CharityDomain value
     * @throws \InvalidArgumentException
     * @param int $item
     * @return \StructType\CharityInfoType
     */
    public function addToCharityDomain($item)
    {
        // validation for constraint: itemType
        if (!(is_int($item) || ctype_digit($item))) {
            throw new \InvalidArgumentException(sprintf('The CharityDomain property can only contain items of type int, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(3)
        if (is_array($this->CharityDomain) && count($this->CharityDomain) >= 3) {
            throw new \InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 3', count($this->CharityDomain)), __LINE__);
        }
        $this->CharityDomain[] = $item;
        return $this;
    }
    /**
     * Get CharityID value
     * @return string|null
     */
    public function getCharityID()
    {
        return $this->CharityID;
    }
    /**
     * Set CharityID value
     * @param string $charityID
     * @return \StructType\CharityInfoType
     */
    public function setCharityID($charityID = null)
    {
        // validation for constraint: string
        if (!is_null($charityID) && !is_string($charityID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($charityID, true), gettype($charityID)), __LINE__);
        }
        $this->CharityID = $charityID;
        return $this;
    }
    /**
     * Get LogoURLSelling value
     * @return string|null
     */
    public function getLogoURLSelling()
    {
        return $this->LogoURLSelling;
    }
    /**
     * Set LogoURLSelling value
     * @param string $logoURLSelling
     * @return \StructType\CharityInfoType
     */
    public function setLogoURLSelling($logoURLSelling = null)
    {
        // validation for constraint: string
        if (!is_null($logoURLSelling) && !is_string($logoURLSelling)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($logoURLSelling, true), gettype($logoURLSelling)), __LINE__);
        }
        $this->LogoURLSelling = $logoURLSelling;
        return $this;
    }
    /**
     * Get DisplayLogoSelling value
     * @return bool|null
     */
    public function getDisplayLogoSelling()
    {
        return $this->DisplayLogoSelling;
    }
    /**
     * Set DisplayLogoSelling value
     * @param bool $displayLogoSelling
     * @return \StructType\CharityInfoType
     */
    public function setDisplayLogoSelling($displayLogoSelling = null)
    {
        // validation for constraint: boolean
        if (!is_null($displayLogoSelling) && !is_bool($displayLogoSelling)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($displayLogoSelling, true), gettype($displayLogoSelling)), __LINE__);
        }
        $this->DisplayLogoSelling = $displayLogoSelling;
        return $this;
    }
    /**
     * Get DisplayNameInCheckout value
     * @return bool|null
     */
    public function getDisplayNameInCheckout()
    {
        return $this->DisplayNameInCheckout;
    }
    /**
     * Set DisplayNameInCheckout value
     * @param bool $displayNameInCheckout
     * @return \StructType\CharityInfoType
     */
    public function setDisplayNameInCheckout($displayNameInCheckout = null)
    {
        // validation for constraint: boolean
        if (!is_null($displayNameInCheckout) && !is_bool($displayNameInCheckout)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($displayNameInCheckout, true), gettype($displayNameInCheckout)), __LINE__);
        }
        $this->DisplayNameInCheckout = $displayNameInCheckout;
        return $this;
    }
    /**
     * Get Description value
     * @return string|null
     */
    public function getDescription()
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param string $description
     * @return \StructType\CharityInfoType
     */
    public function setDescription($description = null)
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        $this->Description = $description;
        return $this;
    }
    /**
     * Get ShowMultipleDonationAmountInCheckout value
     * @return bool|null
     */
    public function getShowMultipleDonationAmountInCheckout()
    {
        return $this->ShowMultipleDonationAmountInCheckout;
    }
    /**
     * Set ShowMultipleDonationAmountInCheckout value
     * @param bool $showMultipleDonationAmountInCheckout
     * @return \StructType\CharityInfoType
     */
    public function setShowMultipleDonationAmountInCheckout($showMultipleDonationAmountInCheckout = null)
    {
        // validation for constraint: boolean
        if (!is_null($showMultipleDonationAmountInCheckout) && !is_bool($showMultipleDonationAmountInCheckout)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($showMultipleDonationAmountInCheckout, true), gettype($showMultipleDonationAmountInCheckout)), __LINE__);
        }
        $this->ShowMultipleDonationAmountInCheckout = $showMultipleDonationAmountInCheckout;
        return $this;
    }
    /**
     * Get PopularityIndex value
     * @return int|null
     */
    public function getPopularityIndex()
    {
        return $this->PopularityIndex;
    }
    /**
     * Set PopularityIndex value
     * @param int $popularityIndex
     * @return \StructType\CharityInfoType
     */
    public function setPopularityIndex($popularityIndex = null)
    {
        // validation for constraint: int
        if (!is_null($popularityIndex) && !(is_int($popularityIndex) || ctype_digit($popularityIndex))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($popularityIndex, true), gettype($popularityIndex)), __LINE__);
        }
        $this->PopularityIndex = $popularityIndex;
        return $this;
    }
    /**
     * Get EIN value
     * @return string|null
     */
    public function getEIN()
    {
        return $this->EIN;
    }
    /**
     * Set EIN value
     * @param string $eIN
     * @return \StructType\CharityInfoType
     */
    public function setEIN($eIN = null)
    {
        // validation for constraint: string
        if (!is_null($eIN) && !is_string($eIN)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($eIN, true), gettype($eIN)), __LINE__);
        }
        $this->EIN = $eIN;
        return $this;
    }
    /**
     * Get NonProfitSecondName value
     * @return string|null
     */
    public function getNonProfitSecondName()
    {
        return $this->NonProfitSecondName;
    }
    /**
     * Set NonProfitSecondName value
     * @param string $nonProfitSecondName
     * @return \StructType\CharityInfoType
     */
    public function setNonProfitSecondName($nonProfitSecondName = null)
    {
        // validation for constraint: string
        if (!is_null($nonProfitSecondName) && !is_string($nonProfitSecondName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nonProfitSecondName, true), gettype($nonProfitSecondName)), __LINE__);
        }
        $this->NonProfitSecondName = $nonProfitSecondName;
        return $this;
    }
    /**
     * Get NonProfitAddress value
     * @return \StructType\NonProfitAddressType[]|null
     */
    public function getNonProfitAddress()
    {
        return $this->NonProfitAddress;
    }
    /**
     * This method is responsible for validating the values passed to the setNonProfitAddress method
     * This method is willingly generated in order to preserve the one-line inline validation within the setNonProfitAddress method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateNonProfitAddressForArrayConstraintsFromSetNonProfitAddress(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $charityInfoTypeNonProfitAddressItem) {
            // validation for constraint: itemType
            if (!$charityInfoTypeNonProfitAddressItem instanceof \StructType\NonProfitAddressType) {
                $invalidValues[] = is_object($charityInfoTypeNonProfitAddressItem) ? get_class($charityInfoTypeNonProfitAddressItem) : sprintf('%s(%s)', gettype($charityInfoTypeNonProfitAddressItem), var_export($charityInfoTypeNonProfitAddressItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The NonProfitAddress property can only contain items of type \StructType\NonProfitAddressType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set NonProfitAddress value
     * @throws \InvalidArgumentException
     * @param \StructType\NonProfitAddressType[] $nonProfitAddress
     * @return \StructType\CharityInfoType
     */
    public function setNonProfitAddress(array $nonProfitAddress = array())
    {
        // validation for constraint: array
        if ('' !== ($nonProfitAddressArrayErrorMessage = self::validateNonProfitAddressForArrayConstraintsFromSetNonProfitAddress($nonProfitAddress))) {
            throw new \InvalidArgumentException($nonProfitAddressArrayErrorMessage, __LINE__);
        }
        $this->NonProfitAddress = $nonProfitAddress;
        return $this;
    }
    /**
     * Add item to NonProfitAddress value
     * @throws \InvalidArgumentException
     * @param \StructType\NonProfitAddressType $item
     * @return \StructType\CharityInfoType
     */
    public function addToNonProfitAddress(\StructType\NonProfitAddressType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\NonProfitAddressType) {
            throw new \InvalidArgumentException(sprintf('The NonProfitAddress property can only contain items of type \StructType\NonProfitAddressType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->NonProfitAddress[] = $item;
        return $this;
    }
    /**
     * Get NonProfitSocialAddress value
     * @return \StructType\NonProfitSocialAddressType[]|null
     */
    public function getNonProfitSocialAddress()
    {
        return $this->NonProfitSocialAddress;
    }
    /**
     * This method is responsible for validating the values passed to the setNonProfitSocialAddress method
     * This method is willingly generated in order to preserve the one-line inline validation within the setNonProfitSocialAddress method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateNonProfitSocialAddressForArrayConstraintsFromSetNonProfitSocialAddress(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $charityInfoTypeNonProfitSocialAddressItem) {
            // validation for constraint: itemType
            if (!$charityInfoTypeNonProfitSocialAddressItem instanceof \StructType\NonProfitSocialAddressType) {
                $invalidValues[] = is_object($charityInfoTypeNonProfitSocialAddressItem) ? get_class($charityInfoTypeNonProfitSocialAddressItem) : sprintf('%s(%s)', gettype($charityInfoTypeNonProfitSocialAddressItem), var_export($charityInfoTypeNonProfitSocialAddressItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The NonProfitSocialAddress property can only contain items of type \StructType\NonProfitSocialAddressType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set NonProfitSocialAddress value
     * @throws \InvalidArgumentException
     * @param \StructType\NonProfitSocialAddressType[] $nonProfitSocialAddress
     * @return \StructType\CharityInfoType
     */
    public function setNonProfitSocialAddress(array $nonProfitSocialAddress = array())
    {
        // validation for constraint: array
        if ('' !== ($nonProfitSocialAddressArrayErrorMessage = self::validateNonProfitSocialAddressForArrayConstraintsFromSetNonProfitSocialAddress($nonProfitSocialAddress))) {
            throw new \InvalidArgumentException($nonProfitSocialAddressArrayErrorMessage, __LINE__);
        }
        $this->NonProfitSocialAddress = $nonProfitSocialAddress;
        return $this;
    }
    /**
     * Add item to NonProfitSocialAddress value
     * @throws \InvalidArgumentException
     * @param \StructType\NonProfitSocialAddressType $item
     * @return \StructType\CharityInfoType
     */
    public function addToNonProfitSocialAddress(\StructType\NonProfitSocialAddressType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\NonProfitSocialAddressType) {
            throw new \InvalidArgumentException(sprintf('The NonProfitSocialAddress property can only contain items of type \StructType\NonProfitSocialAddressType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->NonProfitSocialAddress[] = $item;
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
     * @return \StructType\CharityInfoType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
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
     * @return \StructType\CharityInfoType
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
