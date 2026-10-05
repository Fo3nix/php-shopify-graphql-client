<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyAppRevenueAttributionRecordEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "AppRevenueAttributionRecordEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ShopifyAppRevenueAttributionRecordEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyAppRevenueAttributionRecordQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
