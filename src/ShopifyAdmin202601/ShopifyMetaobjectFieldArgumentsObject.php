<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyMetaobjectFieldArgumentsObject extends ArgumentsObject
{
    protected $key;

    public function setKey($key)
    {
        $this->key = $key;

        return $this;
    }
}
