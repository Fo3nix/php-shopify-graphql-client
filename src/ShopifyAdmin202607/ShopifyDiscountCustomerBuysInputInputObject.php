<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for prerequisite items and quantity for the discount.
 */
class ShopifyDiscountCustomerBuysInputInputObject extends InputObject
{
    protected $value;
    protected $items;
    protected $isOneTimePurchase;
    protected $isSubscription;

    /**
     * The quantity of prerequisite items.
     */
    public function setValue(ShopifyDiscountCustomerBuysValueInputInputObject $shopifyDiscountCustomerBuysValueInputInputObject): static
    {
        $this->value = $shopifyDiscountCustomerBuysValueInputInputObject;

        return $this;
    }

    /**
     * The IDs of items that the customer buys. The items can be either collections or products.
     */
    public function setItems(ShopifyDiscountItemsInputInputObject $shopifyDiscountItemsInputInputObject): static
    {
        $this->items = $shopifyDiscountItemsInputInputObject;

        return $this;
    }

    /**
     * If the discount is applicable when a customer buys a one-time purchase.
     */
    public function setIsOneTimePurchase($isOneTimePurchase): static
    {
        $this->isOneTimePurchase = $isOneTimePurchase;

        return $this;
    }

    /**
     * If the discount is applicable when a customer buys a subscription purchase.
     */
    public function setIsSubscription($isSubscription): static
    {
        $this->isSubscription = $isSubscription;

        return $this;
    }
}
