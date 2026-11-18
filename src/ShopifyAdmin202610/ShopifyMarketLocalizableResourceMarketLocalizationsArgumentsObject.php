<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyMarketLocalizableResourceMarketLocalizationsArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["marketId"];

    protected $marketId;

    /**
     * Filters market localizations by market ID.
     */
    public function setMarketId($marketId): static
    {
        $this->marketId = $marketId;

        return $this;
    }
}
