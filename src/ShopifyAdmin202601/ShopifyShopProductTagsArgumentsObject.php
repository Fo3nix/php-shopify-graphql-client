<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyShopProductTagsArgumentsObject extends ArgumentsObject
{
    protected $first;

    public function setFirst($first)
    {
        $this->first = $first;

        return $this;
    }
}
