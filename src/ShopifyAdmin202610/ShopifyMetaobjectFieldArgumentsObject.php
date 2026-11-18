<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyMetaobjectFieldArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["key"];

    protected $key;

    /**
     * The metaobject key to access.
     */
    public function setKey($key): static
    {
        $this->key = $key;

        return $this;
    }
}
