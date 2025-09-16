<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class InventoryShipmentConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "InventoryShipmentConnection";

    public function selectEdges(InventoryShipmentConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new InventoryShipmentEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(InventoryShipmentConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new InventoryShipmentQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(InventoryShipmentConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new PageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
