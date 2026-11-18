<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields for a condition based on product titles.
 */
class ShopifyCollectionSourceInclusionConditionProductTitleInputInputObject extends InputObject
{
    const REQUIRED = ["relation", "values", "matchType"];

    protected $relation;
    protected $values;
    protected $matchType;

    /**
     * The relationship between the product title and the condition values.
     */
    public function setRelation($shopifyCollectionSourceInclusionConditionProductTitleRelation): static
    {
        $this->relation = new RawObject($shopifyCollectionSourceInclusionConditionProductTitleRelation);

        return $this;
    }

    /**
     * The title values to match against.
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
