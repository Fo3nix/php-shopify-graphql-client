<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * A condition based on product vendors for excluding products from a collection.
 */
class ShopifyCollectionSourceExclusionConditionProductVendorQueryObject extends QueryObject
{
    const OBJECT_NAME = "CollectionSourceExclusionConditionProductVendor";

    /**
     * The unique identifier for this exclusion condition.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }

    /**
     * Specifies whether products must match any or all values.
     */
    public function selectMatchType(): static
    {
        $this->selectField("matchType");

        return $this;
    }

    /**
     * The relationship between the product vendor and the condition values.
     */
    public function selectRelation(): static
    {
        $this->selectField("relation");

        return $this;
    }

    /**
     * The product vendor values to match against.
     */
    public function selectValues(): static
    {
        $this->selectField("values");

        return $this;
    }
}
