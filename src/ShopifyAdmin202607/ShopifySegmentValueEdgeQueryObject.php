<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifySegmentValueEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "SegmentValueEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ShopifySegmentValueEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ShopifySegmentValueQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
