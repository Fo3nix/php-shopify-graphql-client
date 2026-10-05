<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyOrderAdjustmentConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "OrderAdjustmentConnection";

    public function selectEdges(ShopifyOrderAdjustmentConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyOrderAdjustmentEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ShopifyOrderAdjustmentConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyOrderAdjustmentQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifyOrderAdjustmentConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
