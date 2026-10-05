<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifySearchResultEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "SearchResultEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ShopifySearchResultEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ShopifySearchResultQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
