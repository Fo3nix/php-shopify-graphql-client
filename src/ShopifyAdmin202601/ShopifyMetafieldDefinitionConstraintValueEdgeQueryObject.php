<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * An auto-generated type which holds one MetafieldDefinitionConstraintValue and a cursor during pagination.
 */
class ShopifyMetafieldDefinitionConstraintValueEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "MetafieldDefinitionConstraintValueEdge";

    /**
     * The position of each node in an array, used in [pagination](https://shopify.dev/api/usage/pagination-graphql).
     */
    public function selectCursor(): static
    {
        $this->selectField("cursor");

        return $this;
    }

    /**
     * The item at the end of MetafieldDefinitionConstraintValueEdge.
     */
    public function selectNode(?ShopifyMetafieldDefinitionConstraintValueEdgeNodeArgumentsObject $argsObject = null): ShopifyMetafieldDefinitionConstraintValueQueryObject
    {
        $object = new ShopifyMetafieldDefinitionConstraintValueQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
