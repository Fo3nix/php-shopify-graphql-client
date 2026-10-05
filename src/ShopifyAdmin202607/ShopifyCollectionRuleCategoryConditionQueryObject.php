<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCollectionRuleCategoryConditionQueryObject extends QueryObject
{
    const OBJECT_NAME = "CollectionRuleCategoryCondition";

    public function selectValue(ShopifyCollectionRuleCategoryConditionValueArgumentsObject $argsObject = null)
    {
        $object = new ShopifyTaxonomyCategoryQueryObject("value");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
