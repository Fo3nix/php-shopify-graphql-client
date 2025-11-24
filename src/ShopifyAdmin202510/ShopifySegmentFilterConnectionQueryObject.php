<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\QueryObject;

class ShopifySegmentFilterConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "SegmentFilterConnection";

    public function selectEdges(ShopifySegmentFilterConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifySegmentFilterEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifySegmentFilterConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
