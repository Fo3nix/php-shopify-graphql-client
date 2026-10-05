<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootAppByKeyArgumentsObject extends ArgumentsObject
{
    protected $apiKey;

    public function setApiKey($apiKey)
    {
        $this->apiKey = $apiKey;

        return $this;
    }
}
