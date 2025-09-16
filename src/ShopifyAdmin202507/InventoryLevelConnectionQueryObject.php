<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class InventoryLevelConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "InventoryLevelConnection";

    public function selectEdges(InventoryLevelConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new InventoryLevelEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(InventoryLevelConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new InventoryLevelQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(InventoryLevelConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new PageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
