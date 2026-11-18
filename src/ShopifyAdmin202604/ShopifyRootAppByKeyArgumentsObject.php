<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyRootAppByKeyArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["apiKey"];

    protected $apiKey;

    /**
     * Client ID of the app.
     */
    public function setApiKey($apiKey): static
    {
        $this->apiKey = $apiKey;

        return $this;
    }
}
