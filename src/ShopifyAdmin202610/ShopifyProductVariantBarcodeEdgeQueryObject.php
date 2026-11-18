<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * An auto-generated type which holds one ProductVariantBarcode and a cursor during pagination.
 */
class ShopifyProductVariantBarcodeEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "ProductVariantBarcodeEdge";

    /**
     * The position of each node in an array, used in [pagination](https://shopify.dev/api/usage/pagination-graphql).
     */
    public function selectCursor(): static
    {
        $this->selectField("cursor");

        return $this;
    }

    /**
     * The item at the end of ProductVariantBarcodeEdge.
     */
    public function selectNode(?ShopifyProductVariantBarcodeEdgeNodeArgumentsObject $argsObject = null): ShopifyProductVariantBarcodeQueryObject
    {
        $object = new ShopifyProductVariantBarcodeQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
