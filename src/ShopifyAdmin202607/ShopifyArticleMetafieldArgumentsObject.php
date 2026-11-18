<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\ArgumentsObject;

class ShopifyArticleMetafieldArgumentsObject extends ArgumentsObject
{
    const REQUIRED = ["key"];

    protected $namespace;
    protected $key;

    /**
     * The container the metafield belongs to. If omitted, the app-reserved namespace will be used.
     */
    public function setNamespace($namespace): static
    {
        $this->namespace = $namespace;

        return $this;
    }

    /**
     * The key for the metafield.
     */
    public function setKey($key): static
    {
        $this->key = $key;

        return $this;
    }
}
