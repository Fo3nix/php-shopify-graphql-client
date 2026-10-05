<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyMarketRelationshipConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "MarketRelationshipConnection";

    public function selectEdges(ShopifyMarketRelationshipConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMarketRelationshipEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ShopifyMarketRelationshipConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMarketRelationshipQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifyMarketRelationshipConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
