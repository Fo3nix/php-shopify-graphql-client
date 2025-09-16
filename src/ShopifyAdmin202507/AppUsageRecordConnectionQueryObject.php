<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class AppUsageRecordConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "AppUsageRecordConnection";

    public function selectEdges(AppUsageRecordConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new AppUsageRecordEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(AppUsageRecordConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new AppUsageRecordQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(AppUsageRecordConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new PageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
