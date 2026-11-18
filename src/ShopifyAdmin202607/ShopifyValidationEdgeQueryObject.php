<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * An auto-generated type which holds one Validation and a cursor during pagination.
 */
class ShopifyValidationEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "ValidationEdge";

    /**
     * The position of each node in an array, used in [pagination](https://shopify.dev/api/usage/pagination-graphql).
     */
    public function selectCursor(): static
    {
        $this->selectField("cursor");

        return $this;
    }

    /**
     * The item at the end of ValidationEdge.
     */
    public function selectNode(?ShopifyValidationEdgeNodeArgumentsObject $argsObject = null): ShopifyValidationQueryObject
    {
        $object = new ShopifyValidationQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
