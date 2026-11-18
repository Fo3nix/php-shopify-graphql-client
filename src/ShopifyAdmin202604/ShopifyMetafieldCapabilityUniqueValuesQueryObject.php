<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * Information about the unique values capability on a metafield definition.
 */
class ShopifyMetafieldCapabilityUniqueValuesQueryObject extends QueryObject
{
    const OBJECT_NAME = "MetafieldCapabilityUniqueValues";

    /**
     * Indicates if the definition is eligible to have the capability.
     */
    public function selectEligible(): static
    {
        $this->selectField("eligible");

        return $this;
    }

    /**
     * Indicates if the capability is enabled.
     */
    public function selectEnabled(): static
    {
        $this->selectField("enabled");

        return $this;
    }
}
