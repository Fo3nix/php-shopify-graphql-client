<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * The Express Checkout button customizations.
 */
class ShopifyCheckoutBrandingExpressCheckoutButtonQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutBrandingExpressCheckoutButton";

    /**
     * The corner radius used for the Express Checkout buttons.
     */
    public function selectCornerRadius(): static
    {
        $this->selectField("cornerRadius");

        return $this;
    }
}
