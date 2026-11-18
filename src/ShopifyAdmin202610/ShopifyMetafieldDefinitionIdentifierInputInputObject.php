<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields that identify metafield definitions.
 */
class ShopifyMetafieldDefinitionIdentifierInputInputObject extends InputObject
{
    const REQUIRED = ["ownerType", "key"];

    protected $ownerType;
    protected $namespace;
    protected $key;

    /**
     * The resource type that the metafield definition is attached to.
     */
    public function setOwnerType($shopifyMetafieldOwnerType): static
    {
        $this->ownerType = new RawObject($shopifyMetafieldOwnerType);

        return $this;
    }

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
