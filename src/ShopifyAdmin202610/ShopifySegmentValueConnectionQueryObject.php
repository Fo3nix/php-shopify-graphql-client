<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifySegmentValueConnectionQueryObject extends QueryObject
{
    const OBJECT_NAME = "SegmentValueConnection";

    public function selectEdges(ShopifySegmentValueConnectionEdgesArgumentsObject $argsObject = null)
    {
        $object = new ShopifySegmentValueEdgeQueryObject("edges");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNodes(ShopifySegmentValueConnectionNodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifySegmentValueQueryObject("nodes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPageInfo(ShopifySegmentValueConnectionPageInfoArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPageInfoQueryObject("pageInfo");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
