<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyUrlRedirectEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "UrlRedirectEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ShopifyUrlRedirectEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyUrlRedirectQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
