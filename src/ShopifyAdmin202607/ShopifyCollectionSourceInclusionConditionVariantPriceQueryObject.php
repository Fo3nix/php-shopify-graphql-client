<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * A condition based on variant prices for including products in a collection.
 */
class ShopifyCollectionSourceInclusionConditionVariantPriceQueryObject extends QueryObject
{
    const OBJECT_NAME = "CollectionSourceInclusionConditionVariantPrice";

    /**
     * The unique identifier for this condition.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }

    /**
     * The relationship between the variant price and the condition values.
     */
    public function selectRelation(): static
    {
        $this->selectField("relation");

        return $this;
    }

    /**
     * The variant price to match against.
     */
    public function selectValue(?ShopifyCollectionSourceInclusionConditionVariantPriceValueArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("value");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
