<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class MarketWebPresenceConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "MarketWebPresenceConnection";

    public function selectEdges(MarketWebPresenceConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new MarketWebPresenceEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(MarketWebPresenceConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new MarketWebPresenceQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(MarketWebPresenceConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new PageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
