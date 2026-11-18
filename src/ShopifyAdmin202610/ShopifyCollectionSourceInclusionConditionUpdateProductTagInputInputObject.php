<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields for updating a condition based on product tags.
 */
class ShopifyCollectionSourceInclusionConditionUpdateProductTagInputInputObject extends InputObject
{
    protected $relation;
    protected $values;
    protected $matchType;

    /**
     * The relationship between the product tag and the condition values.
     */
    public function setRelation($shopifyCollectionSourceInclusionConditionProductTagRelation): static
    {
        $this->relation = new RawObject($shopifyCollectionSourceInclusionConditionProductTagRelation);

        return $this;
    }

    /**
     * The tag values to match against.
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
