<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\ArgumentsObject;
use GraphQL\RawObject;

class ShopifyRootCatalogsCountArgumentsObject extends ArgumentsObject
{
    protected $type;
    protected $query;
    protected $limit;

    public function setType($shopifyCatalogType)
    {
        $this->type = new RawObject($shopifyCatalogType);

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
