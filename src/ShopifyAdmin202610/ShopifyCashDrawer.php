<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyMoneyV2;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyCashActivityConnection;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyLocation;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyPointOfSaleDeviceConnection;

/**
 * A cash drawer for cash management.
 */
class ShopifyCashDrawer implements ShopifyNode
{
    protected $balance;
    protected $cashActivities;
    protected $id;
    protected $location;
    protected $name;
    protected $netSales;
    protected $pointOfSaleDevices;
    protected $totalAdjustments;
    protected $totalDiscrepancies;
    protected $totalRefunds;
    protected $totalSales;

    
    /**
     * The current balance in the cash drawer.
     *
     * @return ShopifyMoneyV2
     */
    public function getBalance(): ?ShopifyMoneyV2
    {
        return $this->balance;
    }

    
    /**
     * The activities on the cash drawer.
     *
     * @return ShopifyCashActivityConnection
     */
    public function getCashActivities(): ?ShopifyCashActivityConnection
    {
        return $this->cashActivities;
    }

    
    /**
     * A unique ID for the cash drawer.
     *
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    
    /**
     * The location of the cash drawer.
     *
     * @return ShopifyLocation
     */
    public function getLocation(): ?ShopifyLocation
    {
        return $this->location;
    }

    
    /**
     * The name of the cash drawer.
     *
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    
    /**
     * The net sales for this cash drawer.
     *
     * @return ShopifyMoneyV2
     */
    public function getNetSales(): ?ShopifyMoneyV2
    {
        return $this->netSales;
    }

    
    /**
     * The Point of Sale devices assigned to this cash drawer.
     *
     * @return ShopifyPointOfSaleDeviceConnection
     */
    public function getPointOfSaleDevices(): ?ShopifyPointOfSaleDeviceConnection
    {
        return $this->pointOfSaleDevices;
    }

    
    /**
     * The total adjustments for this cash drawer.
     *
     * @return ShopifyMoneyV2
     */
    public function getTotalAdjustments(): ?ShopifyMoneyV2
    {
        return $this->totalAdjustments;
    }

    
    /**
     * The total discrepancies for this cash drawer.
     *
     * @return ShopifyMoneyV2
     */
    public function getTotalDiscrepancies(): ?ShopifyMoneyV2
    {
        return $this->totalDiscrepancies;
    }

    
    /**
     * The total refunds for this cash drawer.
     *
     * @return ShopifyMoneyV2
     */
    public function getTotalRefunds(): ?ShopifyMoneyV2
    {
        return $this->totalRefunds;
    }

    
    /**
     * The total sales for this cash drawer.
     *
     * @return ShopifyMoneyV2
     */
    public function getTotalSales(): ?ShopifyMoneyV2
    {
        return $this->totalSales;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['balance']) && $data['balance'] !== null) {
                $instance->balance = ShopifyMoneyV2::fromArray($data['balance']);
            }
            if (isset($data['cashActivities']) && $data['cashActivities'] !== null) {
                $instance->cashActivities = ShopifyCashActivityConnection::fromArray($data['cashActivities']);
            }
            if (isset($data['id']) && $data['id'] !== null) {
                $instance->id = $data['id'];
            }
            if (isset($data['location']) && $data['location'] !== null) {
                $instance->location = ShopifyLocation::fromArray($data['location']);
            }
            if (isset($data['name']) && $data['name'] !== null) {
                $instance->name = $data['name'];
            }
            if (isset($data['netSales']) && $data['netSales'] !== null) {
                $instance->netSales = ShopifyMoneyV2::fromArray($data['netSales']);
            }
            if (isset($data['pointOfSaleDevices']) && $data['pointOfSaleDevices'] !== null) {
                $instance->pointOfSaleDevices = ShopifyPointOfSaleDeviceConnection::fromArray($data['pointOfSaleDevices']);
            }
            if (isset($data['totalAdjustments']) && $data['totalAdjustments'] !== null) {
                $instance->totalAdjustments = ShopifyMoneyV2::fromArray($data['totalAdjustments']);
            }
            if (isset($data['totalDiscrepancies']) && $data['totalDiscrepancies'] !== null) {
                $instance->totalDiscrepancies = ShopifyMoneyV2::fromArray($data['totalDiscrepancies']);
            }
            if (isset($data['totalRefunds']) && $data['totalRefunds'] !== null) {
                $instance->totalRefunds = ShopifyMoneyV2::fromArray($data['totalRefunds']);
            }
            if (isset($data['totalSales']) && $data['totalSales'] !== null) {
                $instance->totalSales = ShopifyMoneyV2::fromArray($data['totalSales']);
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
            if ($this->balance !== null) {
                $data['balance'] = $this->balance->asArray();
            }
            if ($this->cashActivities !== null) {
                $data['cashActivities'] = $this->cashActivities->asArray();
            }
            if ($this->id !== null) {
                $data['id'] = $this->id;
            }
            if ($this->location !== null) {
                $data['location'] = $this->location->asArray();
            }
            if ($this->name !== null) {
                $data['name'] = $this->name;
            }
            if ($this->netSales !== null) {
                $data['netSales'] = $this->netSales->asArray();
            }
            if ($this->pointOfSaleDevices !== null) {
                $data['pointOfSaleDevices'] = $this->pointOfSaleDevices->asArray();
            }
            if ($this->totalAdjustments !== null) {
                $data['totalAdjustments'] = $this->totalAdjustments->asArray();
            }
            if ($this->totalDiscrepancies !== null) {
                $data['totalDiscrepancies'] = $this->totalDiscrepancies->asArray();
            }
            if ($this->totalRefunds !== null) {
                $data['totalRefunds'] = $this->totalRefunds->asArray();
            }
            if ($this->totalSales !== null) {
                $data['totalSales'] = $this->totalSales->asArray();
            }
            return $data;
        }
}
