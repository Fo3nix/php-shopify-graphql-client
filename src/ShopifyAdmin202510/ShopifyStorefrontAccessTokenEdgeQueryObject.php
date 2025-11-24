<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\QueryObject;

class ShopifyStorefrontAccessTokenEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "StorefrontAccessTokenEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ShopifyStorefrontAccessTokenEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyStorefrontAccessTokenQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
