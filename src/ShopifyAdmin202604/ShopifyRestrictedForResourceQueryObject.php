<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * Information about product is restricted for a given resource.
 */
class ShopifyRestrictedForResourceQueryObject extends QueryObject
{
    const OBJECT_NAME = "RestrictedForResource";

    /**
     * Returns true when the product is restricted for the given resource.
     */
    public function selectRestricted(): static
    {
        $this->selectField("restricted");

        return $this;
    }

    /**
     * Restriction reason for the given resource.
     */
    public function selectRestrictedReason(): static
    {
        $this->selectField("restrictedReason");

        return $this;
    }
}
