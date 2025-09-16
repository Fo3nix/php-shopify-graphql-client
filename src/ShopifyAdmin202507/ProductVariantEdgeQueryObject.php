<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class ProductVariantEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "ProductVariantEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ProductVariantEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ProductVariantQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
