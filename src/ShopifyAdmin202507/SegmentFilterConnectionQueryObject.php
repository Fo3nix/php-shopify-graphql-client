<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class SegmentFilterConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "SegmentFilterConnection";

    public function selectEdges(SegmentFilterConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new SegmentFilterEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(SegmentFilterConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new PageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
