<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifySavedSearchEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "SavedSearchEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ShopifySavedSearchEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ShopifySavedSearchQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
