<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyInventoryScheduledChangeConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "InventoryScheduledChangeConnection";

    public function selectEdges(ShopifyInventoryScheduledChangeConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyInventoryScheduledChangeEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ShopifyInventoryScheduledChangeConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyInventoryScheduledChangeQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifyInventoryScheduledChangeConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
