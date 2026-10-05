<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

class ShopifySegmentMigrationEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "SegmentMigrationEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ShopifySegmentMigrationEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ShopifySegmentMigrationQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
