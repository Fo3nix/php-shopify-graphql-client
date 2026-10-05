<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCollectionConditionsSourcesByAppConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "CollectionConditionsSourcesByAppConnection";

    public function selectEdges(ShopifyCollectionConditionsSourcesByAppConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCollectionConditionsSourcesByAppEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ShopifyCollectionConditionsSourcesByAppConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCollectionConditionsSourcesByAppQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifyCollectionConditionsSourcesByAppConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
