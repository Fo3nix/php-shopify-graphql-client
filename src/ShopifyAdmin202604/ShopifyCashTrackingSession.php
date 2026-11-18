<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyCashTrackingAdjustmentConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyOrderTransactionConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyMoneyV2;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyStaffMember;
use Carbon\Carbon;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyLocation;

/**
 * Tracks the balance in a cash drawer for a point of sale device over the course of a shift.
 */
class ShopifyCashTrackingSession implements ShopifyNode
{
    protected $adjustments;
    protected $cashTrackingEnabled;
    protected $cashTransactions;
    protected $closingBalance;
    protected $closingNote;
    protected $closingStaffMember;
    protected $closingTime;
    protected $expectedBalance;
    protected $expectedClosingBalance;
    protected $expectedOpeningBalance;
    protected $id;
    protected $location;
    protected $netCashSales;
    protected $openingBalance;
    protected $openingNote;
    protected $openingStaffMember;
    protected $openingTime;
    protected $registerName;
    protected $totalAdjustments;
    protected $totalCashRefunds;
    protected $totalCashSales;
    protected $totalDiscrepancy;

    
    /**
     * The adjustments made to the cash drawer during this session.
     *
     * @return ShopifyCashTrackingAdjustmentConnection
     */
    public function getAdjustments(): ?ShopifyCashTrackingAdjustmentConnection
    {
        return $this->adjustments;
    }

    
    /**
     * Whether this session is tracking cash payments.
     *
     * @return bool
     */
    public function getCashTrackingEnabled(): ?bool
    {
        return $this->cashTrackingEnabled;
    }

    
    /**
     * The cash transactions made during this session.
     *
     * @return ShopifyOrderTransactionConnection
     */
    public function getCashTransactions(): ?ShopifyOrderTransactionConnection
    {
        return $this->cashTransactions;
    }

    
    /**
     * The counted cash balance when the session was closed.
     *
     * @return ShopifyMoneyV2
     */
    public function getClosingBalance(): ?ShopifyMoneyV2
    {
        return $this->closingBalance;
    }

    
    /**
     * The note entered when the session was closed.
     *
     * @return string
     */
    public function getClosingNote(): ?string
    {
        return $this->closingNote;
    }

    
    /**
     * The user who closed the session.
     *
     * @return ShopifyStaffMember
     */
    public function getClosingStaffMember(): ?ShopifyStaffMember
    {
        return $this->closingStaffMember;
    }

    
    /**
     * When the session was closed.
     *
     * @return Carbon
     */
    public function getClosingTime(): ?Carbon
    {
        return $this->closingTime;
    }

    
    /**
     * The expected balance at the end of the session or the expected current balance for sessions that are still open.
     *
     * @return ShopifyMoneyV2
     */
    public function getExpectedBalance(): ?ShopifyMoneyV2
    {
        return $this->expectedBalance;
    }

    
    /**
     * The amount that was expected to be in the cash drawer at the end of the session, calculated after the session was closed.
     *
     * @return ShopifyMoneyV2
     */
    public function getExpectedClosingBalance(): ?ShopifyMoneyV2
    {
        return $this->expectedClosingBalance;
    }

    
    /**
     * The amount expected to be in the cash drawer based on the previous session.
     *
     * @return ShopifyMoneyV2
     */
    public function getExpectedOpeningBalance(): ?ShopifyMoneyV2
    {
        return $this->expectedOpeningBalance;
    }

    
    /**
     * A globally-unique ID.
     *
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    
    /**
     * The location of the point of sale device during this session.
     *
     * @return ShopifyLocation
     */
    public function getLocation(): ?ShopifyLocation
    {
        return $this->location;
    }

    
    /**
     * The net cash sales made for the duration of this cash tracking session.
     *
     * @return ShopifyMoneyV2
     */
    public function getNetCashSales(): ?ShopifyMoneyV2
    {
        return $this->netCashSales;
    }

    
    /**
     * The counted cash balance when the session was opened.
     *
     * @return ShopifyMoneyV2
     */
    public function getOpeningBalance(): ?ShopifyMoneyV2
    {
        return $this->openingBalance;
    }

    
    /**
     * The note entered when the session was opened.
     *
     * @return string
     */
    public function getOpeningNote(): ?string
    {
        return $this->openingNote;
    }

    
    /**
     * The user who opened the session.
     *
     * @return ShopifyStaffMember
     */
    public function getOpeningStaffMember(): ?ShopifyStaffMember
    {
        return $this->openingStaffMember;
    }

    
    /**
     * When the session was opened.
     *
     * @return Carbon
     */
    public function getOpeningTime(): ?Carbon
    {
        return $this->openingTime;
    }

    
    /**
     * The register name for the point of sale device that this session is tracking cash for.
     *
     * @return string
     */
    public function getRegisterName(): ?string
    {
        return $this->registerName;
    }

    
    /**
     * The sum of all adjustments made during the session, excluding the final adjustment.
     *
     * @return ShopifyMoneyV2
     */
    public function getTotalAdjustments(): ?ShopifyMoneyV2
    {
        return $this->totalAdjustments;
    }

    
    /**
     * The sum of all cash refunds for the duration of this cash tracking session.
     *
     * @return ShopifyMoneyV2
     */
    public function getTotalCashRefunds(): ?ShopifyMoneyV2
    {
        return $this->totalCashRefunds;
    }

    
    /**
     * The sum of all cash sales for the duration of this cash tracking session.
     *
     * @return ShopifyMoneyV2
     */
    public function getTotalCashSales(): ?ShopifyMoneyV2
    {
        return $this->totalCashSales;
    }

    
    /**
     * The total discrepancy for the session including starting and ending.
     *
     * @return ShopifyMoneyV2
     */
    public function getTotalDiscrepancy(): ?ShopifyMoneyV2
    {
        return $this->totalDiscrepancy;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['adjustments']) && $data['adjustments'] !== null) {
                $instance->adjustments = ShopifyCashTrackingAdjustmentConnection::fromArray($data['adjustments']);
            }
            if (isset($data['cashTrackingEnabled']) && $data['cashTrackingEnabled'] !== null) {
                $instance->cashTrackingEnabled = $data['cashTrackingEnabled'];
            }
            if (isset($data['cashTransactions']) && $data['cashTransactions'] !== null) {
                $instance->cashTransactions = ShopifyOrderTransactionConnection::fromArray($data['cashTransactions']);
            }
            if (isset($data['closingBalance']) && $data['closingBalance'] !== null) {
                $instance->closingBalance = ShopifyMoneyV2::fromArray($data['closingBalance']);
            }
            if (isset($data['closingNote']) && $data['closingNote'] !== null) {
                $instance->closingNote = $data['closingNote'];
            }
            if (isset($data['closingStaffMember']) && $data['closingStaffMember'] !== null) {
                $instance->closingStaffMember = ShopifyStaffMember::fromArray($data['closingStaffMember']);
            }
            if (isset($data['closingTime']) && $data['closingTime'] !== null) {
                $instance->closingTime = new Carbon($data['closingTime']);
            }
            if (isset($data['expectedBalance']) && $data['expectedBalance'] !== null) {
                $instance->expectedBalance = ShopifyMoneyV2::fromArray($data['expectedBalance']);
            }
            if (isset($data['expectedClosingBalance']) && $data['expectedClosingBalance'] !== null) {
                $instance->expectedClosingBalance = ShopifyMoneyV2::fromArray($data['expectedClosingBalance']);
            }
            if (isset($data['expectedOpeningBalance']) && $data['expectedOpeningBalance'] !== null) {
                $instance->expectedOpeningBalance = ShopifyMoneyV2::fromArray($data['expectedOpeningBalance']);
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['location']) && $data['location'] !== null) {
                $instance->location = ShopifyLocation::fromArray($data['location']);
            }
            if (isset($data['netCashSales']) && $data['netCashSales'] !== null) {
                $instance->netCashSales = ShopifyMoneyV2::fromArray($data['netCashSales']);
            }
            if (isset($data['openingBalance']) && $data['openingBalance'] !== null) {
                $instance->openingBalance = ShopifyMoneyV2::fromArray($data['openingBalance']);
            }
            if (isset($data['openingNote']) && $data['openingNote'] !== null) {
                $instance->openingNote = $data['openingNote'];
            }
            if (isset($data['openingStaffMember']) && $data['openingStaffMember'] !== null) {
                $instance->openingStaffMember = ShopifyStaffMember::fromArray($data['openingStaffMember']);
            }
            if (isset($data['openingTime']) && $data['openingTime'] !== null) {
                $instance->openingTime = new Carbon($data['openingTime']);
            }
            if (isset($data['registerName']) && $data['registerName'] !== null) {
                $instance->registerName = $data['registerName'];
            }
            if (isset($data['totalAdjustments']) && $data['totalAdjustments'] !== null) {
                $instance->totalAdjustments = ShopifyMoneyV2::fromArray($data['totalAdjustments']);
            }
            if (isset($data['totalCashRefunds']) && $data['totalCashRefunds'] !== null) {
                $instance->totalCashRefunds = ShopifyMoneyV2::fromArray($data['totalCashRefunds']);
            }
            if (isset($data['totalCashSales']) && $data['totalCashSales'] !== null) {
                $instance->totalCashSales = ShopifyMoneyV2::fromArray($data['totalCashSales']);
            }
            if (isset($data['totalDiscrepancy']) && $data['totalDiscrepancy'] !== null) {
                $instance->totalDiscrepancy = ShopifyMoneyV2::fromArray($data['totalDiscrepancy']);
            }
            return $instance;
        }

        /**
         * @param string $json
         * @return self
         */
        public static function fromJson(string $json): self
        {
            $data = json_decode($json, true);
            if ($data === null && json_last_error() !== JSON_ERROR_NONE) {
                throw new \InvalidArgumentException('Invalid JSON provided to fromJson method: ' . json_last_error_msg());
            }
            return self::fromArray($data);
        }

        /**
         * Converts this object to an array.
         * @return array
         */
        public function asArray(): array
        {
            $data = [];
            if ($this->adjustments !== null) {
                $data['adjustments'] = $this->adjustments->asArray();
            }
            if ($this->cashTrackingEnabled !== null) {
                $data['cashTrackingEnabled'] = $this->cashTrackingEnabled;
            }
            if ($this->cashTransactions !== null) {
                $data['cashTransactions'] = $this->cashTransactions->asArray();
            }
            if ($this->closingBalance !== null) {
                $data['closingBalance'] = $this->closingBalance->asArray();
            }
            if ($this->closingNote !== null) {
                $data['closingNote'] = $this->closingNote;
            }
            if ($this->closingStaffMember !== null) {
                $data['closingStaffMember'] = $this->closingStaffMember->asArray();
            }
            if ($this->closingTime !== null) {
                $data['closingTime'] = $this->closingTime->toIso8601String();
            }
            if ($this->expectedBalance !== null) {
                $data['expectedBalance'] = $this->expectedBalance->asArray();
            }
            if ($this->expectedClosingBalance !== null) {
                $data['expectedClosingBalance'] = $this->expectedClosingBalance->asArray();
            }
            if ($this->expectedOpeningBalance !== null) {
                $data['expectedOpeningBalance'] = $this->expectedOpeningBalance->asArray();
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->location !== null) {
                $data['location'] = $this->location->asArray();
            }
            if ($this->netCashSales !== null) {
                $data['netCashSales'] = $this->netCashSales->asArray();
            }
            if ($this->openingBalance !== null) {
                $data['openingBalance'] = $this->openingBalance->asArray();
            }
            if ($this->openingNote !== null) {
                $data['openingNote'] = $this->openingNote;
            }
            if ($this->openingStaffMember !== null) {
                $data['openingStaffMember'] = $this->openingStaffMember->asArray();
            }
            if ($this->openingTime !== null) {
                $data['openingTime'] = $this->openingTime->toIso8601String();
            }
            if ($this->registerName !== null) {
                $data['registerName'] = $this->registerName;
            }
            if ($this->totalAdjustments !== null) {
                $data['totalAdjustments'] = $this->totalAdjustments->asArray();
            }
            if ($this->totalCashRefunds !== null) {
                $data['totalCashRefunds'] = $this->totalCashRefunds->asArray();
            }
            if ($this->totalCashSales !== null) {
                $data['totalCashSales'] = $this->totalCashSales->asArray();
            }
            if ($this->totalDiscrepancy !== null) {
                $data['totalDiscrepancy'] = $this->totalDiscrepancy->asArray();
            }
            return $data;
        }
}
