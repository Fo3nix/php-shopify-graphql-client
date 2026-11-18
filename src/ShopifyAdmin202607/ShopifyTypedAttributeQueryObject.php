<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Represents a typed custom attribute.
 */
class ShopifyTypedAttributeQueryObject extends QueryObject
{
    const OBJECT_NAME = "TypedAttribute";

    /**
     * Key or name of the attribute.
     */
    public function selectKey(): static
    {
        $this->selectField("key");

        return $this;
    }

    /**
     * Value of the attribute.
     */
    public function selectValue(): static
    {
        $this->selectField("value");

        return $this;
    }
}
