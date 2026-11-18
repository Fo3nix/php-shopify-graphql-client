<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Whether a collection is eligible for one role (inclusion or exclusion) in a sub-collection relationship, plus the reason it isn't if applicable.
 */
class ShopifyCollectionSubCollectionEligibilityStateQueryObject extends QueryObject
{
    const OBJECT_NAME = "CollectionSubCollectionEligibilityState";

    /**
     * Whether the collection can be used in this sub-collection role.
     */
    public function selectEligible(): static
    {
        $this->selectField("eligible");

        return $this;
    }

    /**
     * Stable identifier describing why the collection is ineligible. Null when `eligible` is true. Clients can map this to user-facing copy or use it as a feature flag.
     */
    public function selectIneligibleReason(): static
    {
        $this->selectField("ineligibleReason");

        return $this;
    }
}
