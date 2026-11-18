<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * A value for a product category condition.
 */
class ShopifyCollectionSourceInclusionConditionProductCategoryValueQueryObject extends QueryObject
{
    const OBJECT_NAME = "CollectionSourceInclusionConditionProductCategoryValue";

    /**
     * The product category to match against.
     */
    public function selectCategory(?ShopifyCollectionSourceInclusionConditionProductCategoryValueCategoryArgumentsObject $argsObject = null): ShopifyTaxonomyCategoryQueryObject
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
