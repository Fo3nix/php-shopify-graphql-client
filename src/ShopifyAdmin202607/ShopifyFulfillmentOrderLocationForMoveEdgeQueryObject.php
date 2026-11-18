<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * An auto-generated type which holds one FulfillmentOrderLocationForMove and a cursor during pagination.
 */
class ShopifyFulfillmentOrderLocationForMoveEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "FulfillmentOrderLocationForMoveEdge";

    /**
     * The position of each node in an array, used in [pagination](https://shopify.dev/api/usage/pagination-graphql).
     */
    public function selectCursor(): static
    {
        $this->selectField("cursor");

        return $this;
    }

    /**
     * The item at the end of FulfillmentOrderLocationForMoveEdge.
     */
    public function selectNode(?ShopifyFulfillmentOrderLocationForMoveEdgeNodeArgumentsObject $argsObject = null): ShopifyFulfillmentOrderLocationForMoveQueryObject
    {
        $object = new ShopifyFulfillmentOrderLocationForMoveQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
