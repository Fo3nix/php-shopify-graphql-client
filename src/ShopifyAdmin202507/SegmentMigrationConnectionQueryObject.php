<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class SegmentMigrationConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "SegmentMigrationConnection";

    public function selectEdges(SegmentMigrationConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new SegmentMigrationEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(SegmentMigrationConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new SegmentMigrationQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(SegmentMigrationConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new PageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
