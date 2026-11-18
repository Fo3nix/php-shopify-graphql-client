<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Information about the admin filterable capability on a metafield definition.
 */
class ShopifyMetafieldCapabilityAdminFilterableQueryObject extends QueryObject
{
    const OBJECT_NAME = "MetafieldCapabilityAdminFilterable";

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

    /**
     * Determines the metafield definition's filter status for use in admin filtering.
     */
    public function selectStatus(): static
    {
        $this->selectField("status");

        return $this;
    }
}
