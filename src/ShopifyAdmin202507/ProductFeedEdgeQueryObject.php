<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class ProductFeedEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "ProductFeedEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ProductFeedEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ProductFeedQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
