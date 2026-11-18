<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * An auto-generated type which holds one DeliveryMethodDefinition and a cursor during pagination.
 */
class ShopifyDeliveryMethodDefinitionEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "DeliveryMethodDefinitionEdge";

    /**
     * The position of each node in an array, used in [pagination](https://shopify.dev/api/usage/pagination-graphql).
     */
    public function selectCursor(): static
    {
        $this->selectField("cursor");

        return $this;
    }

    /**
     * The item at the end of DeliveryMethodDefinitionEdge.
     */
    public function selectNode(?ShopifyDeliveryMethodDefinitionEdgeNodeArgumentsObject $argsObject = null): ShopifyDeliveryMethodDefinitionQueryObject
    {
        $object = new ShopifyDeliveryMethodDefinitionQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
