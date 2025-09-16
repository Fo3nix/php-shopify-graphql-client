<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class SegmentValueConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "SegmentValueConnection";

    public function selectEdges(SegmentValueConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new SegmentValueEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(SegmentValueConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new SegmentValueQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(SegmentValueConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new PageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
