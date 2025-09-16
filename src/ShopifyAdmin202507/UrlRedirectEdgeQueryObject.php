<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class UrlRedirectEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "UrlRedirectEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(UrlRedirectEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new UrlRedirectQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
