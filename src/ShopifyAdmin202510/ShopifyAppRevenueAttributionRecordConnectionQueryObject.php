<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\QueryObject;

class ShopifyAppRevenueAttributionRecordConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "AppRevenueAttributionRecordConnection";

    public function selectEdges(ShopifyAppRevenueAttributionRecordConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyAppRevenueAttributionRecordEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ShopifyAppRevenueAttributionRecordConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyAppRevenueAttributionRecordQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifyAppRevenueAttributionRecordConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
