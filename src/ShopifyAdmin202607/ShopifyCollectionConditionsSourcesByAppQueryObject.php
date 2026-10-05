<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCollectionConditionsSourcesByAppQueryObject extends QueryObject
{
    const OBJECT_NAME = "CollectionConditionsSourcesByApp";

    public function selectApp(ShopifyCollectionConditionsSourcesByAppAppArgumentsObject $argsObject = null)
    {
        $object = new ShopifyAppQueryObject("app");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectSources(ShopifyCollectionConditionsSourcesByAppSourcesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCollectionConditionsSourceConnectionQueryObject("sources");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
