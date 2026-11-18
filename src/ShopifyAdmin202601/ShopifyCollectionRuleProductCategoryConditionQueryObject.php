<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * Specifies the condition for a Product Category field.
 */
class ShopifyCollectionRuleProductCategoryConditionQueryObject extends QueryObject
{
    const OBJECT_NAME = "CollectionRuleProductCategoryCondition";

    /**
     * The value of the condition.
     */
    public function selectValue(?ShopifyCollectionRuleProductCategoryConditionValueArgumentsObject $argsObject = null): ShopifyProductTaxonomyNodeQueryObject
    {
        $object = new ShopifyProductTaxonomyNodeQueryObject("value");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
