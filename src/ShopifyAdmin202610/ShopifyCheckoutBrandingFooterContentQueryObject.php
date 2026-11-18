<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * The footer content customizations.
 */
class ShopifyCheckoutBrandingFooterContentQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutBrandingFooterContent";

    /**
     * The visibility of the footer content. Shopify reserves the right to add required legal notices to the footer and prevent them from being modified or hidden. This setting doesn't control the visibility of those notices.
     */
    public function selectVisibility(): static
    {
        $this->selectField("visibility");

        return $this;
    }
}
