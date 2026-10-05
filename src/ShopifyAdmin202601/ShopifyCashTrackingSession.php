<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyCashTrackingAdjustmentConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyOrderTransactionConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyMoneyV2;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyStaffMember;
use Carbon\Carbon;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202601\ShopifyLocation;

class ShopifyCashTrackingSession
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
     * @return ShopifyCashTrackingAdjustmentConnection
     */
    public function getAdjustments()
    {
        return $this->adjustments;
    }

    
    /**
     * @return bool
     */
    public function getCashTrackingEnabled()
    {
        return $this->cashTrackingEnabled;
    }

    
    /**
     * @return ShopifyOrderTransactionConnection
     */
    public function getCashTransactions()
    {
        return $this->cashTransactions;
    }

    
    /**
     * @return ShopifyMoneyV2
     */
    public function getClosingBalance()
    {
        return $this->closingBalance;
    }

    
    /**
     * @return string
     */
    public function getClosingNote()
    {
        return $this->closingNote;
    }

    
    /**
     * @return ShopifyStaffMember
     */
    public function getClosingStaffMember()
    {
        return $this->closingStaffMember;
    }

    
    /**
     * @return Carbon
     */
    public function getClosingTime()
    {
        return $this->closingTime;
    }

    
    /**
     * @return ShopifyMoneyV2
     */
    public function getExpectedBalance()
    {
        return $this->expectedBalance;
    }

    
    /**
     * @return ShopifyMoneyV2
     */
    public function getExpectedClosingBalance()
    {
        return $this->expectedClosingBalance;
    }

    
    /**
     * @return ShopifyMoneyV2
     */
    public function getExpectedOpeningBalance()
    {
        return $this->expectedOpeningBalance;
    }

    
    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    
    /**
     * @return ShopifyLocation
     */
    public function getLocation()
    {
        return $this->location;
    }

    
    /**
     * @return ShopifyMoneyV2
     */
    public function getNetCashSales()
    {
        return $this->netCashSales;
    }

    
    /**
     * @return ShopifyMoneyV2
     */
    public function getOpeningBalance()
    {
        return $this->openingBalance;
    }

    
    /**
     * @return string
     */
    public function getOpeningNote()
    {
        return $this->openingNote;
    }

    
    /**
     * @return ShopifyStaffMember
     */
    public function getOpeningStaffMember()
    {
        return $this->openingStaffMember;
    }

    
    /**
     * @return Carbon
     */
    public function getOpeningTime()
    {
        return $this->openingTime;
    }

    
    /**
     * @return string
     */
    public function getRegisterName()
    {
        return $this->registerName;
    }

    
    /**
     * @return ShopifyMoneyV2
     */
    public function getTotalAdjustments()
    {
        return $this->totalAdjustments;
    }

    
    /**
     * @return ShopifyMoneyV2
     */
    public function getTotalCashRefunds()
    {
        return $this->totalCashRefunds;
    }

    
    /**
     * @return ShopifyMoneyV2
     */
    public function getTotalCashSales()
    {
        return $this->totalCashSales;
    }

    
    /**
     * @return ShopifyMoneyV2
     */
    public function getTotalDiscrepancy()
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
