<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyMoneyV2;

class ShopifySubscriptionContractCalculationProjectedOrderTotals
{
    protected $subtotal;
    protected $total;
    protected $totalDelivery;
    protected $totalDeliveryDiscounts;
    protected $totalMerchandiseDiscounts;
    protected $totalTax;

    
    /**
     * @return ShopifyMoneyV2
     */
    public function getSubtotal()
    {
        return $this->subtotal;
    }

    
    /**
     * @return ShopifyMoneyV2
     */
    public function getTotal()
    {
        return $this->total;
    }

    
    /**
     * @return ShopifyMoneyV2
     */
    public function getTotalDelivery()
    {
        return $this->totalDelivery;
    }

    
    /**
     * @return ShopifyMoneyV2
     */
    public function getTotalDeliveryDiscounts()
    {
        return $this->totalDeliveryDiscounts;
    }

    
    /**
     * @return ShopifyMoneyV2
     */
    public function getTotalMerchandiseDiscounts()
    {
        return $this->totalMerchandiseDiscounts;
    }

    
    /**
     * @return ShopifyMoneyV2
     */
    public function getTotalTax()
    {
        return $this->totalTax;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['subtotal']) && $data['subtotal'] !== null) {
                $instance->subtotal = ShopifyMoneyV2::fromArray($data['subtotal']);
            }
            if (isset($data['total']) && $data['total'] !== null) {
                $instance->total = ShopifyMoneyV2::fromArray($data['total']);
            }
            if (isset($data['totalDelivery']) && $data['totalDelivery'] !== null) {
                $instance->totalDelivery = ShopifyMoneyV2::fromArray($data['totalDelivery']);
            }
            if (isset($data['totalDeliveryDiscounts']) && $data['totalDeliveryDiscounts'] !== null) {
                $instance->totalDeliveryDiscounts = ShopifyMoneyV2::fromArray($data['totalDeliveryDiscounts']);
            }
            if (isset($data['totalMerchandiseDiscounts']) && $data['totalMerchandiseDiscounts'] !== null) {
                $instance->totalMerchandiseDiscounts = ShopifyMoneyV2::fromArray($data['totalMerchandiseDiscounts']);
            }
            if (isset($data['totalTax']) && $data['totalTax'] !== null) {
                $instance->totalTax = ShopifyMoneyV2::fromArray($data['totalTax']);
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
            if ($this->subtotal !== null) {
                $data['subtotal'] = $this->subtotal->asArray();
            }
            if ($this->total !== null) {
                $data['total'] = $this->total->asArray();
            }
            if ($this->totalDelivery !== null) {
                $data['totalDelivery'] = $this->totalDelivery->asArray();
            }
            if ($this->totalDeliveryDiscounts !== null) {
                $data['totalDeliveryDiscounts'] = $this->totalDeliveryDiscounts->asArray();
            }
            if ($this->totalMerchandiseDiscounts !== null) {
                $data['totalMerchandiseDiscounts'] = $this->totalMerchandiseDiscounts->asArray();
            }
            if ($this->totalTax !== null) {
                $data['totalTax'] = $this->totalTax->asArray();
            }
            return $data;
        }
}
