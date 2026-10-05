<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyDiscountCollectionsQueryObject extends QueryObject
{
    const OBJECT_NAME = "DiscountCollections";

    public function selectCollections(ShopifyDiscountCollectionsCollectionsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCollectionConnectionQueryObject("collections");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
