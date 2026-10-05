<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCollectionExclusionProductSelectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "CollectionExclusionProductSelection";

    public function selectProduct(ShopifyCollectionExclusionProductSelectionProductArgumentsObject $argsObject = null)
    {
        $object = new ShopifyProductQueryObject("product");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
