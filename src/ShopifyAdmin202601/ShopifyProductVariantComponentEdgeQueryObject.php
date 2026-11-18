<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * An auto-generated type which holds one ProductVariantComponent and a cursor during pagination.
 */
class ShopifyProductVariantComponentEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "ProductVariantComponentEdge";

    /**
     * The position of each node in an array, used in [pagination](https://shopify.dev/api/usage/pagination-graphql).
     */
    public function selectCursor(): static
    {
        $this->selectField("cursor");

        return $this;
    }

    /**
     * The item at the end of ProductVariantComponentEdge.
     */
    public function selectNode(?ShopifyProductVariantComponentEdgeNodeArgumentsObject $argsObject = null): ShopifyProductVariantComponentQueryObject
    {
        $object = new ShopifyProductVariantComponentQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
