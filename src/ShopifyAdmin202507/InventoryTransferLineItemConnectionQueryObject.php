<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class InventoryTransferLineItemConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "InventoryTransferLineItemConnection";

    public function selectEdges(InventoryTransferLineItemConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new InventoryTransferLineItemEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(InventoryTransferLineItemConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new InventoryTransferLineItemQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(InventoryTransferLineItemConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new PageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
