<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields for updating a condition based on variant weights.
 */
class ShopifyCollectionSourceInclusionConditionUpdateVariantWeightInputInputObject extends InputObject
{
    protected $relation;
    protected $value;

    /**
     * The relationship between the variant weight and the condition value.
     */
    public function setRelation($shopifyCollectionSourceInclusionConditionVariantWeightRelation): static
    {
        $this->relation = new RawObject($shopifyCollectionSourceInclusionConditionVariantWeightRelation);

        return $this;
    }

    /**
     * The variant weight to match against.
     */
    public function setValue(ShopifyWeightInputInputObject $shopifyWeightInputInputObject): static
    {
        $this->value = $shopifyWeightInputInputObject;

        return $this;
    }
}
