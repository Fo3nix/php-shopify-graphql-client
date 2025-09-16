<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class SegmentValueEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "SegmentValueEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(SegmentValueEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new SegmentValueQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
