<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class SearchResultEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "SearchResultEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(SearchResultEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new SearchResultQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
