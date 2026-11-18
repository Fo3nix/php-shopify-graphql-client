<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * A Shopify font.
 */
class ShopifyCheckoutBrandingShopifyFontQueryObject extends QueryObject
{
    const OBJECT_NAME = "CheckoutBrandingShopifyFont";

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
