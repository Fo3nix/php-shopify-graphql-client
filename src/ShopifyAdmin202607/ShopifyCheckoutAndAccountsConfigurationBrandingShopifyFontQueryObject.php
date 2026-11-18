<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * The Shopify font customizations.
 */
class ShopifyCheckoutAndAccountsConfigurationBrandingShopifyFontQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutAndAccountsConfigurationBrandingShopifyFont";

    /**
     * The font sources.
     */
    public function selectSources(): static
    {
        $this->selectField("sources");

        return $this;
    }

    /**
     * The font weight.
     */
    public function selectWeight(): static
    {
        $this->selectField("weight");

        return $this;
    }
}
