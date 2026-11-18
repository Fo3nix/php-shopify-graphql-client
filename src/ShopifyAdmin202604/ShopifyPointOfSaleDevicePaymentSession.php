<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyCashActivityConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyMoneyV2;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyCashDrawer;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyStaffMember;
use Carbon\Carbon;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyLocation;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202604\ShopifyPointOfSaleDevice;

/**
 * Tracks the payment activity for a point of sale device.
 */
class ShopifyPointOfSaleDevicePaymentSession implements ShopifyNode
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
     * The activities on the point of sale device payment session.
     *
     * @return ShopifyCashActivityConnection
     */
    public function getCashActivities(): ?ShopifyCashActivityConnection
    {
        return $this->cashActivities;
    }

    
    /**
     * The cash that was physically counted when the point of sale device payment session was closed.
     *
     * @return ShopifyMoneyV2
     */
    public function getCashCountedAtClose(): ?ShopifyMoneyV2
    {
        return $this->cashCountedAtClose;
    }

    
    /**
     * The cash that was physically counted when the point of sale device payment session was opened.
     *
     * @return ShopifyMoneyV2
     */
    public function getCashCountedAtOpen(): ?ShopifyMoneyV2
    {
        return $this->cashCountedAtOpen;
    }

    
    /**
     * The cash drawer associated with the point of sale device payment session. The session's sales and cash tracking activity will affect the cash drawer's balance.
     *
     * @return ShopifyCashDrawer
     */
    public function getCashDrawer(): ?ShopifyCashDrawer
    {
        return $this->cashDrawer;
    }

    
    /**
     * The amount that the cash drawer balance was adjusted when the session was closed.
     *
     * @return ShopifyMoneyV2
     */
    public function getClosingAdjustment(): ?ShopifyMoneyV2
    {
        return $this->closingAdjustment;
    }

    
    /**
     * The counted balance of the cash drawer when the point of sale device payment session was closed.
     *
     * @return ShopifyMoneyV2
     */
    public function getClosingBalance(): ?ShopifyMoneyV2
    {
        return $this->closingBalance;
    }

    
    /**
     * The note associated with the point of sale device payment session closing.
     *
     * @return string
     */
    public function getClosingNote(): ?string
    {
        return $this->closingNote;
    }

    
    /**
     * The staff member who closed the point of sale device payment session.
     *
     * @return ShopifyStaffMember
     */
    public function getClosingStaffMember(): ?ShopifyStaffMember
    {
        return $this->closingStaffMember;
    }

    
    /**
     * The time the point of sale device payment session was closed.
     *
     * @return Carbon
     */
    public function getClosingTime(): ?Carbon
    {
        return $this->closingTime;
    }

    
    /**
     * The currency of the point of sale device payment session.
     *
     * @return string
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    
    /**
     * The expected cash when the point of sale device payment session was closed.
     *
     * @return ShopifyMoneyV2
     */
    public function getExpectedCashAtClose(): ?ShopifyMoneyV2
    {
        return $this->expectedCashAtClose;
    }

    
    /**
     * The expected balance of the cash drawer when the point of sale device payment session was opened.
     *
     * @return ShopifyMoneyV2
     */
    public function getExpectedCashAtOpen(): ?ShopifyMoneyV2
    {
        return $this->expectedCashAtOpen;
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
     * The location associated with the point of sale device payment session. The session's sales and cash tracking activity will contribute to the location's totals.
     *
     * @return ShopifyLocation
     */
    public function getLocation(): ?ShopifyLocation
    {
        return $this->location;
    }

    
    /**
     * The net cash sales for the point of sale device payment session.
     *
     * @return ShopifyMoneyV2
     */
    public function getNetCashSales(): ?ShopifyMoneyV2
    {
        return $this->netCashSales;
    }

    
    /**
     * The net sales for the duration of this session.
     *
     * @return ShopifyMoneyV2
     */
    public function getNetSales(): ?ShopifyMoneyV2
    {
        return $this->netSales;
    }

    
    /**
     * The note associated with the point of sale device payment session opening.
     *
     * @return string
     */
    public function getOpeningNote(): ?string
    {
        return $this->openingNote;
    }

    
    /**
     * The staff member who opened the point of sale device payment session.
     *
     * @return ShopifyStaffMember
     */
    public function getOpeningStaffMember(): ?ShopifyStaffMember
    {
        return $this->openingStaffMember;
    }

    
    /**
     * The time the point of sale device payment session was opened.
     *
     * @return Carbon
     */
    public function getOpeningTime(): ?Carbon
    {
        return $this->openingTime;
    }

    
    /**
     * The point of sale device.
     *
     * @return ShopifyPointOfSaleDevice
     */
    public function getPointOfSaleDevice(): ?ShopifyPointOfSaleDevice
    {
        return $this->pointOfSaleDevice;
    }

    
    /**
     * Whether the point of sale device payment session is open. Payments can't be processed or refunded during a closed session, and the cash drawer balance can't be adjusted or corrected.
     *
     * @return string A ShopifyPointOfSaleDevicePaymentSessionStatusEnumObject value
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    
    /**
     * The total adjustments for the point of sale device payment session.
     *
     * @return ShopifyMoneyV2
     */
    public function getTotalAdjustments(): ?ShopifyMoneyV2
    {
        return $this->totalAdjustments;
    }

    
    /**
     * The total cash refunds for the point of sale device payment session.
     *
     * @return ShopifyMoneyV2
     */
    public function getTotalCashRefunds(): ?ShopifyMoneyV2
    {
        return $this->totalCashRefunds;
    }

    
    /**
     * The total cash sales for the point of sale device payment session.
     *
     * @return ShopifyMoneyV2
     */
    public function getTotalCashSales(): ?ShopifyMoneyV2
    {
        return $this->totalCashSales;
    }

    
    /**
     * The total discrepancy for the point of sale device payment session.
     *
     * @return ShopifyMoneyV2
     */
    public function getTotalDiscrepancy(): ?ShopifyMoneyV2
    {
        return $this->totalDiscrepancy;
    }

    
    /**
     * The sum of all refunds for the duration of this session.
     *
     * @return ShopifyMoneyV2
     */
    public function getTotalRefunds(): ?ShopifyMoneyV2
    {
        return $this->totalRefunds;
    }

    
    /**
     * The sum of all sales for the duration of this session.
     *
     * @return ShopifyMoneyV2
     */
    public function getTotalSales(): ?ShopifyMoneyV2
    {
        return $this->totalSales;
    }

    
    /**
     * Whether the point of sale device payment session totals are ready.
     *
     * @return bool
     */
    public function getTotalsReady(): ?bool
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
