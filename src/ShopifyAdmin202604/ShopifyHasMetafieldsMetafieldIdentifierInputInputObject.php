<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields that identify metafield definitions.
 */
class ShopifyHasMetafieldsMetafieldIdentifierInputInputObject extends InputObject
{
    const REQUIRED = ["key"];

    protected $namespace;
    protected $key;

    /**
     * The container for a group of metafields that the metafield definition will be associated with. If omitted, the
     * app-reserved namespace will be used.
     */
    public function setNamespace($namespace): static
    {
        $this->namespace = $namespace;

        return $this;
    }

    /**
     * The unique identifier for the metafield definition within its namespace.
     */
    public function setKey($key): static
    {
        $this->key = $key;

        return $this;
    }
}
