<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * A condition based on variant compare at prices for including products in a collection.
 */
class ShopifyCollectionSourceInclusionConditionVariantCompareAtPriceQueryObject extends QueryObject
{
    const OBJECT_NAME = "CollectionSourceInclusionConditionVariantCompareAtPrice";

    /**
     * The unique identifier for this condition.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }

    /**
     * The relationship between the variant compare at price and the condition values.
     */
    public function selectRelation(): static
    {
        $this->selectField("relation");

        return $this;
    }

    /**
     * The variant compare at price to match against. Null when the relation is IS_SET or IS_NOT_SET.
     */
    public function selectValue(?ShopifyCollectionSourceInclusionConditionVariantCompareAtPriceValueArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("value");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
