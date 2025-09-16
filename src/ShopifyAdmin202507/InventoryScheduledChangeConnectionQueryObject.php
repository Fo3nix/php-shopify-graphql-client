<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class InventoryScheduledChangeConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "InventoryScheduledChangeConnection";

    public function selectEdges(InventoryScheduledChangeConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new InventoryScheduledChangeEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(InventoryScheduledChangeConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new InventoryScheduledChangeQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(InventoryScheduledChangeConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new PageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
