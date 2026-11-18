<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * The URL for the homepage of the online store in the context of a particular market and a
 * particular locale.
 */
class ShopifyMarketWebPresenceRootUrlQueryObject extends QueryObject
{
    const OBJECT_NAME = "MarketWebPresenceRootUrl";

    /**
     * The locale that the storefront loads in.
     */
    public function selectLocale(): static
    {
        $this->selectField("locale");

        return $this;
    }

    /**
     * The URL.
     */
    public function selectUrl(): static
    {
        $this->selectField("url");

        return $this;
    }
}
