<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * An auto-generated type which holds one AbandonedCheckout and a cursor during pagination.
 */
class ShopifyAbandonedCheckoutEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "AbandonedCheckoutEdge";

    /**
     * The position of each node in an array, used in [pagination](https://shopify.dev/api/usage/pagination-graphql).
     */
    public function selectCursor(): static
    {
        $this->selectField("cursor");

        return $this;
    }

    /**
     * The item at the end of AbandonedCheckoutEdge.
     */
    public function selectNode(?ShopifyAbandonedCheckoutEdgeNodeArgumentsObject $argsObject = null): ShopifyAbandonedCheckoutQueryObject
    {
        $object = new ShopifyAbandonedCheckoutQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
