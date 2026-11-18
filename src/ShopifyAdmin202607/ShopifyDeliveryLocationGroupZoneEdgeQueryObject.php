<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * An auto-generated type which holds one DeliveryLocationGroupZone and a cursor during pagination.
 */
class ShopifyDeliveryLocationGroupZoneEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "DeliveryLocationGroupZoneEdge";

    /**
     * The position of each node in an array, used in [pagination](https://shopify.dev/api/usage/pagination-graphql).
     */
    public function selectCursor(): static
    {
        $this->selectField("cursor");

        return $this;
    }

    /**
     * The item at the end of DeliveryLocationGroupZoneEdge.
     */
    public function selectNode(?ShopifyDeliveryLocationGroupZoneEdgeNodeArgumentsObject $argsObject = null): ShopifyDeliveryLocationGroupZoneQueryObject
    {
        $object = new ShopifyDeliveryLocationGroupZoneQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
