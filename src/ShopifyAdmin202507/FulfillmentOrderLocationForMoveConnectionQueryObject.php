<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class FulfillmentOrderLocationForMoveConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "FulfillmentOrderLocationForMoveConnection";

    public function selectEdges(FulfillmentOrderLocationForMoveConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new FulfillmentOrderLocationForMoveEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(FulfillmentOrderLocationForMoveConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new FulfillmentOrderLocationForMoveQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(FulfillmentOrderLocationForMoveConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new PageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
