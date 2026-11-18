<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * A condition based on variant inventory quantities for including products in a collection.
 */
class ShopifyCollectionSourceInclusionConditionVariantInventoryQueryObject extends QueryObject
{
    const OBJECT_NAME = "CollectionSourceInclusionConditionVariantInventory";

    /**
     * The unique identifier for this condition.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }

    /**
     * The relationship between the variant inventory and the condition values.
     */
    public function selectRelation(): static
    {
        $this->selectField("relation");

        return $this;
    }

    /**
     * The variant inventory to match against.
     */
    public function selectValue(): static
    {
        $this->selectField("value");

        return $this;
    }
}
