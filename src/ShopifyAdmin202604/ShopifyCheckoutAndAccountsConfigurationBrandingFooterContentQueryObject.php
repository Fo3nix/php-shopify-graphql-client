<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * The footer content customizations.
 */
class ShopifyCheckoutAndAccountsConfigurationBrandingFooterContentQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutAndAccountsConfigurationBrandingFooterContent";

    /**
     * The visibility of the footer content. Shopify reserves the right to add required legal notices to the footer and prevent them from being modified or hidden. This setting doesn't control the visibility of those notices.
     */
    public function selectVisibility(): static
    {
        $this->selectField("visibility");

        return $this;
    }
}
