<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyInventoryPurchaseOrderLineItemConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "InventoryPurchaseOrderLineItemConnection";

    public function selectEdges(ShopifyInventoryPurchaseOrderLineItemConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyInventoryPurchaseOrderLineItemEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ShopifyInventoryPurchaseOrderLineItemConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyInventoryPurchaseOrderLineItemQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifyInventoryPurchaseOrderLineItemConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
