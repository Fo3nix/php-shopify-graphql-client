<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifyOnlineStoreThemeFileEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "OnlineStoreThemeFileEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ShopifyOnlineStoreThemeFileEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyOnlineStoreThemeFileQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
