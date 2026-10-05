<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifyInventoryTransferLineItemConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "InventoryTransferLineItemConnection";

    public function selectEdges(ShopifyInventoryTransferLineItemConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyInventoryTransferLineItemEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ShopifyInventoryTransferLineItemConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyInventoryTransferLineItemQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifyInventoryTransferLineItemConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
