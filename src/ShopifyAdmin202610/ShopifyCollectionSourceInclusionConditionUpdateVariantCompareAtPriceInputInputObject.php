<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields for updating a condition based on variant compare at prices.
 */
class ShopifyCollectionSourceInclusionConditionUpdateVariantCompareAtPriceInputInputObject extends InputObject
{
    protected $relation;
    protected $value;

    /**
     * The relationship between the variant compare at price and the condition value.
     */
    public function setRelation($shopifyCollectionSourceInclusionConditionVariantCompareAtPriceRelation): static
    {
        $this->relation = new RawObject($shopifyCollectionSourceInclusionConditionVariantCompareAtPriceRelation);

        return $this;
    }

    /**
     * The variant compare at price to match against. Required for numeric relations and must be absent for IS_SET or IS_NOT_SET.
     */
    public function setValue(ShopifyMoneyInputInputObject $shopifyMoneyInputInputObject): static
    {
        $this->value = $shopifyMoneyInputInputObject;

        return $this;
    }
}
