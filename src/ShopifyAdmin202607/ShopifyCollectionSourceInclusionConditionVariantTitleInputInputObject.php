<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields for a condition based on variant titles.
 */
class ShopifyCollectionSourceInclusionConditionVariantTitleInputInputObject extends InputObject
{
    const REQUIRED = ["relation", "values", "matchType"];

    protected $relation;
    protected $values;
    protected $matchType;

    /**
     * The relationship between the variant title and the condition values.
     */
    public function setRelation($shopifyCollectionSourceInclusionConditionVariantTitleRelation): static
    {
        $this->relation = new RawObject($shopifyCollectionSourceInclusionConditionVariantTitleRelation);

        return $this;
    }

    /**
     * The variant title values to match against.
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
