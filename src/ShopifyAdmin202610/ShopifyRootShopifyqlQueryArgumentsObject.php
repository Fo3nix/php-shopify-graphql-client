<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootShopifyqlQueryArgumentsObject extends ArgumentsObject
{
    protected $query;

    public function setQuery($query)
    {
        $this->query = $query;

        return $this;
    }
}
