<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * A condition based on product status for including products in a collection.
 */
class ShopifyCollectionSourceInclusionConditionProductStatusQueryObject extends QueryObject
{
    const OBJECT_NAME = "CollectionSourceInclusionConditionProductStatus";

    /**
     * The unique identifier for this condition.
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
     * The relationship between the product status and the condition values.
     */
    public function selectRelation(): static
    {
        $this->selectField("relation");

        return $this;
    }

    /**
     * The product status values to match against.
     */
    public function selectValues(): static
    {
        $this->selectField("values");

        return $this;
    }
}
