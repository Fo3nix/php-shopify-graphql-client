<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class ProductComponentTypeEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "ProductComponentTypeEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ProductComponentTypeEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ProductComponentTypeQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
