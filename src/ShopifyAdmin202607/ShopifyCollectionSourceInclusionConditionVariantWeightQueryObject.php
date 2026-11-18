<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * A condition based on variant weights for including products in a collection.
 */
class ShopifyCollectionSourceInclusionConditionVariantWeightQueryObject extends QueryObject
{
    const OBJECT_NAME = "CollectionSourceInclusionConditionVariantWeight";

    /**
     * The unique identifier for this condition.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }

    /**
     * The relationship between the variant weight and the condition values.
     */
    public function selectRelation(): static
    {
        $this->selectField("relation");

        return $this;
    }

    /**
     * The variant weight to match against.
     */
    public function selectValue(?ShopifyCollectionSourceInclusionConditionVariantWeightValueArgumentsObject $argsObject = null): ShopifyWeightQueryObject
    {
        $object = new ShopifyWeightQueryObject("value");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
