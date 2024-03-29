<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SiteDefaultsType StructType
 * Meta information extracted from the WSDL
 * - documentation: This type is used by the <b>SiteDefaults</b> container to display the features/settings that are default for most categories on the eBay marketplace.
 * @subpackage Structs
 */
class SiteDefaultsType extends AbstractStructBase
{
    /**
     * The ListingDuration
     * Meta information extracted from the WSDL
     * - documentation: A <b>ListingDuration</b> field will be returned for each different listing type that is supported on the eBay marketplace. Each field will show the listing type and the identifier associated with this listing type. These IDs will be
     * used to match the default listing duration values that are displayed in the <b>FeatureDefinitions.ListingDurations</b> containers.
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\ListingDurationReferenceType[]
     */
    public $ListingDuration;
    /**
     * The ShippingTermsRequired
     * Meta information extracted from the WSDL
     * - documentation: Specifies the default site setting for whether sellers are required to specify a domestic shipping service and its associated cost when listing items. True means the shipping terms are required unless a specific category overrides
     * this setting.
     * - minOccurs: 0
     * @var bool
     */
    public $ShippingTermsRequired;
    /**
     * The BestOfferEnabled
     * Meta information extracted from the WSDL
     * - documentation: Specifies the default site setting for whether categories allow Best Offers. A value of <code>true</code> means Best Offers are allowed site-wide, unless a specific category overrides the setting.
     * - minOccurs: 0
     * @var bool
     */
    public $BestOfferEnabled;
    /**
     * The DutchBINEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is no longer applicable as Dutch auctions are no longer available on eBay sites.
     * - minOccurs: 0
     * @var bool
     */
    public $DutchBINEnabled;
    /**
     * The UserConsentRequired
     * Meta information extracted from the WSDL
     * - documentation: Specifies the default site setting for whether a bidder must consent to the bid by confirming that he or she read and agrees to the terms in eBay's privacy policy.
     * - minOccurs: 0
     * @var bool
     */
    public $UserConsentRequired;
    /**
     * The HomePageFeaturedEnabled
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether or not it is possible to enhance a listing by putting it into a rotation for display on a special area of the eBay home page. Support for this feature varies by site. Item or feedback restrictions may apply.
     * - minOccurs: 0
     * @var bool
     */
    public $HomePageFeaturedEnabled;
    /**
     * The ProPackEnabled
     * Meta information extracted from the WSDL
     * - documentation: Specifies the default site setting for whether categories allow the ProPack feature (a feature pack). True means ProPack is allowed site-wide, unless a specific category overrides the setting.
     * - minOccurs: 0
     * @var bool
     */
    public $ProPackEnabled;
    /**
     * The BasicUpgradePackEnabled
     * Meta information extracted from the WSDL
     * - documentation: Specifies the default site setting for whether categories allow the <b>BasicUpgradePack</b> feature (a feature pack). No longer allowed on any sites. Formerly, Australia site (site ID 15, abbreviation AU) only.
     * - minOccurs: 0
     * @var bool
     */
    public $BasicUpgradePackEnabled;
    /**
     * The ValuePackEnabled
     * Meta information extracted from the WSDL
     * - documentation: Specifies the default site setting for whether categories allow the ValuePack feature (a feature pack). A value of <code>true</code> means it is allowed site-wide, unless a specific category overrides the setting.
     * - minOccurs: 0
     * @var bool
     */
    public $ValuePackEnabled;
    /**
     * The ProPackPlusEnabled
     * Meta information extracted from the WSDL
     * - documentation: Specifies the default site setting for whether categories allow the ProPackPlus feature (a feature pack). A value of <code>true</code> means it is allowed site-wide, unless a specific category overrides the setting.
     * - minOccurs: 0
     * @var bool
     */
    public $ProPackPlusEnabled;
    /**
     * The AdFormatEnabled
     * Meta information extracted from the WSDL
     * - documentation: Specifies the default site setting for whether categories allow Classified Ad format listings. A value of <code>true</code> means the feature is allowed site-wide, unless a specific category overrides the setting.
     * - minOccurs: 0
     * @var string
     */
    public $AdFormatEnabled;
    /**
     * The BestOfferCounterEnabled
     * Meta information extracted from the WSDL
     * - documentation: Specifies the default site setting for whether categories allow counter offers for Best Offers. A value of <code>true</code> means counter offers are allowed site-wide, unless a specific category overrides the setting.
     * - minOccurs: 0
     * @var bool
     */
    public $BestOfferCounterEnabled;
    /**
     * The BestOfferAutoDeclineEnabled
     * Meta information extracted from the WSDL
     * - documentation: Specifies the default site setting for whether categories allow auto decline for Best Offers. A value of <code>true</code> means auto decline is allowed site-wide, unless a specific category overrides the setting.
     * - minOccurs: 0
     * @var bool
     */
    public $BestOfferAutoDeclineEnabled;
    /**
     * The LocalMarketSpecialitySubscription
     * Meta information extracted from the WSDL
     * - documentation: Specifies the default site setting for whether <b>LocalMarketSpecialitySubscription</b> feature is supported for most categories.
     * - minOccurs: 0
     * @var bool
     */
    public $LocalMarketSpecialitySubscription;
    /**
     * The LocalMarketRegularSubscription
     * Meta information extracted from the WSDL
     * - documentation: Specifies the default site setting for whether <b>LocalMarketRegularSubscription</b> feature is supported for most categories.
     * - minOccurs: 0
     * @var bool
     */
    public $LocalMarketRegularSubscription;
    /**
     * The LocalMarketPremiumSubscription
     * Meta information extracted from the WSDL
     * - documentation: Specifies the default site setting for whether <b>LocalMarketPremiumSubscription</b> feature is supported for most categories.
     * - minOccurs: 0
     * @var bool
     */
    public $LocalMarketPremiumSubscription;
    /**
     * The LocalMarketNonSubscription
     * Meta information extracted from the WSDL
     * - documentation: Specifies the default site setting for whether <b>LocalMarketNonSubscription</b> feature is supported for most categories.
     * - minOccurs: 0
     * @var bool
     */
    public $LocalMarketNonSubscription;
    /**
     * The ExpressEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var bool
     */
    public $ExpressEnabled;
    /**
     * The ExpressPicturesRequired
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var bool
     */
    public $ExpressPicturesRequired;
    /**
     * The ExpressConditionRequired
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var bool
     */
    public $ExpressConditionRequired;
    /**
     * The MinimumReservePrice
     * Meta information extracted from the WSDL
     * - documentation: Specifies the default site setting for whether the Minimum Reserve Price feature is supported for most categories.
     * - minOccurs: 0
     * @var float
     */
    public $MinimumReservePrice;
    /**
     * The SellerContactDetailsEnabled
     * Meta information extracted from the WSDL
     * - documentation: Specifies the default site setting for whether most categories allow seller-level contact information for Classified Ad listings. <br/><br/> A value of <code>true</code> means seller-level contact information is available for
     * Classified Ad format listings site-wide, unless a specific category overrides the setting.
     * - minOccurs: 0
     * @var bool
     */
    public $SellerContactDetailsEnabled;
    /**
     * The TransactionConfirmationRequestEnabled
     * Meta information extracted from the WSDL
     * - documentation: Specifies the default site setting for whether the Transaction Confirmation Request feature is supported for most categories.
     * - minOccurs: 0
     * @var bool
     */
    public $TransactionConfirmationRequestEnabled;
    /**
     * The StoreInventoryEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is is no longer applicable.
     * - minOccurs: 0
     * @var bool
     */
    public $StoreInventoryEnabled;
    /**
     * The SkypeMeTransactionalEnabled
     * Meta information extracted from the WSDL
     * - documentation: This feature is no longer applicable.
     * - minOccurs: 0
     * @var bool
     */
    public $SkypeMeTransactionalEnabled;
    /**
     * The SkypeMeNonTransactionalEnabled
     * Meta information extracted from the WSDL
     * - documentation: This feature is no longer applicable.
     * - minOccurs: 0
     * @var bool
     */
    public $SkypeMeNonTransactionalEnabled;
    /**
     * The LocalListingDistancesRegular
     * Meta information extracted from the WSDL
     * - documentation: Specifies the supported local listing distances of regular vehicles for most categories.
     * - minOccurs: 0
     * @var string
     */
    public $LocalListingDistancesRegular;
    /**
     * The LocalListingDistancesSpecialty
     * Meta information extracted from the WSDL
     * - documentation: Specifies the supported local listing distances of specialty vehicles for most categories.
     * - minOccurs: 0
     * @var string
     */
    public $LocalListingDistancesSpecialty;
    /**
     * The LocalListingDistancesNonSubscription
     * Meta information extracted from the WSDL
     * - documentation: Specifies the supported local listing distances for most categories, for users who have not subscribed to either Regular or Specialty vehicles.
     * - minOccurs: 0
     * @var string
     */
    public $LocalListingDistancesNonSubscription;
    /**
     * The ClassifiedAdPaymentMethodEnabled
     * Meta information extracted from the WSDL
     * - documentation: Indicates if the payment method should be displayed to the user for most categories. Even if enabled, checkout may or may not be enabled.
     * - minOccurs: 0
     * @var string
     */
    public $ClassifiedAdPaymentMethodEnabled;
    /**
     * The ClassifiedAdShippingMethodEnabled
     * Meta information extracted from the WSDL
     * - documentation: Indicates if shipping options are available for most categories.
     * - minOccurs: 0
     * @var bool
     */
    public $ClassifiedAdShippingMethodEnabled;
    /**
     * The ClassifiedAdBestOfferEnabled
     * Meta information extracted from the WSDL
     * - documentation: Indicates if Best Offer is enabled for Classified Ad listings in most categories.
     * - minOccurs: 0
     * @var string
     */
    public $ClassifiedAdBestOfferEnabled;
    /**
     * The ClassifiedAdCounterOfferEnabled
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether counter offers are allowed on Best Offers for most categories.
     * - minOccurs: 0
     * @var bool
     */
    public $ClassifiedAdCounterOfferEnabled;
    /**
     * The ClassifiedAdAutoDeclineEnabled
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether automatic decline for Best Offers is allowed for most categories.
     * - minOccurs: 0
     * @var bool
     */
    public $ClassifiedAdAutoDeclineEnabled;
    /**
     * The ClassifiedAdContactByPhoneEnabled
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether most categories support including a phone number in the seller's contact information.
     * - minOccurs: 0
     * @var bool
     */
    public $ClassifiedAdContactByPhoneEnabled;
    /**
     * The ClassifiedAdContactByEmailEnabled
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether most categories support including an email address in the seller's contact information.
     * - minOccurs: 0
     * @var bool
     */
    public $ClassifiedAdContactByEmailEnabled;
    /**
     * The SafePaymentRequired
     * Meta information extracted from the WSDL
     * - documentation: eBay controls all forms of electronic payment methods that are avaialable to buyers, so this field is no longer applicable.
     * - minOccurs: 0
     * @var bool
     */
    public $SafePaymentRequired;
    /**
     * The ClassifiedAdPayPerLeadEnabled
     * Meta information extracted from the WSDL
     * - documentation: Specifies the default site setting for whether the pay-per-lead feature is supported for most categories.
     * - minOccurs: 0
     * @var bool
     */
    public $ClassifiedAdPayPerLeadEnabled;
    /**
     * The ItemSpecificsEnabled
     * Meta information extracted from the WSDL
     * - documentation: The value returned in this field indicates whether most categories on the specified eBay site support listings with Item Specifics. Item Specifics enable sellers to present descriptive details of an item in a structured manner.
     * - minOccurs: 0
     * @var string
     */
    public $ItemSpecificsEnabled;
    /**
     * The PaisaPayFullEscrowEnabled
     * Meta information extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> eBay India is no longer a functioning eBay marketplace, so the <code>PaisaPayEscrow</code> payment method is no longer applicable since this payment method was only supported on the eBay India
     * site. </span>
     * - minOccurs: 0
     * @var bool
     */
    public $PaisaPayFullEscrowEnabled;
    /**
     * The ISBNIdentifierEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is no longer applicable.
     * - minOccurs: 0
     * @var bool
     */
    public $ISBNIdentifierEnabled;
    /**
     * The UPCIdentifierEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is no longer applicable.
     * - minOccurs: 0
     * @var bool
     */
    public $UPCIdentifierEnabled;
    /**
     * The EANIdentifierEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is no longer applicable.
     * - minOccurs: 0
     * @var bool
     */
    public $EANIdentifierEnabled;
    /**
     * The BrandMPNIdentifierEnabled
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether the category is enabled for the <b>BrandMPN</b> field for a specific item. If <code>true</code>, sellers can add <b>BrandMPN</b> for that item.
     * - minOccurs: 0
     * @var bool
     */
    public $BrandMPNIdentifierEnabled;
    /**
     * The ClassifiedAdAutoAcceptEnabled
     * Meta information extracted from the WSDL
     * - documentation: Specifies the default site setting for whether categories allow auto-accept for Best Offers for Classified Ads.
     * - minOccurs: 0
     * @var bool
     */
    public $ClassifiedAdAutoAcceptEnabled;
    /**
     * The BestOfferAutoAcceptEnabled
     * Meta information extracted from the WSDL
     * - documentation: Specifies the default site setting for whether categories allow auto-accept for Best Offers.
     * - minOccurs: 0
     * @var bool
     */
    public $BestOfferAutoAcceptEnabled;
    /**
     * The CrossBorderTradeNorthAmericaEnabled
     * Meta information extracted from the WSDL
     * - documentation: Specifies the default site setting for whether categories allow you to specify that listings be displayed in the default search results of the respective sites.
     * - minOccurs: 0
     * @var bool
     */
    public $CrossBorderTradeNorthAmericaEnabled;
    /**
     * The CrossBorderTradeGBEnabled
     * Meta information extracted from the WSDL
     * - documentation: Specifies the default site setting for whether categories allow you to specify that listings be displayed in the default search results of the respective site.
     * - minOccurs: 0
     * @var bool
     */
    public $CrossBorderTradeGBEnabled;
    /**
     * The CrossBorderTradeAustraliaEnabled
     * Meta information extracted from the WSDL
     * - documentation: Specifies the default site setting for whether categories allow you to specify that listings be displayed in the default search results of the respective site.
     * - minOccurs: 0
     * @var bool
     */
    public $CrossBorderTradeAustraliaEnabled;
    /**
     * The PayPalBuyerProtectionEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var bool
     */
    public $PayPalBuyerProtectionEnabled;
    /**
     * The BuyerGuaranteeEnabled
     * Meta information extracted from the WSDL
     * - documentation: For the Australia site, if the <b>BuyerGuaranteeEnabled</b> is returned, then the default site setting is that categories allow buyer protection.
     * - minOccurs: 0
     * @var bool
     */
    public $BuyerGuaranteeEnabled;
    /**
     * The INEscrowWorkflowTimeline
     * Meta information extracted from the WSDL
     * - documentation: <span class="tablenote"><b>Note: </b> eBay India is no longer a functioning eBay marketplace, so this feature is no longer applicable since it was only supported on the eBay India site. </span>
     * - minOccurs: 0
     * @var string
     */
    public $INEscrowWorkflowTimeline;
    /**
     * The CombinedFixedPriceTreatmentEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var bool
     */
    public $CombinedFixedPriceTreatmentEnabled;
    /**
     * The GalleryFeaturedDurations
     * Meta information extracted from the WSDL
     * - documentation: Specifies the default site setting that enables durations for "Gallery Featured".
     * - minOccurs: 0
     * @var \StructType\ListingEnhancementDurationReferenceType
     */
    public $GalleryFeaturedDurations;
    /**
     * The PayPalRequired
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var bool
     */
    public $PayPalRequired;
    /**
     * The eBayMotorsProAdFormatEnabled
     * Meta information extracted from the WSDL
     * - documentation: Specifies the default site setting for whether categories allow Classified Ad listings. A value of <code>true</code> means the feature is allowed site-wide, unless a specific category overrides the setting. This element is for eBay
     * Motors Pro users.
     * - minOccurs: 0
     * @var string
     */
    public $eBayMotorsProAdFormatEnabled;
    /**
     * The eBayMotorsProContactByPhoneEnabled
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether most categories support including a phone number in the seller's contact information. This element is for eBay Motors Pro users.
     * - minOccurs: 0
     * @var bool
     */
    public $eBayMotorsProContactByPhoneEnabled;
    /**
     * The eBayMotorsProPhoneCount
     * Meta information extracted from the WSDL
     * - documentation: Indicates which telephone option is enabled to contact the seller. This element is for eBay Motors Pro users.
     * - minOccurs: 0
     * @var int
     */
    public $eBayMotorsProPhoneCount;
    /**
     * The eBayMotorsProContactByAddressEnabled
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether most categories support including an address in the seller's contact information. This element is for eBay Motors Pro users.
     * - minOccurs: 0
     * @var bool
     */
    public $eBayMotorsProContactByAddressEnabled;
    /**
     * The eBayMotorsProStreetCount
     * Meta information extracted from the WSDL
     * - documentation: Indicates which address option is enabled to contact the seller. This element is for eBay Motors Pro users.
     * - minOccurs: 0
     * @var int
     */
    public $eBayMotorsProStreetCount;
    /**
     * The eBayMotorsProCompanyNameEnabled
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether most categories support including a company name in the seller's contact information. This element is for eBay Motors Pro users.
     * - minOccurs: 0
     * @var bool
     */
    public $eBayMotorsProCompanyNameEnabled;
    /**
     * The eBayMotorsProContactByEmailEnabled
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether most categories support including an email address in the seller's contact information. This element is for eBay Motors Pro users.
     * - minOccurs: 0
     * @var bool
     */
    public $eBayMotorsProContactByEmailEnabled;
    /**
     * The eBayMotorsProBestOfferEnabled
     * Meta information extracted from the WSDL
     * - documentation: Indicates if Best Offer is enabled for Classified Ad listings in most categories. This element is for eBay Motors Pro users.
     * - minOccurs: 0
     * @var string
     */
    public $eBayMotorsProBestOfferEnabled;
    /**
     * The eBayMotorsProAutoAcceptEnabled
     * Meta information extracted from the WSDL
     * - documentation: Specifies the default site setting for whether categories allow auto-accept for Best Offers for Classified Ads. This element is for eBay Motors Pro users.
     * - minOccurs: 0
     * @var bool
     */
    public $eBayMotorsProAutoAcceptEnabled;
    /**
     * The eBayMotorsProAutoDeclineEnabled
     * Meta information extracted from the WSDL
     * - documentation: Specifies the default site setting for whether categories allow auto-decline for Best Offers for Classified Ads. This element is for eBay Motors Pro users.
     * - minOccurs: 0
     * @var bool
     */
    public $eBayMotorsProAutoDeclineEnabled;
    /**
     * The eBayMotorsProPaymentMethodCheckOutEnabled
     * Meta information extracted from the WSDL
     * - documentation: Indicates if the payment method should be displayed to the user for most categories. Even if enabled, checkout may or may not be enabled. This element is for eBay Motors Pro users.
     * - minOccurs: 0
     * @var string
     */
    public $eBayMotorsProPaymentMethodCheckOutEnabled;
    /**
     * The eBayMotorsProShippingMethodEnabled
     * Meta information extracted from the WSDL
     * - documentation: Indicates if shipping options are available for most categories. This element is for eBay Motors Pro users.
     * - minOccurs: 0
     * @var bool
     */
    public $eBayMotorsProShippingMethodEnabled;
    /**
     * The eBayMotorsProCounterOfferEnabled
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether counter offers are allowed on Best Offers for most categories. This element is for eBay Motors Pro users.
     * - minOccurs: 0
     * @var bool
     */
    public $eBayMotorsProCounterOfferEnabled;
    /**
     * The eBayMotorsProSellerContactDetailsEnabled
     * Meta information extracted from the WSDL
     * - documentation: Specifies the default site setting for whether most categories allow seller- level contact information for Classified Ad format listings. A value of <code>true</code> means seller-level contact information is available for Classified
     * Ad listings site-wide, unless a specific category overrides the setting. This element is for eBay Motors Pro users.
     * - minOccurs: 0
     * @var bool
     */
    public $eBayMotorsProSellerContactDetailsEnabled;
    /**
     * The LocalMarketAdFormatEnabled
     * Meta information extracted from the WSDL
     * - documentation: Specifies the default site setting for whether categories allow Classified Ad listings. A value of <code>true</code> means the feature is allowed site-wide, unless a specific category overrides the setting. This element is for Local
     * Market dealers.
     * - minOccurs: 0
     * @var string
     */
    public $LocalMarketAdFormatEnabled;
    /**
     * The LocalMarketContactByPhoneEnabled
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether most categories support including a phone number in the seller's contact information. This element is for Local Market dealers.
     * - minOccurs: 0
     * @var bool
     */
    public $LocalMarketContactByPhoneEnabled;
    /**
     * The LocalMarketPhoneCount
     * Meta information extracted from the WSDL
     * - documentation: Indicates which telephone option is enabled to contact the seller. This element is for Local Market dealers.
     * - minOccurs: 0
     * @var int
     */
    public $LocalMarketPhoneCount;
    /**
     * The LocalMarketContactByAddressEnabled
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether most categories support including an address in the seller's contact information. This element is for Local Market dealers.
     * - minOccurs: 0
     * @var bool
     */
    public $LocalMarketContactByAddressEnabled;
    /**
     * The LocalMarketStreetCount
     * Meta information extracted from the WSDL
     * - documentation: Indicates which address option is enabled to contact the seller. This element is for Local Market dealers.
     * - minOccurs: 0
     * @var int
     */
    public $LocalMarketStreetCount;
    /**
     * The LocalMarketCompanyNameEnabled
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether most categories support including a company name in the seller's contact information. This element is for Local Market dealers.
     * - minOccurs: 0
     * @var bool
     */
    public $LocalMarketCompanyNameEnabled;
    /**
     * The LocalMarketContactByEmailEnabled
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether most categories support including an email address in the seller's contact information. This element is for Local Market dealers.
     * - minOccurs: 0
     * @var bool
     */
    public $LocalMarketContactByEmailEnabled;
    /**
     * The LocalMarketBestOfferEnabled
     * Meta information extracted from the WSDL
     * - documentation: Indicates if Best Offer is enabled for Classified Ad listings in most categories. This element is for Local Market dealers.
     * - minOccurs: 0
     * @var string
     */
    public $LocalMarketBestOfferEnabled;
    /**
     * The LocalMarketAutoAcceptEnabled
     * Meta information extracted from the WSDL
     * - documentation: Specifies the default site setting for whether categories allow auto-accept for Best Offers for Classified Ads. This element is for Local Market dealers.
     * - minOccurs: 0
     * @var bool
     */
    public $LocalMarketAutoAcceptEnabled;
    /**
     * The LocalMarketAutoDeclineEnabled
     * Meta information extracted from the WSDL
     * - documentation: Specifies the default site setting for whether categories allow auto-decline for Best Offers for Classified Ads. This element is for Local Market dealers.
     * - minOccurs: 0
     * @var bool
     */
    public $LocalMarketAutoDeclineEnabled;
    /**
     * The LocalMarketPaymentMethodCheckOutEnabled
     * Meta information extracted from the WSDL
     * - documentation: Indicates if the payment method should be displayed to the user for most categories. Even if enabled, checkout may or may not be enabled. This element is for Local Market dealers.
     * - minOccurs: 0
     * @var string
     */
    public $LocalMarketPaymentMethodCheckOutEnabled;
    /**
     * The LocalMarketShippingMethodEnabled
     * Meta information extracted from the WSDL
     * - documentation: Indicates if shipping options are available for most categories. This element is for Local Market dealers.
     * - minOccurs: 0
     * @var bool
     */
    public $LocalMarketShippingMethodEnabled;
    /**
     * The LocalMarketCounterOfferEnabled
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether counter offers are allowed on Best Offers for most categories. This element is for Local Market dealers.
     * - minOccurs: 0
     * @var bool
     */
    public $LocalMarketCounterOfferEnabled;
    /**
     * The LocalMarketSellerContactDetailsEnabled
     * Meta information extracted from the WSDL
     * - documentation: Specifies the default site setting for whether most categories allow seller- level contact information for Classified Ad format listings. A value of <code>true</code> means seller-level contact information is available for Classified
     * Ad format listings site-wide, unless a specific category overrides the setting. This element is for Local Market dealers.
     * - minOccurs: 0
     * @var bool
     */
    public $LocalMarketSellerContactDetailsEnabled;
    /**
     * The ClassifiedAdPhoneCount
     * Meta information extracted from the WSDL
     * - documentation: Indicates which telephone option is enabled to contact the seller. This element is for For Sale By Owner.
     * - minOccurs: 0
     * @var int
     */
    public $ClassifiedAdPhoneCount;
    /**
     * The ClassifiedAdContactByAddressEnabled
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether most categories support including an address in the seller's contact information. This element is for For Sale By Owner.
     * - minOccurs: 0
     * @var bool
     */
    public $ClassifiedAdContactByAddressEnabled;
    /**
     * The ClassifiedAdStreetCount
     * Meta information extracted from the WSDL
     * - documentation: Indicates which address option is enabled to contact the seller. This element is for For Sale By Owner.
     * - minOccurs: 0
     * @var int
     */
    public $ClassifiedAdStreetCount;
    /**
     * The ClassifiedAdCompanyNameEnabled
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether most categories support including a company name in the seller's contact information. This element is for For Sale By Owner.
     * - minOccurs: 0
     * @var bool
     */
    public $ClassifiedAdCompanyNameEnabled;
    /**
     * The SpecialitySubscription
     * Meta information extracted from the WSDL
     * - documentation: Specifies the default site setting for whether <b>LocalMarketSpecialitySubscription</b> feature is supported for most categories.
     * - minOccurs: 0
     * @var string
     */
    public $SpecialitySubscription;
    /**
     * The RegularSubscription
     * Meta information extracted from the WSDL
     * - documentation: Specifies the default site setting for whether <b>LocalMarketRegularSubscription</b> feature is supported for most categories.
     * - minOccurs: 0
     * @var string
     */
    public $RegularSubscription;
    /**
     * The PremiumSubscription
     * Meta information extracted from the WSDL
     * - documentation: Specifies the default site setting for whether <b>LocalMarketPremiumSubscription</b> feature is supported for most categories.
     * - minOccurs: 0
     * @var string
     */
    public $PremiumSubscription;
    /**
     * The NonSubscription
     * Meta information extracted from the WSDL
     * - documentation: Specifies the supported local listing distances for most categories, for users who have not subscribed to either Regular or Specialty vehicles.
     * - minOccurs: 0
     * @var string
     */
    public $NonSubscription;
    /**
     * The PayPalRequiredForStoreOwner
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var bool
     */
    public $PayPalRequiredForStoreOwner;
    /**
     * The ReviseQuantityAllowed
     * Meta information extracted from the WSDL
     * - documentation: Defines if quantity can be revised while a listing is in semi or fully restricted mode. Applies to fixed-price listings.
     * - minOccurs: 0
     * @var bool
     */
    public $ReviseQuantityAllowed;
    /**
     * The RevisePriceAllowed
     * Meta information extracted from the WSDL
     * - documentation: Defines if price can be revised while a listing is in semi or fully restricted mode. Applies to fixed-price listings.
     * - minOccurs: 0
     * @var bool
     */
    public $RevisePriceAllowed;
    /**
     * The StoreOwnerExtendedListingDurationsEnabled
     * Meta information extracted from the WSDL
     * - documentation: Defines if extended business seller listing durations are enabled on a given site. When the value of this element is <code>true</code>, it means the listing duration values defined in <b>StoreOwnerExtendedListingDurations</b> are
     * applicable to fixed-price listings.
     * - minOccurs: 0
     * @var bool
     */
    public $StoreOwnerExtendedListingDurationsEnabled;
    /**
     * The StoreOwnerExtendedListingDurations
     * Meta information extracted from the WSDL
     * - documentation: Provides additional listings durations that are supported by Store Owners. The extended listing durations provided here in this element should be merged in with the baseline listing durations provided in the <b>ListingDurations</b>
     * container.
     * - minOccurs: 0
     * @var \StructType\StoreOwnerExtendedListingDurationsType
     */
    public $StoreOwnerExtendedListingDurations;
    /**
     * The ReturnPolicyEnabled
     * Meta information extracted from the WSDL
     * - documentation: Specifies the default site setting for whether a return policy is required for most categories. <br> <br> <b>For most sites:</b> If true, listings in most categories require a return policy. <br> <br> <b>For eBay Australia (AU) and
     * US eBay Motors Parts and Accessories:</b> If true, most categories support but do not require a return policy. <br> <br> Individual categories can override the site default.
     * - minOccurs: 0
     * @var bool
     */
    public $ReturnPolicyEnabled;
    /**
     * The HandlingTimeEnabled
     * Meta information extracted from the WSDL
     * - documentation: Specifies the default site setting for whether a handling time (dispatch time) is required for most categories. <br> <br> The handling time is the maximum number of business days the seller commits to for preparing an item to be
     * shipped after receiving a cleared payment. The seller's handling time does not include the shipping time (the carrier's transit time). <br> <br> If <code>false</code>, most listings on the site require a handling time (see <b>DispatchTimeMax</b> in
     * <b>AddItem</b>) when flat or calculated shipping is specified. (A handling time is not required for local pickup or for freight shipping.) <br> <br> For a list of the handling time values allowed for each site, use <b>DispatchTimeMaxDetails</b> in
     * <b>GeteBayDetails</b>. <br> <br> <span class="tablenote"><b>Note:</b> Although the field name ends with "Enabled", a value of <code>true</code> means that a handling time is NOT required, and value of <code>false</code> means that a handling time IS
     * required.</span>
     * - minOccurs: 0
     * @var bool
     */
    public $HandlingTimeEnabled;
    /**
     * The MaxFlatShippingCost
     * Meta information extracted from the WSDL
     * - documentation: Specifies the default site setting for whether a maximum flat rate shipping cost is imposed for listings in most categories on the site.
     * - minOccurs: 0
     * @var \StructType\AmountType
     */
    public $MaxFlatShippingCost;
    /**
     * The MaxFlatShippingCostCBTExempt
     * Meta information extracted from the WSDL
     * - documentation: Specifies the default site setting for whether a maximum flat rate shipping cost is imposed on sellers who list in categories on this site yet are shipping an item into the country of this site from another country.
     * - minOccurs: 0
     * @var bool
     */
    public $MaxFlatShippingCostCBTExempt;
    /**
     * The Group1MaxFlatShippingCost
     * Meta information extracted from the WSDL
     * - documentation: Returns the applicable max cap per shipping cost for shipping service group1
     * - minOccurs: 0
     * @var \StructType\AmountType
     */
    public $Group1MaxFlatShippingCost;
    /**
     * The Group2MaxFlatShippingCost
     * Meta information extracted from the WSDL
     * - documentation: Returns the applicable max cap per shipping cost for shipping service group2
     * - minOccurs: 0
     * @var \StructType\AmountType
     */
    public $Group2MaxFlatShippingCost;
    /**
     * The Group3MaxFlatShippingCost
     * Meta information extracted from the WSDL
     * - documentation: Returns the applicable max cap per shipping cost for shipping service group3
     * - minOccurs: 0
     * @var \StructType\AmountType
     */
    public $Group3MaxFlatShippingCost;
    /**
     * The PaymentMethod
     * Meta information extracted from the WSDL
     * - documentation: Indicates the acceptable payment methods that can be used when using the <b>Add</b>/<b>Revise</b>/<b>Relist</b> calls for an item listed on the corresponding site. <br><br> <span class="tablenote"><b>Note:</b> eBay now controls all
     * electronic payment methods available to buyers, but sellers still need to specify offline payment methods for listings that require/support offline payment such as motor vehicle listings.</span>
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    public $PaymentMethod;
    /**
     * The VariationsEnabled
     * Meta information extracted from the WSDL
     * - documentation: Specifies the default site setting for whether categories support multi-variation listings. If true, you can pass in Item.Variations in the AddFixedPriceItem family of calls when you list in categories that support this feature. <br>
     * <br> Multi-variation listings contain items that are logically the same product, but that vary in their manufacturing details or packaging. For example, a particular brand and style of shirt could be available in different sizes and colors, such as
     * "large blue" and "medium black" variations.
     * - minOccurs: 0
     * @var bool
     */
    public $VariationsEnabled;
    /**
     * The AttributeConversionEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated.
     * - minOccurs: 0
     * @var string
     */
    public $AttributeConversionEnabled;
    /**
     * The FreeGalleryPlusEnabled
     * Meta information extracted from the WSDL
     * - documentation: Specifies the default site setting for whether categories allow free, automatic upgrades for Gallery Plus, which enhances pictures in search results.
     * - minOccurs: 0
     * @var bool
     */
    public $FreeGalleryPlusEnabled;
    /**
     * The FreePicturePackEnabled
     * Meta information extracted from the WSDL
     * - documentation: Specifies the default site setting for whether categories allow free, automatic upgrades for Picture Pack, a discount package that includes super-sizing of pictures.
     * - minOccurs: 0
     * @var bool
     */
    public $FreePicturePackEnabled;
    /**
     * The ItemCompatibilityEnabled
     * Meta information extracted from the WSDL
     * - documentation: Specifies the default site setting for whether listing items with parts compatibility is supported by application (<code>ByApplication</code>), by specification (<code>BySpecification</code>), or not at all (<code>Disabled</code>). A
     * given category cannot support both types of parts compatibility. <br><br> Parts compatibility listings contain information to determine the assemblies with which a part is compatible. For example, an automotive part or accessory listed with parts
     * compatibility can be matched with vehicles (e.g., specific years, makes, and models) with which the part or accessory can be used. <br><br> Parts Compatibility is supported in limited Parts & Accessories categories for the US eBay Motors site only.
     * - minOccurs: 0
     * @var string
     */
    public $ItemCompatibilityEnabled;
    /**
     * The MinItemCompatibility
     * Meta information extracted from the WSDL
     * - documentation: Specifies the default site setting for whether parts compatibility information is required when listing items, and if so, how many compatibilities must be specified. If the value is "0," you are not required to specify compatibility
     * information. A value greater than "0" indicates that listing with parts compatibity is mandatory and the listing must contain the specified number of compatibilities at a minimum. <br><br> Parts compatibility listings contain information to determine
     * the assemblies with which a part is compatible. For example, an automotive part or accessory listed witih parts compatibility can be matched with vehicles (e.g., specific years, makes, and models) with which the part or accessory can be used.
     * <br><br> This field applies only to listings in which compatibility is specified by application. Entering parts compatibility by application specifies the assemblies (e.g., a specific year, make, and model of car) to which the item applies. This can
     * be done automatically by listing with a catalog product that supports parts compatibility, or manually, using <b class="con">Item.ItemCompatibilityList</b> when listing or revising an item.
     * - minOccurs: 0
     * @var int
     */
    public $MinItemCompatibility;
    /**
     * The MaxItemCompatibility
     * Meta information extracted from the WSDL
     * - documentation: Specifies the default site setting for the maximum number of compatible applications allowed per item when adding or revising items with parts compatibility. <br><br> Parts compatibility listings contain structured information to
     * determine the assemblies with which a part is compatible. For example, an automotive part or accessory listed with parts compatibility can be matched with vehicles (e.g., specific years, makes, and models) with which the part or accessory can be
     * used. <br><br> This field applies only to listings in which compatibility is specified by application manually when listing or revising an item. Entering parts compatibility by application manually specifies the assemblies (e.g., a specific year,
     * make, and model of car) to which the item applies, using <b class="con">Item.ItemCompatibilityList</b>.
     * - minOccurs: 0
     * @var int
     */
    public $MaxItemCompatibility;
    /**
     * The ConditionEnabled
     * Meta information extracted from the WSDL
     * - documentation: Specifies the default site setting for whether most categories support (or require) <b>Item.ConditionID</b> in listings. Use this to determine whether to use <b>ConditionID</b> in <b>AddItem</b> and related calls. See
     * <b>ConditionValues</b> for a list of valid IDs. <br><br> In general, this is set to <code>Disabled</code>, and meta-categories (level 1 categories) define their own default settings.
     * - minOccurs: 0
     * @var string
     */
    public $ConditionEnabled;
    /**
     * The ConditionValues
     * Meta information extracted from the WSDL
     * - documentation: This container shows the site default item condition values. Individual leaf categories define their own default set of item condition values and always override this list.
     * - minOccurs: 0
     * @var \StructType\ConditionValuesType
     */
    public $ConditionValues;
    /**
     * The SpecialFeatures
     * Meta information extracted from the WSDL
     * - documentation: This container shows the site default special item condition values, such as <b>Certified - Refurbished</b> condition (condition ID 2000), <b>Excellent - Refurbished</b> condition (condition ID 2010), <b>Very Good - Refurbished</b>
     * condition (condition ID 2020), and <b>Good - Refurbished</b> condition (condition ID 2030). A seller must be pre-qualified by eBay to list items with the any of these refurbished item conditions. <br/><br/> All other item conditions supported by a
     * category will be returned in the <b>ConditionValues</b> container instead. Individual leaf categories define their own default set of item condition values and always override this list.
     * - minOccurs: 0
     * @var \StructType\ConditionValuesType
     */
    public $SpecialFeatures;
    /**
     * The ValueCategory
     * Meta information extracted from the WSDL
     * - documentation: Specifies the default site setting for whether most categories follow specific rules associated with "value categories". <br> <br> Some eBay sites may select a few categories and designate them as "value categories". These are
     * typically selected from categories where buyers can find great deals. (Not all categories with great deals are designated as value categories.) This designation can change over time. <br> <br> While a category is designated as a value category (i.e.,
     * when <b>ValueCategory</b> = <code>true</code>), it is subject to the following rule: Items in value categories can only be listed in one category. <br> <br> For example, if you attempt to list in two categories and the <b>PrimaryCategory</b> or
     * <b>SecondaryCategory</b> is a value category, then eBay drops the <b>SecondaryCategory</b> and lists the item in the <b>PrimaryCategory</b> only. Similarly, if you attempt to add a secondary category to an existing listing, or you change the category
     * for an existing listing, and if the primary or secondary category is a value category, then eBay drops the secondary category.
     * - minOccurs: 0
     * @var bool
     */
    public $ValueCategory;
    /**
     * The ProductCreationEnabled
     * Meta information extracted from the WSDL
     * - documentation: Specifies the default site setting for whether most categories support creating/revising listings based off an eBay catalog product.
     * - minOccurs: 0
     * @var string
     */
    public $ProductCreationEnabled;
    /**
     * The EANEnabled
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates whether or not most categories on the specified eBay site support the use of European Article Numbers (EANs) to help create a listing in an <b>Add</b>/<b>Revise</b>/<b>Relist</b>/<b>Verify</b> API
     * call. <b></b> <ul> <li>A value of <code>Disabled</code> indicates that EANs cannot be used for most categories on the specified eBay site. </li> <li>A value of <code>Enabled</code> indicates that EANs can be used for most categories on the specified
     * eBay site. </li> <li>A value of <code>Required</code> indicates that an EAN is required for most categories on the specified eBay site. </li> </ul>
     * - minOccurs: 0
     * @var string
     */
    public $EANEnabled;
    /**
     * The ISBNEnabled
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates whether or not most categories on the specified eBay site support the use of International Standard Book Numbers (ISBNs) to help create a listing in an
     * <b>Add</b>/<b>Revise</b>/<b>Relist</b>/<b>Verify</b> API call. <br/><br/> A value of <code>Disabled</code> indicates that ISBNs cannot be used for most categories on the specified eBay site, a value of <code>Enabled</code> indicates that ISBNs can be
     * used for most categories on the specified eBay site, and a value of <code>Required</code> indicates that an ISBN is required for most categories on the specified eBay site.
     * - minOccurs: 0
     * @var string
     */
    public $ISBNEnabled;
    /**
     * The UPCEnabled
     * Meta information extracted from the WSDL
     * - documentation: This enumeration value indicates whether or not most categories on the specified eBay site support the use of Universal Product Codes (UPCs) to help create a listing in an Add/Revise/Relist/Verify API call. A value of
     * <code>Disabled</code> indicates that UPCs cannot be used for most categories on the specified eBay site, a value of <code>Enabled</code> indicates that UPCs can be used for most categories on the specified eBay site, and a value of
     * <code>Required</code> indicates that a UPC is required for most categories on the specified eBay site.
     * - minOccurs: 0
     * @var string
     */
    public $UPCEnabled;
    /**
     * The MaxGranularFitmentCount
     * Meta information extracted from the WSDL
     * - documentation: Specifies the maximum fitment count. Sellers can provide up to 1000 fitments at the lowest level of granularity.
     * - minOccurs: 0
     * @var int
     */
    public $MaxGranularFitmentCount;
    /**
     * The CompatibleVehicleType
     * Meta information extracted from the WSDL
     * - documentation: Indicates the type of vehicle; car, truck, boat, or motorcycle.
     * - minOccurs: 0
     * @var string
     */
    public $CompatibleVehicleType;
    /**
     * The PaymentOptionsGroup
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated
     * - minOccurs: 0
     * @var string
     */
    public $PaymentOptionsGroup;
    /**
     * The ShippingProfileCategoryGroup
     * Meta information extracted from the WSDL
     * - documentation: Specifies what categories the Shipping profile is applicable to. Only returned when this value (or this category's setting) overrides the value inherited from the category's parent.
     * - minOccurs: 0
     * @var string
     */
    public $ShippingProfileCategoryGroup;
    /**
     * The PaymentProfileCategoryGroup
     * Meta information extracted from the WSDL
     * - documentation: Specifies what categories the Payment profile is applicable to.
     * - minOccurs: 0
     * @var string
     */
    public $PaymentProfileCategoryGroup;
    /**
     * The ReturnPolicyProfileCategoryGroup
     * Meta information extracted from the WSDL
     * - documentation: Specifies what categories the Return Policy profile is applicable to.
     * - minOccurs: 0
     * @var string
     */
    public $ReturnPolicyProfileCategoryGroup;
    /**
     * The VINSupported
     * Meta information extracted from the WSDL
     * - documentation: After EOL Attributes, VIN will no longer be supported as primary attributes, rather consumers should use new tag. This feature helps consumers in identifying if category supports VIN.
     * - minOccurs: 0
     * @var bool
     */
    public $VINSupported;
    /**
     * The VRMSupported
     * Meta information extracted from the WSDL
     * - documentation: After EOL Attributes, VRM will no longer be supported as primary attributes, rather consumers should use new tag. This feature helps consumers in identifying if category supports VRM.
     * - minOccurs: 0
     * @var bool
     */
    public $VRMSupported;
    /**
     * The SellerProvidedTitleSupported
     * Meta information extracted from the WSDL
     * - documentation: After EOL Attributes, Seller Provided Title will no longer be supported as primary attributes, rather consumers should use new tag. This feature helps consumers in identifying if category supports Seller Provided Title.
     * - minOccurs: 0
     * @var bool
     */
    public $SellerProvidedTitleSupported;
    /**
     * The DepositSupported
     * Meta information extracted from the WSDL
     * - documentation: After EOL Attributes, Deposit will no longer be supported as primary attributes, rather consumers should use new tags. This feature helps consumers in identifying if category supports Deposit.
     * - minOccurs: 0
     * @var bool
     */
    public $DepositSupported;
    /**
     * The GlobalShippingEnabled
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether or not the the specified category is enabled for Global Shipping Program.
     * - minOccurs: 0
     * @var bool
     */
    public $GlobalShippingEnabled;
    /**
     * The AdditionalCompatibilityEnabled
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether most categories on the specified eBay site support the Boat and Motorcycle Parts Compatibility feature. The Boats Parts Compatibility feature allows sellers to list their boats' parts and accessories items with
     * parts compatibility name-value pairs specific to boats, and allows potential buyers to search for these items using parts compatibility search fields.
     * - minOccurs: 0
     * @var bool
     */
    public $AdditionalCompatibilityEnabled;
    /**
     * The PickupDropOffEnabled
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether most categories on the specified eBay site support the "Click and Collect" feature. With the 'Click and Collect' feature, a buyer can purchase certain items on an eBay site and collect them at a local store. Buyers
     * are notified by eBay once their items are available. <br/><br/> The "Click and Collect" feature is only available to large merchants on the UK and Australia sites. The 'Click and Collect' feature is only available to large merchants on the eBay UK
     * (site ID - 3), eBay Australia (Site ID - 15), and eBay Germany (Site ID - 77) sites. <br> <br> <span class="tablenote"><b>Note:</b> For Click and Collect eligible sellers, the Click and Collect feature can only be enabled at the account level, and
     * then each of the seller's listings within an Click and Collect enabled category will be automatically evaluated for Click and Collect eligibility. </span>
     * - minOccurs: 0
     * @var bool
     */
    public $PickupDropOffEnabled;
    /**
     * The DigitalGoodDeliveryEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field indicates whether or not most categories on the specified eBay site support digital gift cards. <br/><br/> Digital gift cards are currently only supported on the US site. There are some restrictions when it comes to
     * selling gift cards, including the following: <ul> <li>Each seller can only have one gift card listing at any given time</li> <li>The maximum dollar value of the gift card may not exceed 500.00</li> <li>Prepaid credit cards from American Express,
     * Discover, MasterCard, or Visa are not allowed</li> </ul> For more information on eBay's Gift Card policy, see the <a href="http://pages.ebay.com/help/policies/gift.html">Gift cards policy</a> Help page.
     * - minOccurs: 0
     * @var bool
     */
    public $DigitalGoodDeliveryEnabled;
    /**
     * The EpidSupported
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as <code>true</code> if one or more categories on an eBay site support the use of an eBay Product ID (e.g. ePID) in an Add/Revise/Relist API call to identify which motorcycles and/or scooters are compatible
     * with a motor vehicle part or accessory. ePIDs can only be used to identify motorcycles and scooters on the Germany and UK sites. <br/><br/> For more information on using an ePID to identify a compatible motorcycle or scooter through an
     * Add/Revise/Relist API call on the Germany or UK site, see the documentation for the <a href=" https://developer.ebay.com/Devzone/XML/docs/Reference/eBay/AddItem.html#Request .Item.ItemCompatibilityList.Compatibility.NameValueList">Compatibility.Name
     * ValueList</a> container.
     * - minOccurs: 0
     * @var bool
     */
    public $EpidSupported;
    /**
     * The KTypeSupported
     * Meta information extracted from the WSDL
     * - documentation: This field is returned as <code>true</code> if one or more categories on an eBay site support the use of a K Type vehicle number in an Add/Revise/Relist API call to identify which cars and/or trucks are compatible with a motor
     * vehicle part or accessory. K type vehicle numbers can only be used to identify cars and trucks on the Germany site. <br/><br/> For more information on using a K Type vehicle number to identify a compatible car or truck through an Add/Revise/Relist
     * API call on the Germany site, see the documentation for the <a href=" https://developer.ebay.com/Devzone/XML/docs/Reference/eBay/AddItem.html#Request .Item.ItemCompatibilityList.Compatibility.NameValueList">Compatibility.Name ValueList</a> container.
     * - minOccurs: 0
     * @var bool
     */
    public $KTypeSupported;
    /**
     * The ProductRequiredEnabled
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated. No eBay categories require listings based on an eBay catalog product.
     * - minOccurs: 0
     * @var string
     */
    public $ProductRequiredEnabled;
    /**
     * The DomesticReturnsAcceptedValues
     * Meta information extracted from the WSDL
     * - documentation: This field returns the options a seller has for accepting or not accepting returns from domestic buyers. <br><br> The values returned in this field are pertinent only if <b>ReturnPolicyEnabled</b> in GetCategoryFeatures is set to
     * <code>true</code> for the associated marketplace and category.
     * - minOccurs: 0
     * @var \StructType\DomesticReturnsAcceptedCodeType
     */
    public $DomesticReturnsAcceptedValues;
    /**
     * The InternationalReturnsAcceptedValues
     * Meta information extracted from the WSDL
     * - documentation: This field returns the options a seller has for accepting or not accepting returns from international buyers. <br><br> The values returned in this field are pertinent only if <b>ReturnPolicyEnabled</b> in GetCategoryFeatures is set
     * to <code>true</code> for the associated marketplace and category.
     * - minOccurs: 0
     * @var \StructType\InternationalReturnsAcceptedCodeType
     */
    public $InternationalReturnsAcceptedValues;
    /**
     * The DomesticReturnsDurationValues
     * Meta information extracted from the WSDL
     * - documentation: This field returns the options a seller has for specifying the return period for returns from domestic buyers. The return period is the amount of time the buyer has to initiate a return once they have received the item. <br><br> The
     * values returned in this field are pertinent only if <b>ReturnPolicyEnabled</b> in GetCategoryFeatures is set to <code>true</code> for the associated marketplace and category.
     * - minOccurs: 0
     * @var \StructType\DomesticReturnsDurationCodeType
     */
    public $DomesticReturnsDurationValues;
    /**
     * The InternationalReturnsDurationValues
     * Meta information extracted from the WSDL
     * - documentation: This field returns the options a seller has for specifying the return period for returns from international buyers. The return period is the amount of time the buyer has to initiate a return once they have received the item. <br><br>
     * The values returned in this field are pertinent only if <b>ReturnPolicyEnabled</b> in GetCategoryFeatures is set to <code>true</code> for the associated marketplace and category.
     * - minOccurs: 0
     * @var \StructType\InternationalReturnsDurationCodeType
     */
    public $InternationalReturnsDurationValues;
    /**
     * The DomesticReturnsShipmentPayeeValues
     * Meta information extracted from the WSDL
     * - documentation: This field returns the options a seller has for specifying who pays the return shipping cost for domestic returns. <br><br> The values returned in this field are pertinent only if <b>ReturnPolicyEnabled</b> in GetCategoryFeatures is
     * set to <code>true</code> for the associated marketplace and category.
     * - minOccurs: 0
     * @var \StructType\DomesticReturnsShipmentPayeeCodeType
     */
    public $DomesticReturnsShipmentPayeeValues;
    /**
     * The InternationalReturnsShipmentPayeeValues
     * Meta information extracted from the WSDL
     * - documentation: This field returns the options a seller has for specifying who pays the return shipping cost for international returns. <br><br> The values returned in this field are pertinent only if <b>ReturnPolicyEnabled</b> in
     * GetCategoryFeatures is set to <code>true</code> for the associated marketplace and category.
     * - minOccurs: 0
     * @var \StructType\InternationalReturnsShipmentPayeeCodeType
     */
    public $InternationalReturnsShipmentPayeeValues;
    /**
     * The DomesticRefundMethodValues
     * Meta information extracted from the WSDL
     * - documentation: In US, sellers can offer an item replacement in addition to offering money-back for domestic returns. This field returns the options a seller has for specifying how they will handle domestic returns. <br><br> The values returned in
     * this field are pertinent only if <b>ReturnPolicyEnabled</b> in GetCategoryFeatures is set to <code>true</code> for the associated marketplace and category.
     * - minOccurs: 0
     * @var \StructType\DomesticRefundMethodCodeType
     */
    public $DomesticRefundMethodValues;
    /**
     * The InternationalRefundMethodValues
     * Meta information extracted from the WSDL
     * - documentation: In US, sellers can offer an item replacement in addition to offering money-back for international returns. This field returns the options a seller has for specifying how they will handle international returns. <br><br> The values
     * returned in this field are pertinent only if <b>ReturnPolicyEnabled</b> in GetCategoryFeatures is set to <code>true</code> for the associated marketplace and category.
     * - minOccurs: 0
     * @var \StructType\InternationalRefundMethodCodeType
     */
    public $InternationalRefundMethodValues;
    /**
     * The ReturnPolicyDescriptionEnabled
     * Meta information extracted from the WSDL
     * - documentation: In some EU countries, sellers are legally required to describe the return policy they offer. This field returns a flag that indicates whether or not the seller can specify their return-policy details in the associated marketplace.
     * <br><br> The values returned in this field are pertinent only if <b>ReturnPolicyEnabled</b> in GetCategoryFeatures is set to <code>true</code> for the associated marketplace and category.
     * - minOccurs: 0
     * @var bool
     */
    public $ReturnPolicyDescriptionEnabled;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for SiteDefaultsType
     * @uses SiteDefaultsType::setListingDuration()
     * @uses SiteDefaultsType::setShippingTermsRequired()
     * @uses SiteDefaultsType::setBestOfferEnabled()
     * @uses SiteDefaultsType::setDutchBINEnabled()
     * @uses SiteDefaultsType::setUserConsentRequired()
     * @uses SiteDefaultsType::setHomePageFeaturedEnabled()
     * @uses SiteDefaultsType::setProPackEnabled()
     * @uses SiteDefaultsType::setBasicUpgradePackEnabled()
     * @uses SiteDefaultsType::setValuePackEnabled()
     * @uses SiteDefaultsType::setProPackPlusEnabled()
     * @uses SiteDefaultsType::setAdFormatEnabled()
     * @uses SiteDefaultsType::setBestOfferCounterEnabled()
     * @uses SiteDefaultsType::setBestOfferAutoDeclineEnabled()
     * @uses SiteDefaultsType::setLocalMarketSpecialitySubscription()
     * @uses SiteDefaultsType::setLocalMarketRegularSubscription()
     * @uses SiteDefaultsType::setLocalMarketPremiumSubscription()
     * @uses SiteDefaultsType::setLocalMarketNonSubscription()
     * @uses SiteDefaultsType::setExpressEnabled()
     * @uses SiteDefaultsType::setExpressPicturesRequired()
     * @uses SiteDefaultsType::setExpressConditionRequired()
     * @uses SiteDefaultsType::setMinimumReservePrice()
     * @uses SiteDefaultsType::setSellerContactDetailsEnabled()
     * @uses SiteDefaultsType::setTransactionConfirmationRequestEnabled()
     * @uses SiteDefaultsType::setStoreInventoryEnabled()
     * @uses SiteDefaultsType::setSkypeMeTransactionalEnabled()
     * @uses SiteDefaultsType::setSkypeMeNonTransactionalEnabled()
     * @uses SiteDefaultsType::setLocalListingDistancesRegular()
     * @uses SiteDefaultsType::setLocalListingDistancesSpecialty()
     * @uses SiteDefaultsType::setLocalListingDistancesNonSubscription()
     * @uses SiteDefaultsType::setClassifiedAdPaymentMethodEnabled()
     * @uses SiteDefaultsType::setClassifiedAdShippingMethodEnabled()
     * @uses SiteDefaultsType::setClassifiedAdBestOfferEnabled()
     * @uses SiteDefaultsType::setClassifiedAdCounterOfferEnabled()
     * @uses SiteDefaultsType::setClassifiedAdAutoDeclineEnabled()
     * @uses SiteDefaultsType::setClassifiedAdContactByPhoneEnabled()
     * @uses SiteDefaultsType::setClassifiedAdContactByEmailEnabled()
     * @uses SiteDefaultsType::setSafePaymentRequired()
     * @uses SiteDefaultsType::setClassifiedAdPayPerLeadEnabled()
     * @uses SiteDefaultsType::setItemSpecificsEnabled()
     * @uses SiteDefaultsType::setPaisaPayFullEscrowEnabled()
     * @uses SiteDefaultsType::setISBNIdentifierEnabled()
     * @uses SiteDefaultsType::setUPCIdentifierEnabled()
     * @uses SiteDefaultsType::setEANIdentifierEnabled()
     * @uses SiteDefaultsType::setBrandMPNIdentifierEnabled()
     * @uses SiteDefaultsType::setClassifiedAdAutoAcceptEnabled()
     * @uses SiteDefaultsType::setBestOfferAutoAcceptEnabled()
     * @uses SiteDefaultsType::setCrossBorderTradeNorthAmericaEnabled()
     * @uses SiteDefaultsType::setCrossBorderTradeGBEnabled()
     * @uses SiteDefaultsType::setCrossBorderTradeAustraliaEnabled()
     * @uses SiteDefaultsType::setPayPalBuyerProtectionEnabled()
     * @uses SiteDefaultsType::setBuyerGuaranteeEnabled()
     * @uses SiteDefaultsType::setINEscrowWorkflowTimeline()
     * @uses SiteDefaultsType::setCombinedFixedPriceTreatmentEnabled()
     * @uses SiteDefaultsType::setGalleryFeaturedDurations()
     * @uses SiteDefaultsType::setPayPalRequired()
     * @uses SiteDefaultsType::setEBayMotorsProAdFormatEnabled()
     * @uses SiteDefaultsType::setEBayMotorsProContactByPhoneEnabled()
     * @uses SiteDefaultsType::setEBayMotorsProPhoneCount()
     * @uses SiteDefaultsType::setEBayMotorsProContactByAddressEnabled()
     * @uses SiteDefaultsType::setEBayMotorsProStreetCount()
     * @uses SiteDefaultsType::setEBayMotorsProCompanyNameEnabled()
     * @uses SiteDefaultsType::setEBayMotorsProContactByEmailEnabled()
     * @uses SiteDefaultsType::setEBayMotorsProBestOfferEnabled()
     * @uses SiteDefaultsType::setEBayMotorsProAutoAcceptEnabled()
     * @uses SiteDefaultsType::setEBayMotorsProAutoDeclineEnabled()
     * @uses SiteDefaultsType::setEBayMotorsProPaymentMethodCheckOutEnabled()
     * @uses SiteDefaultsType::setEBayMotorsProShippingMethodEnabled()
     * @uses SiteDefaultsType::setEBayMotorsProCounterOfferEnabled()
     * @uses SiteDefaultsType::setEBayMotorsProSellerContactDetailsEnabled()
     * @uses SiteDefaultsType::setLocalMarketAdFormatEnabled()
     * @uses SiteDefaultsType::setLocalMarketContactByPhoneEnabled()
     * @uses SiteDefaultsType::setLocalMarketPhoneCount()
     * @uses SiteDefaultsType::setLocalMarketContactByAddressEnabled()
     * @uses SiteDefaultsType::setLocalMarketStreetCount()
     * @uses SiteDefaultsType::setLocalMarketCompanyNameEnabled()
     * @uses SiteDefaultsType::setLocalMarketContactByEmailEnabled()
     * @uses SiteDefaultsType::setLocalMarketBestOfferEnabled()
     * @uses SiteDefaultsType::setLocalMarketAutoAcceptEnabled()
     * @uses SiteDefaultsType::setLocalMarketAutoDeclineEnabled()
     * @uses SiteDefaultsType::setLocalMarketPaymentMethodCheckOutEnabled()
     * @uses SiteDefaultsType::setLocalMarketShippingMethodEnabled()
     * @uses SiteDefaultsType::setLocalMarketCounterOfferEnabled()
     * @uses SiteDefaultsType::setLocalMarketSellerContactDetailsEnabled()
     * @uses SiteDefaultsType::setClassifiedAdPhoneCount()
     * @uses SiteDefaultsType::setClassifiedAdContactByAddressEnabled()
     * @uses SiteDefaultsType::setClassifiedAdStreetCount()
     * @uses SiteDefaultsType::setClassifiedAdCompanyNameEnabled()
     * @uses SiteDefaultsType::setSpecialitySubscription()
     * @uses SiteDefaultsType::setRegularSubscription()
     * @uses SiteDefaultsType::setPremiumSubscription()
     * @uses SiteDefaultsType::setNonSubscription()
     * @uses SiteDefaultsType::setPayPalRequiredForStoreOwner()
     * @uses SiteDefaultsType::setReviseQuantityAllowed()
     * @uses SiteDefaultsType::setRevisePriceAllowed()
     * @uses SiteDefaultsType::setStoreOwnerExtendedListingDurationsEnabled()
     * @uses SiteDefaultsType::setStoreOwnerExtendedListingDurations()
     * @uses SiteDefaultsType::setReturnPolicyEnabled()
     * @uses SiteDefaultsType::setHandlingTimeEnabled()
     * @uses SiteDefaultsType::setMaxFlatShippingCost()
     * @uses SiteDefaultsType::setMaxFlatShippingCostCBTExempt()
     * @uses SiteDefaultsType::setGroup1MaxFlatShippingCost()
     * @uses SiteDefaultsType::setGroup2MaxFlatShippingCost()
     * @uses SiteDefaultsType::setGroup3MaxFlatShippingCost()
     * @uses SiteDefaultsType::setPaymentMethod()
     * @uses SiteDefaultsType::setVariationsEnabled()
     * @uses SiteDefaultsType::setAttributeConversionEnabled()
     * @uses SiteDefaultsType::setFreeGalleryPlusEnabled()
     * @uses SiteDefaultsType::setFreePicturePackEnabled()
     * @uses SiteDefaultsType::setItemCompatibilityEnabled()
     * @uses SiteDefaultsType::setMinItemCompatibility()
     * @uses SiteDefaultsType::setMaxItemCompatibility()
     * @uses SiteDefaultsType::setConditionEnabled()
     * @uses SiteDefaultsType::setConditionValues()
     * @uses SiteDefaultsType::setSpecialFeatures()
     * @uses SiteDefaultsType::setValueCategory()
     * @uses SiteDefaultsType::setProductCreationEnabled()
     * @uses SiteDefaultsType::setEANEnabled()
     * @uses SiteDefaultsType::setISBNEnabled()
     * @uses SiteDefaultsType::setUPCEnabled()
     * @uses SiteDefaultsType::setMaxGranularFitmentCount()
     * @uses SiteDefaultsType::setCompatibleVehicleType()
     * @uses SiteDefaultsType::setPaymentOptionsGroup()
     * @uses SiteDefaultsType::setShippingProfileCategoryGroup()
     * @uses SiteDefaultsType::setPaymentProfileCategoryGroup()
     * @uses SiteDefaultsType::setReturnPolicyProfileCategoryGroup()
     * @uses SiteDefaultsType::setVINSupported()
     * @uses SiteDefaultsType::setVRMSupported()
     * @uses SiteDefaultsType::setSellerProvidedTitleSupported()
     * @uses SiteDefaultsType::setDepositSupported()
     * @uses SiteDefaultsType::setGlobalShippingEnabled()
     * @uses SiteDefaultsType::setAdditionalCompatibilityEnabled()
     * @uses SiteDefaultsType::setPickupDropOffEnabled()
     * @uses SiteDefaultsType::setDigitalGoodDeliveryEnabled()
     * @uses SiteDefaultsType::setEpidSupported()
     * @uses SiteDefaultsType::setKTypeSupported()
     * @uses SiteDefaultsType::setProductRequiredEnabled()
     * @uses SiteDefaultsType::setDomesticReturnsAcceptedValues()
     * @uses SiteDefaultsType::setInternationalReturnsAcceptedValues()
     * @uses SiteDefaultsType::setDomesticReturnsDurationValues()
     * @uses SiteDefaultsType::setInternationalReturnsDurationValues()
     * @uses SiteDefaultsType::setDomesticReturnsShipmentPayeeValues()
     * @uses SiteDefaultsType::setInternationalReturnsShipmentPayeeValues()
     * @uses SiteDefaultsType::setDomesticRefundMethodValues()
     * @uses SiteDefaultsType::setInternationalRefundMethodValues()
     * @uses SiteDefaultsType::setReturnPolicyDescriptionEnabled()
     * @uses SiteDefaultsType::setAny()
     * @param \StructType\ListingDurationReferenceType[] $listingDuration
     * @param bool $shippingTermsRequired
     * @param bool $bestOfferEnabled
     * @param bool $dutchBINEnabled
     * @param bool $userConsentRequired
     * @param bool $homePageFeaturedEnabled
     * @param bool $proPackEnabled
     * @param bool $basicUpgradePackEnabled
     * @param bool $valuePackEnabled
     * @param bool $proPackPlusEnabled
     * @param string $adFormatEnabled
     * @param bool $bestOfferCounterEnabled
     * @param bool $bestOfferAutoDeclineEnabled
     * @param bool $localMarketSpecialitySubscription
     * @param bool $localMarketRegularSubscription
     * @param bool $localMarketPremiumSubscription
     * @param bool $localMarketNonSubscription
     * @param bool $expressEnabled
     * @param bool $expressPicturesRequired
     * @param bool $expressConditionRequired
     * @param float $minimumReservePrice
     * @param bool $sellerContactDetailsEnabled
     * @param bool $transactionConfirmationRequestEnabled
     * @param bool $storeInventoryEnabled
     * @param bool $skypeMeTransactionalEnabled
     * @param bool $skypeMeNonTransactionalEnabled
     * @param string $localListingDistancesRegular
     * @param string $localListingDistancesSpecialty
     * @param string $localListingDistancesNonSubscription
     * @param string $classifiedAdPaymentMethodEnabled
     * @param bool $classifiedAdShippingMethodEnabled
     * @param string $classifiedAdBestOfferEnabled
     * @param bool $classifiedAdCounterOfferEnabled
     * @param bool $classifiedAdAutoDeclineEnabled
     * @param bool $classifiedAdContactByPhoneEnabled
     * @param bool $classifiedAdContactByEmailEnabled
     * @param bool $safePaymentRequired
     * @param bool $classifiedAdPayPerLeadEnabled
     * @param string $itemSpecificsEnabled
     * @param bool $paisaPayFullEscrowEnabled
     * @param bool $iSBNIdentifierEnabled
     * @param bool $uPCIdentifierEnabled
     * @param bool $eANIdentifierEnabled
     * @param bool $brandMPNIdentifierEnabled
     * @param bool $classifiedAdAutoAcceptEnabled
     * @param bool $bestOfferAutoAcceptEnabled
     * @param bool $crossBorderTradeNorthAmericaEnabled
     * @param bool $crossBorderTradeGBEnabled
     * @param bool $crossBorderTradeAustraliaEnabled
     * @param bool $payPalBuyerProtectionEnabled
     * @param bool $buyerGuaranteeEnabled
     * @param string $iNEscrowWorkflowTimeline
     * @param bool $combinedFixedPriceTreatmentEnabled
     * @param \StructType\ListingEnhancementDurationReferenceType $galleryFeaturedDurations
     * @param bool $payPalRequired
     * @param string $eBayMotorsProAdFormatEnabled
     * @param bool $eBayMotorsProContactByPhoneEnabled
     * @param int $eBayMotorsProPhoneCount
     * @param bool $eBayMotorsProContactByAddressEnabled
     * @param int $eBayMotorsProStreetCount
     * @param bool $eBayMotorsProCompanyNameEnabled
     * @param bool $eBayMotorsProContactByEmailEnabled
     * @param string $eBayMotorsProBestOfferEnabled
     * @param bool $eBayMotorsProAutoAcceptEnabled
     * @param bool $eBayMotorsProAutoDeclineEnabled
     * @param string $eBayMotorsProPaymentMethodCheckOutEnabled
     * @param bool $eBayMotorsProShippingMethodEnabled
     * @param bool $eBayMotorsProCounterOfferEnabled
     * @param bool $eBayMotorsProSellerContactDetailsEnabled
     * @param string $localMarketAdFormatEnabled
     * @param bool $localMarketContactByPhoneEnabled
     * @param int $localMarketPhoneCount
     * @param bool $localMarketContactByAddressEnabled
     * @param int $localMarketStreetCount
     * @param bool $localMarketCompanyNameEnabled
     * @param bool $localMarketContactByEmailEnabled
     * @param string $localMarketBestOfferEnabled
     * @param bool $localMarketAutoAcceptEnabled
     * @param bool $localMarketAutoDeclineEnabled
     * @param string $localMarketPaymentMethodCheckOutEnabled
     * @param bool $localMarketShippingMethodEnabled
     * @param bool $localMarketCounterOfferEnabled
     * @param bool $localMarketSellerContactDetailsEnabled
     * @param int $classifiedAdPhoneCount
     * @param bool $classifiedAdContactByAddressEnabled
     * @param int $classifiedAdStreetCount
     * @param bool $classifiedAdCompanyNameEnabled
     * @param string $specialitySubscription
     * @param string $regularSubscription
     * @param string $premiumSubscription
     * @param string $nonSubscription
     * @param bool $payPalRequiredForStoreOwner
     * @param bool $reviseQuantityAllowed
     * @param bool $revisePriceAllowed
     * @param bool $storeOwnerExtendedListingDurationsEnabled
     * @param \StructType\StoreOwnerExtendedListingDurationsType $storeOwnerExtendedListingDurations
     * @param bool $returnPolicyEnabled
     * @param bool $handlingTimeEnabled
     * @param \StructType\AmountType $maxFlatShippingCost
     * @param bool $maxFlatShippingCostCBTExempt
     * @param \StructType\AmountType $group1MaxFlatShippingCost
     * @param \StructType\AmountType $group2MaxFlatShippingCost
     * @param \StructType\AmountType $group3MaxFlatShippingCost
     * @param string[] $paymentMethod
     * @param bool $variationsEnabled
     * @param string $attributeConversionEnabled
     * @param bool $freeGalleryPlusEnabled
     * @param bool $freePicturePackEnabled
     * @param string $itemCompatibilityEnabled
     * @param int $minItemCompatibility
     * @param int $maxItemCompatibility
     * @param string $conditionEnabled
     * @param \StructType\ConditionValuesType $conditionValues
     * @param \StructType\ConditionValuesType $specialFeatures
     * @param bool $valueCategory
     * @param string $productCreationEnabled
     * @param string $eANEnabled
     * @param string $iSBNEnabled
     * @param string $uPCEnabled
     * @param int $maxGranularFitmentCount
     * @param string $compatibleVehicleType
     * @param string $paymentOptionsGroup
     * @param string $shippingProfileCategoryGroup
     * @param string $paymentProfileCategoryGroup
     * @param string $returnPolicyProfileCategoryGroup
     * @param bool $vINSupported
     * @param bool $vRMSupported
     * @param bool $sellerProvidedTitleSupported
     * @param bool $depositSupported
     * @param bool $globalShippingEnabled
     * @param bool $additionalCompatibilityEnabled
     * @param bool $pickupDropOffEnabled
     * @param bool $digitalGoodDeliveryEnabled
     * @param bool $epidSupported
     * @param bool $kTypeSupported
     * @param string $productRequiredEnabled
     * @param \StructType\DomesticReturnsAcceptedCodeType $domesticReturnsAcceptedValues
     * @param \StructType\InternationalReturnsAcceptedCodeType $internationalReturnsAcceptedValues
     * @param \StructType\DomesticReturnsDurationCodeType $domesticReturnsDurationValues
     * @param \StructType\InternationalReturnsDurationCodeType $internationalReturnsDurationValues
     * @param \StructType\DomesticReturnsShipmentPayeeCodeType $domesticReturnsShipmentPayeeValues
     * @param \StructType\InternationalReturnsShipmentPayeeCodeType $internationalReturnsShipmentPayeeValues
     * @param \StructType\DomesticRefundMethodCodeType $domesticRefundMethodValues
     * @param \StructType\InternationalRefundMethodCodeType $internationalRefundMethodValues
     * @param bool $returnPolicyDescriptionEnabled
     * @param \DOMDocument $any
     */
    public function __construct(array $listingDuration = array(), $shippingTermsRequired = null, $bestOfferEnabled = null, $dutchBINEnabled = null, $userConsentRequired = null, $homePageFeaturedEnabled = null, $proPackEnabled = null, $basicUpgradePackEnabled = null, $valuePackEnabled = null, $proPackPlusEnabled = null, $adFormatEnabled = null, $bestOfferCounterEnabled = null, $bestOfferAutoDeclineEnabled = null, $localMarketSpecialitySubscription = null, $localMarketRegularSubscription = null, $localMarketPremiumSubscription = null, $localMarketNonSubscription = null, $expressEnabled = null, $expressPicturesRequired = null, $expressConditionRequired = null, $minimumReservePrice = null, $sellerContactDetailsEnabled = null, $transactionConfirmationRequestEnabled = null, $storeInventoryEnabled = null, $skypeMeTransactionalEnabled = null, $skypeMeNonTransactionalEnabled = null, $localListingDistancesRegular = null, $localListingDistancesSpecialty = null, $localListingDistancesNonSubscription = null, $classifiedAdPaymentMethodEnabled = null, $classifiedAdShippingMethodEnabled = null, $classifiedAdBestOfferEnabled = null, $classifiedAdCounterOfferEnabled = null, $classifiedAdAutoDeclineEnabled = null, $classifiedAdContactByPhoneEnabled = null, $classifiedAdContactByEmailEnabled = null, $safePaymentRequired = null, $classifiedAdPayPerLeadEnabled = null, $itemSpecificsEnabled = null, $paisaPayFullEscrowEnabled = null, $iSBNIdentifierEnabled = null, $uPCIdentifierEnabled = null, $eANIdentifierEnabled = null, $brandMPNIdentifierEnabled = null, $classifiedAdAutoAcceptEnabled = null, $bestOfferAutoAcceptEnabled = null, $crossBorderTradeNorthAmericaEnabled = null, $crossBorderTradeGBEnabled = null, $crossBorderTradeAustraliaEnabled = null, $payPalBuyerProtectionEnabled = null, $buyerGuaranteeEnabled = null, $iNEscrowWorkflowTimeline = null, $combinedFixedPriceTreatmentEnabled = null, \StructType\ListingEnhancementDurationReferenceType $galleryFeaturedDurations = null, $payPalRequired = null, $eBayMotorsProAdFormatEnabled = null, $eBayMotorsProContactByPhoneEnabled = null, $eBayMotorsProPhoneCount = null, $eBayMotorsProContactByAddressEnabled = null, $eBayMotorsProStreetCount = null, $eBayMotorsProCompanyNameEnabled = null, $eBayMotorsProContactByEmailEnabled = null, $eBayMotorsProBestOfferEnabled = null, $eBayMotorsProAutoAcceptEnabled = null, $eBayMotorsProAutoDeclineEnabled = null, $eBayMotorsProPaymentMethodCheckOutEnabled = null, $eBayMotorsProShippingMethodEnabled = null, $eBayMotorsProCounterOfferEnabled = null, $eBayMotorsProSellerContactDetailsEnabled = null, $localMarketAdFormatEnabled = null, $localMarketContactByPhoneEnabled = null, $localMarketPhoneCount = null, $localMarketContactByAddressEnabled = null, $localMarketStreetCount = null, $localMarketCompanyNameEnabled = null, $localMarketContactByEmailEnabled = null, $localMarketBestOfferEnabled = null, $localMarketAutoAcceptEnabled = null, $localMarketAutoDeclineEnabled = null, $localMarketPaymentMethodCheckOutEnabled = null, $localMarketShippingMethodEnabled = null, $localMarketCounterOfferEnabled = null, $localMarketSellerContactDetailsEnabled = null, $classifiedAdPhoneCount = null, $classifiedAdContactByAddressEnabled = null, $classifiedAdStreetCount = null, $classifiedAdCompanyNameEnabled = null, $specialitySubscription = null, $regularSubscription = null, $premiumSubscription = null, $nonSubscription = null, $payPalRequiredForStoreOwner = null, $reviseQuantityAllowed = null, $revisePriceAllowed = null, $storeOwnerExtendedListingDurationsEnabled = null, \StructType\StoreOwnerExtendedListingDurationsType $storeOwnerExtendedListingDurations = null, $returnPolicyEnabled = null, $handlingTimeEnabled = null, \StructType\AmountType $maxFlatShippingCost = null, $maxFlatShippingCostCBTExempt = null, \StructType\AmountType $group1MaxFlatShippingCost = null, \StructType\AmountType $group2MaxFlatShippingCost = null, \StructType\AmountType $group3MaxFlatShippingCost = null, array $paymentMethod = array(), $variationsEnabled = null, $attributeConversionEnabled = null, $freeGalleryPlusEnabled = null, $freePicturePackEnabled = null, $itemCompatibilityEnabled = null, $minItemCompatibility = null, $maxItemCompatibility = null, $conditionEnabled = null, \StructType\ConditionValuesType $conditionValues = null, \StructType\ConditionValuesType $specialFeatures = null, $valueCategory = null, $productCreationEnabled = null, $eANEnabled = null, $iSBNEnabled = null, $uPCEnabled = null, $maxGranularFitmentCount = null, $compatibleVehicleType = null, $paymentOptionsGroup = null, $shippingProfileCategoryGroup = null, $paymentProfileCategoryGroup = null, $returnPolicyProfileCategoryGroup = null, $vINSupported = null, $vRMSupported = null, $sellerProvidedTitleSupported = null, $depositSupported = null, $globalShippingEnabled = null, $additionalCompatibilityEnabled = null, $pickupDropOffEnabled = null, $digitalGoodDeliveryEnabled = null, $epidSupported = null, $kTypeSupported = null, $productRequiredEnabled = null, \StructType\DomesticReturnsAcceptedCodeType $domesticReturnsAcceptedValues = null, \StructType\InternationalReturnsAcceptedCodeType $internationalReturnsAcceptedValues = null, \StructType\DomesticReturnsDurationCodeType $domesticReturnsDurationValues = null, \StructType\InternationalReturnsDurationCodeType $internationalReturnsDurationValues = null, \StructType\DomesticReturnsShipmentPayeeCodeType $domesticReturnsShipmentPayeeValues = null, \StructType\InternationalReturnsShipmentPayeeCodeType $internationalReturnsShipmentPayeeValues = null, \StructType\DomesticRefundMethodCodeType $domesticRefundMethodValues = null, \StructType\InternationalRefundMethodCodeType $internationalRefundMethodValues = null, $returnPolicyDescriptionEnabled = null, \DOMDocument $any = null)
    {
        $this
            ->setListingDuration($listingDuration)
            ->setShippingTermsRequired($shippingTermsRequired)
            ->setBestOfferEnabled($bestOfferEnabled)
            ->setDutchBINEnabled($dutchBINEnabled)
            ->setUserConsentRequired($userConsentRequired)
            ->setHomePageFeaturedEnabled($homePageFeaturedEnabled)
            ->setProPackEnabled($proPackEnabled)
            ->setBasicUpgradePackEnabled($basicUpgradePackEnabled)
            ->setValuePackEnabled($valuePackEnabled)
            ->setProPackPlusEnabled($proPackPlusEnabled)
            ->setAdFormatEnabled($adFormatEnabled)
            ->setBestOfferCounterEnabled($bestOfferCounterEnabled)
            ->setBestOfferAutoDeclineEnabled($bestOfferAutoDeclineEnabled)
            ->setLocalMarketSpecialitySubscription($localMarketSpecialitySubscription)
            ->setLocalMarketRegularSubscription($localMarketRegularSubscription)
            ->setLocalMarketPremiumSubscription($localMarketPremiumSubscription)
            ->setLocalMarketNonSubscription($localMarketNonSubscription)
            ->setExpressEnabled($expressEnabled)
            ->setExpressPicturesRequired($expressPicturesRequired)
            ->setExpressConditionRequired($expressConditionRequired)
            ->setMinimumReservePrice($minimumReservePrice)
            ->setSellerContactDetailsEnabled($sellerContactDetailsEnabled)
            ->setTransactionConfirmationRequestEnabled($transactionConfirmationRequestEnabled)
            ->setStoreInventoryEnabled($storeInventoryEnabled)
            ->setSkypeMeTransactionalEnabled($skypeMeTransactionalEnabled)
            ->setSkypeMeNonTransactionalEnabled($skypeMeNonTransactionalEnabled)
            ->setLocalListingDistancesRegular($localListingDistancesRegular)
            ->setLocalListingDistancesSpecialty($localListingDistancesSpecialty)
            ->setLocalListingDistancesNonSubscription($localListingDistancesNonSubscription)
            ->setClassifiedAdPaymentMethodEnabled($classifiedAdPaymentMethodEnabled)
            ->setClassifiedAdShippingMethodEnabled($classifiedAdShippingMethodEnabled)
            ->setClassifiedAdBestOfferEnabled($classifiedAdBestOfferEnabled)
            ->setClassifiedAdCounterOfferEnabled($classifiedAdCounterOfferEnabled)
            ->setClassifiedAdAutoDeclineEnabled($classifiedAdAutoDeclineEnabled)
            ->setClassifiedAdContactByPhoneEnabled($classifiedAdContactByPhoneEnabled)
            ->setClassifiedAdContactByEmailEnabled($classifiedAdContactByEmailEnabled)
            ->setSafePaymentRequired($safePaymentRequired)
            ->setClassifiedAdPayPerLeadEnabled($classifiedAdPayPerLeadEnabled)
            ->setItemSpecificsEnabled($itemSpecificsEnabled)
            ->setPaisaPayFullEscrowEnabled($paisaPayFullEscrowEnabled)
            ->setISBNIdentifierEnabled($iSBNIdentifierEnabled)
            ->setUPCIdentifierEnabled($uPCIdentifierEnabled)
            ->setEANIdentifierEnabled($eANIdentifierEnabled)
            ->setBrandMPNIdentifierEnabled($brandMPNIdentifierEnabled)
            ->setClassifiedAdAutoAcceptEnabled($classifiedAdAutoAcceptEnabled)
            ->setBestOfferAutoAcceptEnabled($bestOfferAutoAcceptEnabled)
            ->setCrossBorderTradeNorthAmericaEnabled($crossBorderTradeNorthAmericaEnabled)
            ->setCrossBorderTradeGBEnabled($crossBorderTradeGBEnabled)
            ->setCrossBorderTradeAustraliaEnabled($crossBorderTradeAustraliaEnabled)
            ->setPayPalBuyerProtectionEnabled($payPalBuyerProtectionEnabled)
            ->setBuyerGuaranteeEnabled($buyerGuaranteeEnabled)
            ->setINEscrowWorkflowTimeline($iNEscrowWorkflowTimeline)
            ->setCombinedFixedPriceTreatmentEnabled($combinedFixedPriceTreatmentEnabled)
            ->setGalleryFeaturedDurations($galleryFeaturedDurations)
            ->setPayPalRequired($payPalRequired)
            ->setEBayMotorsProAdFormatEnabled($eBayMotorsProAdFormatEnabled)
            ->setEBayMotorsProContactByPhoneEnabled($eBayMotorsProContactByPhoneEnabled)
            ->setEBayMotorsProPhoneCount($eBayMotorsProPhoneCount)
            ->setEBayMotorsProContactByAddressEnabled($eBayMotorsProContactByAddressEnabled)
            ->setEBayMotorsProStreetCount($eBayMotorsProStreetCount)
            ->setEBayMotorsProCompanyNameEnabled($eBayMotorsProCompanyNameEnabled)
            ->setEBayMotorsProContactByEmailEnabled($eBayMotorsProContactByEmailEnabled)
            ->setEBayMotorsProBestOfferEnabled($eBayMotorsProBestOfferEnabled)
            ->setEBayMotorsProAutoAcceptEnabled($eBayMotorsProAutoAcceptEnabled)
            ->setEBayMotorsProAutoDeclineEnabled($eBayMotorsProAutoDeclineEnabled)
            ->setEBayMotorsProPaymentMethodCheckOutEnabled($eBayMotorsProPaymentMethodCheckOutEnabled)
            ->setEBayMotorsProShippingMethodEnabled($eBayMotorsProShippingMethodEnabled)
            ->setEBayMotorsProCounterOfferEnabled($eBayMotorsProCounterOfferEnabled)
            ->setEBayMotorsProSellerContactDetailsEnabled($eBayMotorsProSellerContactDetailsEnabled)
            ->setLocalMarketAdFormatEnabled($localMarketAdFormatEnabled)
            ->setLocalMarketContactByPhoneEnabled($localMarketContactByPhoneEnabled)
            ->setLocalMarketPhoneCount($localMarketPhoneCount)
            ->setLocalMarketContactByAddressEnabled($localMarketContactByAddressEnabled)
            ->setLocalMarketStreetCount($localMarketStreetCount)
            ->setLocalMarketCompanyNameEnabled($localMarketCompanyNameEnabled)
            ->setLocalMarketContactByEmailEnabled($localMarketContactByEmailEnabled)
            ->setLocalMarketBestOfferEnabled($localMarketBestOfferEnabled)
            ->setLocalMarketAutoAcceptEnabled($localMarketAutoAcceptEnabled)
            ->setLocalMarketAutoDeclineEnabled($localMarketAutoDeclineEnabled)
            ->setLocalMarketPaymentMethodCheckOutEnabled($localMarketPaymentMethodCheckOutEnabled)
            ->setLocalMarketShippingMethodEnabled($localMarketShippingMethodEnabled)
            ->setLocalMarketCounterOfferEnabled($localMarketCounterOfferEnabled)
            ->setLocalMarketSellerContactDetailsEnabled($localMarketSellerContactDetailsEnabled)
            ->setClassifiedAdPhoneCount($classifiedAdPhoneCount)
            ->setClassifiedAdContactByAddressEnabled($classifiedAdContactByAddressEnabled)
            ->setClassifiedAdStreetCount($classifiedAdStreetCount)
            ->setClassifiedAdCompanyNameEnabled($classifiedAdCompanyNameEnabled)
            ->setSpecialitySubscription($specialitySubscription)
            ->setRegularSubscription($regularSubscription)
            ->setPremiumSubscription($premiumSubscription)
            ->setNonSubscription($nonSubscription)
            ->setPayPalRequiredForStoreOwner($payPalRequiredForStoreOwner)
            ->setReviseQuantityAllowed($reviseQuantityAllowed)
            ->setRevisePriceAllowed($revisePriceAllowed)
            ->setStoreOwnerExtendedListingDurationsEnabled($storeOwnerExtendedListingDurationsEnabled)
            ->setStoreOwnerExtendedListingDurations($storeOwnerExtendedListingDurations)
            ->setReturnPolicyEnabled($returnPolicyEnabled)
            ->setHandlingTimeEnabled($handlingTimeEnabled)
            ->setMaxFlatShippingCost($maxFlatShippingCost)
            ->setMaxFlatShippingCostCBTExempt($maxFlatShippingCostCBTExempt)
            ->setGroup1MaxFlatShippingCost($group1MaxFlatShippingCost)
            ->setGroup2MaxFlatShippingCost($group2MaxFlatShippingCost)
            ->setGroup3MaxFlatShippingCost($group3MaxFlatShippingCost)
            ->setPaymentMethod($paymentMethod)
            ->setVariationsEnabled($variationsEnabled)
            ->setAttributeConversionEnabled($attributeConversionEnabled)
            ->setFreeGalleryPlusEnabled($freeGalleryPlusEnabled)
            ->setFreePicturePackEnabled($freePicturePackEnabled)
            ->setItemCompatibilityEnabled($itemCompatibilityEnabled)
            ->setMinItemCompatibility($minItemCompatibility)
            ->setMaxItemCompatibility($maxItemCompatibility)
            ->setConditionEnabled($conditionEnabled)
            ->setConditionValues($conditionValues)
            ->setSpecialFeatures($specialFeatures)
            ->setValueCategory($valueCategory)
            ->setProductCreationEnabled($productCreationEnabled)
            ->setEANEnabled($eANEnabled)
            ->setISBNEnabled($iSBNEnabled)
            ->setUPCEnabled($uPCEnabled)
            ->setMaxGranularFitmentCount($maxGranularFitmentCount)
            ->setCompatibleVehicleType($compatibleVehicleType)
            ->setPaymentOptionsGroup($paymentOptionsGroup)
            ->setShippingProfileCategoryGroup($shippingProfileCategoryGroup)
            ->setPaymentProfileCategoryGroup($paymentProfileCategoryGroup)
            ->setReturnPolicyProfileCategoryGroup($returnPolicyProfileCategoryGroup)
            ->setVINSupported($vINSupported)
            ->setVRMSupported($vRMSupported)
            ->setSellerProvidedTitleSupported($sellerProvidedTitleSupported)
            ->setDepositSupported($depositSupported)
            ->setGlobalShippingEnabled($globalShippingEnabled)
            ->setAdditionalCompatibilityEnabled($additionalCompatibilityEnabled)
            ->setPickupDropOffEnabled($pickupDropOffEnabled)
            ->setDigitalGoodDeliveryEnabled($digitalGoodDeliveryEnabled)
            ->setEpidSupported($epidSupported)
            ->setKTypeSupported($kTypeSupported)
            ->setProductRequiredEnabled($productRequiredEnabled)
            ->setDomesticReturnsAcceptedValues($domesticReturnsAcceptedValues)
            ->setInternationalReturnsAcceptedValues($internationalReturnsAcceptedValues)
            ->setDomesticReturnsDurationValues($domesticReturnsDurationValues)
            ->setInternationalReturnsDurationValues($internationalReturnsDurationValues)
            ->setDomesticReturnsShipmentPayeeValues($domesticReturnsShipmentPayeeValues)
            ->setInternationalReturnsShipmentPayeeValues($internationalReturnsShipmentPayeeValues)
            ->setDomesticRefundMethodValues($domesticRefundMethodValues)
            ->setInternationalRefundMethodValues($internationalRefundMethodValues)
            ->setReturnPolicyDescriptionEnabled($returnPolicyDescriptionEnabled)
            ->setAny($any);
    }
    /**
     * Get ListingDuration value
     * @return \StructType\ListingDurationReferenceType[]|null
     */
    public function getListingDuration()
    {
        return $this->ListingDuration;
    }
    /**
     * This method is responsible for validating the values passed to the setListingDuration method
     * This method is willingly generated in order to preserve the one-line inline validation within the setListingDuration method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateListingDurationForArrayConstraintsFromSetListingDuration(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $siteDefaultsTypeListingDurationItem) {
            // validation for constraint: itemType
            if (!$siteDefaultsTypeListingDurationItem instanceof \StructType\ListingDurationReferenceType) {
                $invalidValues[] = is_object($siteDefaultsTypeListingDurationItem) ? get_class($siteDefaultsTypeListingDurationItem) : sprintf('%s(%s)', gettype($siteDefaultsTypeListingDurationItem), var_export($siteDefaultsTypeListingDurationItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ListingDuration property can only contain items of type \StructType\ListingDurationReferenceType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set ListingDuration value
     * @throws \InvalidArgumentException
     * @param \StructType\ListingDurationReferenceType[] $listingDuration
     * @return \StructType\SiteDefaultsType
     */
    public function setListingDuration(array $listingDuration = array())
    {
        // validation for constraint: array
        if ('' !== ($listingDurationArrayErrorMessage = self::validateListingDurationForArrayConstraintsFromSetListingDuration($listingDuration))) {
            throw new \InvalidArgumentException($listingDurationArrayErrorMessage, __LINE__);
        }
        $this->ListingDuration = $listingDuration;
        return $this;
    }
    /**
     * Add item to ListingDuration value
     * @throws \InvalidArgumentException
     * @param \StructType\ListingDurationReferenceType $item
     * @return \StructType\SiteDefaultsType
     */
    public function addToListingDuration(\StructType\ListingDurationReferenceType $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ListingDurationReferenceType) {
            throw new \InvalidArgumentException(sprintf('The ListingDuration property can only contain items of type \StructType\ListingDurationReferenceType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->ListingDuration[] = $item;
        return $this;
    }
    /**
     * Get ShippingTermsRequired value
     * @return bool|null
     */
    public function getShippingTermsRequired()
    {
        return $this->ShippingTermsRequired;
    }
    /**
     * Set ShippingTermsRequired value
     * @param bool $shippingTermsRequired
     * @return \StructType\SiteDefaultsType
     */
    public function setShippingTermsRequired($shippingTermsRequired = null)
    {
        // validation for constraint: boolean
        if (!is_null($shippingTermsRequired) && !is_bool($shippingTermsRequired)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($shippingTermsRequired, true), gettype($shippingTermsRequired)), __LINE__);
        }
        $this->ShippingTermsRequired = $shippingTermsRequired;
        return $this;
    }
    /**
     * Get BestOfferEnabled value
     * @return bool|null
     */
    public function getBestOfferEnabled()
    {
        return $this->BestOfferEnabled;
    }
    /**
     * Set BestOfferEnabled value
     * @param bool $bestOfferEnabled
     * @return \StructType\SiteDefaultsType
     */
    public function setBestOfferEnabled($bestOfferEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($bestOfferEnabled) && !is_bool($bestOfferEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($bestOfferEnabled, true), gettype($bestOfferEnabled)), __LINE__);
        }
        $this->BestOfferEnabled = $bestOfferEnabled;
        return $this;
    }
    /**
     * Get DutchBINEnabled value
     * @return bool|null
     */
    public function getDutchBINEnabled()
    {
        return $this->DutchBINEnabled;
    }
    /**
     * Set DutchBINEnabled value
     * @param bool $dutchBINEnabled
     * @return \StructType\SiteDefaultsType
     */
    public function setDutchBINEnabled($dutchBINEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($dutchBINEnabled) && !is_bool($dutchBINEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($dutchBINEnabled, true), gettype($dutchBINEnabled)), __LINE__);
        }
        $this->DutchBINEnabled = $dutchBINEnabled;
        return $this;
    }
    /**
     * Get UserConsentRequired value
     * @return bool|null
     */
    public function getUserConsentRequired()
    {
        return $this->UserConsentRequired;
    }
    /**
     * Set UserConsentRequired value
     * @param bool $userConsentRequired
     * @return \StructType\SiteDefaultsType
     */
    public function setUserConsentRequired($userConsentRequired = null)
    {
        // validation for constraint: boolean
        if (!is_null($userConsentRequired) && !is_bool($userConsentRequired)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($userConsentRequired, true), gettype($userConsentRequired)), __LINE__);
        }
        $this->UserConsentRequired = $userConsentRequired;
        return $this;
    }
    /**
     * Get HomePageFeaturedEnabled value
     * @return bool|null
     */
    public function getHomePageFeaturedEnabled()
    {
        return $this->HomePageFeaturedEnabled;
    }
    /**
     * Set HomePageFeaturedEnabled value
     * @param bool $homePageFeaturedEnabled
     * @return \StructType\SiteDefaultsType
     */
    public function setHomePageFeaturedEnabled($homePageFeaturedEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($homePageFeaturedEnabled) && !is_bool($homePageFeaturedEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($homePageFeaturedEnabled, true), gettype($homePageFeaturedEnabled)), __LINE__);
        }
        $this->HomePageFeaturedEnabled = $homePageFeaturedEnabled;
        return $this;
    }
    /**
     * Get ProPackEnabled value
     * @return bool|null
     */
    public function getProPackEnabled()
    {
        return $this->ProPackEnabled;
    }
    /**
     * Set ProPackEnabled value
     * @param bool $proPackEnabled
     * @return \StructType\SiteDefaultsType
     */
    public function setProPackEnabled($proPackEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($proPackEnabled) && !is_bool($proPackEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($proPackEnabled, true), gettype($proPackEnabled)), __LINE__);
        }
        $this->ProPackEnabled = $proPackEnabled;
        return $this;
    }
    /**
     * Get BasicUpgradePackEnabled value
     * @return bool|null
     */
    public function getBasicUpgradePackEnabled()
    {
        return $this->BasicUpgradePackEnabled;
    }
    /**
     * Set BasicUpgradePackEnabled value
     * @param bool $basicUpgradePackEnabled
     * @return \StructType\SiteDefaultsType
     */
    public function setBasicUpgradePackEnabled($basicUpgradePackEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($basicUpgradePackEnabled) && !is_bool($basicUpgradePackEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($basicUpgradePackEnabled, true), gettype($basicUpgradePackEnabled)), __LINE__);
        }
        $this->BasicUpgradePackEnabled = $basicUpgradePackEnabled;
        return $this;
    }
    /**
     * Get ValuePackEnabled value
     * @return bool|null
     */
    public function getValuePackEnabled()
    {
        return $this->ValuePackEnabled;
    }
    /**
     * Set ValuePackEnabled value
     * @param bool $valuePackEnabled
     * @return \StructType\SiteDefaultsType
     */
    public function setValuePackEnabled($valuePackEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($valuePackEnabled) && !is_bool($valuePackEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($valuePackEnabled, true), gettype($valuePackEnabled)), __LINE__);
        }
        $this->ValuePackEnabled = $valuePackEnabled;
        return $this;
    }
    /**
     * Get ProPackPlusEnabled value
     * @return bool|null
     */
    public function getProPackPlusEnabled()
    {
        return $this->ProPackPlusEnabled;
    }
    /**
     * Set ProPackPlusEnabled value
     * @param bool $proPackPlusEnabled
     * @return \StructType\SiteDefaultsType
     */
    public function setProPackPlusEnabled($proPackPlusEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($proPackPlusEnabled) && !is_bool($proPackPlusEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($proPackPlusEnabled, true), gettype($proPackPlusEnabled)), __LINE__);
        }
        $this->ProPackPlusEnabled = $proPackPlusEnabled;
        return $this;
    }
    /**
     * Get AdFormatEnabled value
     * @return string|null
     */
    public function getAdFormatEnabled()
    {
        return $this->AdFormatEnabled;
    }
    /**
     * Set AdFormatEnabled value
     * @uses \EnumType\AdFormatEnabledCodeType::valueIsValid()
     * @uses \EnumType\AdFormatEnabledCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $adFormatEnabled
     * @return \StructType\SiteDefaultsType
     */
    public function setAdFormatEnabled($adFormatEnabled = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\AdFormatEnabledCodeType::valueIsValid($adFormatEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\AdFormatEnabledCodeType', is_array($adFormatEnabled) ? implode(', ', $adFormatEnabled) : var_export($adFormatEnabled, true), implode(', ', \EnumType\AdFormatEnabledCodeType::getValidValues())), __LINE__);
        }
        $this->AdFormatEnabled = $adFormatEnabled;
        return $this;
    }
    /**
     * Get BestOfferCounterEnabled value
     * @return bool|null
     */
    public function getBestOfferCounterEnabled()
    {
        return $this->BestOfferCounterEnabled;
    }
    /**
     * Set BestOfferCounterEnabled value
     * @param bool $bestOfferCounterEnabled
     * @return \StructType\SiteDefaultsType
     */
    public function setBestOfferCounterEnabled($bestOfferCounterEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($bestOfferCounterEnabled) && !is_bool($bestOfferCounterEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($bestOfferCounterEnabled, true), gettype($bestOfferCounterEnabled)), __LINE__);
        }
        $this->BestOfferCounterEnabled = $bestOfferCounterEnabled;
        return $this;
    }
    /**
     * Get BestOfferAutoDeclineEnabled value
     * @return bool|null
     */
    public function getBestOfferAutoDeclineEnabled()
    {
        return $this->BestOfferAutoDeclineEnabled;
    }
    /**
     * Set BestOfferAutoDeclineEnabled value
     * @param bool $bestOfferAutoDeclineEnabled
     * @return \StructType\SiteDefaultsType
     */
    public function setBestOfferAutoDeclineEnabled($bestOfferAutoDeclineEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($bestOfferAutoDeclineEnabled) && !is_bool($bestOfferAutoDeclineEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($bestOfferAutoDeclineEnabled, true), gettype($bestOfferAutoDeclineEnabled)), __LINE__);
        }
        $this->BestOfferAutoDeclineEnabled = $bestOfferAutoDeclineEnabled;
        return $this;
    }
    /**
     * Get LocalMarketSpecialitySubscription value
     * @return bool|null
     */
    public function getLocalMarketSpecialitySubscription()
    {
        return $this->LocalMarketSpecialitySubscription;
    }
    /**
     * Set LocalMarketSpecialitySubscription value
     * @param bool $localMarketSpecialitySubscription
     * @return \StructType\SiteDefaultsType
     */
    public function setLocalMarketSpecialitySubscription($localMarketSpecialitySubscription = null)
    {
        // validation for constraint: boolean
        if (!is_null($localMarketSpecialitySubscription) && !is_bool($localMarketSpecialitySubscription)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($localMarketSpecialitySubscription, true), gettype($localMarketSpecialitySubscription)), __LINE__);
        }
        $this->LocalMarketSpecialitySubscription = $localMarketSpecialitySubscription;
        return $this;
    }
    /**
     * Get LocalMarketRegularSubscription value
     * @return bool|null
     */
    public function getLocalMarketRegularSubscription()
    {
        return $this->LocalMarketRegularSubscription;
    }
    /**
     * Set LocalMarketRegularSubscription value
     * @param bool $localMarketRegularSubscription
     * @return \StructType\SiteDefaultsType
     */
    public function setLocalMarketRegularSubscription($localMarketRegularSubscription = null)
    {
        // validation for constraint: boolean
        if (!is_null($localMarketRegularSubscription) && !is_bool($localMarketRegularSubscription)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($localMarketRegularSubscription, true), gettype($localMarketRegularSubscription)), __LINE__);
        }
        $this->LocalMarketRegularSubscription = $localMarketRegularSubscription;
        return $this;
    }
    /**
     * Get LocalMarketPremiumSubscription value
     * @return bool|null
     */
    public function getLocalMarketPremiumSubscription()
    {
        return $this->LocalMarketPremiumSubscription;
    }
    /**
     * Set LocalMarketPremiumSubscription value
     * @param bool $localMarketPremiumSubscription
     * @return \StructType\SiteDefaultsType
     */
    public function setLocalMarketPremiumSubscription($localMarketPremiumSubscription = null)
    {
        // validation for constraint: boolean
        if (!is_null($localMarketPremiumSubscription) && !is_bool($localMarketPremiumSubscription)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($localMarketPremiumSubscription, true), gettype($localMarketPremiumSubscription)), __LINE__);
        }
        $this->LocalMarketPremiumSubscription = $localMarketPremiumSubscription;
        return $this;
    }
    /**
     * Get LocalMarketNonSubscription value
     * @return bool|null
     */
    public function getLocalMarketNonSubscription()
    {
        return $this->LocalMarketNonSubscription;
    }
    /**
     * Set LocalMarketNonSubscription value
     * @param bool $localMarketNonSubscription
     * @return \StructType\SiteDefaultsType
     */
    public function setLocalMarketNonSubscription($localMarketNonSubscription = null)
    {
        // validation for constraint: boolean
        if (!is_null($localMarketNonSubscription) && !is_bool($localMarketNonSubscription)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($localMarketNonSubscription, true), gettype($localMarketNonSubscription)), __LINE__);
        }
        $this->LocalMarketNonSubscription = $localMarketNonSubscription;
        return $this;
    }
    /**
     * Get ExpressEnabled value
     * @return bool|null
     */
    public function getExpressEnabled()
    {
        return $this->ExpressEnabled;
    }
    /**
     * Set ExpressEnabled value
     * @param bool $expressEnabled
     * @return \StructType\SiteDefaultsType
     */
    public function setExpressEnabled($expressEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($expressEnabled) && !is_bool($expressEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($expressEnabled, true), gettype($expressEnabled)), __LINE__);
        }
        $this->ExpressEnabled = $expressEnabled;
        return $this;
    }
    /**
     * Get ExpressPicturesRequired value
     * @return bool|null
     */
    public function getExpressPicturesRequired()
    {
        return $this->ExpressPicturesRequired;
    }
    /**
     * Set ExpressPicturesRequired value
     * @param bool $expressPicturesRequired
     * @return \StructType\SiteDefaultsType
     */
    public function setExpressPicturesRequired($expressPicturesRequired = null)
    {
        // validation for constraint: boolean
        if (!is_null($expressPicturesRequired) && !is_bool($expressPicturesRequired)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($expressPicturesRequired, true), gettype($expressPicturesRequired)), __LINE__);
        }
        $this->ExpressPicturesRequired = $expressPicturesRequired;
        return $this;
    }
    /**
     * Get ExpressConditionRequired value
     * @return bool|null
     */
    public function getExpressConditionRequired()
    {
        return $this->ExpressConditionRequired;
    }
    /**
     * Set ExpressConditionRequired value
     * @param bool $expressConditionRequired
     * @return \StructType\SiteDefaultsType
     */
    public function setExpressConditionRequired($expressConditionRequired = null)
    {
        // validation for constraint: boolean
        if (!is_null($expressConditionRequired) && !is_bool($expressConditionRequired)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($expressConditionRequired, true), gettype($expressConditionRequired)), __LINE__);
        }
        $this->ExpressConditionRequired = $expressConditionRequired;
        return $this;
    }
    /**
     * Get MinimumReservePrice value
     * @return float|null
     */
    public function getMinimumReservePrice()
    {
        return $this->MinimumReservePrice;
    }
    /**
     * Set MinimumReservePrice value
     * @param float $minimumReservePrice
     * @return \StructType\SiteDefaultsType
     */
    public function setMinimumReservePrice($minimumReservePrice = null)
    {
        // validation for constraint: float
        if (!is_null($minimumReservePrice) && !(is_float($minimumReservePrice) || is_numeric($minimumReservePrice))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($minimumReservePrice, true), gettype($minimumReservePrice)), __LINE__);
        }
        $this->MinimumReservePrice = $minimumReservePrice;
        return $this;
    }
    /**
     * Get SellerContactDetailsEnabled value
     * @return bool|null
     */
    public function getSellerContactDetailsEnabled()
    {
        return $this->SellerContactDetailsEnabled;
    }
    /**
     * Set SellerContactDetailsEnabled value
     * @param bool $sellerContactDetailsEnabled
     * @return \StructType\SiteDefaultsType
     */
    public function setSellerContactDetailsEnabled($sellerContactDetailsEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($sellerContactDetailsEnabled) && !is_bool($sellerContactDetailsEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($sellerContactDetailsEnabled, true), gettype($sellerContactDetailsEnabled)), __LINE__);
        }
        $this->SellerContactDetailsEnabled = $sellerContactDetailsEnabled;
        return $this;
    }
    /**
     * Get TransactionConfirmationRequestEnabled value
     * @return bool|null
     */
    public function getTransactionConfirmationRequestEnabled()
    {
        return $this->TransactionConfirmationRequestEnabled;
    }
    /**
     * Set TransactionConfirmationRequestEnabled value
     * @param bool $transactionConfirmationRequestEnabled
     * @return \StructType\SiteDefaultsType
     */
    public function setTransactionConfirmationRequestEnabled($transactionConfirmationRequestEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($transactionConfirmationRequestEnabled) && !is_bool($transactionConfirmationRequestEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($transactionConfirmationRequestEnabled, true), gettype($transactionConfirmationRequestEnabled)), __LINE__);
        }
        $this->TransactionConfirmationRequestEnabled = $transactionConfirmationRequestEnabled;
        return $this;
    }
    /**
     * Get StoreInventoryEnabled value
     * @return bool|null
     */
    public function getStoreInventoryEnabled()
    {
        return $this->StoreInventoryEnabled;
    }
    /**
     * Set StoreInventoryEnabled value
     * @param bool $storeInventoryEnabled
     * @return \StructType\SiteDefaultsType
     */
    public function setStoreInventoryEnabled($storeInventoryEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($storeInventoryEnabled) && !is_bool($storeInventoryEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($storeInventoryEnabled, true), gettype($storeInventoryEnabled)), __LINE__);
        }
        $this->StoreInventoryEnabled = $storeInventoryEnabled;
        return $this;
    }
    /**
     * Get SkypeMeTransactionalEnabled value
     * @return bool|null
     */
    public function getSkypeMeTransactionalEnabled()
    {
        return $this->SkypeMeTransactionalEnabled;
    }
    /**
     * Set SkypeMeTransactionalEnabled value
     * @param bool $skypeMeTransactionalEnabled
     * @return \StructType\SiteDefaultsType
     */
    public function setSkypeMeTransactionalEnabled($skypeMeTransactionalEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($skypeMeTransactionalEnabled) && !is_bool($skypeMeTransactionalEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($skypeMeTransactionalEnabled, true), gettype($skypeMeTransactionalEnabled)), __LINE__);
        }
        $this->SkypeMeTransactionalEnabled = $skypeMeTransactionalEnabled;
        return $this;
    }
    /**
     * Get SkypeMeNonTransactionalEnabled value
     * @return bool|null
     */
    public function getSkypeMeNonTransactionalEnabled()
    {
        return $this->SkypeMeNonTransactionalEnabled;
    }
    /**
     * Set SkypeMeNonTransactionalEnabled value
     * @param bool $skypeMeNonTransactionalEnabled
     * @return \StructType\SiteDefaultsType
     */
    public function setSkypeMeNonTransactionalEnabled($skypeMeNonTransactionalEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($skypeMeNonTransactionalEnabled) && !is_bool($skypeMeNonTransactionalEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($skypeMeNonTransactionalEnabled, true), gettype($skypeMeNonTransactionalEnabled)), __LINE__);
        }
        $this->SkypeMeNonTransactionalEnabled = $skypeMeNonTransactionalEnabled;
        return $this;
    }
    /**
     * Get LocalListingDistancesRegular value
     * @return string|null
     */
    public function getLocalListingDistancesRegular()
    {
        return $this->LocalListingDistancesRegular;
    }
    /**
     * Set LocalListingDistancesRegular value
     * @param string $localListingDistancesRegular
     * @return \StructType\SiteDefaultsType
     */
    public function setLocalListingDistancesRegular($localListingDistancesRegular = null)
    {
        // validation for constraint: string
        if (!is_null($localListingDistancesRegular) && !is_string($localListingDistancesRegular)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($localListingDistancesRegular, true), gettype($localListingDistancesRegular)), __LINE__);
        }
        $this->LocalListingDistancesRegular = $localListingDistancesRegular;
        return $this;
    }
    /**
     * Get LocalListingDistancesSpecialty value
     * @return string|null
     */
    public function getLocalListingDistancesSpecialty()
    {
        return $this->LocalListingDistancesSpecialty;
    }
    /**
     * Set LocalListingDistancesSpecialty value
     * @param string $localListingDistancesSpecialty
     * @return \StructType\SiteDefaultsType
     */
    public function setLocalListingDistancesSpecialty($localListingDistancesSpecialty = null)
    {
        // validation for constraint: string
        if (!is_null($localListingDistancesSpecialty) && !is_string($localListingDistancesSpecialty)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($localListingDistancesSpecialty, true), gettype($localListingDistancesSpecialty)), __LINE__);
        }
        $this->LocalListingDistancesSpecialty = $localListingDistancesSpecialty;
        return $this;
    }
    /**
     * Get LocalListingDistancesNonSubscription value
     * @return string|null
     */
    public function getLocalListingDistancesNonSubscription()
    {
        return $this->LocalListingDistancesNonSubscription;
    }
    /**
     * Set LocalListingDistancesNonSubscription value
     * @param string $localListingDistancesNonSubscription
     * @return \StructType\SiteDefaultsType
     */
    public function setLocalListingDistancesNonSubscription($localListingDistancesNonSubscription = null)
    {
        // validation for constraint: string
        if (!is_null($localListingDistancesNonSubscription) && !is_string($localListingDistancesNonSubscription)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($localListingDistancesNonSubscription, true), gettype($localListingDistancesNonSubscription)), __LINE__);
        }
        $this->LocalListingDistancesNonSubscription = $localListingDistancesNonSubscription;
        return $this;
    }
    /**
     * Get ClassifiedAdPaymentMethodEnabled value
     * @return string|null
     */
    public function getClassifiedAdPaymentMethodEnabled()
    {
        return $this->ClassifiedAdPaymentMethodEnabled;
    }
    /**
     * Set ClassifiedAdPaymentMethodEnabled value
     * @uses \EnumType\ClassifiedAdPaymentMethodEnabledCodeType::valueIsValid()
     * @uses \EnumType\ClassifiedAdPaymentMethodEnabledCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $classifiedAdPaymentMethodEnabled
     * @return \StructType\SiteDefaultsType
     */
    public function setClassifiedAdPaymentMethodEnabled($classifiedAdPaymentMethodEnabled = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\ClassifiedAdPaymentMethodEnabledCodeType::valueIsValid($classifiedAdPaymentMethodEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\ClassifiedAdPaymentMethodEnabledCodeType', is_array($classifiedAdPaymentMethodEnabled) ? implode(', ', $classifiedAdPaymentMethodEnabled) : var_export($classifiedAdPaymentMethodEnabled, true), implode(', ', \EnumType\ClassifiedAdPaymentMethodEnabledCodeType::getValidValues())), __LINE__);
        }
        $this->ClassifiedAdPaymentMethodEnabled = $classifiedAdPaymentMethodEnabled;
        return $this;
    }
    /**
     * Get ClassifiedAdShippingMethodEnabled value
     * @return bool|null
     */
    public function getClassifiedAdShippingMethodEnabled()
    {
        return $this->ClassifiedAdShippingMethodEnabled;
    }
    /**
     * Set ClassifiedAdShippingMethodEnabled value
     * @param bool $classifiedAdShippingMethodEnabled
     * @return \StructType\SiteDefaultsType
     */
    public function setClassifiedAdShippingMethodEnabled($classifiedAdShippingMethodEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($classifiedAdShippingMethodEnabled) && !is_bool($classifiedAdShippingMethodEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($classifiedAdShippingMethodEnabled, true), gettype($classifiedAdShippingMethodEnabled)), __LINE__);
        }
        $this->ClassifiedAdShippingMethodEnabled = $classifiedAdShippingMethodEnabled;
        return $this;
    }
    /**
     * Get ClassifiedAdBestOfferEnabled value
     * @return string|null
     */
    public function getClassifiedAdBestOfferEnabled()
    {
        return $this->ClassifiedAdBestOfferEnabled;
    }
    /**
     * Set ClassifiedAdBestOfferEnabled value
     * @uses \EnumType\ClassifiedAdBestOfferEnabledCodeType::valueIsValid()
     * @uses \EnumType\ClassifiedAdBestOfferEnabledCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $classifiedAdBestOfferEnabled
     * @return \StructType\SiteDefaultsType
     */
    public function setClassifiedAdBestOfferEnabled($classifiedAdBestOfferEnabled = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\ClassifiedAdBestOfferEnabledCodeType::valueIsValid($classifiedAdBestOfferEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\ClassifiedAdBestOfferEnabledCodeType', is_array($classifiedAdBestOfferEnabled) ? implode(', ', $classifiedAdBestOfferEnabled) : var_export($classifiedAdBestOfferEnabled, true), implode(', ', \EnumType\ClassifiedAdBestOfferEnabledCodeType::getValidValues())), __LINE__);
        }
        $this->ClassifiedAdBestOfferEnabled = $classifiedAdBestOfferEnabled;
        return $this;
    }
    /**
     * Get ClassifiedAdCounterOfferEnabled value
     * @return bool|null
     */
    public function getClassifiedAdCounterOfferEnabled()
    {
        return $this->ClassifiedAdCounterOfferEnabled;
    }
    /**
     * Set ClassifiedAdCounterOfferEnabled value
     * @param bool $classifiedAdCounterOfferEnabled
     * @return \StructType\SiteDefaultsType
     */
    public function setClassifiedAdCounterOfferEnabled($classifiedAdCounterOfferEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($classifiedAdCounterOfferEnabled) && !is_bool($classifiedAdCounterOfferEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($classifiedAdCounterOfferEnabled, true), gettype($classifiedAdCounterOfferEnabled)), __LINE__);
        }
        $this->ClassifiedAdCounterOfferEnabled = $classifiedAdCounterOfferEnabled;
        return $this;
    }
    /**
     * Get ClassifiedAdAutoDeclineEnabled value
     * @return bool|null
     */
    public function getClassifiedAdAutoDeclineEnabled()
    {
        return $this->ClassifiedAdAutoDeclineEnabled;
    }
    /**
     * Set ClassifiedAdAutoDeclineEnabled value
     * @param bool $classifiedAdAutoDeclineEnabled
     * @return \StructType\SiteDefaultsType
     */
    public function setClassifiedAdAutoDeclineEnabled($classifiedAdAutoDeclineEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($classifiedAdAutoDeclineEnabled) && !is_bool($classifiedAdAutoDeclineEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($classifiedAdAutoDeclineEnabled, true), gettype($classifiedAdAutoDeclineEnabled)), __LINE__);
        }
        $this->ClassifiedAdAutoDeclineEnabled = $classifiedAdAutoDeclineEnabled;
        return $this;
    }
    /**
     * Get ClassifiedAdContactByPhoneEnabled value
     * @return bool|null
     */
    public function getClassifiedAdContactByPhoneEnabled()
    {
        return $this->ClassifiedAdContactByPhoneEnabled;
    }
    /**
     * Set ClassifiedAdContactByPhoneEnabled value
     * @param bool $classifiedAdContactByPhoneEnabled
     * @return \StructType\SiteDefaultsType
     */
    public function setClassifiedAdContactByPhoneEnabled($classifiedAdContactByPhoneEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($classifiedAdContactByPhoneEnabled) && !is_bool($classifiedAdContactByPhoneEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($classifiedAdContactByPhoneEnabled, true), gettype($classifiedAdContactByPhoneEnabled)), __LINE__);
        }
        $this->ClassifiedAdContactByPhoneEnabled = $classifiedAdContactByPhoneEnabled;
        return $this;
    }
    /**
     * Get ClassifiedAdContactByEmailEnabled value
     * @return bool|null
     */
    public function getClassifiedAdContactByEmailEnabled()
    {
        return $this->ClassifiedAdContactByEmailEnabled;
    }
    /**
     * Set ClassifiedAdContactByEmailEnabled value
     * @param bool $classifiedAdContactByEmailEnabled
     * @return \StructType\SiteDefaultsType
     */
    public function setClassifiedAdContactByEmailEnabled($classifiedAdContactByEmailEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($classifiedAdContactByEmailEnabled) && !is_bool($classifiedAdContactByEmailEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($classifiedAdContactByEmailEnabled, true), gettype($classifiedAdContactByEmailEnabled)), __LINE__);
        }
        $this->ClassifiedAdContactByEmailEnabled = $classifiedAdContactByEmailEnabled;
        return $this;
    }
    /**
     * Get SafePaymentRequired value
     * @return bool|null
     */
    public function getSafePaymentRequired()
    {
        return $this->SafePaymentRequired;
    }
    /**
     * Set SafePaymentRequired value
     * @param bool $safePaymentRequired
     * @return \StructType\SiteDefaultsType
     */
    public function setSafePaymentRequired($safePaymentRequired = null)
    {
        // validation for constraint: boolean
        if (!is_null($safePaymentRequired) && !is_bool($safePaymentRequired)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($safePaymentRequired, true), gettype($safePaymentRequired)), __LINE__);
        }
        $this->SafePaymentRequired = $safePaymentRequired;
        return $this;
    }
    /**
     * Get ClassifiedAdPayPerLeadEnabled value
     * @return bool|null
     */
    public function getClassifiedAdPayPerLeadEnabled()
    {
        return $this->ClassifiedAdPayPerLeadEnabled;
    }
    /**
     * Set ClassifiedAdPayPerLeadEnabled value
     * @param bool $classifiedAdPayPerLeadEnabled
     * @return \StructType\SiteDefaultsType
     */
    public function setClassifiedAdPayPerLeadEnabled($classifiedAdPayPerLeadEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($classifiedAdPayPerLeadEnabled) && !is_bool($classifiedAdPayPerLeadEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($classifiedAdPayPerLeadEnabled, true), gettype($classifiedAdPayPerLeadEnabled)), __LINE__);
        }
        $this->ClassifiedAdPayPerLeadEnabled = $classifiedAdPayPerLeadEnabled;
        return $this;
    }
    /**
     * Get ItemSpecificsEnabled value
     * @return string|null
     */
    public function getItemSpecificsEnabled()
    {
        return $this->ItemSpecificsEnabled;
    }
    /**
     * Set ItemSpecificsEnabled value
     * @uses \EnumType\ItemSpecificsEnabledCodeType::valueIsValid()
     * @uses \EnumType\ItemSpecificsEnabledCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $itemSpecificsEnabled
     * @return \StructType\SiteDefaultsType
     */
    public function setItemSpecificsEnabled($itemSpecificsEnabled = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\ItemSpecificsEnabledCodeType::valueIsValid($itemSpecificsEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\ItemSpecificsEnabledCodeType', is_array($itemSpecificsEnabled) ? implode(', ', $itemSpecificsEnabled) : var_export($itemSpecificsEnabled, true), implode(', ', \EnumType\ItemSpecificsEnabledCodeType::getValidValues())), __LINE__);
        }
        $this->ItemSpecificsEnabled = $itemSpecificsEnabled;
        return $this;
    }
    /**
     * Get PaisaPayFullEscrowEnabled value
     * @return bool|null
     */
    public function getPaisaPayFullEscrowEnabled()
    {
        return $this->PaisaPayFullEscrowEnabled;
    }
    /**
     * Set PaisaPayFullEscrowEnabled value
     * @param bool $paisaPayFullEscrowEnabled
     * @return \StructType\SiteDefaultsType
     */
    public function setPaisaPayFullEscrowEnabled($paisaPayFullEscrowEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($paisaPayFullEscrowEnabled) && !is_bool($paisaPayFullEscrowEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($paisaPayFullEscrowEnabled, true), gettype($paisaPayFullEscrowEnabled)), __LINE__);
        }
        $this->PaisaPayFullEscrowEnabled = $paisaPayFullEscrowEnabled;
        return $this;
    }
    /**
     * Get ISBNIdentifierEnabled value
     * @return bool|null
     */
    public function getISBNIdentifierEnabled()
    {
        return $this->ISBNIdentifierEnabled;
    }
    /**
     * Set ISBNIdentifierEnabled value
     * @param bool $iSBNIdentifierEnabled
     * @return \StructType\SiteDefaultsType
     */
    public function setISBNIdentifierEnabled($iSBNIdentifierEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($iSBNIdentifierEnabled) && !is_bool($iSBNIdentifierEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($iSBNIdentifierEnabled, true), gettype($iSBNIdentifierEnabled)), __LINE__);
        }
        $this->ISBNIdentifierEnabled = $iSBNIdentifierEnabled;
        return $this;
    }
    /**
     * Get UPCIdentifierEnabled value
     * @return bool|null
     */
    public function getUPCIdentifierEnabled()
    {
        return $this->UPCIdentifierEnabled;
    }
    /**
     * Set UPCIdentifierEnabled value
     * @param bool $uPCIdentifierEnabled
     * @return \StructType\SiteDefaultsType
     */
    public function setUPCIdentifierEnabled($uPCIdentifierEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($uPCIdentifierEnabled) && !is_bool($uPCIdentifierEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($uPCIdentifierEnabled, true), gettype($uPCIdentifierEnabled)), __LINE__);
        }
        $this->UPCIdentifierEnabled = $uPCIdentifierEnabled;
        return $this;
    }
    /**
     * Get EANIdentifierEnabled value
     * @return bool|null
     */
    public function getEANIdentifierEnabled()
    {
        return $this->EANIdentifierEnabled;
    }
    /**
     * Set EANIdentifierEnabled value
     * @param bool $eANIdentifierEnabled
     * @return \StructType\SiteDefaultsType
     */
    public function setEANIdentifierEnabled($eANIdentifierEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($eANIdentifierEnabled) && !is_bool($eANIdentifierEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($eANIdentifierEnabled, true), gettype($eANIdentifierEnabled)), __LINE__);
        }
        $this->EANIdentifierEnabled = $eANIdentifierEnabled;
        return $this;
    }
    /**
     * Get BrandMPNIdentifierEnabled value
     * @return bool|null
     */
    public function getBrandMPNIdentifierEnabled()
    {
        return $this->BrandMPNIdentifierEnabled;
    }
    /**
     * Set BrandMPNIdentifierEnabled value
     * @param bool $brandMPNIdentifierEnabled
     * @return \StructType\SiteDefaultsType
     */
    public function setBrandMPNIdentifierEnabled($brandMPNIdentifierEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($brandMPNIdentifierEnabled) && !is_bool($brandMPNIdentifierEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($brandMPNIdentifierEnabled, true), gettype($brandMPNIdentifierEnabled)), __LINE__);
        }
        $this->BrandMPNIdentifierEnabled = $brandMPNIdentifierEnabled;
        return $this;
    }
    /**
     * Get ClassifiedAdAutoAcceptEnabled value
     * @return bool|null
     */
    public function getClassifiedAdAutoAcceptEnabled()
    {
        return $this->ClassifiedAdAutoAcceptEnabled;
    }
    /**
     * Set ClassifiedAdAutoAcceptEnabled value
     * @param bool $classifiedAdAutoAcceptEnabled
     * @return \StructType\SiteDefaultsType
     */
    public function setClassifiedAdAutoAcceptEnabled($classifiedAdAutoAcceptEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($classifiedAdAutoAcceptEnabled) && !is_bool($classifiedAdAutoAcceptEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($classifiedAdAutoAcceptEnabled, true), gettype($classifiedAdAutoAcceptEnabled)), __LINE__);
        }
        $this->ClassifiedAdAutoAcceptEnabled = $classifiedAdAutoAcceptEnabled;
        return $this;
    }
    /**
     * Get BestOfferAutoAcceptEnabled value
     * @return bool|null
     */
    public function getBestOfferAutoAcceptEnabled()
    {
        return $this->BestOfferAutoAcceptEnabled;
    }
    /**
     * Set BestOfferAutoAcceptEnabled value
     * @param bool $bestOfferAutoAcceptEnabled
     * @return \StructType\SiteDefaultsType
     */
    public function setBestOfferAutoAcceptEnabled($bestOfferAutoAcceptEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($bestOfferAutoAcceptEnabled) && !is_bool($bestOfferAutoAcceptEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($bestOfferAutoAcceptEnabled, true), gettype($bestOfferAutoAcceptEnabled)), __LINE__);
        }
        $this->BestOfferAutoAcceptEnabled = $bestOfferAutoAcceptEnabled;
        return $this;
    }
    /**
     * Get CrossBorderTradeNorthAmericaEnabled value
     * @return bool|null
     */
    public function getCrossBorderTradeNorthAmericaEnabled()
    {
        return $this->CrossBorderTradeNorthAmericaEnabled;
    }
    /**
     * Set CrossBorderTradeNorthAmericaEnabled value
     * @param bool $crossBorderTradeNorthAmericaEnabled
     * @return \StructType\SiteDefaultsType
     */
    public function setCrossBorderTradeNorthAmericaEnabled($crossBorderTradeNorthAmericaEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($crossBorderTradeNorthAmericaEnabled) && !is_bool($crossBorderTradeNorthAmericaEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($crossBorderTradeNorthAmericaEnabled, true), gettype($crossBorderTradeNorthAmericaEnabled)), __LINE__);
        }
        $this->CrossBorderTradeNorthAmericaEnabled = $crossBorderTradeNorthAmericaEnabled;
        return $this;
    }
    /**
     * Get CrossBorderTradeGBEnabled value
     * @return bool|null
     */
    public function getCrossBorderTradeGBEnabled()
    {
        return $this->CrossBorderTradeGBEnabled;
    }
    /**
     * Set CrossBorderTradeGBEnabled value
     * @param bool $crossBorderTradeGBEnabled
     * @return \StructType\SiteDefaultsType
     */
    public function setCrossBorderTradeGBEnabled($crossBorderTradeGBEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($crossBorderTradeGBEnabled) && !is_bool($crossBorderTradeGBEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($crossBorderTradeGBEnabled, true), gettype($crossBorderTradeGBEnabled)), __LINE__);
        }
        $this->CrossBorderTradeGBEnabled = $crossBorderTradeGBEnabled;
        return $this;
    }
    /**
     * Get CrossBorderTradeAustraliaEnabled value
     * @return bool|null
     */
    public function getCrossBorderTradeAustraliaEnabled()
    {
        return $this->CrossBorderTradeAustraliaEnabled;
    }
    /**
     * Set CrossBorderTradeAustraliaEnabled value
     * @param bool $crossBorderTradeAustraliaEnabled
     * @return \StructType\SiteDefaultsType
     */
    public function setCrossBorderTradeAustraliaEnabled($crossBorderTradeAustraliaEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($crossBorderTradeAustraliaEnabled) && !is_bool($crossBorderTradeAustraliaEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($crossBorderTradeAustraliaEnabled, true), gettype($crossBorderTradeAustraliaEnabled)), __LINE__);
        }
        $this->CrossBorderTradeAustraliaEnabled = $crossBorderTradeAustraliaEnabled;
        return $this;
    }
    /**
     * Get PayPalBuyerProtectionEnabled value
     * @return bool|null
     */
    public function getPayPalBuyerProtectionEnabled()
    {
        return $this->PayPalBuyerProtectionEnabled;
    }
    /**
     * Set PayPalBuyerProtectionEnabled value
     * @param bool $payPalBuyerProtectionEnabled
     * @return \StructType\SiteDefaultsType
     */
    public function setPayPalBuyerProtectionEnabled($payPalBuyerProtectionEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($payPalBuyerProtectionEnabled) && !is_bool($payPalBuyerProtectionEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($payPalBuyerProtectionEnabled, true), gettype($payPalBuyerProtectionEnabled)), __LINE__);
        }
        $this->PayPalBuyerProtectionEnabled = $payPalBuyerProtectionEnabled;
        return $this;
    }
    /**
     * Get BuyerGuaranteeEnabled value
     * @return bool|null
     */
    public function getBuyerGuaranteeEnabled()
    {
        return $this->BuyerGuaranteeEnabled;
    }
    /**
     * Set BuyerGuaranteeEnabled value
     * @param bool $buyerGuaranteeEnabled
     * @return \StructType\SiteDefaultsType
     */
    public function setBuyerGuaranteeEnabled($buyerGuaranteeEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($buyerGuaranteeEnabled) && !is_bool($buyerGuaranteeEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($buyerGuaranteeEnabled, true), gettype($buyerGuaranteeEnabled)), __LINE__);
        }
        $this->BuyerGuaranteeEnabled = $buyerGuaranteeEnabled;
        return $this;
    }
    /**
     * Get INEscrowWorkflowTimeline value
     * @return string|null
     */
    public function getINEscrowWorkflowTimeline()
    {
        return $this->INEscrowWorkflowTimeline;
    }
    /**
     * Set INEscrowWorkflowTimeline value
     * @uses \EnumType\INEscrowWorkflowTimelineCodeType::valueIsValid()
     * @uses \EnumType\INEscrowWorkflowTimelineCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $iNEscrowWorkflowTimeline
     * @return \StructType\SiteDefaultsType
     */
    public function setINEscrowWorkflowTimeline($iNEscrowWorkflowTimeline = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\INEscrowWorkflowTimelineCodeType::valueIsValid($iNEscrowWorkflowTimeline)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\INEscrowWorkflowTimelineCodeType', is_array($iNEscrowWorkflowTimeline) ? implode(', ', $iNEscrowWorkflowTimeline) : var_export($iNEscrowWorkflowTimeline, true), implode(', ', \EnumType\INEscrowWorkflowTimelineCodeType::getValidValues())), __LINE__);
        }
        $this->INEscrowWorkflowTimeline = $iNEscrowWorkflowTimeline;
        return $this;
    }
    /**
     * Get CombinedFixedPriceTreatmentEnabled value
     * @return bool|null
     */
    public function getCombinedFixedPriceTreatmentEnabled()
    {
        return $this->CombinedFixedPriceTreatmentEnabled;
    }
    /**
     * Set CombinedFixedPriceTreatmentEnabled value
     * @param bool $combinedFixedPriceTreatmentEnabled
     * @return \StructType\SiteDefaultsType
     */
    public function setCombinedFixedPriceTreatmentEnabled($combinedFixedPriceTreatmentEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($combinedFixedPriceTreatmentEnabled) && !is_bool($combinedFixedPriceTreatmentEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($combinedFixedPriceTreatmentEnabled, true), gettype($combinedFixedPriceTreatmentEnabled)), __LINE__);
        }
        $this->CombinedFixedPriceTreatmentEnabled = $combinedFixedPriceTreatmentEnabled;
        return $this;
    }
    /**
     * Get GalleryFeaturedDurations value
     * @return \StructType\ListingEnhancementDurationReferenceType|null
     */
    public function getGalleryFeaturedDurations()
    {
        return $this->GalleryFeaturedDurations;
    }
    /**
     * Set GalleryFeaturedDurations value
     * @param \StructType\ListingEnhancementDurationReferenceType $galleryFeaturedDurations
     * @return \StructType\SiteDefaultsType
     */
    public function setGalleryFeaturedDurations(\StructType\ListingEnhancementDurationReferenceType $galleryFeaturedDurations = null)
    {
        $this->GalleryFeaturedDurations = $galleryFeaturedDurations;
        return $this;
    }
    /**
     * Get PayPalRequired value
     * @return bool|null
     */
    public function getPayPalRequired()
    {
        return $this->PayPalRequired;
    }
    /**
     * Set PayPalRequired value
     * @param bool $payPalRequired
     * @return \StructType\SiteDefaultsType
     */
    public function setPayPalRequired($payPalRequired = null)
    {
        // validation for constraint: boolean
        if (!is_null($payPalRequired) && !is_bool($payPalRequired)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($payPalRequired, true), gettype($payPalRequired)), __LINE__);
        }
        $this->PayPalRequired = $payPalRequired;
        return $this;
    }
    /**
     * Get eBayMotorsProAdFormatEnabled value
     * @return string|null
     */
    public function getEBayMotorsProAdFormatEnabled()
    {
        return $this->eBayMotorsProAdFormatEnabled;
    }
    /**
     * Set eBayMotorsProAdFormatEnabled value
     * @uses \EnumType\AdFormatEnabledCodeType::valueIsValid()
     * @uses \EnumType\AdFormatEnabledCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $eBayMotorsProAdFormatEnabled
     * @return \StructType\SiteDefaultsType
     */
    public function setEBayMotorsProAdFormatEnabled($eBayMotorsProAdFormatEnabled = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\AdFormatEnabledCodeType::valueIsValid($eBayMotorsProAdFormatEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\AdFormatEnabledCodeType', is_array($eBayMotorsProAdFormatEnabled) ? implode(', ', $eBayMotorsProAdFormatEnabled) : var_export($eBayMotorsProAdFormatEnabled, true), implode(', ', \EnumType\AdFormatEnabledCodeType::getValidValues())), __LINE__);
        }
        $this->eBayMotorsProAdFormatEnabled = $eBayMotorsProAdFormatEnabled;
        return $this;
    }
    /**
     * Get eBayMotorsProContactByPhoneEnabled value
     * @return bool|null
     */
    public function getEBayMotorsProContactByPhoneEnabled()
    {
        return $this->eBayMotorsProContactByPhoneEnabled;
    }
    /**
     * Set eBayMotorsProContactByPhoneEnabled value
     * @param bool $eBayMotorsProContactByPhoneEnabled
     * @return \StructType\SiteDefaultsType
     */
    public function setEBayMotorsProContactByPhoneEnabled($eBayMotorsProContactByPhoneEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($eBayMotorsProContactByPhoneEnabled) && !is_bool($eBayMotorsProContactByPhoneEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($eBayMotorsProContactByPhoneEnabled, true), gettype($eBayMotorsProContactByPhoneEnabled)), __LINE__);
        }
        $this->eBayMotorsProContactByPhoneEnabled = $eBayMotorsProContactByPhoneEnabled;
        return $this;
    }
    /**
     * Get eBayMotorsProPhoneCount value
     * @return int|null
     */
    public function getEBayMotorsProPhoneCount()
    {
        return $this->eBayMotorsProPhoneCount;
    }
    /**
     * Set eBayMotorsProPhoneCount value
     * @param int $eBayMotorsProPhoneCount
     * @return \StructType\SiteDefaultsType
     */
    public function setEBayMotorsProPhoneCount($eBayMotorsProPhoneCount = null)
    {
        // validation for constraint: int
        if (!is_null($eBayMotorsProPhoneCount) && !(is_int($eBayMotorsProPhoneCount) || ctype_digit($eBayMotorsProPhoneCount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($eBayMotorsProPhoneCount, true), gettype($eBayMotorsProPhoneCount)), __LINE__);
        }
        $this->eBayMotorsProPhoneCount = $eBayMotorsProPhoneCount;
        return $this;
    }
    /**
     * Get eBayMotorsProContactByAddressEnabled value
     * @return bool|null
     */
    public function getEBayMotorsProContactByAddressEnabled()
    {
        return $this->eBayMotorsProContactByAddressEnabled;
    }
    /**
     * Set eBayMotorsProContactByAddressEnabled value
     * @param bool $eBayMotorsProContactByAddressEnabled
     * @return \StructType\SiteDefaultsType
     */
    public function setEBayMotorsProContactByAddressEnabled($eBayMotorsProContactByAddressEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($eBayMotorsProContactByAddressEnabled) && !is_bool($eBayMotorsProContactByAddressEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($eBayMotorsProContactByAddressEnabled, true), gettype($eBayMotorsProContactByAddressEnabled)), __LINE__);
        }
        $this->eBayMotorsProContactByAddressEnabled = $eBayMotorsProContactByAddressEnabled;
        return $this;
    }
    /**
     * Get eBayMotorsProStreetCount value
     * @return int|null
     */
    public function getEBayMotorsProStreetCount()
    {
        return $this->eBayMotorsProStreetCount;
    }
    /**
     * Set eBayMotorsProStreetCount value
     * @param int $eBayMotorsProStreetCount
     * @return \StructType\SiteDefaultsType
     */
    public function setEBayMotorsProStreetCount($eBayMotorsProStreetCount = null)
    {
        // validation for constraint: int
        if (!is_null($eBayMotorsProStreetCount) && !(is_int($eBayMotorsProStreetCount) || ctype_digit($eBayMotorsProStreetCount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($eBayMotorsProStreetCount, true), gettype($eBayMotorsProStreetCount)), __LINE__);
        }
        $this->eBayMotorsProStreetCount = $eBayMotorsProStreetCount;
        return $this;
    }
    /**
     * Get eBayMotorsProCompanyNameEnabled value
     * @return bool|null
     */
    public function getEBayMotorsProCompanyNameEnabled()
    {
        return $this->eBayMotorsProCompanyNameEnabled;
    }
    /**
     * Set eBayMotorsProCompanyNameEnabled value
     * @param bool $eBayMotorsProCompanyNameEnabled
     * @return \StructType\SiteDefaultsType
     */
    public function setEBayMotorsProCompanyNameEnabled($eBayMotorsProCompanyNameEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($eBayMotorsProCompanyNameEnabled) && !is_bool($eBayMotorsProCompanyNameEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($eBayMotorsProCompanyNameEnabled, true), gettype($eBayMotorsProCompanyNameEnabled)), __LINE__);
        }
        $this->eBayMotorsProCompanyNameEnabled = $eBayMotorsProCompanyNameEnabled;
        return $this;
    }
    /**
     * Get eBayMotorsProContactByEmailEnabled value
     * @return bool|null
     */
    public function getEBayMotorsProContactByEmailEnabled()
    {
        return $this->eBayMotorsProContactByEmailEnabled;
    }
    /**
     * Set eBayMotorsProContactByEmailEnabled value
     * @param bool $eBayMotorsProContactByEmailEnabled
     * @return \StructType\SiteDefaultsType
     */
    public function setEBayMotorsProContactByEmailEnabled($eBayMotorsProContactByEmailEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($eBayMotorsProContactByEmailEnabled) && !is_bool($eBayMotorsProContactByEmailEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($eBayMotorsProContactByEmailEnabled, true), gettype($eBayMotorsProContactByEmailEnabled)), __LINE__);
        }
        $this->eBayMotorsProContactByEmailEnabled = $eBayMotorsProContactByEmailEnabled;
        return $this;
    }
    /**
     * Get eBayMotorsProBestOfferEnabled value
     * @return string|null
     */
    public function getEBayMotorsProBestOfferEnabled()
    {
        return $this->eBayMotorsProBestOfferEnabled;
    }
    /**
     * Set eBayMotorsProBestOfferEnabled value
     * @uses \EnumType\ClassifiedAdBestOfferEnabledCodeType::valueIsValid()
     * @uses \EnumType\ClassifiedAdBestOfferEnabledCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $eBayMotorsProBestOfferEnabled
     * @return \StructType\SiteDefaultsType
     */
    public function setEBayMotorsProBestOfferEnabled($eBayMotorsProBestOfferEnabled = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\ClassifiedAdBestOfferEnabledCodeType::valueIsValid($eBayMotorsProBestOfferEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\ClassifiedAdBestOfferEnabledCodeType', is_array($eBayMotorsProBestOfferEnabled) ? implode(', ', $eBayMotorsProBestOfferEnabled) : var_export($eBayMotorsProBestOfferEnabled, true), implode(', ', \EnumType\ClassifiedAdBestOfferEnabledCodeType::getValidValues())), __LINE__);
        }
        $this->eBayMotorsProBestOfferEnabled = $eBayMotorsProBestOfferEnabled;
        return $this;
    }
    /**
     * Get eBayMotorsProAutoAcceptEnabled value
     * @return bool|null
     */
    public function getEBayMotorsProAutoAcceptEnabled()
    {
        return $this->eBayMotorsProAutoAcceptEnabled;
    }
    /**
     * Set eBayMotorsProAutoAcceptEnabled value
     * @param bool $eBayMotorsProAutoAcceptEnabled
     * @return \StructType\SiteDefaultsType
     */
    public function setEBayMotorsProAutoAcceptEnabled($eBayMotorsProAutoAcceptEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($eBayMotorsProAutoAcceptEnabled) && !is_bool($eBayMotorsProAutoAcceptEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($eBayMotorsProAutoAcceptEnabled, true), gettype($eBayMotorsProAutoAcceptEnabled)), __LINE__);
        }
        $this->eBayMotorsProAutoAcceptEnabled = $eBayMotorsProAutoAcceptEnabled;
        return $this;
    }
    /**
     * Get eBayMotorsProAutoDeclineEnabled value
     * @return bool|null
     */
    public function getEBayMotorsProAutoDeclineEnabled()
    {
        return $this->eBayMotorsProAutoDeclineEnabled;
    }
    /**
     * Set eBayMotorsProAutoDeclineEnabled value
     * @param bool $eBayMotorsProAutoDeclineEnabled
     * @return \StructType\SiteDefaultsType
     */
    public function setEBayMotorsProAutoDeclineEnabled($eBayMotorsProAutoDeclineEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($eBayMotorsProAutoDeclineEnabled) && !is_bool($eBayMotorsProAutoDeclineEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($eBayMotorsProAutoDeclineEnabled, true), gettype($eBayMotorsProAutoDeclineEnabled)), __LINE__);
        }
        $this->eBayMotorsProAutoDeclineEnabled = $eBayMotorsProAutoDeclineEnabled;
        return $this;
    }
    /**
     * Get eBayMotorsProPaymentMethodCheckOutEnabled value
     * @return string|null
     */
    public function getEBayMotorsProPaymentMethodCheckOutEnabled()
    {
        return $this->eBayMotorsProPaymentMethodCheckOutEnabled;
    }
    /**
     * Set eBayMotorsProPaymentMethodCheckOutEnabled value
     * @uses \EnumType\ClassifiedAdPaymentMethodEnabledCodeType::valueIsValid()
     * @uses \EnumType\ClassifiedAdPaymentMethodEnabledCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $eBayMotorsProPaymentMethodCheckOutEnabled
     * @return \StructType\SiteDefaultsType
     */
    public function setEBayMotorsProPaymentMethodCheckOutEnabled($eBayMotorsProPaymentMethodCheckOutEnabled = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\ClassifiedAdPaymentMethodEnabledCodeType::valueIsValid($eBayMotorsProPaymentMethodCheckOutEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\ClassifiedAdPaymentMethodEnabledCodeType', is_array($eBayMotorsProPaymentMethodCheckOutEnabled) ? implode(', ', $eBayMotorsProPaymentMethodCheckOutEnabled) : var_export($eBayMotorsProPaymentMethodCheckOutEnabled, true), implode(', ', \EnumType\ClassifiedAdPaymentMethodEnabledCodeType::getValidValues())), __LINE__);
        }
        $this->eBayMotorsProPaymentMethodCheckOutEnabled = $eBayMotorsProPaymentMethodCheckOutEnabled;
        return $this;
    }
    /**
     * Get eBayMotorsProShippingMethodEnabled value
     * @return bool|null
     */
    public function getEBayMotorsProShippingMethodEnabled()
    {
        return $this->eBayMotorsProShippingMethodEnabled;
    }
    /**
     * Set eBayMotorsProShippingMethodEnabled value
     * @param bool $eBayMotorsProShippingMethodEnabled
     * @return \StructType\SiteDefaultsType
     */
    public function setEBayMotorsProShippingMethodEnabled($eBayMotorsProShippingMethodEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($eBayMotorsProShippingMethodEnabled) && !is_bool($eBayMotorsProShippingMethodEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($eBayMotorsProShippingMethodEnabled, true), gettype($eBayMotorsProShippingMethodEnabled)), __LINE__);
        }
        $this->eBayMotorsProShippingMethodEnabled = $eBayMotorsProShippingMethodEnabled;
        return $this;
    }
    /**
     * Get eBayMotorsProCounterOfferEnabled value
     * @return bool|null
     */
    public function getEBayMotorsProCounterOfferEnabled()
    {
        return $this->eBayMotorsProCounterOfferEnabled;
    }
    /**
     * Set eBayMotorsProCounterOfferEnabled value
     * @param bool $eBayMotorsProCounterOfferEnabled
     * @return \StructType\SiteDefaultsType
     */
    public function setEBayMotorsProCounterOfferEnabled($eBayMotorsProCounterOfferEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($eBayMotorsProCounterOfferEnabled) && !is_bool($eBayMotorsProCounterOfferEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($eBayMotorsProCounterOfferEnabled, true), gettype($eBayMotorsProCounterOfferEnabled)), __LINE__);
        }
        $this->eBayMotorsProCounterOfferEnabled = $eBayMotorsProCounterOfferEnabled;
        return $this;
    }
    /**
     * Get eBayMotorsProSellerContactDetailsEnabled value
     * @return bool|null
     */
    public function getEBayMotorsProSellerContactDetailsEnabled()
    {
        return $this->eBayMotorsProSellerContactDetailsEnabled;
    }
    /**
     * Set eBayMotorsProSellerContactDetailsEnabled value
     * @param bool $eBayMotorsProSellerContactDetailsEnabled
     * @return \StructType\SiteDefaultsType
     */
    public function setEBayMotorsProSellerContactDetailsEnabled($eBayMotorsProSellerContactDetailsEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($eBayMotorsProSellerContactDetailsEnabled) && !is_bool($eBayMotorsProSellerContactDetailsEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($eBayMotorsProSellerContactDetailsEnabled, true), gettype($eBayMotorsProSellerContactDetailsEnabled)), __LINE__);
        }
        $this->eBayMotorsProSellerContactDetailsEnabled = $eBayMotorsProSellerContactDetailsEnabled;
        return $this;
    }
    /**
     * Get LocalMarketAdFormatEnabled value
     * @return string|null
     */
    public function getLocalMarketAdFormatEnabled()
    {
        return $this->LocalMarketAdFormatEnabled;
    }
    /**
     * Set LocalMarketAdFormatEnabled value
     * @uses \EnumType\AdFormatEnabledCodeType::valueIsValid()
     * @uses \EnumType\AdFormatEnabledCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $localMarketAdFormatEnabled
     * @return \StructType\SiteDefaultsType
     */
    public function setLocalMarketAdFormatEnabled($localMarketAdFormatEnabled = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\AdFormatEnabledCodeType::valueIsValid($localMarketAdFormatEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\AdFormatEnabledCodeType', is_array($localMarketAdFormatEnabled) ? implode(', ', $localMarketAdFormatEnabled) : var_export($localMarketAdFormatEnabled, true), implode(', ', \EnumType\AdFormatEnabledCodeType::getValidValues())), __LINE__);
        }
        $this->LocalMarketAdFormatEnabled = $localMarketAdFormatEnabled;
        return $this;
    }
    /**
     * Get LocalMarketContactByPhoneEnabled value
     * @return bool|null
     */
    public function getLocalMarketContactByPhoneEnabled()
    {
        return $this->LocalMarketContactByPhoneEnabled;
    }
    /**
     * Set LocalMarketContactByPhoneEnabled value
     * @param bool $localMarketContactByPhoneEnabled
     * @return \StructType\SiteDefaultsType
     */
    public function setLocalMarketContactByPhoneEnabled($localMarketContactByPhoneEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($localMarketContactByPhoneEnabled) && !is_bool($localMarketContactByPhoneEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($localMarketContactByPhoneEnabled, true), gettype($localMarketContactByPhoneEnabled)), __LINE__);
        }
        $this->LocalMarketContactByPhoneEnabled = $localMarketContactByPhoneEnabled;
        return $this;
    }
    /**
     * Get LocalMarketPhoneCount value
     * @return int|null
     */
    public function getLocalMarketPhoneCount()
    {
        return $this->LocalMarketPhoneCount;
    }
    /**
     * Set LocalMarketPhoneCount value
     * @param int $localMarketPhoneCount
     * @return \StructType\SiteDefaultsType
     */
    public function setLocalMarketPhoneCount($localMarketPhoneCount = null)
    {
        // validation for constraint: int
        if (!is_null($localMarketPhoneCount) && !(is_int($localMarketPhoneCount) || ctype_digit($localMarketPhoneCount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($localMarketPhoneCount, true), gettype($localMarketPhoneCount)), __LINE__);
        }
        $this->LocalMarketPhoneCount = $localMarketPhoneCount;
        return $this;
    }
    /**
     * Get LocalMarketContactByAddressEnabled value
     * @return bool|null
     */
    public function getLocalMarketContactByAddressEnabled()
    {
        return $this->LocalMarketContactByAddressEnabled;
    }
    /**
     * Set LocalMarketContactByAddressEnabled value
     * @param bool $localMarketContactByAddressEnabled
     * @return \StructType\SiteDefaultsType
     */
    public function setLocalMarketContactByAddressEnabled($localMarketContactByAddressEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($localMarketContactByAddressEnabled) && !is_bool($localMarketContactByAddressEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($localMarketContactByAddressEnabled, true), gettype($localMarketContactByAddressEnabled)), __LINE__);
        }
        $this->LocalMarketContactByAddressEnabled = $localMarketContactByAddressEnabled;
        return $this;
    }
    /**
     * Get LocalMarketStreetCount value
     * @return int|null
     */
    public function getLocalMarketStreetCount()
    {
        return $this->LocalMarketStreetCount;
    }
    /**
     * Set LocalMarketStreetCount value
     * @param int $localMarketStreetCount
     * @return \StructType\SiteDefaultsType
     */
    public function setLocalMarketStreetCount($localMarketStreetCount = null)
    {
        // validation for constraint: int
        if (!is_null($localMarketStreetCount) && !(is_int($localMarketStreetCount) || ctype_digit($localMarketStreetCount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($localMarketStreetCount, true), gettype($localMarketStreetCount)), __LINE__);
        }
        $this->LocalMarketStreetCount = $localMarketStreetCount;
        return $this;
    }
    /**
     * Get LocalMarketCompanyNameEnabled value
     * @return bool|null
     */
    public function getLocalMarketCompanyNameEnabled()
    {
        return $this->LocalMarketCompanyNameEnabled;
    }
    /**
     * Set LocalMarketCompanyNameEnabled value
     * @param bool $localMarketCompanyNameEnabled
     * @return \StructType\SiteDefaultsType
     */
    public function setLocalMarketCompanyNameEnabled($localMarketCompanyNameEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($localMarketCompanyNameEnabled) && !is_bool($localMarketCompanyNameEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($localMarketCompanyNameEnabled, true), gettype($localMarketCompanyNameEnabled)), __LINE__);
        }
        $this->LocalMarketCompanyNameEnabled = $localMarketCompanyNameEnabled;
        return $this;
    }
    /**
     * Get LocalMarketContactByEmailEnabled value
     * @return bool|null
     */
    public function getLocalMarketContactByEmailEnabled()
    {
        return $this->LocalMarketContactByEmailEnabled;
    }
    /**
     * Set LocalMarketContactByEmailEnabled value
     * @param bool $localMarketContactByEmailEnabled
     * @return \StructType\SiteDefaultsType
     */
    public function setLocalMarketContactByEmailEnabled($localMarketContactByEmailEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($localMarketContactByEmailEnabled) && !is_bool($localMarketContactByEmailEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($localMarketContactByEmailEnabled, true), gettype($localMarketContactByEmailEnabled)), __LINE__);
        }
        $this->LocalMarketContactByEmailEnabled = $localMarketContactByEmailEnabled;
        return $this;
    }
    /**
     * Get LocalMarketBestOfferEnabled value
     * @return string|null
     */
    public function getLocalMarketBestOfferEnabled()
    {
        return $this->LocalMarketBestOfferEnabled;
    }
    /**
     * Set LocalMarketBestOfferEnabled value
     * @uses \EnumType\ClassifiedAdBestOfferEnabledCodeType::valueIsValid()
     * @uses \EnumType\ClassifiedAdBestOfferEnabledCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $localMarketBestOfferEnabled
     * @return \StructType\SiteDefaultsType
     */
    public function setLocalMarketBestOfferEnabled($localMarketBestOfferEnabled = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\ClassifiedAdBestOfferEnabledCodeType::valueIsValid($localMarketBestOfferEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\ClassifiedAdBestOfferEnabledCodeType', is_array($localMarketBestOfferEnabled) ? implode(', ', $localMarketBestOfferEnabled) : var_export($localMarketBestOfferEnabled, true), implode(', ', \EnumType\ClassifiedAdBestOfferEnabledCodeType::getValidValues())), __LINE__);
        }
        $this->LocalMarketBestOfferEnabled = $localMarketBestOfferEnabled;
        return $this;
    }
    /**
     * Get LocalMarketAutoAcceptEnabled value
     * @return bool|null
     */
    public function getLocalMarketAutoAcceptEnabled()
    {
        return $this->LocalMarketAutoAcceptEnabled;
    }
    /**
     * Set LocalMarketAutoAcceptEnabled value
     * @param bool $localMarketAutoAcceptEnabled
     * @return \StructType\SiteDefaultsType
     */
    public function setLocalMarketAutoAcceptEnabled($localMarketAutoAcceptEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($localMarketAutoAcceptEnabled) && !is_bool($localMarketAutoAcceptEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($localMarketAutoAcceptEnabled, true), gettype($localMarketAutoAcceptEnabled)), __LINE__);
        }
        $this->LocalMarketAutoAcceptEnabled = $localMarketAutoAcceptEnabled;
        return $this;
    }
    /**
     * Get LocalMarketAutoDeclineEnabled value
     * @return bool|null
     */
    public function getLocalMarketAutoDeclineEnabled()
    {
        return $this->LocalMarketAutoDeclineEnabled;
    }
    /**
     * Set LocalMarketAutoDeclineEnabled value
     * @param bool $localMarketAutoDeclineEnabled
     * @return \StructType\SiteDefaultsType
     */
    public function setLocalMarketAutoDeclineEnabled($localMarketAutoDeclineEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($localMarketAutoDeclineEnabled) && !is_bool($localMarketAutoDeclineEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($localMarketAutoDeclineEnabled, true), gettype($localMarketAutoDeclineEnabled)), __LINE__);
        }
        $this->LocalMarketAutoDeclineEnabled = $localMarketAutoDeclineEnabled;
        return $this;
    }
    /**
     * Get LocalMarketPaymentMethodCheckOutEnabled value
     * @return string|null
     */
    public function getLocalMarketPaymentMethodCheckOutEnabled()
    {
        return $this->LocalMarketPaymentMethodCheckOutEnabled;
    }
    /**
     * Set LocalMarketPaymentMethodCheckOutEnabled value
     * @uses \EnumType\ClassifiedAdPaymentMethodEnabledCodeType::valueIsValid()
     * @uses \EnumType\ClassifiedAdPaymentMethodEnabledCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $localMarketPaymentMethodCheckOutEnabled
     * @return \StructType\SiteDefaultsType
     */
    public function setLocalMarketPaymentMethodCheckOutEnabled($localMarketPaymentMethodCheckOutEnabled = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\ClassifiedAdPaymentMethodEnabledCodeType::valueIsValid($localMarketPaymentMethodCheckOutEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\ClassifiedAdPaymentMethodEnabledCodeType', is_array($localMarketPaymentMethodCheckOutEnabled) ? implode(', ', $localMarketPaymentMethodCheckOutEnabled) : var_export($localMarketPaymentMethodCheckOutEnabled, true), implode(', ', \EnumType\ClassifiedAdPaymentMethodEnabledCodeType::getValidValues())), __LINE__);
        }
        $this->LocalMarketPaymentMethodCheckOutEnabled = $localMarketPaymentMethodCheckOutEnabled;
        return $this;
    }
    /**
     * Get LocalMarketShippingMethodEnabled value
     * @return bool|null
     */
    public function getLocalMarketShippingMethodEnabled()
    {
        return $this->LocalMarketShippingMethodEnabled;
    }
    /**
     * Set LocalMarketShippingMethodEnabled value
     * @param bool $localMarketShippingMethodEnabled
     * @return \StructType\SiteDefaultsType
     */
    public function setLocalMarketShippingMethodEnabled($localMarketShippingMethodEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($localMarketShippingMethodEnabled) && !is_bool($localMarketShippingMethodEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($localMarketShippingMethodEnabled, true), gettype($localMarketShippingMethodEnabled)), __LINE__);
        }
        $this->LocalMarketShippingMethodEnabled = $localMarketShippingMethodEnabled;
        return $this;
    }
    /**
     * Get LocalMarketCounterOfferEnabled value
     * @return bool|null
     */
    public function getLocalMarketCounterOfferEnabled()
    {
        return $this->LocalMarketCounterOfferEnabled;
    }
    /**
     * Set LocalMarketCounterOfferEnabled value
     * @param bool $localMarketCounterOfferEnabled
     * @return \StructType\SiteDefaultsType
     */
    public function setLocalMarketCounterOfferEnabled($localMarketCounterOfferEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($localMarketCounterOfferEnabled) && !is_bool($localMarketCounterOfferEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($localMarketCounterOfferEnabled, true), gettype($localMarketCounterOfferEnabled)), __LINE__);
        }
        $this->LocalMarketCounterOfferEnabled = $localMarketCounterOfferEnabled;
        return $this;
    }
    /**
     * Get LocalMarketSellerContactDetailsEnabled value
     * @return bool|null
     */
    public function getLocalMarketSellerContactDetailsEnabled()
    {
        return $this->LocalMarketSellerContactDetailsEnabled;
    }
    /**
     * Set LocalMarketSellerContactDetailsEnabled value
     * @param bool $localMarketSellerContactDetailsEnabled
     * @return \StructType\SiteDefaultsType
     */
    public function setLocalMarketSellerContactDetailsEnabled($localMarketSellerContactDetailsEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($localMarketSellerContactDetailsEnabled) && !is_bool($localMarketSellerContactDetailsEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($localMarketSellerContactDetailsEnabled, true), gettype($localMarketSellerContactDetailsEnabled)), __LINE__);
        }
        $this->LocalMarketSellerContactDetailsEnabled = $localMarketSellerContactDetailsEnabled;
        return $this;
    }
    /**
     * Get ClassifiedAdPhoneCount value
     * @return int|null
     */
    public function getClassifiedAdPhoneCount()
    {
        return $this->ClassifiedAdPhoneCount;
    }
    /**
     * Set ClassifiedAdPhoneCount value
     * @param int $classifiedAdPhoneCount
     * @return \StructType\SiteDefaultsType
     */
    public function setClassifiedAdPhoneCount($classifiedAdPhoneCount = null)
    {
        // validation for constraint: int
        if (!is_null($classifiedAdPhoneCount) && !(is_int($classifiedAdPhoneCount) || ctype_digit($classifiedAdPhoneCount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($classifiedAdPhoneCount, true), gettype($classifiedAdPhoneCount)), __LINE__);
        }
        $this->ClassifiedAdPhoneCount = $classifiedAdPhoneCount;
        return $this;
    }
    /**
     * Get ClassifiedAdContactByAddressEnabled value
     * @return bool|null
     */
    public function getClassifiedAdContactByAddressEnabled()
    {
        return $this->ClassifiedAdContactByAddressEnabled;
    }
    /**
     * Set ClassifiedAdContactByAddressEnabled value
     * @param bool $classifiedAdContactByAddressEnabled
     * @return \StructType\SiteDefaultsType
     */
    public function setClassifiedAdContactByAddressEnabled($classifiedAdContactByAddressEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($classifiedAdContactByAddressEnabled) && !is_bool($classifiedAdContactByAddressEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($classifiedAdContactByAddressEnabled, true), gettype($classifiedAdContactByAddressEnabled)), __LINE__);
        }
        $this->ClassifiedAdContactByAddressEnabled = $classifiedAdContactByAddressEnabled;
        return $this;
    }
    /**
     * Get ClassifiedAdStreetCount value
     * @return int|null
     */
    public function getClassifiedAdStreetCount()
    {
        return $this->ClassifiedAdStreetCount;
    }
    /**
     * Set ClassifiedAdStreetCount value
     * @param int $classifiedAdStreetCount
     * @return \StructType\SiteDefaultsType
     */
    public function setClassifiedAdStreetCount($classifiedAdStreetCount = null)
    {
        // validation for constraint: int
        if (!is_null($classifiedAdStreetCount) && !(is_int($classifiedAdStreetCount) || ctype_digit($classifiedAdStreetCount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($classifiedAdStreetCount, true), gettype($classifiedAdStreetCount)), __LINE__);
        }
        $this->ClassifiedAdStreetCount = $classifiedAdStreetCount;
        return $this;
    }
    /**
     * Get ClassifiedAdCompanyNameEnabled value
     * @return bool|null
     */
    public function getClassifiedAdCompanyNameEnabled()
    {
        return $this->ClassifiedAdCompanyNameEnabled;
    }
    /**
     * Set ClassifiedAdCompanyNameEnabled value
     * @param bool $classifiedAdCompanyNameEnabled
     * @return \StructType\SiteDefaultsType
     */
    public function setClassifiedAdCompanyNameEnabled($classifiedAdCompanyNameEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($classifiedAdCompanyNameEnabled) && !is_bool($classifiedAdCompanyNameEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($classifiedAdCompanyNameEnabled, true), gettype($classifiedAdCompanyNameEnabled)), __LINE__);
        }
        $this->ClassifiedAdCompanyNameEnabled = $classifiedAdCompanyNameEnabled;
        return $this;
    }
    /**
     * Get SpecialitySubscription value
     * @return string|null
     */
    public function getSpecialitySubscription()
    {
        return $this->SpecialitySubscription;
    }
    /**
     * Set SpecialitySubscription value
     * @uses \EnumType\GeographicExposureCodeType::valueIsValid()
     * @uses \EnumType\GeographicExposureCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $specialitySubscription
     * @return \StructType\SiteDefaultsType
     */
    public function setSpecialitySubscription($specialitySubscription = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\GeographicExposureCodeType::valueIsValid($specialitySubscription)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\GeographicExposureCodeType', is_array($specialitySubscription) ? implode(', ', $specialitySubscription) : var_export($specialitySubscription, true), implode(', ', \EnumType\GeographicExposureCodeType::getValidValues())), __LINE__);
        }
        $this->SpecialitySubscription = $specialitySubscription;
        return $this;
    }
    /**
     * Get RegularSubscription value
     * @return string|null
     */
    public function getRegularSubscription()
    {
        return $this->RegularSubscription;
    }
    /**
     * Set RegularSubscription value
     * @uses \EnumType\GeographicExposureCodeType::valueIsValid()
     * @uses \EnumType\GeographicExposureCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $regularSubscription
     * @return \StructType\SiteDefaultsType
     */
    public function setRegularSubscription($regularSubscription = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\GeographicExposureCodeType::valueIsValid($regularSubscription)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\GeographicExposureCodeType', is_array($regularSubscription) ? implode(', ', $regularSubscription) : var_export($regularSubscription, true), implode(', ', \EnumType\GeographicExposureCodeType::getValidValues())), __LINE__);
        }
        $this->RegularSubscription = $regularSubscription;
        return $this;
    }
    /**
     * Get PremiumSubscription value
     * @return string|null
     */
    public function getPremiumSubscription()
    {
        return $this->PremiumSubscription;
    }
    /**
     * Set PremiumSubscription value
     * @uses \EnumType\GeographicExposureCodeType::valueIsValid()
     * @uses \EnumType\GeographicExposureCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $premiumSubscription
     * @return \StructType\SiteDefaultsType
     */
    public function setPremiumSubscription($premiumSubscription = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\GeographicExposureCodeType::valueIsValid($premiumSubscription)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\GeographicExposureCodeType', is_array($premiumSubscription) ? implode(', ', $premiumSubscription) : var_export($premiumSubscription, true), implode(', ', \EnumType\GeographicExposureCodeType::getValidValues())), __LINE__);
        }
        $this->PremiumSubscription = $premiumSubscription;
        return $this;
    }
    /**
     * Get NonSubscription value
     * @return string|null
     */
    public function getNonSubscription()
    {
        return $this->NonSubscription;
    }
    /**
     * Set NonSubscription value
     * @uses \EnumType\GeographicExposureCodeType::valueIsValid()
     * @uses \EnumType\GeographicExposureCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $nonSubscription
     * @return \StructType\SiteDefaultsType
     */
    public function setNonSubscription($nonSubscription = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\GeographicExposureCodeType::valueIsValid($nonSubscription)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\GeographicExposureCodeType', is_array($nonSubscription) ? implode(', ', $nonSubscription) : var_export($nonSubscription, true), implode(', ', \EnumType\GeographicExposureCodeType::getValidValues())), __LINE__);
        }
        $this->NonSubscription = $nonSubscription;
        return $this;
    }
    /**
     * Get PayPalRequiredForStoreOwner value
     * @return bool|null
     */
    public function getPayPalRequiredForStoreOwner()
    {
        return $this->PayPalRequiredForStoreOwner;
    }
    /**
     * Set PayPalRequiredForStoreOwner value
     * @param bool $payPalRequiredForStoreOwner
     * @return \StructType\SiteDefaultsType
     */
    public function setPayPalRequiredForStoreOwner($payPalRequiredForStoreOwner = null)
    {
        // validation for constraint: boolean
        if (!is_null($payPalRequiredForStoreOwner) && !is_bool($payPalRequiredForStoreOwner)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($payPalRequiredForStoreOwner, true), gettype($payPalRequiredForStoreOwner)), __LINE__);
        }
        $this->PayPalRequiredForStoreOwner = $payPalRequiredForStoreOwner;
        return $this;
    }
    /**
     * Get ReviseQuantityAllowed value
     * @return bool|null
     */
    public function getReviseQuantityAllowed()
    {
        return $this->ReviseQuantityAllowed;
    }
    /**
     * Set ReviseQuantityAllowed value
     * @param bool $reviseQuantityAllowed
     * @return \StructType\SiteDefaultsType
     */
    public function setReviseQuantityAllowed($reviseQuantityAllowed = null)
    {
        // validation for constraint: boolean
        if (!is_null($reviseQuantityAllowed) && !is_bool($reviseQuantityAllowed)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($reviseQuantityAllowed, true), gettype($reviseQuantityAllowed)), __LINE__);
        }
        $this->ReviseQuantityAllowed = $reviseQuantityAllowed;
        return $this;
    }
    /**
     * Get RevisePriceAllowed value
     * @return bool|null
     */
    public function getRevisePriceAllowed()
    {
        return $this->RevisePriceAllowed;
    }
    /**
     * Set RevisePriceAllowed value
     * @param bool $revisePriceAllowed
     * @return \StructType\SiteDefaultsType
     */
    public function setRevisePriceAllowed($revisePriceAllowed = null)
    {
        // validation for constraint: boolean
        if (!is_null($revisePriceAllowed) && !is_bool($revisePriceAllowed)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($revisePriceAllowed, true), gettype($revisePriceAllowed)), __LINE__);
        }
        $this->RevisePriceAllowed = $revisePriceAllowed;
        return $this;
    }
    /**
     * Get StoreOwnerExtendedListingDurationsEnabled value
     * @return bool|null
     */
    public function getStoreOwnerExtendedListingDurationsEnabled()
    {
        return $this->StoreOwnerExtendedListingDurationsEnabled;
    }
    /**
     * Set StoreOwnerExtendedListingDurationsEnabled value
     * @param bool $storeOwnerExtendedListingDurationsEnabled
     * @return \StructType\SiteDefaultsType
     */
    public function setStoreOwnerExtendedListingDurationsEnabled($storeOwnerExtendedListingDurationsEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($storeOwnerExtendedListingDurationsEnabled) && !is_bool($storeOwnerExtendedListingDurationsEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($storeOwnerExtendedListingDurationsEnabled, true), gettype($storeOwnerExtendedListingDurationsEnabled)), __LINE__);
        }
        $this->StoreOwnerExtendedListingDurationsEnabled = $storeOwnerExtendedListingDurationsEnabled;
        return $this;
    }
    /**
     * Get StoreOwnerExtendedListingDurations value
     * @return \StructType\StoreOwnerExtendedListingDurationsType|null
     */
    public function getStoreOwnerExtendedListingDurations()
    {
        return $this->StoreOwnerExtendedListingDurations;
    }
    /**
     * Set StoreOwnerExtendedListingDurations value
     * @param \StructType\StoreOwnerExtendedListingDurationsType $storeOwnerExtendedListingDurations
     * @return \StructType\SiteDefaultsType
     */
    public function setStoreOwnerExtendedListingDurations(\StructType\StoreOwnerExtendedListingDurationsType $storeOwnerExtendedListingDurations = null)
    {
        $this->StoreOwnerExtendedListingDurations = $storeOwnerExtendedListingDurations;
        return $this;
    }
    /**
     * Get ReturnPolicyEnabled value
     * @return bool|null
     */
    public function getReturnPolicyEnabled()
    {
        return $this->ReturnPolicyEnabled;
    }
    /**
     * Set ReturnPolicyEnabled value
     * @param bool $returnPolicyEnabled
     * @return \StructType\SiteDefaultsType
     */
    public function setReturnPolicyEnabled($returnPolicyEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($returnPolicyEnabled) && !is_bool($returnPolicyEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($returnPolicyEnabled, true), gettype($returnPolicyEnabled)), __LINE__);
        }
        $this->ReturnPolicyEnabled = $returnPolicyEnabled;
        return $this;
    }
    /**
     * Get HandlingTimeEnabled value
     * @return bool|null
     */
    public function getHandlingTimeEnabled()
    {
        return $this->HandlingTimeEnabled;
    }
    /**
     * Set HandlingTimeEnabled value
     * @param bool $handlingTimeEnabled
     * @return \StructType\SiteDefaultsType
     */
    public function setHandlingTimeEnabled($handlingTimeEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($handlingTimeEnabled) && !is_bool($handlingTimeEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($handlingTimeEnabled, true), gettype($handlingTimeEnabled)), __LINE__);
        }
        $this->HandlingTimeEnabled = $handlingTimeEnabled;
        return $this;
    }
    /**
     * Get MaxFlatShippingCost value
     * @return \StructType\AmountType|null
     */
    public function getMaxFlatShippingCost()
    {
        return $this->MaxFlatShippingCost;
    }
    /**
     * Set MaxFlatShippingCost value
     * @param \StructType\AmountType $maxFlatShippingCost
     * @return \StructType\SiteDefaultsType
     */
    public function setMaxFlatShippingCost(\StructType\AmountType $maxFlatShippingCost = null)
    {
        $this->MaxFlatShippingCost = $maxFlatShippingCost;
        return $this;
    }
    /**
     * Get MaxFlatShippingCostCBTExempt value
     * @return bool|null
     */
    public function getMaxFlatShippingCostCBTExempt()
    {
        return $this->MaxFlatShippingCostCBTExempt;
    }
    /**
     * Set MaxFlatShippingCostCBTExempt value
     * @param bool $maxFlatShippingCostCBTExempt
     * @return \StructType\SiteDefaultsType
     */
    public function setMaxFlatShippingCostCBTExempt($maxFlatShippingCostCBTExempt = null)
    {
        // validation for constraint: boolean
        if (!is_null($maxFlatShippingCostCBTExempt) && !is_bool($maxFlatShippingCostCBTExempt)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($maxFlatShippingCostCBTExempt, true), gettype($maxFlatShippingCostCBTExempt)), __LINE__);
        }
        $this->MaxFlatShippingCostCBTExempt = $maxFlatShippingCostCBTExempt;
        return $this;
    }
    /**
     * Get Group1MaxFlatShippingCost value
     * @return \StructType\AmountType|null
     */
    public function getGroup1MaxFlatShippingCost()
    {
        return $this->Group1MaxFlatShippingCost;
    }
    /**
     * Set Group1MaxFlatShippingCost value
     * @param \StructType\AmountType $group1MaxFlatShippingCost
     * @return \StructType\SiteDefaultsType
     */
    public function setGroup1MaxFlatShippingCost(\StructType\AmountType $group1MaxFlatShippingCost = null)
    {
        $this->Group1MaxFlatShippingCost = $group1MaxFlatShippingCost;
        return $this;
    }
    /**
     * Get Group2MaxFlatShippingCost value
     * @return \StructType\AmountType|null
     */
    public function getGroup2MaxFlatShippingCost()
    {
        return $this->Group2MaxFlatShippingCost;
    }
    /**
     * Set Group2MaxFlatShippingCost value
     * @param \StructType\AmountType $group2MaxFlatShippingCost
     * @return \StructType\SiteDefaultsType
     */
    public function setGroup2MaxFlatShippingCost(\StructType\AmountType $group2MaxFlatShippingCost = null)
    {
        $this->Group2MaxFlatShippingCost = $group2MaxFlatShippingCost;
        return $this;
    }
    /**
     * Get Group3MaxFlatShippingCost value
     * @return \StructType\AmountType|null
     */
    public function getGroup3MaxFlatShippingCost()
    {
        return $this->Group3MaxFlatShippingCost;
    }
    /**
     * Set Group3MaxFlatShippingCost value
     * @param \StructType\AmountType $group3MaxFlatShippingCost
     * @return \StructType\SiteDefaultsType
     */
    public function setGroup3MaxFlatShippingCost(\StructType\AmountType $group3MaxFlatShippingCost = null)
    {
        $this->Group3MaxFlatShippingCost = $group3MaxFlatShippingCost;
        return $this;
    }
    /**
     * Get PaymentMethod value
     * @return string[]|null
     */
    public function getPaymentMethod()
    {
        return $this->PaymentMethod;
    }
    /**
     * This method is responsible for validating the values passed to the setPaymentMethod method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPaymentMethod method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePaymentMethodForArrayConstraintsFromSetPaymentMethod(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $siteDefaultsTypePaymentMethodItem) {
            // validation for constraint: enumeration
            if (!\EnumType\BuyerPaymentMethodCodeType::valueIsValid($siteDefaultsTypePaymentMethodItem)) {
                $invalidValues[] = is_object($siteDefaultsTypePaymentMethodItem) ? get_class($siteDefaultsTypePaymentMethodItem) : sprintf('%s(%s)', gettype($siteDefaultsTypePaymentMethodItem), var_export($siteDefaultsTypePaymentMethodItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\BuyerPaymentMethodCodeType', is_array($invalidValues) ? implode(', ', $invalidValues) : var_export($invalidValues, true), implode(', ', \EnumType\BuyerPaymentMethodCodeType::getValidValues()));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set PaymentMethod value
     * @uses \EnumType\BuyerPaymentMethodCodeType::valueIsValid()
     * @uses \EnumType\BuyerPaymentMethodCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string[] $paymentMethod
     * @return \StructType\SiteDefaultsType
     */
    public function setPaymentMethod(array $paymentMethod = array())
    {
        // validation for constraint: array
        if ('' !== ($paymentMethodArrayErrorMessage = self::validatePaymentMethodForArrayConstraintsFromSetPaymentMethod($paymentMethod))) {
            throw new \InvalidArgumentException($paymentMethodArrayErrorMessage, __LINE__);
        }
        $this->PaymentMethod = $paymentMethod;
        return $this;
    }
    /**
     * Add item to PaymentMethod value
     * @uses \EnumType\BuyerPaymentMethodCodeType::valueIsValid()
     * @uses \EnumType\BuyerPaymentMethodCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $item
     * @return \StructType\SiteDefaultsType
     */
    public function addToPaymentMethod($item)
    {
        // validation for constraint: enumeration
        if (!\EnumType\BuyerPaymentMethodCodeType::valueIsValid($item)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\BuyerPaymentMethodCodeType', is_array($item) ? implode(', ', $item) : var_export($item, true), implode(', ', \EnumType\BuyerPaymentMethodCodeType::getValidValues())), __LINE__);
        }
        $this->PaymentMethod[] = $item;
        return $this;
    }
    /**
     * Get VariationsEnabled value
     * @return bool|null
     */
    public function getVariationsEnabled()
    {
        return $this->VariationsEnabled;
    }
    /**
     * Set VariationsEnabled value
     * @param bool $variationsEnabled
     * @return \StructType\SiteDefaultsType
     */
    public function setVariationsEnabled($variationsEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($variationsEnabled) && !is_bool($variationsEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($variationsEnabled, true), gettype($variationsEnabled)), __LINE__);
        }
        $this->VariationsEnabled = $variationsEnabled;
        return $this;
    }
    /**
     * Get AttributeConversionEnabled value
     * @return string|null
     */
    public function getAttributeConversionEnabled()
    {
        return $this->AttributeConversionEnabled;
    }
    /**
     * Set AttributeConversionEnabled value
     * @uses \EnumType\AttributeConversionEnabledCodeType::valueIsValid()
     * @uses \EnumType\AttributeConversionEnabledCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $attributeConversionEnabled
     * @return \StructType\SiteDefaultsType
     */
    public function setAttributeConversionEnabled($attributeConversionEnabled = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\AttributeConversionEnabledCodeType::valueIsValid($attributeConversionEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\AttributeConversionEnabledCodeType', is_array($attributeConversionEnabled) ? implode(', ', $attributeConversionEnabled) : var_export($attributeConversionEnabled, true), implode(', ', \EnumType\AttributeConversionEnabledCodeType::getValidValues())), __LINE__);
        }
        $this->AttributeConversionEnabled = $attributeConversionEnabled;
        return $this;
    }
    /**
     * Get FreeGalleryPlusEnabled value
     * @return bool|null
     */
    public function getFreeGalleryPlusEnabled()
    {
        return $this->FreeGalleryPlusEnabled;
    }
    /**
     * Set FreeGalleryPlusEnabled value
     * @param bool $freeGalleryPlusEnabled
     * @return \StructType\SiteDefaultsType
     */
    public function setFreeGalleryPlusEnabled($freeGalleryPlusEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($freeGalleryPlusEnabled) && !is_bool($freeGalleryPlusEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($freeGalleryPlusEnabled, true), gettype($freeGalleryPlusEnabled)), __LINE__);
        }
        $this->FreeGalleryPlusEnabled = $freeGalleryPlusEnabled;
        return $this;
    }
    /**
     * Get FreePicturePackEnabled value
     * @return bool|null
     */
    public function getFreePicturePackEnabled()
    {
        return $this->FreePicturePackEnabled;
    }
    /**
     * Set FreePicturePackEnabled value
     * @param bool $freePicturePackEnabled
     * @return \StructType\SiteDefaultsType
     */
    public function setFreePicturePackEnabled($freePicturePackEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($freePicturePackEnabled) && !is_bool($freePicturePackEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($freePicturePackEnabled, true), gettype($freePicturePackEnabled)), __LINE__);
        }
        $this->FreePicturePackEnabled = $freePicturePackEnabled;
        return $this;
    }
    /**
     * Get ItemCompatibilityEnabled value
     * @return string|null
     */
    public function getItemCompatibilityEnabled()
    {
        return $this->ItemCompatibilityEnabled;
    }
    /**
     * Set ItemCompatibilityEnabled value
     * @uses \EnumType\ItemCompatibilityEnabledCodeType::valueIsValid()
     * @uses \EnumType\ItemCompatibilityEnabledCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $itemCompatibilityEnabled
     * @return \StructType\SiteDefaultsType
     */
    public function setItemCompatibilityEnabled($itemCompatibilityEnabled = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\ItemCompatibilityEnabledCodeType::valueIsValid($itemCompatibilityEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\ItemCompatibilityEnabledCodeType', is_array($itemCompatibilityEnabled) ? implode(', ', $itemCompatibilityEnabled) : var_export($itemCompatibilityEnabled, true), implode(', ', \EnumType\ItemCompatibilityEnabledCodeType::getValidValues())), __LINE__);
        }
        $this->ItemCompatibilityEnabled = $itemCompatibilityEnabled;
        return $this;
    }
    /**
     * Get MinItemCompatibility value
     * @return int|null
     */
    public function getMinItemCompatibility()
    {
        return $this->MinItemCompatibility;
    }
    /**
     * Set MinItemCompatibility value
     * @param int $minItemCompatibility
     * @return \StructType\SiteDefaultsType
     */
    public function setMinItemCompatibility($minItemCompatibility = null)
    {
        // validation for constraint: int
        if (!is_null($minItemCompatibility) && !(is_int($minItemCompatibility) || ctype_digit($minItemCompatibility))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($minItemCompatibility, true), gettype($minItemCompatibility)), __LINE__);
        }
        $this->MinItemCompatibility = $minItemCompatibility;
        return $this;
    }
    /**
     * Get MaxItemCompatibility value
     * @return int|null
     */
    public function getMaxItemCompatibility()
    {
        return $this->MaxItemCompatibility;
    }
    /**
     * Set MaxItemCompatibility value
     * @param int $maxItemCompatibility
     * @return \StructType\SiteDefaultsType
     */
    public function setMaxItemCompatibility($maxItemCompatibility = null)
    {
        // validation for constraint: int
        if (!is_null($maxItemCompatibility) && !(is_int($maxItemCompatibility) || ctype_digit($maxItemCompatibility))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($maxItemCompatibility, true), gettype($maxItemCompatibility)), __LINE__);
        }
        $this->MaxItemCompatibility = $maxItemCompatibility;
        return $this;
    }
    /**
     * Get ConditionEnabled value
     * @return string|null
     */
    public function getConditionEnabled()
    {
        return $this->ConditionEnabled;
    }
    /**
     * Set ConditionEnabled value
     * @uses \EnumType\ConditionEnabledCodeType::valueIsValid()
     * @uses \EnumType\ConditionEnabledCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $conditionEnabled
     * @return \StructType\SiteDefaultsType
     */
    public function setConditionEnabled($conditionEnabled = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\ConditionEnabledCodeType::valueIsValid($conditionEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\ConditionEnabledCodeType', is_array($conditionEnabled) ? implode(', ', $conditionEnabled) : var_export($conditionEnabled, true), implode(', ', \EnumType\ConditionEnabledCodeType::getValidValues())), __LINE__);
        }
        $this->ConditionEnabled = $conditionEnabled;
        return $this;
    }
    /**
     * Get ConditionValues value
     * @return \StructType\ConditionValuesType|null
     */
    public function getConditionValues()
    {
        return $this->ConditionValues;
    }
    /**
     * Set ConditionValues value
     * @param \StructType\ConditionValuesType $conditionValues
     * @return \StructType\SiteDefaultsType
     */
    public function setConditionValues(\StructType\ConditionValuesType $conditionValues = null)
    {
        $this->ConditionValues = $conditionValues;
        return $this;
    }
    /**
     * Get SpecialFeatures value
     * @return \StructType\ConditionValuesType|null
     */
    public function getSpecialFeatures()
    {
        return $this->SpecialFeatures;
    }
    /**
     * Set SpecialFeatures value
     * @param \StructType\ConditionValuesType $specialFeatures
     * @return \StructType\SiteDefaultsType
     */
    public function setSpecialFeatures(\StructType\ConditionValuesType $specialFeatures = null)
    {
        $this->SpecialFeatures = $specialFeatures;
        return $this;
    }
    /**
     * Get ValueCategory value
     * @return bool|null
     */
    public function getValueCategory()
    {
        return $this->ValueCategory;
    }
    /**
     * Set ValueCategory value
     * @param bool $valueCategory
     * @return \StructType\SiteDefaultsType
     */
    public function setValueCategory($valueCategory = null)
    {
        // validation for constraint: boolean
        if (!is_null($valueCategory) && !is_bool($valueCategory)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($valueCategory, true), gettype($valueCategory)), __LINE__);
        }
        $this->ValueCategory = $valueCategory;
        return $this;
    }
    /**
     * Get ProductCreationEnabled value
     * @return string|null
     */
    public function getProductCreationEnabled()
    {
        return $this->ProductCreationEnabled;
    }
    /**
     * Set ProductCreationEnabled value
     * @uses \EnumType\ProductCreationEnabledCodeType::valueIsValid()
     * @uses \EnumType\ProductCreationEnabledCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $productCreationEnabled
     * @return \StructType\SiteDefaultsType
     */
    public function setProductCreationEnabled($productCreationEnabled = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\ProductCreationEnabledCodeType::valueIsValid($productCreationEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\ProductCreationEnabledCodeType', is_array($productCreationEnabled) ? implode(', ', $productCreationEnabled) : var_export($productCreationEnabled, true), implode(', ', \EnumType\ProductCreationEnabledCodeType::getValidValues())), __LINE__);
        }
        $this->ProductCreationEnabled = $productCreationEnabled;
        return $this;
    }
    /**
     * Get EANEnabled value
     * @return string|null
     */
    public function getEANEnabled()
    {
        return $this->EANEnabled;
    }
    /**
     * Set EANEnabled value
     * @uses \EnumType\ProductIdentiferEnabledCodeType::valueIsValid()
     * @uses \EnumType\ProductIdentiferEnabledCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $eANEnabled
     * @return \StructType\SiteDefaultsType
     */
    public function setEANEnabled($eANEnabled = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\ProductIdentiferEnabledCodeType::valueIsValid($eANEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\ProductIdentiferEnabledCodeType', is_array($eANEnabled) ? implode(', ', $eANEnabled) : var_export($eANEnabled, true), implode(', ', \EnumType\ProductIdentiferEnabledCodeType::getValidValues())), __LINE__);
        }
        $this->EANEnabled = $eANEnabled;
        return $this;
    }
    /**
     * Get ISBNEnabled value
     * @return string|null
     */
    public function getISBNEnabled()
    {
        return $this->ISBNEnabled;
    }
    /**
     * Set ISBNEnabled value
     * @uses \EnumType\ProductIdentiferEnabledCodeType::valueIsValid()
     * @uses \EnumType\ProductIdentiferEnabledCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $iSBNEnabled
     * @return \StructType\SiteDefaultsType
     */
    public function setISBNEnabled($iSBNEnabled = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\ProductIdentiferEnabledCodeType::valueIsValid($iSBNEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\ProductIdentiferEnabledCodeType', is_array($iSBNEnabled) ? implode(', ', $iSBNEnabled) : var_export($iSBNEnabled, true), implode(', ', \EnumType\ProductIdentiferEnabledCodeType::getValidValues())), __LINE__);
        }
        $this->ISBNEnabled = $iSBNEnabled;
        return $this;
    }
    /**
     * Get UPCEnabled value
     * @return string|null
     */
    public function getUPCEnabled()
    {
        return $this->UPCEnabled;
    }
    /**
     * Set UPCEnabled value
     * @uses \EnumType\ProductIdentiferEnabledCodeType::valueIsValid()
     * @uses \EnumType\ProductIdentiferEnabledCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $uPCEnabled
     * @return \StructType\SiteDefaultsType
     */
    public function setUPCEnabled($uPCEnabled = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\ProductIdentiferEnabledCodeType::valueIsValid($uPCEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\ProductIdentiferEnabledCodeType', is_array($uPCEnabled) ? implode(', ', $uPCEnabled) : var_export($uPCEnabled, true), implode(', ', \EnumType\ProductIdentiferEnabledCodeType::getValidValues())), __LINE__);
        }
        $this->UPCEnabled = $uPCEnabled;
        return $this;
    }
    /**
     * Get MaxGranularFitmentCount value
     * @return int|null
     */
    public function getMaxGranularFitmentCount()
    {
        return $this->MaxGranularFitmentCount;
    }
    /**
     * Set MaxGranularFitmentCount value
     * @param int $maxGranularFitmentCount
     * @return \StructType\SiteDefaultsType
     */
    public function setMaxGranularFitmentCount($maxGranularFitmentCount = null)
    {
        // validation for constraint: int
        if (!is_null($maxGranularFitmentCount) && !(is_int($maxGranularFitmentCount) || ctype_digit($maxGranularFitmentCount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($maxGranularFitmentCount, true), gettype($maxGranularFitmentCount)), __LINE__);
        }
        $this->MaxGranularFitmentCount = $maxGranularFitmentCount;
        return $this;
    }
    /**
     * Get CompatibleVehicleType value
     * @return string|null
     */
    public function getCompatibleVehicleType()
    {
        return $this->CompatibleVehicleType;
    }
    /**
     * Set CompatibleVehicleType value
     * @param string $compatibleVehicleType
     * @return \StructType\SiteDefaultsType
     */
    public function setCompatibleVehicleType($compatibleVehicleType = null)
    {
        // validation for constraint: string
        if (!is_null($compatibleVehicleType) && !is_string($compatibleVehicleType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($compatibleVehicleType, true), gettype($compatibleVehicleType)), __LINE__);
        }
        $this->CompatibleVehicleType = $compatibleVehicleType;
        return $this;
    }
    /**
     * Get PaymentOptionsGroup value
     * @return string|null
     */
    public function getPaymentOptionsGroup()
    {
        return $this->PaymentOptionsGroup;
    }
    /**
     * Set PaymentOptionsGroup value
     * @uses \EnumType\PaymentOptionsGroupEnabledCodeType::valueIsValid()
     * @uses \EnumType\PaymentOptionsGroupEnabledCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $paymentOptionsGroup
     * @return \StructType\SiteDefaultsType
     */
    public function setPaymentOptionsGroup($paymentOptionsGroup = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\PaymentOptionsGroupEnabledCodeType::valueIsValid($paymentOptionsGroup)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\PaymentOptionsGroupEnabledCodeType', is_array($paymentOptionsGroup) ? implode(', ', $paymentOptionsGroup) : var_export($paymentOptionsGroup, true), implode(', ', \EnumType\PaymentOptionsGroupEnabledCodeType::getValidValues())), __LINE__);
        }
        $this->PaymentOptionsGroup = $paymentOptionsGroup;
        return $this;
    }
    /**
     * Get ShippingProfileCategoryGroup value
     * @return string|null
     */
    public function getShippingProfileCategoryGroup()
    {
        return $this->ShippingProfileCategoryGroup;
    }
    /**
     * Set ShippingProfileCategoryGroup value
     * @uses \EnumType\ProfileCategoryGroupCodeType::valueIsValid()
     * @uses \EnumType\ProfileCategoryGroupCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $shippingProfileCategoryGroup
     * @return \StructType\SiteDefaultsType
     */
    public function setShippingProfileCategoryGroup($shippingProfileCategoryGroup = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\ProfileCategoryGroupCodeType::valueIsValid($shippingProfileCategoryGroup)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\ProfileCategoryGroupCodeType', is_array($shippingProfileCategoryGroup) ? implode(', ', $shippingProfileCategoryGroup) : var_export($shippingProfileCategoryGroup, true), implode(', ', \EnumType\ProfileCategoryGroupCodeType::getValidValues())), __LINE__);
        }
        $this->ShippingProfileCategoryGroup = $shippingProfileCategoryGroup;
        return $this;
    }
    /**
     * Get PaymentProfileCategoryGroup value
     * @return string|null
     */
    public function getPaymentProfileCategoryGroup()
    {
        return $this->PaymentProfileCategoryGroup;
    }
    /**
     * Set PaymentProfileCategoryGroup value
     * @uses \EnumType\ProfileCategoryGroupCodeType::valueIsValid()
     * @uses \EnumType\ProfileCategoryGroupCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $paymentProfileCategoryGroup
     * @return \StructType\SiteDefaultsType
     */
    public function setPaymentProfileCategoryGroup($paymentProfileCategoryGroup = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\ProfileCategoryGroupCodeType::valueIsValid($paymentProfileCategoryGroup)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\ProfileCategoryGroupCodeType', is_array($paymentProfileCategoryGroup) ? implode(', ', $paymentProfileCategoryGroup) : var_export($paymentProfileCategoryGroup, true), implode(', ', \EnumType\ProfileCategoryGroupCodeType::getValidValues())), __LINE__);
        }
        $this->PaymentProfileCategoryGroup = $paymentProfileCategoryGroup;
        return $this;
    }
    /**
     * Get ReturnPolicyProfileCategoryGroup value
     * @return string|null
     */
    public function getReturnPolicyProfileCategoryGroup()
    {
        return $this->ReturnPolicyProfileCategoryGroup;
    }
    /**
     * Set ReturnPolicyProfileCategoryGroup value
     * @uses \EnumType\ProfileCategoryGroupCodeType::valueIsValid()
     * @uses \EnumType\ProfileCategoryGroupCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $returnPolicyProfileCategoryGroup
     * @return \StructType\SiteDefaultsType
     */
    public function setReturnPolicyProfileCategoryGroup($returnPolicyProfileCategoryGroup = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\ProfileCategoryGroupCodeType::valueIsValid($returnPolicyProfileCategoryGroup)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\ProfileCategoryGroupCodeType', is_array($returnPolicyProfileCategoryGroup) ? implode(', ', $returnPolicyProfileCategoryGroup) : var_export($returnPolicyProfileCategoryGroup, true), implode(', ', \EnumType\ProfileCategoryGroupCodeType::getValidValues())), __LINE__);
        }
        $this->ReturnPolicyProfileCategoryGroup = $returnPolicyProfileCategoryGroup;
        return $this;
    }
    /**
     * Get VINSupported value
     * @return bool|null
     */
    public function getVINSupported()
    {
        return $this->VINSupported;
    }
    /**
     * Set VINSupported value
     * @param bool $vINSupported
     * @return \StructType\SiteDefaultsType
     */
    public function setVINSupported($vINSupported = null)
    {
        // validation for constraint: boolean
        if (!is_null($vINSupported) && !is_bool($vINSupported)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($vINSupported, true), gettype($vINSupported)), __LINE__);
        }
        $this->VINSupported = $vINSupported;
        return $this;
    }
    /**
     * Get VRMSupported value
     * @return bool|null
     */
    public function getVRMSupported()
    {
        return $this->VRMSupported;
    }
    /**
     * Set VRMSupported value
     * @param bool $vRMSupported
     * @return \StructType\SiteDefaultsType
     */
    public function setVRMSupported($vRMSupported = null)
    {
        // validation for constraint: boolean
        if (!is_null($vRMSupported) && !is_bool($vRMSupported)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($vRMSupported, true), gettype($vRMSupported)), __LINE__);
        }
        $this->VRMSupported = $vRMSupported;
        return $this;
    }
    /**
     * Get SellerProvidedTitleSupported value
     * @return bool|null
     */
    public function getSellerProvidedTitleSupported()
    {
        return $this->SellerProvidedTitleSupported;
    }
    /**
     * Set SellerProvidedTitleSupported value
     * @param bool $sellerProvidedTitleSupported
     * @return \StructType\SiteDefaultsType
     */
    public function setSellerProvidedTitleSupported($sellerProvidedTitleSupported = null)
    {
        // validation for constraint: boolean
        if (!is_null($sellerProvidedTitleSupported) && !is_bool($sellerProvidedTitleSupported)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($sellerProvidedTitleSupported, true), gettype($sellerProvidedTitleSupported)), __LINE__);
        }
        $this->SellerProvidedTitleSupported = $sellerProvidedTitleSupported;
        return $this;
    }
    /**
     * Get DepositSupported value
     * @return bool|null
     */
    public function getDepositSupported()
    {
        return $this->DepositSupported;
    }
    /**
     * Set DepositSupported value
     * @param bool $depositSupported
     * @return \StructType\SiteDefaultsType
     */
    public function setDepositSupported($depositSupported = null)
    {
        // validation for constraint: boolean
        if (!is_null($depositSupported) && !is_bool($depositSupported)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($depositSupported, true), gettype($depositSupported)), __LINE__);
        }
        $this->DepositSupported = $depositSupported;
        return $this;
    }
    /**
     * Get GlobalShippingEnabled value
     * @return bool|null
     */
    public function getGlobalShippingEnabled()
    {
        return $this->GlobalShippingEnabled;
    }
    /**
     * Set GlobalShippingEnabled value
     * @param bool $globalShippingEnabled
     * @return \StructType\SiteDefaultsType
     */
    public function setGlobalShippingEnabled($globalShippingEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($globalShippingEnabled) && !is_bool($globalShippingEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($globalShippingEnabled, true), gettype($globalShippingEnabled)), __LINE__);
        }
        $this->GlobalShippingEnabled = $globalShippingEnabled;
        return $this;
    }
    /**
     * Get AdditionalCompatibilityEnabled value
     * @return bool|null
     */
    public function getAdditionalCompatibilityEnabled()
    {
        return $this->AdditionalCompatibilityEnabled;
    }
    /**
     * Set AdditionalCompatibilityEnabled value
     * @param bool $additionalCompatibilityEnabled
     * @return \StructType\SiteDefaultsType
     */
    public function setAdditionalCompatibilityEnabled($additionalCompatibilityEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($additionalCompatibilityEnabled) && !is_bool($additionalCompatibilityEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($additionalCompatibilityEnabled, true), gettype($additionalCompatibilityEnabled)), __LINE__);
        }
        $this->AdditionalCompatibilityEnabled = $additionalCompatibilityEnabled;
        return $this;
    }
    /**
     * Get PickupDropOffEnabled value
     * @return bool|null
     */
    public function getPickupDropOffEnabled()
    {
        return $this->PickupDropOffEnabled;
    }
    /**
     * Set PickupDropOffEnabled value
     * @param bool $pickupDropOffEnabled
     * @return \StructType\SiteDefaultsType
     */
    public function setPickupDropOffEnabled($pickupDropOffEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($pickupDropOffEnabled) && !is_bool($pickupDropOffEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($pickupDropOffEnabled, true), gettype($pickupDropOffEnabled)), __LINE__);
        }
        $this->PickupDropOffEnabled = $pickupDropOffEnabled;
        return $this;
    }
    /**
     * Get DigitalGoodDeliveryEnabled value
     * @return bool|null
     */
    public function getDigitalGoodDeliveryEnabled()
    {
        return $this->DigitalGoodDeliveryEnabled;
    }
    /**
     * Set DigitalGoodDeliveryEnabled value
     * @param bool $digitalGoodDeliveryEnabled
     * @return \StructType\SiteDefaultsType
     */
    public function setDigitalGoodDeliveryEnabled($digitalGoodDeliveryEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($digitalGoodDeliveryEnabled) && !is_bool($digitalGoodDeliveryEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($digitalGoodDeliveryEnabled, true), gettype($digitalGoodDeliveryEnabled)), __LINE__);
        }
        $this->DigitalGoodDeliveryEnabled = $digitalGoodDeliveryEnabled;
        return $this;
    }
    /**
     * Get EpidSupported value
     * @return bool|null
     */
    public function getEpidSupported()
    {
        return $this->EpidSupported;
    }
    /**
     * Set EpidSupported value
     * @param bool $epidSupported
     * @return \StructType\SiteDefaultsType
     */
    public function setEpidSupported($epidSupported = null)
    {
        // validation for constraint: boolean
        if (!is_null($epidSupported) && !is_bool($epidSupported)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($epidSupported, true), gettype($epidSupported)), __LINE__);
        }
        $this->EpidSupported = $epidSupported;
        return $this;
    }
    /**
     * Get KTypeSupported value
     * @return bool|null
     */
    public function getKTypeSupported()
    {
        return $this->KTypeSupported;
    }
    /**
     * Set KTypeSupported value
     * @param bool $kTypeSupported
     * @return \StructType\SiteDefaultsType
     */
    public function setKTypeSupported($kTypeSupported = null)
    {
        // validation for constraint: boolean
        if (!is_null($kTypeSupported) && !is_bool($kTypeSupported)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($kTypeSupported, true), gettype($kTypeSupported)), __LINE__);
        }
        $this->KTypeSupported = $kTypeSupported;
        return $this;
    }
    /**
     * Get ProductRequiredEnabled value
     * @return string|null
     */
    public function getProductRequiredEnabled()
    {
        return $this->ProductRequiredEnabled;
    }
    /**
     * Set ProductRequiredEnabled value
     * @uses \EnumType\ProductRequiredEnabledCodeType::valueIsValid()
     * @uses \EnumType\ProductRequiredEnabledCodeType::getValidValues()
     * @throws \InvalidArgumentException
     * @param string $productRequiredEnabled
     * @return \StructType\SiteDefaultsType
     */
    public function setProductRequiredEnabled($productRequiredEnabled = null)
    {
        // validation for constraint: enumeration
        if (!\EnumType\ProductRequiredEnabledCodeType::valueIsValid($productRequiredEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\ProductRequiredEnabledCodeType', is_array($productRequiredEnabled) ? implode(', ', $productRequiredEnabled) : var_export($productRequiredEnabled, true), implode(', ', \EnumType\ProductRequiredEnabledCodeType::getValidValues())), __LINE__);
        }
        $this->ProductRequiredEnabled = $productRequiredEnabled;
        return $this;
    }
    /**
     * Get DomesticReturnsAcceptedValues value
     * @return \StructType\DomesticReturnsAcceptedCodeType|null
     */
    public function getDomesticReturnsAcceptedValues()
    {
        return $this->DomesticReturnsAcceptedValues;
    }
    /**
     * Set DomesticReturnsAcceptedValues value
     * @param \StructType\DomesticReturnsAcceptedCodeType $domesticReturnsAcceptedValues
     * @return \StructType\SiteDefaultsType
     */
    public function setDomesticReturnsAcceptedValues(\StructType\DomesticReturnsAcceptedCodeType $domesticReturnsAcceptedValues = null)
    {
        $this->DomesticReturnsAcceptedValues = $domesticReturnsAcceptedValues;
        return $this;
    }
    /**
     * Get InternationalReturnsAcceptedValues value
     * @return \StructType\InternationalReturnsAcceptedCodeType|null
     */
    public function getInternationalReturnsAcceptedValues()
    {
        return $this->InternationalReturnsAcceptedValues;
    }
    /**
     * Set InternationalReturnsAcceptedValues value
     * @param \StructType\InternationalReturnsAcceptedCodeType $internationalReturnsAcceptedValues
     * @return \StructType\SiteDefaultsType
     */
    public function setInternationalReturnsAcceptedValues(\StructType\InternationalReturnsAcceptedCodeType $internationalReturnsAcceptedValues = null)
    {
        $this->InternationalReturnsAcceptedValues = $internationalReturnsAcceptedValues;
        return $this;
    }
    /**
     * Get DomesticReturnsDurationValues value
     * @return \StructType\DomesticReturnsDurationCodeType|null
     */
    public function getDomesticReturnsDurationValues()
    {
        return $this->DomesticReturnsDurationValues;
    }
    /**
     * Set DomesticReturnsDurationValues value
     * @param \StructType\DomesticReturnsDurationCodeType $domesticReturnsDurationValues
     * @return \StructType\SiteDefaultsType
     */
    public function setDomesticReturnsDurationValues(\StructType\DomesticReturnsDurationCodeType $domesticReturnsDurationValues = null)
    {
        $this->DomesticReturnsDurationValues = $domesticReturnsDurationValues;
        return $this;
    }
    /**
     * Get InternationalReturnsDurationValues value
     * @return \StructType\InternationalReturnsDurationCodeType|null
     */
    public function getInternationalReturnsDurationValues()
    {
        return $this->InternationalReturnsDurationValues;
    }
    /**
     * Set InternationalReturnsDurationValues value
     * @param \StructType\InternationalReturnsDurationCodeType $internationalReturnsDurationValues
     * @return \StructType\SiteDefaultsType
     */
    public function setInternationalReturnsDurationValues(\StructType\InternationalReturnsDurationCodeType $internationalReturnsDurationValues = null)
    {
        $this->InternationalReturnsDurationValues = $internationalReturnsDurationValues;
        return $this;
    }
    /**
     * Get DomesticReturnsShipmentPayeeValues value
     * @return \StructType\DomesticReturnsShipmentPayeeCodeType|null
     */
    public function getDomesticReturnsShipmentPayeeValues()
    {
        return $this->DomesticReturnsShipmentPayeeValues;
    }
    /**
     * Set DomesticReturnsShipmentPayeeValues value
     * @param \StructType\DomesticReturnsShipmentPayeeCodeType $domesticReturnsShipmentPayeeValues
     * @return \StructType\SiteDefaultsType
     */
    public function setDomesticReturnsShipmentPayeeValues(\StructType\DomesticReturnsShipmentPayeeCodeType $domesticReturnsShipmentPayeeValues = null)
    {
        $this->DomesticReturnsShipmentPayeeValues = $domesticReturnsShipmentPayeeValues;
        return $this;
    }
    /**
     * Get InternationalReturnsShipmentPayeeValues value
     * @return \StructType\InternationalReturnsShipmentPayeeCodeType|null
     */
    public function getInternationalReturnsShipmentPayeeValues()
    {
        return $this->InternationalReturnsShipmentPayeeValues;
    }
    /**
     * Set InternationalReturnsShipmentPayeeValues value
     * @param \StructType\InternationalReturnsShipmentPayeeCodeType $internationalReturnsShipmentPayeeValues
     * @return \StructType\SiteDefaultsType
     */
    public function setInternationalReturnsShipmentPayeeValues(\StructType\InternationalReturnsShipmentPayeeCodeType $internationalReturnsShipmentPayeeValues = null)
    {
        $this->InternationalReturnsShipmentPayeeValues = $internationalReturnsShipmentPayeeValues;
        return $this;
    }
    /**
     * Get DomesticRefundMethodValues value
     * @return \StructType\DomesticRefundMethodCodeType|null
     */
    public function getDomesticRefundMethodValues()
    {
        return $this->DomesticRefundMethodValues;
    }
    /**
     * Set DomesticRefundMethodValues value
     * @param \StructType\DomesticRefundMethodCodeType $domesticRefundMethodValues
     * @return \StructType\SiteDefaultsType
     */
    public function setDomesticRefundMethodValues(\StructType\DomesticRefundMethodCodeType $domesticRefundMethodValues = null)
    {
        $this->DomesticRefundMethodValues = $domesticRefundMethodValues;
        return $this;
    }
    /**
     * Get InternationalRefundMethodValues value
     * @return \StructType\InternationalRefundMethodCodeType|null
     */
    public function getInternationalRefundMethodValues()
    {
        return $this->InternationalRefundMethodValues;
    }
    /**
     * Set InternationalRefundMethodValues value
     * @param \StructType\InternationalRefundMethodCodeType $internationalRefundMethodValues
     * @return \StructType\SiteDefaultsType
     */
    public function setInternationalRefundMethodValues(\StructType\InternationalRefundMethodCodeType $internationalRefundMethodValues = null)
    {
        $this->InternationalRefundMethodValues = $internationalRefundMethodValues;
        return $this;
    }
    /**
     * Get ReturnPolicyDescriptionEnabled value
     * @return bool|null
     */
    public function getReturnPolicyDescriptionEnabled()
    {
        return $this->ReturnPolicyDescriptionEnabled;
    }
    /**
     * Set ReturnPolicyDescriptionEnabled value
     * @param bool $returnPolicyDescriptionEnabled
     * @return \StructType\SiteDefaultsType
     */
    public function setReturnPolicyDescriptionEnabled($returnPolicyDescriptionEnabled = null)
    {
        // validation for constraint: boolean
        if (!is_null($returnPolicyDescriptionEnabled) && !is_bool($returnPolicyDescriptionEnabled)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($returnPolicyDescriptionEnabled, true), gettype($returnPolicyDescriptionEnabled)), __LINE__);
        }
        $this->ReturnPolicyDescriptionEnabled = $returnPolicyDescriptionEnabled;
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
     * @return \StructType\SiteDefaultsType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
