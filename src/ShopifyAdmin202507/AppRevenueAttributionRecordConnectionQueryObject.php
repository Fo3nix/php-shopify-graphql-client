<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class AppRevenueAttributionRecordConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "AppRevenueAttributionRecordConnection";

    public function selectEdges(AppRevenueAttributionRecordConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new AppRevenueAttributionRecordEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(AppRevenueAttributionRecordConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new AppRevenueAttributionRecordQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(AppRevenueAttributionRecordConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new PageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
