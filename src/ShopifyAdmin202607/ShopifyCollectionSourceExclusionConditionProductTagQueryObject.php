<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * A condition based on product tags for excluding products from a collection.
 */
class ShopifyCollectionSourceExclusionConditionProductTagQueryObject extends QueryObject
{
    const OBJECT_NAME = "CollectionSourceExclusionConditionProductTag";

    /**
     * The unique identifier for this exclusion condition.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }

    /**
     * Determines how many values a metafield must match against in order to satisfy this condition. Will be either at least one given value, or all of the given values.
     */
    public function selectMatchType(): static
    {
        $this->selectField("matchType");

        return $this;
    }

    /**
     * The relationship between the product tag and the condition values.
     */
    public function selectRelation(): static
    {
        $this->selectField("relation");

        return $this;
    }

    /**
     * The tag values to match against.
     */
    public function selectValues(): static
    {
        $this->selectField("values");

        return $this;
    }
}
