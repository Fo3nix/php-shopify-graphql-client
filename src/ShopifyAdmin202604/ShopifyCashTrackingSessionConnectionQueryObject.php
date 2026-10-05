<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCashTrackingSessionConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "CashTrackingSessionConnection";

    public function selectEdges(ShopifyCashTrackingSessionConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCashTrackingSessionEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ShopifyCashTrackingSessionConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCashTrackingSessionQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifyCashTrackingSessionConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
