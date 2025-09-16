<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\ArgumentsObject;

class DiscountAutomaticNodeMetafieldArgumentsObject extends ArgumentsObject
{
    protected $namespace;
    protected $key;

    public function setNamespace($namespace)
    {
        $this->namespace = $namespace;

        return $this;
    }

    public function setKey($key)
    {
        $this->key = $key;

        return $this;
    }
}
