<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifyInventoryShipmentConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "InventoryShipmentConnection";

    public function selectEdges(ShopifyInventoryShipmentConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyInventoryShipmentEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ShopifyInventoryShipmentConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyInventoryShipmentQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifyInventoryShipmentConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
