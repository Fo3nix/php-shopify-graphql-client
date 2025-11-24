<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\QueryObject;

class ShopifyMarketingActivityConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "MarketingActivityConnection";

    public function selectEdges(ShopifyMarketingActivityConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMarketingActivityEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ShopifyMarketingActivityConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMarketingActivityQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifyMarketingActivityConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
