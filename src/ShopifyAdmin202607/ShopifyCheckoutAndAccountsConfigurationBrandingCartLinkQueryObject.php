<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * The customizations that you can make to cart links at checkout.
 */
class ShopifyCheckoutAndAccountsConfigurationBrandingCartLinkQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutAndAccountsConfigurationBrandingCartLink";

    /**
     * Whether the cart link is visible at checkout.
     */
    public function selectVisibility(): static
    {
        $this->selectField("visibility");

        return $this;
    }
}
