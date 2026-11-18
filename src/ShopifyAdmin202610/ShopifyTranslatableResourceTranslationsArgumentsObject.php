<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyTranslatableResourceTranslationsArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["locale"];

    protected $locale;
    protected $outdated;
    protected $marketId;

    /**
     * Filters translations by locale.
     */
    public function setLocale($locale): static
    {
        $this->locale = $locale;

        return $this;
    }

    /**
     * Filters by outdated translations.
     */
    public function setOutdated($outdated): static
    {
        $this->outdated = $outdated;

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
