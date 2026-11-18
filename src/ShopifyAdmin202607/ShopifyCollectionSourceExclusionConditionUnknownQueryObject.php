<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * An exclusion condition introduced in a newer API version that is not modeled by this version of the API. Clients should treat the relation and values as opaque strings.
 */
class ShopifyCollectionSourceExclusionConditionUnknownQueryObject extends QueryObject
{
    const OBJECT_NAME = "CollectionSourceExclusionConditionUnknown";

    /**
     * The unique identifier for this exclusion condition.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }

    /**
     * Whether products must match any or all values. Null when the condition has no concept of a match type.
     */
    public function selectMatchType(): static
    {
        $this->selectField("matchType");

        return $this;
    }

    /**
     * The relation, as a raw string. Nullable and not coerced into an enum because the set of possible relations is open-ended for unknown condition types, and some future conditions may not have a relation at all.
     */
    public function selectRelation(): static
    {
        $this->selectField("relation");

        return $this;
    }

    /**
     * The condition values, as raw strings. Nullable because some future condition types may have no values at all.
     */
    public function selectValues(): static
    {
        $this->selectField("values");

        return $this;
    }
}
