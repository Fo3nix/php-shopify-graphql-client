<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\QueryObject;

class ShopifyInventoryItemConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "InventoryItemConnection";

    public function selectEdges(ShopifyInventoryItemConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyInventoryItemEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ShopifyInventoryItemConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyInventoryItemQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifyInventoryItemConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
