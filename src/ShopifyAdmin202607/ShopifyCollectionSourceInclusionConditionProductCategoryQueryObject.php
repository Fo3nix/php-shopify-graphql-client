<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * A condition based on product category IDs for including products in a collection.
 */
class ShopifyCollectionSourceInclusionConditionProductCategoryQueryObject extends QueryObject
{
    const OBJECT_NAME = "CollectionSourceInclusionConditionProductCategory";

    /**
     * The unique identifier for this condition.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }

    /**
     * Specifies whether products must match any or all values.
     */
    public function selectMatchType(): static
    {
        $this->selectField("matchType");

        return $this;
    }

    /**
     * The relationship between the product category ID and the condition values.
     */
    public function selectRelation(): static
    {
        $this->selectField("relation");

        return $this;
    }

    /**
     * The product category values to match against.
     */
    public function selectValues(?ShopifyCollectionSourceInclusionConditionProductCategoryValuesArgumentsObject $argsObject = null): ShopifyCollectionSourceInclusionConditionProductCategoryValueQueryObject
    {
        $object = new ShopifyCollectionSourceInclusionConditionProductCategoryValueQueryObject("values");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
