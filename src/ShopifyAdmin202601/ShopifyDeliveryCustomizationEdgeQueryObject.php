<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * An auto-generated type which holds one DeliveryCustomization and a cursor during pagination.
 */
class ShopifyDeliveryCustomizationEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "DeliveryCustomizationEdge";

    /**
     * The position of each node in an array, used in [pagination](https://shopify.dev/api/usage/pagination-graphql).
     */
    public function selectCursor(): static
    {
        $this->selectField("cursor");

        return $this;
    }

    /**
     * The item at the end of DeliveryCustomizationEdge.
     */
    public function selectNode(?ShopifyDeliveryCustomizationEdgeNodeArgumentsObject $argsObject = null): ShopifyDeliveryCustomizationQueryObject
    {
        $object = new ShopifyDeliveryCustomizationQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
