<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyDiscountItemsHydrator;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyDiscountCustomerBuysValueHydrator;

/**
 * The prerequisite items and prerequisite value that a customer must have on the order for the discount to be applicable.
 */
class ShopifyDiscountCustomerBuys
{
    protected $isOneTimePurchase;
    protected $isSubscription;
    protected $items;
    protected $value;

    
    /**
     * If the discount is applicable when a customer buys a one-time purchase.
     *
     * @return bool
     */
    public function getIsOneTimePurchase(): ?bool
    {
        return $this->isOneTimePurchase;
    }

    
    /**
     * If the discount is applicable when a customer buys a subscription purchase.
     *
     * @return bool
     */
    public function getIsSubscription(): ?bool
    {
        return $this->isSubscription;
    }

    
    /**
     * The items required for the discount to be applicable.
     *
     * @return ShopifyAllDiscountItems|ShopifyDiscountCollections|ShopifyDiscountProducts
     */
    public function getItems(): ShopifyAllDiscountItems|ShopifyDiscountCollections|ShopifyDiscountProducts|null
    {
        return $this->items;
    }

    
    /**
     * The prerequisite value.
     *
     * @return ShopifyDiscountPurchaseAmount|ShopifyDiscountQuantity
     */
    public function getValue(): ShopifyDiscountPurchaseAmount|ShopifyDiscountQuantity|null
    {
        return $this->value;
    }

        /**
         * @param array $data
         * @return self
         */
        public static function fromArray(array $data): self
        {
            $instance = new self();
            if (isset($data['isOneTimePurchase']) && $data['isOneTimePurchase'] !== null) {
                $instance->isOneTimePurchase = $data['isOneTimePurchase'];
            }
            if (isset($data['isSubscription']) && $data['isSubscription'] !== null) {
                $instance->isSubscription = $data['isSubscription'];
            }
            if (isset($data['items']) && $data['items'] !== null) {
                $instance->items = ShopifyDiscountItemsHydrator::fromArray($data['items']);
            }
            if (isset($data['value']) && $data['value'] !== null) {
                $instance->value = ShopifyDiscountCustomerBuysValueHydrator::fromArray($data['value']);
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
            if ($this->isOneTimePurchase !== null) {
                $data['isOneTimePurchase'] = $this->isOneTimePurchase;
            }
            if ($this->isSubscription !== null) {
                $data['isSubscription'] = $this->isSubscription;
            }
            if ($this->items !== null) {
                $data['items'] = ShopifyDiscountItemsHydrator::toArray($this->items);
            }
            if ($this->value !== null) {
                $data['value'] = ShopifyDiscountCustomerBuysValueHydrator::toArray($this->value);
            }
            return $data;
        }
}
