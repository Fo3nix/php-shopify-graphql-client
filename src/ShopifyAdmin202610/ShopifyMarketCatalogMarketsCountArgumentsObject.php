<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;
use GraphQL\RawObject;

class ShopifyMarketCatalogMarketsCountArgumentsObject extends ArgumentsObject
{
    protected $type;
    protected $status;
    protected $query;
    protected $limit;

    public function setType($shopifyMarketType)
    {
        $this->type = new RawObject($shopifyMarketType);

        return $this;
    }

    public function setStatus($shopifyMarketStatus)
    {
        $this->status = new RawObject($shopifyMarketStatus);

        return $this;
    }

    public function setQuery($query)
    {
        $this->query = $query;

        return $this;
    }

    public function setLimit($limit)
    {
        $this->limit = $limit;

        return $this;
    }
}
