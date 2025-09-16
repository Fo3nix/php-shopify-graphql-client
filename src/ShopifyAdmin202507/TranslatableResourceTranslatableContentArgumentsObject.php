<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\ArgumentsObject;

class TranslatableResourceTranslatableContentArgumentsObject extends ArgumentsObject
{
    protected $marketId;

    public function setMarketId($marketId)
    {
        $this->marketId = $marketId;

        return $this;
    }
}
