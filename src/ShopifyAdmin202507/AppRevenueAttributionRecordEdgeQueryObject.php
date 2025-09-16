<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class AppRevenueAttributionRecordEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "AppRevenueAttributionRecordEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(AppRevenueAttributionRecordEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new AppRevenueAttributionRecordQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
