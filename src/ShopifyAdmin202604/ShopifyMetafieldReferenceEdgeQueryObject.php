<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * An auto-generated type which holds one MetafieldReference and a cursor during pagination.
 */
class ShopifyMetafieldReferenceEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "MetafieldReferenceEdge";

    /**
     * The position of each node in an array, used in [pagination](https://shopify.dev/api/usage/pagination-graphql).
     */
    public function selectCursor(): static
    {
        $this->selectField("cursor");

        return $this;
    }

    /**
     * The item at the end of MetafieldReferenceEdge.
     */
    public function selectNode(?ShopifyMetafieldReferenceEdgeNodeArgumentsObject $argsObject = null): ShopifyMetafieldReferenceUnionObject
    {
        $object = new ShopifyMetafieldReferenceUnionObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
