<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifyAppUsageRecordConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "AppUsageRecordConnection";

    public function selectEdges(ShopifyAppUsageRecordConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyAppUsageRecordEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ShopifyAppUsageRecordConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyAppUsageRecordQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifyAppUsageRecordConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
