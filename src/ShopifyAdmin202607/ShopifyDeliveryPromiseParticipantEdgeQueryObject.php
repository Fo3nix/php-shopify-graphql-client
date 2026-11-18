<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * An auto-generated type which holds one DeliveryPromiseParticipant and a cursor during pagination.
 */
class ShopifyDeliveryPromiseParticipantEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "DeliveryPromiseParticipantEdge";

    /**
     * The position of each node in an array, used in [pagination](https://shopify.dev/api/usage/pagination-graphql).
     */
    public function selectCursor(): static
    {
        $this->selectField("cursor");

        return $this;
    }

    /**
     * The item at the end of DeliveryPromiseParticipantEdge.
     */
    public function selectNode(?ShopifyDeliveryPromiseParticipantEdgeNodeArgumentsObject $argsObject = null): ShopifyDeliveryPromiseParticipantQueryObject
    {
        $object = new ShopifyDeliveryPromiseParticipantQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
