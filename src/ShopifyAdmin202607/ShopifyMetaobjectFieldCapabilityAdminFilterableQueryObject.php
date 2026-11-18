<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Information about the admin filterable capability.
 */
class ShopifyMetaobjectFieldCapabilityAdminFilterableQueryObject extends QueryObject
{
    const OBJECT_NAME = "MetaobjectFieldCapabilityAdminFilterable";

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
