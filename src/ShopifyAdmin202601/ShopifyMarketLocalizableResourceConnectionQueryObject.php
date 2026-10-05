<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

class ShopifyMarketLocalizableResourceConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "MarketLocalizableResourceConnection";

    public function selectEdges(ShopifyMarketLocalizableResourceConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMarketLocalizableResourceEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ShopifyMarketLocalizableResourceConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMarketLocalizableResourceQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifyMarketLocalizableResourceConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
