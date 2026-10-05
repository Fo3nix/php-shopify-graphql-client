<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCollectionSubCollectionEligibilityQueryObject extends QueryObject
{
    const OBJECT_NAME = "CollectionSubCollectionEligibility";

    public function selectExclusion(ShopifyCollectionSubCollectionEligibilityExclusionArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCollectionSubCollectionEligibilityStateQueryObject("exclusion");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectInclusion(ShopifyCollectionSubCollectionEligibilityInclusionArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCollectionSubCollectionEligibilityStateQueryObject("inclusion");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
