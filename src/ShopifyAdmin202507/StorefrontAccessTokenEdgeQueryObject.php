<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class StorefrontAccessTokenEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "StorefrontAccessTokenEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(StorefrontAccessTokenEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new StorefrontAccessTokenQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
