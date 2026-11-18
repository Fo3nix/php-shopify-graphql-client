<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields for an exclusion condition based on product categories.
 */
class ShopifyCollectionSourceExclusionConditionProductCategoryInputInputObject extends InputObject
{
    const REQUIRED = ["relation", "values", "matchType"];

    protected $relation;
    protected $values;
    protected $matchType;

    /**
     * The relationship between the product category and the condition values.
     */
    public function setRelation($shopifyCollectionSourceExclusionConditionProductCategoryRelation): static
    {
        $this->relation = new RawObject($shopifyCollectionSourceExclusionConditionProductCategoryRelation);

        return $this;
    }

    /**
     * The product category values to match against.
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
