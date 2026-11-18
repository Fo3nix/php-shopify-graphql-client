<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields for updating a condition based on product types.
 */
class ShopifyCollectionSourceInclusionConditionUpdateProductTypeInputInputObject extends InputObject
{
    protected $relation;
    protected $values;
    protected $matchType;

    /**
     * The relationship between the product type and the condition values.
     */
    public function setRelation($shopifyCollectionSourceInclusionConditionProductTypeRelation): static
    {
        $this->relation = new RawObject($shopifyCollectionSourceInclusionConditionProductTypeRelation);

        return $this;
    }

    /**
     * The product type values to match against.
     */
    public function setValues(array $values): static
    {
        $this->values = $values;

        return $this;
    }

    /**
     * Whether to match any or all of the values.
     */
    public function setMatchType($shopifyCollectionConditionMatchType): static
    {
        $this->matchType = new RawObject($shopifyCollectionConditionMatchType);

        return $this;
    }
}
