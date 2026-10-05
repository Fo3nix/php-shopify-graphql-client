<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyProductFeedEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "ProductFeedEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ShopifyProductFeedEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyProductFeedQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
