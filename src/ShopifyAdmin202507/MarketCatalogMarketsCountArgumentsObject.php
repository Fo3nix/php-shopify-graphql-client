<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\ArgumentsObject;
use GraphQL\RawObject;

class MarketCatalogMarketsCountArgumentsObject extends ArgumentsObject
{
    protected $type;
    protected $status;
    protected $query;
    protected $limit;

    public function setType($marketType)
    {
        $this->type = new RawObject($marketType);

        return $this;
    }

    public function setStatus($marketStatus)
    {
        $this->status = new RawObject($marketStatus);

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
