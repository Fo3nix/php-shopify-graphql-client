<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifyProductComponentTypeEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "ProductComponentTypeEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ShopifyProductComponentTypeEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyProductComponentTypeQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
