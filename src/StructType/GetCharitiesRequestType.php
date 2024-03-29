<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetCharitiesRequestType StructType
 * Meta information extracted from the WSDL
 * - documentation: <span class="tablenote"><b>Note: </b> This call is deprecated, and will be decommisioned on September 18, 2023. The alternative for this API is <a href="/api-docs/commerce/charity/resources/methods" target="_blank"
 * rel="noopener">Charity API</a>, which has a <a href="/api-docs/commerce/charity/resources/charity_org/methods/getCharityOrg" target="_blank" rel="noopener">getCharityOrg</a> method to retrieve details on a specific Charity, and a <a
 * href="/api-docs/commerce/charity/resources/charity_org/methods/getCharityOrgs" target="_blank" rel="noopener">getCharityOrgs</a> method to retrieve multiple charities based on search filters. </span> <br> The <b>GetCharities</b> call is used to
 * search for nonprofit organizations that are registered with the eBay for Charity program. This call allows users to search for a specific nonprofit organization, or to search for multiple nonprofit organizations from a particular charitable domain,
 * and/or geographical region, or by using a search string.
 * @subpackage Structs
 */
class GetCharitiesRequestType extends AbstractRequestType
{
    /**
     * The CharityID
     * Meta information extracted from the WSDL
     * - documentation: The unique identifier that eBay creates and assigns to each nonprofit organization. This is NOT the unique identifier used by the PayPal Giving Fund. This eBay unique identifier is returned in the <b>Charity.CharityID</b> field of a
     * <b>GetItem</b> call for charitable listings. <br><br> If a <b>CharityID</b> value is used in the request, all other search filters set in the call request will be ignored, as the call will only search for the specified nonprofit organization.
     * - minOccurs: 0
     * @var string
     */
    public $CharityID;
    /**
     * The CharityName
     * Meta information extracted from the WSDL
     * - documentation: This field will accept the full or partial name of a registered nonprofit organization. For example, if you pass in a value of <b>heart</b>, all registered nonprofit organizations with "heart" in their name may be returned in the
     * response. If the <b>MatchType</b> field is used and set to <code>StartsWith</code> (default value), or is not used at all, the phrase "heart" must come at the beginning of the nonprofit organization's name to be returned. However, if the
     * <b>MatchType</b> field is used and set to <code>Contains</code>, all registered nonprofit organizations with "heart" in their name should be returned in the response. The string passed in this field is not case-sensitive. <br/>
     * - minOccurs: 0
     * @var string
     */
    public $CharityName;
    /**
     * The Query
     * Meta information extracted from the WSDL
     * - documentation: This field accepts any string up to 350 characters in length. The functionality of this field is similar to the <b>CharityName</b> field, except that the call will also search for the supplied query string within the charity's
     * mission statement (which is returned under the <b>Charity.Mission</b> field in the response). If you pass in a value of <b>heart</b>, all registered nonprofit organizations with "heart" in their name or in their mission statement may be returned in
     * the response. <br/><br/> The string passed in this field is not case-sensitive. The <b>MatchType</b> field will have no effect if the <b>Query</b> field is used, as the <b>MatchType</b> field will only have an effect if a <b>CharityName</b> string
     * field is included. <br/>
     * - minOccurs: 0
     * @var string
     */
    public $Query;
    /**
     * The CharityRegion
     * Meta information extracted from the WSDL
     * - documentation: This field can be used to search for registered nonprofit organizations within a specified geographical region. Each geographical region will have an integer value associated with it. This integer value is what is passed in to this
     * field.
     * - minOccurs: 0
     * @var int
     */
    public $CharityRegion;
    /**
     * The CharityDomain
     * Meta information extracted from the WSDL
     * - documentation: This field can be used to search for registered nonprofit organizations within a specified charitable domain. Each charitable domain will have an integer value associated with it. This integer value is what is passed in to this
     * field. Nonprofit organizations can be associated with multiple charitable domains.
     * - minOccurs: 0
     * @var int
     */
    public $CharityDomain;
    /**
     * The IncludeDescription
     * Meta information extracted from the WSDL
     * - documentation: This field should be included and set to <code>true</code> if a user wants the charity's description to appear in the response. Note that not all charitable organizations will have defined descriptions. <br/>
     * - minOccurs: 0
     * @var bool
     */
    public $IncludeDescription;
    /**
     * The MatchType
     * Meta information extracted from the WSDL
     * - documentation: This filter is used if the user wants to specify where to look for the string specified in the <b>CharityName</b> field. The enumeration value input into this field controls the type of string matching to use when a value is
     * submitted in the <b>CharityName</b> field. If this field is omitted, and a <b>CharityName</b> string is used, this parameter value defaults to <code>StartsWith</code>. <br/><br/> This field is not applicable when a <b>Query</b> value is used. <br/>
     * - minOccurs: 0
     * @var string
     */
    public $MatchType;
    /**
     * The Featured
     * Meta information extracted from the WSDL
     * - documentation: This boolean field is used and set to <code>true</code> if the user wants to search for nonprofit organizations currently featured on the eBay for Charity site. <br/>
     * - minOccurs: 0
     * @var bool
     */
    public $Featured;
    /**
     * The CampaignID
     * Meta information extracted from the WSDL
     * - documentation: Reserved for future use.
     * - minOccurs: 0
     * @var int
     */
    public $CampaignID;
    /**
     * Constructor method for GetCharitiesRequestType
     * @uses GetCharitiesRequestType::setCharityID()
     * @uses GetCharitiesRequestType::setCharityName()
     * @uses GetCharitiesRequestType::setQuery()
     * @uses GetCharitiesRequestType::setCharityRegion()
     * @uses GetCharitiesRequestType::setCharityDomain()
     * @uses GetCharitiesRequestType::setIncludeDescription()
     * @uses GetCharitiesRequestType::setMatchType()
     * @uses GetCharitiesRequestType::setFeatured()
     * @uses GetCharitiesRequestType::setCampaignID()
     * @param string $charityID
     * @param string $charityName
     * @param string $query
     * @param int $charityRegion
     * @param int $charityDomain
     * @param bool $includeDescription
     * @param string $matchType
     * @param bool $featured
     * @param int $campaignID
     */
    public function __construct($charityID = null, $charityName = null, $query = null, $charityRegion = null, $charityDomain = null, $includeDescription = null, $matchType = null, $featured = null, $campaignID = null)
    {
        $this
            ->setCharityID($charityID)
            ->setCharityName($charityName)
            ->setQuery($query)
            ->setCharityRegion($charityRegion)
            ->setCharityDomain($charityDomain)
            ->setIncludeDescription($includeDescription)
            ->setMatchType($matchType)
            ->setFeatured($featured)
            ->setCampaignID($campaignID);
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
     * @return \StructType\GetCharitiesRequestType
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
     * Get CharityName value
     * @return string|null
     */
    public function getCharityName()
    {
        return $this->CharityName;
    }
    /**
     * Set CharityName value
     * @param string $charityName
     * @return \StructType\GetCharitiesRequestType
     */
    public function setCharityName($charityName = null)
    {
        // validation for constraint: string
        if (!is_null($charityName) && !is_string($charityName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($charityName, true), gettype($charityName)), __LINE__);
        }
        $this->CharityName = $charityName;
        return $this;
    }
    /**
     * Get Query value
     * @return string|null
     */
    public function getQuery()
    {
        return $this->Query;
    }
    /**
     * Set Query value
     * @param string $query
     * @return \StructType\GetCharitiesRequestType
     */
    public function setQuery($query = null)
    {
        // validation for constraint: string
        if (!is_null($query) && !is_string($query)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($query, true), gettype($query)), __LINE__);
        }
        $this->Query = $query;
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
     * @return \StructType\GetCharitiesRequestType
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
     * @return int|null
     */
    public function getCharityDomain()
    {
        return $this->CharityDomain;
    }
    /**
     * Set CharityDomain value
     * @param int $charityDomain
     * @return \StructType\GetCharitiesRequestType
     */
    public function setCharityDomain($charityDomain = null)
    {
        // validation for constraint: int
        if (!is_null($charityDomain) && !(is_int($charityDomain) || ctype_digit($charityDomain))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($charityDomain, true), gettype($charityDomain)), __LINE__);
        }
        $this->CharityDomain = $charityDomain;
        return $this;
    }
    /**
     * Get IncludeDescription value
     * @return bool|null
     */
    public function getIncludeDescription()
    {
        return $this->IncludeDescription;
    }
    /**
     * Set IncludeDescription value
     * @param bool $includeDescription
     * @return \StructType\GetCharitiesRequestType
     */
    public function setIncludeDescription($includeDescription = null)
    {
        // validation for constraint: boolean
        if (!is_null($includeDescription) && !is_bool($includeDescription)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($includeDescription, true), gettype($includeDescription)), __LINE__);
        }
        $this->IncludeDescription = $includeDescription;
        return $this;
    }
    /**
     * Get MatchType value
     * @return string|null
     */
    public function getMatchType()
    {
        return $this->MatchType;
    }
    /**
     * Set MatchType value
     * @uses \EnumType\StringMatchCodeType::valueIsValid()
     * @uses \EnumType\StringMatchCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $matchType
     * @return \StructType\GetCharitiesRequestType
     */
    public function setMatchType($matchType = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\StringMatchCodeType::valueIsValid($matchType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\StringMatchCodeType', is_array($matchType) ? implode(', ', $matchType) : var_export($matchType, true), implode(', ', \EnumType\StringMatchCodeType::getValidValues())), __LINE__);
        }
        $this->MatchType = $matchType;
        return $this;
    }
    /**
     * Get Featured value
     * @return bool|null
     */
    public function getFeatured()
    {
        return $this->Featured;
    }
    /**
     * Set Featured value
     * @param bool $featured
     * @return \StructType\GetCharitiesRequestType
     */
    public function setFeatured($featured = null)
    {
        // validation for constraint: boolean
        if (!is_null($featured) && !is_bool($featured)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($featured, true), gettype($featured)), __LINE__);
        }
        $this->Featured = $featured;
        return $this;
    }
    /**
     * Get CampaignID value
     * @return int|null
     */
    public function getCampaignID()
    {
        return $this->CampaignID;
    }
    /**
     * Set CampaignID value
     * @param int $campaignID
     * @return \StructType\GetCharitiesRequestType
     */
    public function setCampaignID($campaignID = null)
    {
        // validation for constraint: int
        if (!is_null($campaignID) && !(is_int($campaignID) || ctype_digit($campaignID))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($campaignID, true), gettype($campaignID)), __LINE__);
        }
        $this->CampaignID = $campaignID;
        return $this;
    }
}
