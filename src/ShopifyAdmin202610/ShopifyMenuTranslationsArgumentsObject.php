<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyMenuTranslationsArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["locale"];

    protected $locale;
    protected $marketId;

    /**
     * Filters translations locale.
     */
    public function setLocale($locale): static
    {
        $this->locale = $locale;

        return $this;
    }

    /**
     * Filters translations by market ID. Use this argument to retrieve content specific to a market.
     */
    public function setMarketId($marketId): static
    {
        $this->marketId = $marketId;

        return $this;
    }
}
