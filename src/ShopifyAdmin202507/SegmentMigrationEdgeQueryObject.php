<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class SegmentMigrationEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "SegmentMigrationEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(SegmentMigrationEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new SegmentMigrationQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
