<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\InputObject;

/**
 * Specifies the items that will be discounted, the quantity of items that will be discounted, and the value of discount.
 */
class ShopifyDiscountCustomerGetsInputInputObject extends InputObject
{
    protected $value;
    protected $items;
    protected $appliesOnOneTimePurchase;
    protected $appliesOnSubscription;

    /**
     * The quantity of items discounted and the discount value.
     */
    public function setValue(ShopifyDiscountCustomerGetsValueInputInputObject $shopifyDiscountCustomerGetsValueInputInputObject): static
    {
        $this->value = $shopifyDiscountCustomerGetsValueInputInputObject;

        return $this;
    }

    /**
     * The IDs of the items that the customer gets. The items can be either collections or products.
     */
    public function setItems(ShopifyDiscountItemsInputInputObject $shopifyDiscountItemsInputInputObject): static
    {
        $this->items = $shopifyDiscountItemsInputInputObject;

        return $this;
    }

    /**
     * Whether the discount applies on regular one-time-purchase items.
     */
    public function setAppliesOnOneTimePurchase($appliesOnOneTimePurchase): static
    {
        $this->appliesOnOneTimePurchase = $appliesOnOneTimePurchase;

        return $this;
    }

    /**
     * Whether the discount applies on subscription items.
     * [Subscriptions](https://shopify.dev/docs/apps/launch/billing/subscription-billing/offer-subscription-discounts)
     * enable customers to purchase products
     * on a recurring basis.
     */
    public function setAppliesOnSubscription($appliesOnSubscription): static
    {
        $this->appliesOnSubscription = $appliesOnSubscription;

        return $this;
    }
}
