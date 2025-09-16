<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\ArgumentsObject;

class MetaobjectFieldArgumentsObject extends ArgumentsObject
{
    protected $key;

    public function setKey($key)
    {
        $this->key = $key;

        return $this;
    }
}
