<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReturnPolicyType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type used to express the details of the return policy for an item. <br><br> Historically, the <b>GeteBayDetails</b> call has been used to retrieve site-level return policy metadata. However, the <b>GetCategoryFeatures</b> call is now
 * recommended instead because this call now returns category-level metadata for both domestic and international return policies. <br><br> <span class="tablenote"><b>Note:</b> If a seller does not add a separate international return policy, the settings
 * in the domestic return policy will be used instead. For more information on setting separate domestic and international return policies, see the <a
 * href="https://pages.ebay.com/seller-center/seller-updates/2018-summer/simplified-returns.html#international-returns-policy" target="_blank">International returns policy</a> help topic. </span>
 * @subpackage Structs
 */
class ReturnPolicyType extends AbstractStructBase
{
    /**
     * The RefundOption
     * Meta information extracted from the WSDL
     * - documentation: This field indicates how the seller compensates buyers for returns</a>. <code>MoneyBack</code> is the only supported value for all marketplaces except for the US. On the US marketplace, you can set this value to either
     * <code>MoneyBack</code> or <code>MoneyBackOrReplacement</code>. <code>MoneyBackOrReplacement</code> can be used by sellers that have the depth of inventory to support an exchange for an identical item. However, ultimately, it is up to the buyer on
     * whether they want money back or a replacement item. <br><br> <b>For ReviseItem only:</b> You cannot change the value of this field if the listing has bids or sales, or if the listing ends within 12 hours. For more details, see the <b>ReturnPolicy</b>
     * description. <br><br> <span class="tablenote"><b>Note:</b> If a seller ships internationally, and wants to define and use a separate international returns policy, the international equivalent of this field is the <b>InternationalRefundOption</b>
     * field.</span>
     * - minOccurs: 0
     * @var string
     */
    public $RefundOption;
    /**
     * The Refund
     * Meta information extracted from the WSDL
     * - documentation: Display string that buyer applications can use to present <b>RefundOption</b> in a more user-friendly format to buyers. For example, in <b>GetItem</b> and related calls, this value is usually localized and can contain spaces. If
     * necessary, you can predict the choice of values based on the <b>Refund.Description</b> options returned by <b>GeteBayDetails</b>. <br><br> This field is applicable to only the US marketplace and is not applicable as input to the
     * <b>Add</b>/<b>Revise</b>/<b>Relist</b> family of calls. (Use <b>RefundOption</b> instead.)
     * - minOccurs: 0
     * @var string
     */
    public $Refund;
    /**
     * The ReturnsWithinOption
     * Meta information extracted from the WSDL
     * - documentation: Specifies the amount of time the buyer has to return an item. The return period begins when the item is marked "delivered" at the buyer's specified ship-to location. Most marketplaces and categories support 30-day and 60-day return
     * periods. eBay sites often set 30-days as the default value for this field and sellers are obligated to honor the values that are set for a listing. This value is required if <b>ReturnsAcceptedOption=ReturnsAccepted</b>. <br><br> <b>Applicable
     * values:</b> Retrieve the values supported by a marketplace and category by calling <b>GetCategoryFeatures</b> with <b>FeatureID</b> set to <code>DomesticReturnsDurationValues</code>, then see the values returned under the
     * <b>Category.DomesticReturnsDurationValues</b> container in the response. <br/><br/> <b>For ReviseItem only:</b> You cannot change the value of this field if the listing has bids or sales, or if the listing ends within 12 hours. For more details, see
     * the <b>ReturnPolicy</b> description. <br><br> <span class="tablenote"><b>Note:</b> If a seller ships internationally, and wants to define and use a separate international returns policy, the international equivalent of this field is the
     * <b>InternationalReturnsWithinOption</b> field.</span>
     * - minOccurs: 0
     * @var string
     */
    public $ReturnsWithinOption;
    /**
     * The ReturnsWithin
     * Meta information extracted from the WSDL
     * - documentation: Display string that buyer applications can use to present <b>ReturnsWithinOption</b> in a more user-friendly format to buyers. For example, in <b>GetItem</b> and related calls, this value is usually localized and can contain spaces.
     * <br/><br/> If necessary, you can predict the choice of values based on the <b>ReturnsWithin.Description</b> options returned by <b>GeteBayDetails</b>. <br><br> Not applicable as input to the <b>AddItem</b> family of calls. (Use
     * <b>ReturnsWithinOption</b> instead.)
     * - minOccurs: 0
     * @var string
     */
    public $ReturnsWithin;
    /**
     * The ReturnsAcceptedOption
     * Meta information extracted from the WSDL
     * - documentation: This required field indicates whether or not the seller accepts returns. <br><br> Applicable values are <code>ReturnsAccepted</code> or <code>ReturnsNotAccepted</code>. When set to <code>ReturnsAccepted</code>, this option indicates
     * the seller allows items to be returned. Specify <b>ReturnsNotAccepted</b> for a listing if returns are not accepted. <br><br> On the eBay DE, IE, and UK marketplaces, registered business sellers must accept returns for fixed-price items (including
     * auction items with Buy It Now and any other fixed price formats) when the category requires a return policy. On some European sites, such as eBay Germany (DE), registered business sellers are required to accept returns. Use the Trading call
     * <b>GetUser</b> to determine the status of an eBay business seller in DE, IE, and UK. Review the <b>User.SellerInfo.SellerBusinessType</b> field in the response. <br> <br> <span class="tablenote"><b>Note:</b> In order for Top-Rated sellers to receive
     * a Top-Rated Plus seal for their listings, returns must be accepted for their items (<b>ReturnsAcceptedOption</b> = <code>ReturnsAccepted</code>) and handling time should be set to zero-day (same-day shipping) or one-day shipping. Set the handling
     * time (in days) using the <b>Item.DispatchTimeMax</b> field.</span> <br> Top-Rated listings qualify for the greatest average boost in Best Match and for the 20 percent Final Value Fee discount. For more information on eBay's Top-Rated seller program,
     * see the <a href="https://pages.ebay.com/help/sell/top-rated.html">Seller levels and performance standards</a> page.</p> <br> <b>For ReviseItem only:</b> You cannot change the value of this field if the listing has bids or sales, or if the listing
     * ends within 12 hours. For more details, see the <b>ReturnPolicy</b> description. <br><br> <span class="tablenote"><b>Note:</b> If a seller ships internationally, and wants to define and use a separate international returns policy, the international
     * equivalent of this field is the <b>InternationalReturnsAcceptedOption</b> field.</span>
     * - minOccurs: 0
     * @var string
     */
    public $ReturnsAcceptedOption;
    /**
     * The ReturnsAccepted
     * Meta information extracted from the WSDL
     * - documentation: Display string that buyer applications can use to present <b>ReturnsAcceptedOption</b> in a more user-friendly format to buyers. For example, in <b>GetItem</b> and related calls, this value is usually localized and can contain
     * spaces. <br/><br/> If necessary, you can predict the choice of values based on the <b>ReturnsAccepted.Description</b> options returned by <b>GeteBayDetails</b>. <br><br> Not applicable as input to the <b>AddItem</b> family of calls. (Use
     * <b>ReturnsAcceptedOption</b> instead.)
     * - minOccurs: 0
     * @var string
     */
    public $ReturnsAccepted;
    /**
     * The Description
     * Meta information extracted from the WSDL
     * - documentation: This field contains the seller's detailed explanation for their return policy and is displayed in the Return Policy section of the View Item page. This field is valid in only the following marketplaces (the field is otherwise
     * ignored): <ul> <li>Germany (DE)</li> <li>Austria (AT)</li> <li>France (FR)</li> <li>Italy (IT)</li> <li>Spain (ES)</li> </ul> Where valid, sellers can use this field to add details about their return policies. eBay uses this text string as-is in the
     * additional details section of the View Item page. Avoid HTML and avoid character entity references (such as &amp;pound; or &amp;#163;). If you include special characters in the return policy description, use the literal UTF-8 or ISO-8559-1 character
     * (e.g. &#163;). <br><br> <b>For AddItem, VerifyAddItem, and RelistItem:</b> If the seller accepts returns (<b>ReturnsAcceptedOption</b> = <code>ReturnsAccepted</code>) but does not specify this field when listing the item, <b>GetItem</b> returns this
     * as an empty node. <br><br> <b>For ReviseItem only:</b> You cannot change the value of this field if the listing has bids or sales, or if the listing ends within 12 hours. For more details, see the <b>ReturnPolicy</b> description. <br>
     * - minOccurs: 0
     * @var string
     */
    public $Description;
    /**
     * The WarrantyOfferedOption
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated as of release 1061 and any values supplied in this field are ignored. eBay no longer supports warranty policies for returns.
     * - minOccurs: 0
     * @var string
     */
    public $WarrantyOfferedOption;
    /**
     * The WarrantyOffered
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated as of release 1061 and any values supplied in this field are ignored. eBay no longer supports warranty policies for returns.
     * - minOccurs: 0
     * @var string
     */
    public $WarrantyOffered;
    /**
     * The WarrantyTypeOption
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated as of release 1061 and any values supplied in this field are ignored. eBay no longer supports warranty policies for returns.
     * - minOccurs: 0
     * @var string
     */
    public $WarrantyTypeOption;
    /**
     * The WarrantyType
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated as of release 1061 and any values supplied in this field are ignored. eBay no longer supports warranty policies for returns.
     * - minOccurs: 0
     * @var string
     */
    public $WarrantyType;
    /**
     * The WarrantyDurationOption
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated as of release 1061 and any values supplied in this field are ignored. eBay no longer supports warranty policies for returns.
     * - minOccurs: 0
     * @var string
     */
    public $WarrantyDurationOption;
    /**
     * The WarrantyDuration
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated as of release 1061 and any values supplied in this field are ignored. eBay no longer supports warranty policies for returns.
     * - minOccurs: 0
     * @var string
     */
    public $WarrantyDuration;
    /**
     * The ShippingCostPaidByOption
     * Meta information extracted from the WSDL
     * - documentation: This option specifies whether the buyer or the seller pays for return shipping charges. Accepted values are <code>Buyer</code> or <code>Seller</code>. eBay sites often set <code>Seller</code> as the default value for this field, and
     * sellers are obligated to honor the values that are set for a listing. This value is required if <b>ReturnsAcceptedOption=ReturnsAccepted</b>. <br><br> Depending on the seller's return policy and the specifics of a return, either the buyer or the
     * seller can be responsible for the return shipping costs. Note that the seller is always responsible for return shipping costs for SNAD-related issues or for late shipments. <br><br> <b>For ReviseItem only:</b> You cannot change the value of this
     * field if the listing has bids or sales, or if the listing ends within 12 hours. For more details, see the <b>ReturnPolicy</b> description. <br><br> <span class="tablenote"><b>Note:</b> If a seller ships internationally, and wants to define and use a
     * separate international returns policy, the international equivalent of this field is the <b>InternationalShippingCostPaidByOption</b> field.</span>
     * - minOccurs: 0
     * @var string
     */
    public $ShippingCostPaidByOption;
    /**
     * The ShippingCostPaidBy
     * Meta information extracted from the WSDL
     * - documentation: This is a display string that buyer applications can use to present <b>ShippingCostPaidByOption</b> in a more user-friendly format to buyers. For example, in <b>GetItem</b> and related calls, this value is usually localized and can
     * contain spaces. <br/><br/> If necessary, you can predict the choice of values based on the <b>ShippingCostPaidBy.Description</b> options returned by <b>GeteBayDetails</b>. <br><br> Not applicable as input to the <b>AddItem</b> family of calls. (Use
     * <b>ShippingCostPaidByOption</b> instead.)
     * - minOccurs: 0
     * @var string
     */
    public $ShippingCostPaidBy;
    /**
     * The RestockingFeeValue
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated as of release 1061 and any values supplied in this field are ignored. eBay no longer allows sellers to charge a restocking fee when returning items.
     * - minOccurs: 0
     * @var string
     */
    public $RestockingFeeValue;
    /**
     * The RestockingFeeValueOption
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated as of release 1061 and any values supplied in this field are ignored. eBay no longer allows sellers to charge a restocking fee when returning items.
     * - minOccurs: 0
     * @var string
     */
    public $RestockingFeeValueOption;
    /**
     * The ExtendedHolidayReturns
     * Meta information extracted from the WSDL
     * - documentation: This field is deprecated as of release 1061 and any values supplied in this field are ignored. eBay no longer supports extended holiday returns.
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var bool
     */
    public $ExtendedHolidayReturns;
    /**
     * The InternationalRefundOption
     * Meta information extracted from the WSDL
     * - documentation: This field indicates how the seller compensates international buyers for returns</a>. <code>MoneyBack</code> is the only supported value for all marketplaces except for the US. On the US marketplace, you can set this value to either
     * <code>MoneyBack</code> or <code>MoneyBackOrReplacement</code>. <code>MoneyBackOrReplacement</code> can be used by sellers that have the depth of inventory to support an exchange for an identical item. However, ultimately, it is up to the buyer on
     * whether they want money back or a replacement item. <br><br> <b>For ReviseItem only:</b> You cannot change the value of this field if the listing has bids or sales, or if the listing ends within 12 hours. For more details, see the <b>ReturnPolicy</b>
     * description. <br><br> <span class="tablenote"><b>Note:</b> If a seller does not add a separate international return policy, the settings in the domestic return policy will be used instead. So if this field is not used in an add/revise/relist call,
     * the refund option(s) for international returns will default to the value specified in the <b>RefundOption</b> field.</span>
     * - minOccurs: 0
     * @var string
     */
    public $InternationalRefundOption;
    /**
     * The InternationalReturnsAcceptedOption
     * Meta information extracted from the WSDL
     * - documentation: This field is conditionally required if a seller wants to use a separate return policy for international returns. The value in this field indicates whether or not the seller accepts returns from international buyers. <br><br>
     * Applicable values are <code>ReturnsAccepted</code> or <code>ReturnsNotAccepted</code>. When set to <code>ReturnsAccepted</code>, this option indicates the seller allows international buyers to return items. Specify <b>ReturnsNotAccepted</b> for a
     * listing if returns are not accepted from international buyers. <br><br> On the eBay DE, IE, and UK, registered business sellers must accept returns for fixed-price items (including auction items with Buy It Now and any other fixed price formats) when
     * the category requires a return policy. On some European sites, such as eBay Germany (DE), registered business sellers are required to accept returns. Use the Trading call <b>GetUser</b> to determine the status of an eBay business seller in DE, IE,
     * and UK. Review the <b>User.SellerInfo.SellerBusinessType</b> field in the response. <br><br> <b>For ReviseItem only:</b> You cannot change the value of this field if the listing has bids or sales, or if the listing ends within 12 hours. For more
     * details, see the <b>ReturnPolicy</b> description. <br><br> <span class="tablenote"><b>Note:</b> If a seller does not add a separate international return policy, the settings in the domestic return policy will be used instead. So if this field is not
     * used in an add/revise/relist call, the return accepted value for international returns will default to the value specified in the <b>ReturnsAcceptedOption</b> field.</span>
     * - minOccurs: 0
     * @var string
     */
    public $InternationalReturnsAcceptedOption;
    /**
     * The InternationalReturnsWithinOption
     * Meta information extracted from the WSDL
     * - documentation: This field is conditionally required if a seller is using a separate return policy for international returns, and is accepting international returns. The value in this field indicates the number of days that an international buyer
     * has to return an item. The time period begins on the day that the buyer receives the item. Most marketplaces and categories support 30-day and 60-day return periods. eBay sites often set 30-days as the default value for this field and sellers are
     * obligated to honor the values that are set for a listing. <br><br> <b>Applicable values:</b> Retrieve the values supported by a marketplace and category by calling <b>GetCategoryFeatures</b> with <b>FeatureID</b> set to
     * <code>InternationalReturnsDurationValues</code>, then see the values returned under the <b>Category.InternationalReturnsDurationValues</b> container in the response. <br><br> <b>For AddItem, VerifyAddItem, and RelistItem:</b> If the seller accepts
     * international returns (InternationalReturnsAcceptedOption is set to ReturnsAccepted) but does not specify this field for a listing, eBay sets a default value (often Days_30) and the seller is obligated to honor this setting. <br><br> <b>For
     * ReviseItem only:</b> You cannot change the value of this field if the listing has bids or sales, or if the listing ends within 12 hours. For more details, see the <b>ReturnPolicy</b> description. <br><br> <span class="tablenote"><b>Note:</b> If a
     * seller does not add a separate international return policy, the settings in the domestic return policy will be used instead. So if this field is not used in an add/revise/relist call, the return period for international returns will default to the
     * value specified in the <b>ReturnsWithinOption</b> field.</span>
     * - minOccurs: 0
     * @var string
     */
    public $InternationalReturnsWithinOption;
    /**
     * The InternationalShippingCostPaidByOption
     * Meta information extracted from the WSDL
     * - documentation: This field is conditionally required if a seller is using a separate return policy for international returns, and is accepting international returns. The value in this field specifies whether the buyer or the seller pays for
     * international return shipping charges. Accepted values are <code>Buyer</code> or <code>Seller</code>. eBay sites often set <code>Seller</code> as the default value for this field, and sellers are obligated to honor the values that are set for a
     * listing. <br><br> Depending on the seller's return policy and the specifics of a return, either the buyer or the seller can be responsible for the return shipping costs. Note that the seller is always responsible for return shipping costs for
     * SNAD-related issues or for late shipments. <br><br> <b>For ReviseItem only:</b> You cannot change the value of this field if the listing has bids or sales, or if the listing ends within 12 hours. For more details, see the <b>ReturnPolicy</b>
     * description. <br><br> <span class="tablenote"><b>Note:</b> If a seller does not add a separate international return policy, the settings in the domestic return policy will be used instead. So if this field is not used in an add/revise/relist call,
     * return shipping cost payee for international returns will default to the value specified in the <b>ShippingCostPaidByOption</b> field.</span>
     * - minOccurs: 0
     * @var string
     */
    public $InternationalShippingCostPaidByOption;
    /**
     * The any
     * @var \DOMDocument
     */
    public $any;
    /**
     * Constructor method for ReturnPolicyType
     * @uses ReturnPolicyType::setRefundOption()
     * @uses ReturnPolicyType::setRefund()
     * @uses ReturnPolicyType::setReturnsWithinOption()
     * @uses ReturnPolicyType::setReturnsWithin()
     * @uses ReturnPolicyType::setReturnsAcceptedOption()
     * @uses ReturnPolicyType::setReturnsAccepted()
     * @uses ReturnPolicyType::setDescription()
     * @uses ReturnPolicyType::setWarrantyOfferedOption()
     * @uses ReturnPolicyType::setWarrantyOffered()
     * @uses ReturnPolicyType::setWarrantyTypeOption()
     * @uses ReturnPolicyType::setWarrantyType()
     * @uses ReturnPolicyType::setWarrantyDurationOption()
     * @uses ReturnPolicyType::setWarrantyDuration()
     * @uses ReturnPolicyType::setShippingCostPaidByOption()
     * @uses ReturnPolicyType::setShippingCostPaidBy()
     * @uses ReturnPolicyType::setRestockingFeeValue()
     * @uses ReturnPolicyType::setRestockingFeeValueOption()
     * @uses ReturnPolicyType::setExtendedHolidayReturns()
     * @uses ReturnPolicyType::setInternationalRefundOption()
     * @uses ReturnPolicyType::setInternationalReturnsAcceptedOption()
     * @uses ReturnPolicyType::setInternationalReturnsWithinOption()
     * @uses ReturnPolicyType::setInternationalShippingCostPaidByOption()
     * @uses ReturnPolicyType::setAny()
     * @param string $refundOption
     * @param string $refund
     * @param string $returnsWithinOption
     * @param string $returnsWithin
     * @param string $returnsAcceptedOption
     * @param string $returnsAccepted
     * @param string $description
     * @param string $warrantyOfferedOption
     * @param string $warrantyOffered
     * @param string $warrantyTypeOption
     * @param string $warrantyType
     * @param string $warrantyDurationOption
     * @param string $warrantyDuration
     * @param string $shippingCostPaidByOption
     * @param string $shippingCostPaidBy
     * @param string $restockingFeeValue
     * @param string $restockingFeeValueOption
     * @param bool $extendedHolidayReturns
     * @param string $internationalRefundOption
     * @param string $internationalReturnsAcceptedOption
     * @param string $internationalReturnsWithinOption
     * @param string $internationalShippingCostPaidByOption
     * @param \DOMDocument $any
     */
    public function __construct($refundOption = null, $refund = null, $returnsWithinOption = null, $returnsWithin = null, $returnsAcceptedOption = null, $returnsAccepted = null, $description = null, $warrantyOfferedOption = null, $warrantyOffered = null, $warrantyTypeOption = null, $warrantyType = null, $warrantyDurationOption = null, $warrantyDuration = null, $shippingCostPaidByOption = null, $shippingCostPaidBy = null, $restockingFeeValue = null, $restockingFeeValueOption = null, $extendedHolidayReturns = null, $internationalRefundOption = null, $internationalReturnsAcceptedOption = null, $internationalReturnsWithinOption = null, $internationalShippingCostPaidByOption = null, \DOMDocument $any = null)
    {
        $this
            ->setRefundOption($refundOption)
            ->setRefund($refund)
            ->setReturnsWithinOption($returnsWithinOption)
            ->setReturnsWithin($returnsWithin)
            ->setReturnsAcceptedOption($returnsAcceptedOption)
            ->setReturnsAccepted($returnsAccepted)
            ->setDescription($description)
            ->setWarrantyOfferedOption($warrantyOfferedOption)
            ->setWarrantyOffered($warrantyOffered)
            ->setWarrantyTypeOption($warrantyTypeOption)
            ->setWarrantyType($warrantyType)
            ->setWarrantyDurationOption($warrantyDurationOption)
            ->setWarrantyDuration($warrantyDuration)
            ->setShippingCostPaidByOption($shippingCostPaidByOption)
            ->setShippingCostPaidBy($shippingCostPaidBy)
            ->setRestockingFeeValue($restockingFeeValue)
            ->setRestockingFeeValueOption($restockingFeeValueOption)
            ->setExtendedHolidayReturns($extendedHolidayReturns)
            ->setInternationalRefundOption($internationalRefundOption)
            ->setInternationalReturnsAcceptedOption($internationalReturnsAcceptedOption)
            ->setInternationalReturnsWithinOption($internationalReturnsWithinOption)
            ->setInternationalShippingCostPaidByOption($internationalShippingCostPaidByOption)
            ->setAny($any);
    }
    /**
     * Get RefundOption value
     * @return string|null
     */
    public function getRefundOption()
    {
        return $this->RefundOption;
    }
    /**
     * Set RefundOption value
     * @param string $refundOption
     * @return \StructType\ReturnPolicyType
     */
    public function setRefundOption($refundOption = null)
    {
        // validation for constraint: string
        if (!is_null($refundOption) && !is_string($refundOption)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($refundOption, true), gettype($refundOption)), __LINE__);
        }
        $this->RefundOption = $refundOption;
        return $this;
    }
    /**
     * Get Refund value
     * @return string|null
     */
    public function getRefund()
    {
        return $this->Refund;
    }
    /**
     * Set Refund value
     * @param string $refund
     * @return \StructType\ReturnPolicyType
     */
    public function setRefund($refund = null)
    {
        // validation for constraint: string
        if (!is_null($refund) && !is_string($refund)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($refund, true), gettype($refund)), __LINE__);
        }
        $this->Refund = $refund;
        return $this;
    }
    /**
     * Get ReturnsWithinOption value
     * @return string|null
     */
    public function getReturnsWithinOption()
    {
        return $this->ReturnsWithinOption;
    }
    /**
     * Set ReturnsWithinOption value
     * @param string $returnsWithinOption
     * @return \StructType\ReturnPolicyType
     */
    public function setReturnsWithinOption($returnsWithinOption = null)
    {
        // validation for constraint: string
        if (!is_null($returnsWithinOption) && !is_string($returnsWithinOption)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($returnsWithinOption, true), gettype($returnsWithinOption)), __LINE__);
        }
        $this->ReturnsWithinOption = $returnsWithinOption;
        return $this;
    }
    /**
     * Get ReturnsWithin value
     * @return string|null
     */
    public function getReturnsWithin()
    {
        return $this->ReturnsWithin;
    }
    /**
     * Set ReturnsWithin value
     * @param string $returnsWithin
     * @return \StructType\ReturnPolicyType
     */
    public function setReturnsWithin($returnsWithin = null)
    {
        // validation for constraint: string
        if (!is_null($returnsWithin) && !is_string($returnsWithin)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($returnsWithin, true), gettype($returnsWithin)), __LINE__);
        }
        $this->ReturnsWithin = $returnsWithin;
        return $this;
    }
    /**
     * Get ReturnsAcceptedOption value
     * @return string|null
     */
    public function getReturnsAcceptedOption()
    {
        return $this->ReturnsAcceptedOption;
    }
    /**
     * Set ReturnsAcceptedOption value
     * @param string $returnsAcceptedOption
     * @return \StructType\ReturnPolicyType
     */
    public function setReturnsAcceptedOption($returnsAcceptedOption = null)
    {
        // validation for constraint: string
        if (!is_null($returnsAcceptedOption) && !is_string($returnsAcceptedOption)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($returnsAcceptedOption, true), gettype($returnsAcceptedOption)), __LINE__);
        }
        $this->ReturnsAcceptedOption = $returnsAcceptedOption;
        return $this;
    }
    /**
     * Get ReturnsAccepted value
     * @return string|null
     */
    public function getReturnsAccepted()
    {
        return $this->ReturnsAccepted;
    }
    /**
     * Set ReturnsAccepted value
     * @param string $returnsAccepted
     * @return \StructType\ReturnPolicyType
     */
    public function setReturnsAccepted($returnsAccepted = null)
    {
        // validation for constraint: string
        if (!is_null($returnsAccepted) && !is_string($returnsAccepted)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($returnsAccepted, true), gettype($returnsAccepted)), __LINE__);
        }
        $this->ReturnsAccepted = $returnsAccepted;
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
     * @return \StructType\ReturnPolicyType
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
     * Get WarrantyOfferedOption value
     * @return string|null
     */
    public function getWarrantyOfferedOption()
    {
        return $this->WarrantyOfferedOption;
    }
    /**
     * Set WarrantyOfferedOption value
     * @param string $warrantyOfferedOption
     * @return \StructType\ReturnPolicyType
     */
    public function setWarrantyOfferedOption($warrantyOfferedOption = null)
    {
        // validation for constraint: string
        if (!is_null($warrantyOfferedOption) && !is_string($warrantyOfferedOption)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($warrantyOfferedOption, true), gettype($warrantyOfferedOption)), __LINE__);
        }
        $this->WarrantyOfferedOption = $warrantyOfferedOption;
        return $this;
    }
    /**
     * Get WarrantyOffered value
     * @return string|null
     */
    public function getWarrantyOffered()
    {
        return $this->WarrantyOffered;
    }
    /**
     * Set WarrantyOffered value
     * @param string $warrantyOffered
     * @return \StructType\ReturnPolicyType
     */
    public function setWarrantyOffered($warrantyOffered = null)
    {
        // validation for constraint: string
        if (!is_null($warrantyOffered) && !is_string($warrantyOffered)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($warrantyOffered, true), gettype($warrantyOffered)), __LINE__);
        }
        $this->WarrantyOffered = $warrantyOffered;
        return $this;
    }
    /**
     * Get WarrantyTypeOption value
     * @return string|null
     */
    public function getWarrantyTypeOption()
    {
        return $this->WarrantyTypeOption;
    }
    /**
     * Set WarrantyTypeOption value
     * @param string $warrantyTypeOption
     * @return \StructType\ReturnPolicyType
     */
    public function setWarrantyTypeOption($warrantyTypeOption = null)
    {
        // validation for constraint: string
        if (!is_null($warrantyTypeOption) && !is_string($warrantyTypeOption)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($warrantyTypeOption, true), gettype($warrantyTypeOption)), __LINE__);
        }
        $this->WarrantyTypeOption = $warrantyTypeOption;
        return $this;
    }
    /**
     * Get WarrantyType value
     * @return string|null
     */
    public function getWarrantyType()
    {
        return $this->WarrantyType;
    }
    /**
     * Set WarrantyType value
     * @param string $warrantyType
     * @return \StructType\ReturnPolicyType
     */
    public function setWarrantyType($warrantyType = null)
    {
        // validation for constraint: string
        if (!is_null($warrantyType) && !is_string($warrantyType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($warrantyType, true), gettype($warrantyType)), __LINE__);
        }
        $this->WarrantyType = $warrantyType;
        return $this;
    }
    /**
     * Get WarrantyDurationOption value
     * @return string|null
     */
    public function getWarrantyDurationOption()
    {
        return $this->WarrantyDurationOption;
    }
    /**
     * Set WarrantyDurationOption value
     * @param string $warrantyDurationOption
     * @return \StructType\ReturnPolicyType
     */
    public function setWarrantyDurationOption($warrantyDurationOption = null)
    {
        // validation for constraint: string
        if (!is_null($warrantyDurationOption) && !is_string($warrantyDurationOption)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($warrantyDurationOption, true), gettype($warrantyDurationOption)), __LINE__);
        }
        $this->WarrantyDurationOption = $warrantyDurationOption;
        return $this;
    }
    /**
     * Get WarrantyDuration value
     * @return string|null
     */
    public function getWarrantyDuration()
    {
        return $this->WarrantyDuration;
    }
    /**
     * Set WarrantyDuration value
     * @param string $warrantyDuration
     * @return \StructType\ReturnPolicyType
     */
    public function setWarrantyDuration($warrantyDuration = null)
    {
        // validation for constraint: string
        if (!is_null($warrantyDuration) && !is_string($warrantyDuration)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($warrantyDuration, true), gettype($warrantyDuration)), __LINE__);
        }
        $this->WarrantyDuration = $warrantyDuration;
        return $this;
    }
    /**
     * Get ShippingCostPaidByOption value
     * @return string|null
     */
    public function getShippingCostPaidByOption()
    {
        return $this->ShippingCostPaidByOption;
    }
    /**
     * Set ShippingCostPaidByOption value
     * @param string $shippingCostPaidByOption
     * @return \StructType\ReturnPolicyType
     */
    public function setShippingCostPaidByOption($shippingCostPaidByOption = null)
    {
        // validation for constraint: string
        if (!is_null($shippingCostPaidByOption) && !is_string($shippingCostPaidByOption)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shippingCostPaidByOption, true), gettype($shippingCostPaidByOption)), __LINE__);
        }
        $this->ShippingCostPaidByOption = $shippingCostPaidByOption;
        return $this;
    }
    /**
     * Get ShippingCostPaidBy value
     * @return string|null
     */
    public function getShippingCostPaidBy()
    {
        return $this->ShippingCostPaidBy;
    }
    /**
     * Set ShippingCostPaidBy value
     * @param string $shippingCostPaidBy
     * @return \StructType\ReturnPolicyType
     */
    public function setShippingCostPaidBy($shippingCostPaidBy = null)
    {
        // validation for constraint: string
        if (!is_null($shippingCostPaidBy) && !is_string($shippingCostPaidBy)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shippingCostPaidBy, true), gettype($shippingCostPaidBy)), __LINE__);
        }
        $this->ShippingCostPaidBy = $shippingCostPaidBy;
        return $this;
    }
    /**
     * Get RestockingFeeValue value
     * @return string|null
     */
    public function getRestockingFeeValue()
    {
        return $this->RestockingFeeValue;
    }
    /**
     * Set RestockingFeeValue value
     * @param string $restockingFeeValue
     * @return \StructType\ReturnPolicyType
     */
    public function setRestockingFeeValue($restockingFeeValue = null)
    {
        // validation for constraint: string
        if (!is_null($restockingFeeValue) && !is_string($restockingFeeValue)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($restockingFeeValue, true), gettype($restockingFeeValue)), __LINE__);
        }
        $this->RestockingFeeValue = $restockingFeeValue;
        return $this;
    }
    /**
     * Get RestockingFeeValueOption value
     * @return string|null
     */
    public function getRestockingFeeValueOption()
    {
        return $this->RestockingFeeValueOption;
    }
    /**
     * Set RestockingFeeValueOption value
     * @param string $restockingFeeValueOption
     * @return \StructType\ReturnPolicyType
     */
    public function setRestockingFeeValueOption($restockingFeeValueOption = null)
    {
        // validation for constraint: string
        if (!is_null($restockingFeeValueOption) && !is_string($restockingFeeValueOption)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($restockingFeeValueOption, true), gettype($restockingFeeValueOption)), __LINE__);
        }
        $this->RestockingFeeValueOption = $restockingFeeValueOption;
        return $this;
    }
    /**
     * Get ExtendedHolidayReturns value
     * @return bool|null
     */
    public function getExtendedHolidayReturns()
    {
        return $this->ExtendedHolidayReturns;
    }
    /**
     * Set ExtendedHolidayReturns value
     * @param bool $extendedHolidayReturns
     * @return \StructType\ReturnPolicyType
     */
    public function setExtendedHolidayReturns($extendedHolidayReturns = null)
    {
        // validation for constraint: boolean
        if (!is_null($extendedHolidayReturns) && !is_bool($extendedHolidayReturns)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($extendedHolidayReturns, true), gettype($extendedHolidayReturns)), __LINE__);
        }
        $this->ExtendedHolidayReturns = $extendedHolidayReturns;
        return $this;
    }
    /**
     * Get InternationalRefundOption value
     * @return string|null
     */
    public function getInternationalRefundOption()
    {
        return $this->InternationalRefundOption;
    }
    /**
     * Set InternationalRefundOption value
     * @param string $internationalRefundOption
     * @return \StructType\ReturnPolicyType
     */
    public function setInternationalRefundOption($internationalRefundOption = null)
    {
        // validation for constraint: string
        if (!is_null($internationalRefundOption) && !is_string($internationalRefundOption)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($internationalRefundOption, true), gettype($internationalRefundOption)), __LINE__);
        }
        $this->InternationalRefundOption = $internationalRefundOption;
        return $this;
    }
    /**
     * Get InternationalReturnsAcceptedOption value
     * @return string|null
     */
    public function getInternationalReturnsAcceptedOption()
    {
        return $this->InternationalReturnsAcceptedOption;
    }
    /**
     * Set InternationalReturnsAcceptedOption value
     * @param string $internationalReturnsAcceptedOption
     * @return \StructType\ReturnPolicyType
     */
    public function setInternationalReturnsAcceptedOption($internationalReturnsAcceptedOption = null)
    {
        // validation for constraint: string
        if (!is_null($internationalReturnsAcceptedOption) && !is_string($internationalReturnsAcceptedOption)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($internationalReturnsAcceptedOption, true), gettype($internationalReturnsAcceptedOption)), __LINE__);
        }
        $this->InternationalReturnsAcceptedOption = $internationalReturnsAcceptedOption;
        return $this;
    }
    /**
     * Get InternationalReturnsWithinOption value
     * @return string|null
     */
    public function getInternationalReturnsWithinOption()
    {
        return $this->InternationalReturnsWithinOption;
    }
    /**
     * Set InternationalReturnsWithinOption value
     * @param string $internationalReturnsWithinOption
     * @return \StructType\ReturnPolicyType
     */
    public function setInternationalReturnsWithinOption($internationalReturnsWithinOption = null)
    {
        // validation for constraint: string
        if (!is_null($internationalReturnsWithinOption) && !is_string($internationalReturnsWithinOption)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($internationalReturnsWithinOption, true), gettype($internationalReturnsWithinOption)), __LINE__);
        }
        $this->InternationalReturnsWithinOption = $internationalReturnsWithinOption;
        return $this;
    }
    /**
     * Get InternationalShippingCostPaidByOption value
     * @return string|null
     */
    public function getInternationalShippingCostPaidByOption()
    {
        return $this->InternationalShippingCostPaidByOption;
    }
    /**
     * Set InternationalShippingCostPaidByOption value
     * @param string $internationalShippingCostPaidByOption
     * @return \StructType\ReturnPolicyType
     */
    public function setInternationalShippingCostPaidByOption($internationalShippingCostPaidByOption = null)
    {
        // validation for constraint: string
        if (!is_null($internationalShippingCostPaidByOption) && !is_string($internationalShippingCostPaidByOption)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($internationalShippingCostPaidByOption, true), gettype($internationalShippingCostPaidByOption)), __LINE__);
        }
        $this->InternationalShippingCostPaidByOption = $internationalShippingCostPaidByOption;
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
     * @return \StructType\ReturnPolicyType
     */
    public function setAny(\DOMDocument $any = null)
    {
        $this->any = ($any instanceof \DOMDocument) && $any->hasChildNodes() ? $any->saveXML($any->childNodes->item(0)) : $any;
        return $this;
    }
}
