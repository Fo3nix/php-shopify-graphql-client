<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * An auto-generated type which holds one DeliveryOptionDefinition and a cursor during pagination.
 */
class ShopifyDeliveryOptionDefinitionEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "DeliveryOptionDefinitionEdge";

    /**
     * The position of each node in an array, used in [pagination](https://shopify.dev/api/usage/pagination-graphql).
     */
    public function selectCursor(): static
    {
        $this->selectField("cursor");

        return $this;
    }

    /**
     * The item at the end of DeliveryOptionDefinitionEdge.
     */
    public function selectNode(?ShopifyDeliveryOptionDefinitionEdgeNodeArgumentsObject $argsObject = null): ShopifyDeliveryOptionDefinitionInterfaceObject
    {
        $object = new ShopifyDeliveryOptionDefinitionInterfaceObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
