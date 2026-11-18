<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields for a condition based on product status.
 */
class ShopifyCollectionSourceInclusionConditionProductStatusInputInputObject extends InputObject
{
    const REQUIRED = ["relation", "values", "matchType"];

    protected $relation;
    protected $values;
    protected $matchType;

    /**
     * The relationship between the product status and the condition values.
     */
    public function setRelation($shopifyCollectionSourceInclusionConditionProductStatusRelation): static
    {
        $this->relation = new RawObject($shopifyCollectionSourceInclusionConditionProductStatusRelation);

        return $this;
    }

    /**
     * The product status values to match against.
     */
    public function setValues(array $values): static
    {
        $this->values = array_map(function ($value) {
            return new RawObject($value);
        }, $values);

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
