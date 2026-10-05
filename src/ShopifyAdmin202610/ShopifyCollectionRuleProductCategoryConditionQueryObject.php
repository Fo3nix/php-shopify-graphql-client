<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCollectionRuleProductCategoryConditionQueryObject extends QueryObject
{
    const OBJECT_NAME = "CollectionRuleProductCategoryCondition";

    public function selectValue(ShopifyCollectionRuleProductCategoryConditionValueArgumentsObject $argsObject = null)
    {
        $object = new ShopifyProductTaxonomyNodeQueryObject("value");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
