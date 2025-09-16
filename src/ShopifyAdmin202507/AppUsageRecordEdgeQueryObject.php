<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class AppUsageRecordEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "AppUsageRecordEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(AppUsageRecordEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new AppUsageRecordQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
