<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifyInventoryLevelConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "InventoryLevelConnection";

    public function selectEdges(ShopifyInventoryLevelConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyInventoryLevelEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ShopifyInventoryLevelConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyInventoryLevelQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifyInventoryLevelConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
