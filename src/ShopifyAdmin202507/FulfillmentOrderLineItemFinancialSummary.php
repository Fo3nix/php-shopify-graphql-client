<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\MoneyBag;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202507\FinancialSummaryDiscountAllocation;

class FulfillmentOrderLineItemFinancialSummary
{
    protected $approximateDiscountedUnitPriceSet;
    protected $discountAllocations;
    protected $originalUnitPriceSet;
    protected $quantity;

    
    /**
     * @return MoneyBag
     */
    public function getApproximateDiscountedUnitPriceSet()
    {
        return $this->approximateDiscountedUnitPriceSet;
    }

    
    /**
     * @return FinancialSummaryDiscountAllocation[]
     */
    public function getDiscountAllocations()
    {
        return $this->discountAllocations;
    }

    
    /**
     * @return MoneyBag
     */
    public function getOriginalUnitPriceSet()
    {
        return $this->originalUnitPriceSet;
    }

    
    /**
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['approximateDiscountedUnitPriceSet']) && $data['approximateDiscountedUnitPriceSet'] !== null) {
                $instance->approximateDiscountedUnitPriceSet = MoneyBag::fromArray($data['approximateDiscountedUnitPriceSet']);
            }
            if (isset($data['discountAllocations']) && $data['discountAllocations'] !== null) {
                $instance->discountAllocations = array_map(function($item) { return FinancialSummaryDiscountAllocation::fromArray($item); }, $data['discountAllocations']);
            }
            if (isset($data['originalUnitPriceSet']) && $data['originalUnitPriceSet'] !== null) {
                $instance->originalUnitPriceSet = MoneyBag::fromArray($data['originalUnitPriceSet']);
            }
            if (isset($data['quantity']) && $data['quantity'] !== null) {
                $instance->quantity = $data['quantity'];
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
            if ($this->approximateDiscountedUnitPriceSet !== null) {
                $data['approximateDiscountedUnitPriceSet'] = $this->approximateDiscountedUnitPriceSet->asArray();
            }
            if ($this->discountAllocations !== null) {
                $data['discountAllocations'] = array_map(function($item) { return $item->asArray(); }, $this->discountAllocations);
            }
            if ($this->originalUnitPriceSet !== null) {
                $data['originalUnitPriceSet'] = $this->originalUnitPriceSet->asArray();
            }
            if ($this->quantity !== null) {
                $data['quantity'] = $this->quantity;
            }
            return $data;
        }
}
