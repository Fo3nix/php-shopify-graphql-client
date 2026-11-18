<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;

/**
 * The input fields for updating a condition in a collection source.
 */
class ShopifyCollectionUpdateSourceInclusionConditionInputInputObject extends InputObject
{
    const REQUIRED = ["id", "condition"];

    protected $id;
    protected $condition;

    /**
     * The ID of the condition to update.
     */
    public function setId($id): static
    {
        $this->id = $id;

        return $this;
    }

    /**
     * The updated condition.
     */
    public function setCondition(ShopifyCollectionSourceInclusionConditionUpdateInputInputObject $shopifyCollectionSourceInclusionConditionUpdateInputInputObject): static
    {
        $this->condition = $shopifyCollectionSourceInclusionConditionUpdateInputInputObject;

        return $this;
    }
}
