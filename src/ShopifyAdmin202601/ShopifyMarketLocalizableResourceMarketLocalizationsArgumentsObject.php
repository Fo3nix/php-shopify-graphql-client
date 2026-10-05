<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyMarketLocalizableResourceMarketLocalizationsArgumentsObject extends ArgumentsObject
{
    protected $marketId;

    public function setMarketId($marketId)
    {
        $this->marketId = $marketId;

        return $this;
    }
}
