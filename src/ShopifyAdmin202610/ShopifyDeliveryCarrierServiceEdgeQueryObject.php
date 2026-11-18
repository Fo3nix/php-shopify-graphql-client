<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * An auto-generated type which holds one DeliveryCarrierService and a cursor during pagination.
 */
class ShopifyDeliveryCarrierServiceEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "DeliveryCarrierServiceEdge";

    /**
     * The position of each node in an array, used in [pagination](https://shopify.dev/api/usage/pagination-graphql).
     */
    public function selectCursor(): static
    {
        $this->selectField("cursor");

        return $this;
    }

    /**
     * The item at the end of DeliveryCarrierServiceEdge.
     */
    public function selectNode(?ShopifyDeliveryCarrierServiceEdgeNodeArgumentsObject $argsObject = null): ShopifyDeliveryCarrierServiceQueryObject
    {
        $object = new ShopifyDeliveryCarrierServiceQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
