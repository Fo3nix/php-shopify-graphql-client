<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * An auto-generated type which holds one ProductVariantPricePair and a cursor during pagination.
 */
class ShopifyProductVariantPricePairEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "ProductVariantPricePairEdge";

    /**
     * The position of each node in an array, used in [pagination](https://shopify.dev/api/usage/pagination-graphql).
     */
    public function selectCursor(): static
    {
        $this->selectField("cursor");

        return $this;
    }

    /**
     * The item at the end of ProductVariantPricePairEdge.
     */
    public function selectNode(?ShopifyProductVariantPricePairEdgeNodeArgumentsObject $argsObject = null): ShopifyProductVariantPricePairQueryObject
    {
        $object = new ShopifyProductVariantPricePairQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
