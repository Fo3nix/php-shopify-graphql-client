<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * An auto-generated type which holds one GiftCard and a cursor during pagination.
 */
class ShopifyGiftCardEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "GiftCardEdge";

    /**
     * The position of each node in an array, used in [pagination](https://shopify.dev/api/usage/pagination-graphql).
     */
    public function selectCursor(): static
    {
        $this->selectField("cursor");

        return $this;
    }

    /**
     * The item at the end of GiftCardEdge.
     */
    public function selectNode(?ShopifyGiftCardEdgeNodeArgumentsObject $argsObject = null): ShopifyGiftCardQueryObject
    {
        $object = new ShopifyGiftCardQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
