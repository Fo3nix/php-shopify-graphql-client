<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyMarketRelationshipsStatusQueryObject extends QueryObject
{
    const OBJECT_NAME = "MarketRelationshipsStatus";

    public function selectVersion()
    {
        $this->selectField("version");

        return $this;
    }
}
