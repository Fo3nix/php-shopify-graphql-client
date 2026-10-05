<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyLocalizedFieldEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "LocalizedFieldEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ShopifyLocalizedFieldEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyLocalizedFieldQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
