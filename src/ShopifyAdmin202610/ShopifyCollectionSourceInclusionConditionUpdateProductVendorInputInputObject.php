<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields for updating a condition based on product vendors.
 */
class ShopifyCollectionSourceInclusionConditionUpdateProductVendorInputInputObject extends InputObject
{
    protected $relation;
    protected $values;
    protected $matchType;

    /**
     * The relationship between the product vendor and the condition values.
     */
    public function setRelation($shopifyCollectionSourceInclusionConditionProductVendorRelation): static
    {
        $this->relation = new RawObject($shopifyCollectionSourceInclusionConditionProductVendorRelation);

        return $this;
    }

    /**
     * The product vendor values to match against.
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
