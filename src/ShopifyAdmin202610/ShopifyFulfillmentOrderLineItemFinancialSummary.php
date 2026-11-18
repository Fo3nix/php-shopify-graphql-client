<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyMoneyBag;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202610\ShopifyFinancialSummaryDiscountAllocation;

/**
 * The financial details of a fulfillment order line item.
 */
class ShopifyFulfillmentOrderLineItemFinancialSummary
{
    protected $approximateDiscountedUnitPriceSet;
    protected $discountAllocations;
    protected $originalUnitPriceSet;
    protected $quantity;

    
    /**
     * The approximate split price of a line item unit, in shop and presentment currencies. This value doesn't include discounts applied to the entire order.For the full picture of applied discounts, see discountAllocations.
     *
     * @return ShopifyMoneyBag
     */
    public function getApproximateDiscountedUnitPriceSet(): ?ShopifyMoneyBag
    {
        return $this->approximateDiscountedUnitPriceSet;
    }

    
    /**
     * The discounts that have been allocated onto the line item by discount applications, not including order edits and refunds.
     *
     * @return ShopifyFinancialSummaryDiscountAllocation[]
     */
    public function getDiscountAllocations(): ?array
    {
        return $this->discountAllocations;
    }

    
    /**
     * The variant unit price without discounts applied, in shop and presentment currencies.
     *
     * @return ShopifyMoneyBag
     */
    public function getOriginalUnitPriceSet(): ?ShopifyMoneyBag
    {
        return $this->originalUnitPriceSet;
    }

    
    /**
     * Number of line items that this financial summary applies to.
     *
     * @return int
     */
    public function getQuantity(): ?int
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
                $instance->approximateDiscountedUnitPriceSet = ShopifyMoneyBag::fromArray($data['approximateDiscountedUnitPriceSet']);
            }
            if (isset($data['discountAllocations']) && $data['discountAllocations'] !== null) {
                $instance->discountAllocations = array_map(function($item) { return ShopifyFinancialSummaryDiscountAllocation::fromArray($item); }, $data['discountAllocations']);
            }
            if (isset($data['originalUnitPriceSet']) && $data['originalUnitPriceSet'] !== null) {
                $instance->originalUnitPriceSet = ShopifyMoneyBag::fromArray($data['originalUnitPriceSet']);
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
