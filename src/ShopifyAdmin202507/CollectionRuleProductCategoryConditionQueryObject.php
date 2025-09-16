<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class CollectionRuleProductCategoryConditionQueryObject extends QueryObject
{
    const OBJECT_NAME = "CollectionRuleProductCategoryCondition";

    public function selectValue(CollectionRuleProductCategoryConditionValueArgumentsObject $argsObject = null)
    {
        $object = new ProductTaxonomyNodeQueryObject("value");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
