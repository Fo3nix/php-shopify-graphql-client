<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Information about the smart collection condition capability on a metafield definition.
 */
class ShopifyMetafieldCapabilitySmartCollectionConditionQueryObject extends QueryObject
{
    const OBJECT_NAME = "MetafieldCapabilitySmartCollectionCondition";

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
