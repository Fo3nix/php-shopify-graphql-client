<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifyInventoryTransferConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "InventoryTransferConnection";

    public function selectEdges(ShopifyInventoryTransferConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyInventoryTransferEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ShopifyInventoryTransferConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyInventoryTransferQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifyInventoryTransferConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
