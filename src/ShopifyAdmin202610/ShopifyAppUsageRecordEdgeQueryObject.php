<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyAppUsageRecordEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "AppUsageRecordEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ShopifyAppUsageRecordEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyAppUsageRecordQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
