<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyTranslatableResourceTranslatableContentArgumentsObject extends ArgumentsObject
{
    protected $marketId;

    /**
     * Filters translatable content by market ID. Use this argument to retrieve translatable content specific to a market.
     */
    public function setMarketId($marketId): static
    {
        $this->marketId = $marketId;

        return $this;
    }
}
