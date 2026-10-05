<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyInventoryPurchaseOrderConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "InventoryPurchaseOrderConnection";

    public function selectEdges(ShopifyInventoryPurchaseOrderConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyInventoryPurchaseOrderEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ShopifyInventoryPurchaseOrderConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyInventoryPurchaseOrderQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifyInventoryPurchaseOrderConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
