<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Controls the visibility of cart links displayed during checkout. These links allow customers to return to their cart or continue shopping.
 *
 * For example, an electronics store might hide cart links during final checkout steps to reduce distractions, or show them prominently to encourage customers to add accessories before completing their purchase.
 *
 * The `CartLink` object provides visibility settings to control when and how these navigation elements appear based on the merchant's checkout flow strategy.
 */
class ShopifyCheckoutBrandingCartLinkQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutBrandingCartLink";

    /**
     * Whether the cart link is visible at checkout.
     */
    public function selectVisibility(): static
    {
        $this->selectField("visibility");

        return $this;
    }
}
