<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyTranslatableResourceTranslatableContentArgumentsObject extends ArgumentsObject
{
    protected $marketId;

    public function setMarketId($marketId)
    {
        $this->marketId = $marketId;

        return $this;
    }
}
