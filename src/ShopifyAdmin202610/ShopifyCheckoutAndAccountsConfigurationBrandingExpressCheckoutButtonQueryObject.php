<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * The Express Checkout button customizations.
 */
class ShopifyCheckoutAndAccountsConfigurationBrandingExpressCheckoutButtonQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutAndAccountsConfigurationBrandingExpressCheckoutButton";

    /**
     * The corner radius.
     */
    public function selectCornerRadius(): static
    {
        $this->selectField("cornerRadius");

        return $this;
    }
}
