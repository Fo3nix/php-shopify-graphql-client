<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyFulfillmentOrderLocationForMoveConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "FulfillmentOrderLocationForMoveConnection";

    public function selectEdges(ShopifyFulfillmentOrderLocationForMoveConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyFulfillmentOrderLocationForMoveEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ShopifyFulfillmentOrderLocationForMoveConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyFulfillmentOrderLocationForMoveQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifyFulfillmentOrderLocationForMoveConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
