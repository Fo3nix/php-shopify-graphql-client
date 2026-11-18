<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for updating an exclusion condition in a collection source.
 */
class ShopifyCollectionUpdateSourceExclusionConditionInputInputObject extends InputObject
{
    const REQUIRED = ["id", "condition"];

    protected $id;
    protected $condition;

    /**
     * The ID of the exclusion condition to update.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }

    /**
     * The updated exclusion condition.
     */
    public function setCondition(ShopifyCollectionSourceExclusionConditionUpdateInputInputObject $shopifyCollectionSourceExclusionConditionUpdateInputInputObject): static
    {
        $this->condition = $shopifyCollectionSourceExclusionConditionUpdateInputInputObject;

        return $this;
    }
}
