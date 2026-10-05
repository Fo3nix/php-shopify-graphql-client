<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyAnalyticsTargetEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "AnalyticsTargetEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ShopifyAnalyticsTargetEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyAnalyticsTargetQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
