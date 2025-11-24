<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\QueryObject;

class ShopifySegmentMigrationConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "SegmentMigrationConnection";

    public function selectEdges(ShopifySegmentMigrationConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifySegmentMigrationEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ShopifySegmentMigrationConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifySegmentMigrationQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifySegmentMigrationConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
