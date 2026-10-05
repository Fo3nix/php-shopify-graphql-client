<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;
use GraphQL\RawObject;

class ShopifyRootPublicationsCountArgumentsObject extends ArgumentsObject
{
    protected $catalogType;
    protected $limit;

    public function setCatalogType($shopifyCatalogType)
    {
        $this->catalogType = new RawObject($shopifyCatalogType);

        return $this;
    }

    public function setLimit($limit)
    {
        $this->limit = $limit;

        return $this;
    }
}
