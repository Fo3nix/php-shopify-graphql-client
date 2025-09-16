<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class OnlineStoreThemeFileEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "OnlineStoreThemeFileEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(OnlineStoreThemeFileEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new OnlineStoreThemeFileQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
