<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyProductVariantBarcodeEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "ProductVariantBarcodeEdge";

    public function selectCursor()
    {
        $this->selectField("cursor");

        return $this;
    }

    public function selectNode(ShopifyProductVariantBarcodeEdgeNodeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyProductVariantBarcodeQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
