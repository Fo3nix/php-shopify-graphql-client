<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields for updating a condition based on variant inventory quantities.
 */
class ShopifyCollectionSourceInclusionConditionUpdateVariantInventoryInputInputObject extends InputObject
{
    protected $relation;
    protected $value;

    /**
     * The relationship between the variant inventory and the condition value.
     */
    public function setRelation($shopifyCollectionSourceInclusionConditionVariantInventoryRelation): static
    {
        $this->relation = new RawObject($shopifyCollectionSourceInclusionConditionVariantInventoryRelation);

        return $this;
    }

    /**
     * The variant inventory quantity to match against.
     */
    public function setValue($value): static
    {
        $this->value = $value;

        return $this;
    }
}
