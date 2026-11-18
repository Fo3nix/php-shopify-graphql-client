<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyDiscountItemsHydrator;
use Fo3nix\ShopifyGraphQL\ShopifyAdmin202607\ShopifyDiscountCustomerGetsValueHydrator;

/**
 * The items in the order that qualify for the discount, their quantities, and the total value of the discount.
 */
class ShopifyDiscountCustomerGets
{
    protected $appliesOnOneTimePurchase;
    protected $appliesOnSubscription;
    protected $items;
    protected $value;

    
    /**
     * Whether the discount applies on regular one-time-purchase items.
     *
     * @return bool
     */
    public function getAppliesOnOneTimePurchase(): ?bool
    {
        return $this->appliesOnOneTimePurchase;
    }

    
    /**
     * Whether the discount applies on subscription items.
     * [Subscriptions](https://shopify.dev/docs/apps/launch/billing/subscription-billing/offer-subscription-discounts)
     * enable customers to purchase products
     * on a recurring basis.
     *
     * @return bool
     */
    public function getAppliesOnSubscription(): ?bool
    {
        return $this->appliesOnSubscription;
    }

    
    /**
     * The items to which the discount applies.
     *
     * @return ShopifyAllDiscountItems|ShopifyDiscountCollections|ShopifyDiscountProducts
     */
    public function getItems(): ShopifyAllDiscountItems|ShopifyDiscountCollections|ShopifyDiscountProducts|null
    {
        return $this->items;
    }

    
    /**
     * Entitled quantity and the discount value.
     *
     * @return ShopifyDiscountAmount|ShopifyDiscountOnQuantity|ShopifyDiscountPercentage
     */
    public function getValue(): ShopifyDiscountAmount|ShopifyDiscountOnQuantity|ShopifyDiscountPercentage|null
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
            if (isset($data['appliesOnOneTimePurchase']) && $data['appliesOnOneTimePurchase'] !== null) {
                $instance->appliesOnOneTimePurchase = $data['appliesOnOneTimePurchase'];
            }
            if (isset($data['appliesOnSubscription']) && $data['appliesOnSubscription'] !== null) {
                $instance->appliesOnSubscription = $data['appliesOnSubscription'];
            }
            if (isset($data['items']) && $data['items'] !== null) {
                $instance->items = ShopifyDiscountItemsHydrator::fromArray($data['items']);
            }
            if (isset($data['value']) && $data['value'] !== null) {
                $instance->value = ShopifyDiscountCustomerGetsValueHydrator::fromArray($data['value']);
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
            if ($this->appliesOnOneTimePurchase !== null) {
                $data['appliesOnOneTimePurchase'] = $this->appliesOnOneTimePurchase;
            }
            if ($this->appliesOnSubscription !== null) {
                $data['appliesOnSubscription'] = $this->appliesOnSubscription;
            }
            if ($this->items !== null) {
                $data['items'] = ShopifyDiscountItemsHydrator::toArray($this->items);
            }
            if ($this->value !== null) {
                $data['value'] = ShopifyDiscountCustomerGetsValueHydrator::toArray($this->value);
            }
            return $data;
        }
}
