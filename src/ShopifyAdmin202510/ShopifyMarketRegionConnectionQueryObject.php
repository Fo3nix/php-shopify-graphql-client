<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\QueryObject;

class ShopifyMarketRegionConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "MarketRegionConnection";

    public function selectEdges(ShopifyMarketRegionConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMarketRegionEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifyMarketRegionConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
