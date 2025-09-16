<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class CollectionRuleCategoryConditionQueryObject extends QueryObject
{
    const OBJECT_NAME = "CollectionRuleCategoryCondition";

    public function selectValue(CollectionRuleCategoryConditionValueArgumentsObject $argsObject = null)
    {
        $object = new TaxonomyCategoryQueryObject("value");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
