<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class CashTrackingSessionConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "CashTrackingSessionConnection";

    public function selectEdges(CashTrackingSessionConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new CashTrackingSessionEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(CashTrackingSessionConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new CashTrackingSessionQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(CashTrackingSessionConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new PageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
