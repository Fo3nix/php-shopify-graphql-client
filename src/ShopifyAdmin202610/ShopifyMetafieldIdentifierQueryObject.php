<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Identifies a metafield by its owner resource, namespace, and key.
 */
class ShopifyMetafieldIdentifierQueryObject extends QueryObject
{
    const OBJECT_NAME = "MetafieldIdentifier";

    /**
     * The key of the metafield.
     */
    public function selectKey(): static
    {
        $this->selectField("key");

        return $this;
    }

    /**
     * The namespace of the metafield.
     */
    public function selectNamespace(): static
    {
        $this->selectField("namespace");

        return $this;
    }

    /**
     * GID of the owner resource that the metafield belongs to.
     */
    public function selectOwnerId(): static
    {
        $this->selectField("ownerId");

        return $this;
    }
}
