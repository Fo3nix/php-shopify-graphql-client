<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Identifies a metafield definition by its owner type, namespace, and key.
 */
class ShopifyMetafieldDefinitionIdentifierQueryObject extends QueryObject
{
    const OBJECT_NAME = "MetafieldDefinitionIdentifier";

    /**
     * The unique identifier for the metafield definition within its namespace.
     */
    public function selectKey(): static
    {
        $this->selectField("key");

        return $this;
    }

    /**
     * The container for a group of metafields that the metafield definition is associated with.
     */
    public function selectNamespace(): static
    {
        $this->selectField("namespace");

        return $this;
    }

    /**
     * The resource type that the metafield definition is attached to.
     */
    public function selectOwnerType(): static
    {
        $this->selectField("ownerType");

        return $this;
    }
}
