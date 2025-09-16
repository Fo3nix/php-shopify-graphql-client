<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class InventoryShipmentLineItemConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "InventoryShipmentLineItemConnection";

    public function selectEdges(InventoryShipmentLineItemConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new InventoryShipmentLineItemEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(InventoryShipmentLineItemConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new InventoryShipmentLineItemQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(InventoryShipmentLineItemConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new PageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
