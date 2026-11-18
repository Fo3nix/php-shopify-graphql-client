<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * A constraint subtype value that the metafield definition applies to.
 */
class ShopifyMetafieldDefinitionConstraintValueQueryObject extends QueryObject
{
    const OBJECT_NAME = "MetafieldDefinitionConstraintValue";

    /**
     * The subtype value of the constraint.
     */
    public function selectValue(): static
    {
        $this->selectField("value");

        return $this;
    }
}
