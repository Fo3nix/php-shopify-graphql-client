<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCollectionConditionsSourceConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "CollectionConditionsSourceConnection";

    public function selectEdges(ShopifyCollectionConditionsSourceConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCollectionConditionsSourceEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ShopifyCollectionConditionsSourceConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCollectionConditionsSourceQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifyCollectionConditionsSourceConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
