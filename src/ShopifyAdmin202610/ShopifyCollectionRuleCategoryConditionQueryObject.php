<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Specifies the taxonomy category to used for the condition.
 */
class ShopifyCollectionRuleCategoryConditionQueryObject extends QueryObject
{
    const OBJECT_NAME = "CollectionRuleCategoryCondition";

    /**
     * The taxonomy category used as condition.
     */
    public function selectValue(?ShopifyCollectionRuleCategoryConditionValueArgumentsObject $argsObject = null): ShopifyTaxonomyCategoryQueryObject
    {
        $object = new ShopifyTaxonomyCategoryQueryObject("value");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
