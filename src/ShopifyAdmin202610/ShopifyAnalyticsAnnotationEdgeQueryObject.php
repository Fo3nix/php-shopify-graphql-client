<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyAnalyticsAnnotationEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "AnalyticsAnnotationEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ShopifyAnalyticsAnnotationEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyAnalyticsAnnotationQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
