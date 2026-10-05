<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyMarketingEventConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "MarketingEventConnection";

    public function selectEdges(ShopifyMarketingEventConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMarketingEventEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ShopifyMarketingEventConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMarketingEventQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifyMarketingEventConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
