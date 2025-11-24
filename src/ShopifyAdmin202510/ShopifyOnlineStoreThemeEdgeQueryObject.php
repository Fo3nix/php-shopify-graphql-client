<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\QueryObject;

class ShopifyOnlineStoreThemeEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "OnlineStoreThemeEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ShopifyOnlineStoreThemeEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyOnlineStoreThemeQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
