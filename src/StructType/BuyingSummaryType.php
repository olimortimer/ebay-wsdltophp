<?php

namespace StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BuyingSummaryType StructType
 * Meta information extracted from the WSDL
 * - documentation: Type defining the <b>BuyingSummary</b> container returned in <b>GetMyeBayBuying</b>. The <b>BuyingSummary</b> container consists of data that summarizes the buyer's recent buying activity, including the number of items the user has
 * bid on, the number of items the user is winning, and the number of items the user has won. The <b>BuyingSummary</b> container is only returned if the <b>BuyingSummary.Include</b> field is included in the <b>GetMyeBayBuying</b> request and set to
 * <code>true</code>.
 * @subpackage Structs
 */
class BuyingSummaryType extends AbstractStructBase
{
    /**
     * The BiddingCount
     * Meta information extracted from the WSDL
     * - documentation: The number of auction items the user has bid on.
     * - minOccurs: 0
     * @var int
     */
    public $BiddingCount;
    /**
     * The WinningCount
     * Meta information extracted from the WSDL
     * - documentation: The number of active auction listings in which the user is currently the highest bidder.
     * - minOccurs: 0
     * @var int
     */
    public $WinningCount;
    /**
     * The TotalWinningCost
     * Meta information extracted from the WSDL
     * - documentation: The total cost of items that the user is currently the highest bidder on.
     * - minOccurs: 0
     * @var \StructType\AmountType
     */
    public $TotalWinningCost;
    /**
     * The WonCount
     * Meta information extracted from the WSDL
     * - documentation: The number of auction items that the user has won.
     * - minOccurs: 0
     * @var int
     */
    public $WonCount;
    /**
     * The TotalWonCost
     * Meta information extracted from the WSDL
     * - documentation: The total cost of auction items that the user has won.
     * - minOccurs: 0
     * @var \StructType\AmountType
     */
    public $TotalWonCost;
    /**
     * The WonDurationInDays
     * Meta information extracted from the WSDL
     * - documentation: The time period for which won items are displayed. Default is 31 days.
     * - minOccurs: 0
     * @var int
     */
    public $WonDurationInDays;
    /**
     * The BestOfferCount
     * Meta information extracted from the WSDL
     * - documentation: The number of items the user has made Best Offers on.
     * - minOccurs: 0
     * @var int
     */
    public $BestOfferCount;
    /**
     * Constructor method for BuyingSummaryType
     * @uses BuyingSummaryType::setBiddingCount()
     * @uses BuyingSummaryType::setWinningCount()
     * @uses BuyingSummaryType::setTotalWinningCost()
     * @uses BuyingSummaryType::setWonCount()
     * @uses BuyingSummaryType::setTotalWonCost()
     * @uses BuyingSummaryType::setWonDurationInDays()
     * @uses BuyingSummaryType::setBestOfferCount()
     * @param int $biddingCount
     * @param int $winningCount
     * @param \StructType\AmountType $totalWinningCost
     * @param int $wonCount
     * @param \StructType\AmountType $totalWonCost
     * @param int $wonDurationInDays
     * @param int $bestOfferCount
     */
    public function __construct($biddingCount = null, $winningCount = null, \StructType\AmountType $totalWinningCost = null, $wonCount = null, \StructType\AmountType $totalWonCost = null, $wonDurationInDays = null, $bestOfferCount = null)
    {
        $this
            ->setBiddingCount($biddingCount)
            ->setWinningCount($winningCount)
            ->setTotalWinningCost($totalWinningCost)
            ->setWonCount($wonCount)
            ->setTotalWonCost($totalWonCost)
            ->setWonDurationInDays($wonDurationInDays)
            ->setBestOfferCount($bestOfferCount);
    }
    /**
     * Get BiddingCount value
     * @return int|null
     */
    public function getBiddingCount()
    {
        return $this->BiddingCount;
    }
    /**
     * Set BiddingCount value
     * @param int $biddingCount
     * @return \StructType\BuyingSummaryType
     */
    public function setBiddingCount($biddingCount = null)
    {
        // validation for constraint: int
        if (!is_null($biddingCount) && !(is_int($biddingCount) || ctype_digit($biddingCount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($biddingCount, true), gettype($biddingCount)), __LINE__);
        }
        $this->BiddingCount = $biddingCount;
        return $this;
    }
    /**
     * Get WinningCount value
     * @return int|null
     */
    public function getWinningCount()
    {
        return $this->WinningCount;
    }
    /**
     * Set WinningCount value
     * @param int $winningCount
     * @return \StructType\BuyingSummaryType
     */
    public function setWinningCount($winningCount = null)
    {
        // validation for constraint: int
        if (!is_null($winningCount) && !(is_int($winningCount) || ctype_digit($winningCount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($winningCount, true), gettype($winningCount)), __LINE__);
        }
        $this->WinningCount = $winningCount;
        return $this;
    }
    /**
     * Get TotalWinningCost value
     * @return \StructType\AmountType|null
     */
    public function getTotalWinningCost()
    {
        return $this->TotalWinningCost;
    }
    /**
     * Set TotalWinningCost value
     * @param \StructType\AmountType $totalWinningCost
     * @return \StructType\BuyingSummaryType
     */
    public function setTotalWinningCost(\StructType\AmountType $totalWinningCost = null)
    {
        $this->TotalWinningCost = $totalWinningCost;
        return $this;
    }
    /**
     * Get WonCount value
     * @return int|null
     */
    public function getWonCount()
    {
        return $this->WonCount;
    }
    /**
     * Set WonCount value
     * @param int $wonCount
     * @return \StructType\BuyingSummaryType
     */
    public function setWonCount($wonCount = null)
    {
        // validation for constraint: int
        if (!is_null($wonCount) && !(is_int($wonCount) || ctype_digit($wonCount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($wonCount, true), gettype($wonCount)), __LINE__);
        }
        $this->WonCount = $wonCount;
        return $this;
    }
    /**
     * Get TotalWonCost value
     * @return \StructType\AmountType|null
     */
    public function getTotalWonCost()
    {
        return $this->TotalWonCost;
    }
    /**
     * Set TotalWonCost value
     * @param \StructType\AmountType $totalWonCost
     * @return \StructType\BuyingSummaryType
     */
    public function setTotalWonCost(\StructType\AmountType $totalWonCost = null)
    {
        $this->TotalWonCost = $totalWonCost;
        return $this;
    }
    /**
     * Get WonDurationInDays value
     * @return int|null
     */
    public function getWonDurationInDays()
    {
        return $this->WonDurationInDays;
    }
    /**
     * Set WonDurationInDays value
     * @param int $wonDurationInDays
     * @return \StructType\BuyingSummaryType
     */
    public function setWonDurationInDays($wonDurationInDays = null)
    {
        // validation for constraint: int
        if (!is_null($wonDurationInDays) && !(is_int($wonDurationInDays) || ctype_digit($wonDurationInDays))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($wonDurationInDays, true), gettype($wonDurationInDays)), __LINE__);
        }
        $this->WonDurationInDays = $wonDurationInDays;
        return $this;
    }
    /**
     * Get BestOfferCount value
     * @return int|null
     */
    public function getBestOfferCount()
    {
        return $this->BestOfferCount;
    }
    /**
     * Set BestOfferCount value
     * @param int $bestOfferCount
     * @return \StructType\BuyingSummaryType
     */
    public function setBestOfferCount($bestOfferCount = null)
    {
        // validation for constraint: int
        if (!is_null($bestOfferCount) && !(is_int($bestOfferCount) || ctype_digit($bestOfferCount))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($bestOfferCount, true), gettype($bestOfferCount)), __LINE__);
        }
        $this->BestOfferCount = $bestOfferCount;
        return $this;
    }
}
