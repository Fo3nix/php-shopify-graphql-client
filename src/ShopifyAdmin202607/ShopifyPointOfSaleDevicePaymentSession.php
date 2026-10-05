<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyCashActivityConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyMoneyV2;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyCashDrawer;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyStaffMember;
use Carbon\Carbon;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyLocation;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyPointOfSaleDevice;

class ShopifyPointOfSaleDevicePaymentSession
{
    protected $cashActivities;
    protected $cashCountedAtClose;
    protected $cashCountedAtOpen;
    protected $cashDrawer;
    protected $closingAdjustment;
    protected $closingBalance;
    protected $closingNote;
    protected $closingStaffMember;
    protected $closingTime;
    protected $currency;
    protected $expectedCashAtClose;
    protected $expectedCashAtOpen;
    protected $id;
    protected $location;
    protected $netCashSales;
    protected $netSales;
    protected $openingNote;
    protected $openingStaffMember;
    protected $openingTime;
    protected $pointOfSaleDevice;
    protected $status;
    protected $totalAdjustments;
    protected $totalCashRefunds;
    protected $totalCashSales;
    protected $totalDiscrepancy;
    protected $totalRefunds;
    protected $totalSales;
    protected $totalsReady;

    
    /**
     * @return ShopifyCashActivityConnection
     */
    public function getCashActivities()
    {
        return $this->cashActivities;
    }

    
    /**
     * @return ShopifyMoneyV2
     */
    public function getCashCountedAtClose()
    {
        return $this->cashCountedAtClose;
    }

    
    /**
     * @return ShopifyMoneyV2
     */
    public function getCashCountedAtOpen()
    {
        return $this->cashCountedAtOpen;
    }

    
    /**
     * @return ShopifyCashDrawer
     */
    public function getCashDrawer()
    {
        return $this->cashDrawer;
    }

    
    /**
     * @return ShopifyMoneyV2
     */
    public function getClosingAdjustment()
    {
        return $this->closingAdjustment;
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
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    
    /**
     * @return ShopifyMoneyV2
     */
    public function getExpectedCashAtClose()
    {
        return $this->expectedCashAtClose;
    }

    
    /**
     * @return ShopifyMoneyV2
     */
    public function getExpectedCashAtOpen()
    {
        return $this->expectedCashAtOpen;
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
    public function getNetSales()
    {
        return $this->netSales;
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
     * @return ShopifyPointOfSaleDevice
     */
    public function getPointOfSaleDevice()
    {
        return $this->pointOfSaleDevice;
    }

    
    /**
     * @return ShopifyPointOfSaleDevicePaymentSessionStatusEnumObject
     */
    public function getStatus()
    {
        return $this->status;
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
     * @return ShopifyMoneyV2
     */
    public function getTotalRefunds()
    {
        return $this->totalRefunds;
    }

    
    /**
     * @return ShopifyMoneyV2
     */
    public function getTotalSales()
    {
        return $this->totalSales;
    }

    
    /**
     * @return bool
     */
    public function getTotalsReady()
    {
        return $this->totalsReady;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['cashActivities']) && $data['cashActivities'] !== null) {
                $instance->cashActivities = ShopifyCashActivityConnection::fromArray($data['cashActivities']);
            }
            if (isset($data['cashCountedAtClose']) && $data['cashCountedAtClose'] !== null) {
                $instance->cashCountedAtClose = ShopifyMoneyV2::fromArray($data['cashCountedAtClose']);
            }
            if (isset($data['cashCountedAtOpen']) && $data['cashCountedAtOpen'] !== null) {
                $instance->cashCountedAtOpen = ShopifyMoneyV2::fromArray($data['cashCountedAtOpen']);
            }
            if (isset($data['cashDrawer']) && $data['cashDrawer'] !== null) {
                $instance->cashDrawer = ShopifyCashDrawer::fromArray($data['cashDrawer']);
            }
            if (isset($data['closingAdjustment']) && $data['closingAdjustment'] !== null) {
                $instance->closingAdjustment = ShopifyMoneyV2::fromArray($data['closingAdjustment']);
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
            if (isset($data['currency']) && $data['currency'] !== null) {
                $instance->currency = $data['currency'];
            }
            if (isset($data['expectedCashAtClose']) && $data['expectedCashAtClose'] !== null) {
                $instance->expectedCashAtClose = ShopifyMoneyV2::fromArray($data['expectedCashAtClose']);
            }
            if (isset($data['expectedCashAtOpen']) && $data['expectedCashAtOpen'] !== null) {
                $instance->expectedCashAtOpen = ShopifyMoneyV2::fromArray($data['expectedCashAtOpen']);
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
            if (isset($data['netSales']) && $data['netSales'] !== null) {
                $instance->netSales = ShopifyMoneyV2::fromArray($data['netSales']);
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
            if (isset($data['pointOfSaleDevice']) && $data['pointOfSaleDevice'] !== null) {
                $instance->pointOfSaleDevice = ShopifyPointOfSaleDevice::fromArray($data['pointOfSaleDevice']);
            }
            if (isset($data['status']) && $data['status'] !== null) {
                $instance->status = $data['status'];
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
            if (isset($data['totalRefunds']) && $data['totalRefunds'] !== null) {
                $instance->totalRefunds = ShopifyMoneyV2::fromArray($data['totalRefunds']);
            }
            if (isset($data['totalSales']) && $data['totalSales'] !== null) {
                $instance->totalSales = ShopifyMoneyV2::fromArray($data['totalSales']);
            }
            if (isset($data['totalsReady']) && $data['totalsReady'] !== null) {
                $instance->totalsReady = $data['totalsReady'];
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
            if ($this->cashActivities !== null) {
                $data['cashActivities'] = $this->cashActivities->asArray();
            }
            if ($this->cashCountedAtClose !== null) {
                $data['cashCountedAtClose'] = $this->cashCountedAtClose->asArray();
            }
            if ($this->cashCountedAtOpen !== null) {
                $data['cashCountedAtOpen'] = $this->cashCountedAtOpen->asArray();
            }
            if ($this->cashDrawer !== null) {
                $data['cashDrawer'] = $this->cashDrawer->asArray();
            }
            if ($this->closingAdjustment !== null) {
                $data['closingAdjustment'] = $this->closingAdjustment->asArray();
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
            if ($this->currency !== null) {
                $data['currency'] = $this->currency;
            }
            if ($this->expectedCashAtClose !== null) {
                $data['expectedCashAtClose'] = $this->expectedCashAtClose->asArray();
            }
            if ($this->expectedCashAtOpen !== null) {
                $data['expectedCashAtOpen'] = $this->expectedCashAtOpen->asArray();
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
            if ($this->netSales !== null) {
                $data['netSales'] = $this->netSales->asArray();
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
            if ($this->pointOfSaleDevice !== null) {
                $data['pointOfSaleDevice'] = $this->pointOfSaleDevice->asArray();
            }
            if ($this->status !== null) {
                $data['status'] = $this->status;
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
            if ($this->totalRefunds !== null) {
                $data['totalRefunds'] = $this->totalRefunds->asArray();
            }
            if ($this->totalSales !== null) {
                $data['totalSales'] = $this->totalSales->asArray();
            }
            if ($this->totalsReady !== null) {
                $data['totalsReady'] = $this->totalsReady;
            }
            return $data;
        }
}
