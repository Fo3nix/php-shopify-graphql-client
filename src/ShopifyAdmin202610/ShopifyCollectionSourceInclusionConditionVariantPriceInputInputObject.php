<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InputObject;
use GraphQL\RawObject;

/**
 * The input fields for a condition based on variant prices.
 */
class ShopifyCollectionSourceInclusionConditionVariantPriceInputInputObject extends InputObject
{
    const REQUIRED = ["relation", "value"];

    protected $relation;
    protected $value;

    /**
     * The relationship between the variant price and the condition value.
     */
    public function setRelation($shopifyCollectionSourceInclusionConditionVariantPriceRelation): static
    {
        $this->relation = new RawObject($shopifyCollectionSourceInclusionConditionVariantPriceRelation);

        return $this;
    }

    /**
     * The variant price to match against.
     */
    public function setValue(ShopifyMoneyInputInputObject $shopifyMoneyInputInputObject): static
    {
        $this->value = $shopifyMoneyInputInputObject;

        return $this;
    }
}
