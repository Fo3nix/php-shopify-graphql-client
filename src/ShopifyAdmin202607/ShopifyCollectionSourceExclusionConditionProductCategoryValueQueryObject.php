<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * A value for a product category exclusion condition.
 */
class ShopifyCollectionSourceExclusionConditionProductCategoryValueQueryObject extends QueryObject
{
    const OBJECT_NAME = "CollectionSourceExclusionConditionProductCategoryValue";

    /**
     * The product category to match against.
     */
    public function selectCategory(?ShopifyCollectionSourceExclusionConditionProductCategoryValueCategoryArgumentsObject $argsObject = null): ShopifyTaxonomyCategoryQueryObject
    {
        $object = new ShopifyTaxonomyCategoryQueryObject("category");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Whether to include descendants of the product category.
     */
    public function selectIncludeDescendants(): static
    {
        $this->selectField("includeDescendants");

        return $this;
    }
}
