<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * An auto-generated type which holds one FulfillmentEvent and a cursor during pagination.
 */
class ShopifyFulfillmentEventEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "FulfillmentEventEdge";

    /**
     * The position of each node in an array, used in [pagination](https://shopify.dev/api/usage/pagination-graphql).
     */
    public function selectCursor(): static
    {
        $this->selectField("cursor");

        return $this;
    }

    /**
     * The item at the end of FulfillmentEventEdge.
     */
    public function selectNode(?ShopifyFulfillmentEventEdgeNodeArgumentsObject $argsObject = null): ShopifyFulfillmentEventQueryObject
    {
        $object = new ShopifyFulfillmentEventQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
