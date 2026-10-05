<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyMarketWebPresenceConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "MarketWebPresenceConnection";

    public function selectEdges(ShopifyMarketWebPresenceConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMarketWebPresenceEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ShopifyMarketWebPresenceConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMarketWebPresenceQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifyMarketWebPresenceConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
