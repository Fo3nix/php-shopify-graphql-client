<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyInventoryShipmentLineItemConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "InventoryShipmentLineItemConnection";

    public function selectEdges(ShopifyInventoryShipmentLineItemConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyInventoryShipmentLineItemEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ShopifyInventoryShipmentLineItemConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyInventoryShipmentLineItemQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifyInventoryShipmentLineItemConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
