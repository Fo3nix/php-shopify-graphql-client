<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class ProductVariantComponentEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "ProductVariantComponentEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ProductVariantComponentEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ProductVariantComponentQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
