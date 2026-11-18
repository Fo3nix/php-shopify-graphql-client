<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * A condition based on product titles for including products in a collection.
 */
class ShopifyCollectionSourceInclusionConditionProductTitleQueryObject extends QueryObject
{
    const OBJECT_NAME = "CollectionSourceInclusionConditionProductTitle";

    /**
     * The unique identifier for this condition.
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
     * The relationship between the product title and the condition values.
     */
    public function selectRelation(): static
    {
        $this->selectField("relation");

        return $this;
    }

    /**
     * The title values to match against.
     */
    public function selectValues(): static
    {
        $this->selectField("values");

        return $this;
    }
}
