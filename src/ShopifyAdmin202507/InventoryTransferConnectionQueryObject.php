<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class InventoryTransferConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "InventoryTransferConnection";

    public function selectEdges(InventoryTransferConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new InventoryTransferEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(InventoryTransferConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new InventoryTransferQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(InventoryTransferConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new PageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
