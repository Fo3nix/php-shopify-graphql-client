<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * An auto-generated type which holds one TranslatableResource and a cursor during pagination.
 */
class ShopifyTranslatableResourceEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "TranslatableResourceEdge";

    /**
     * The position of each node in an array, used in [pagination](https://shopify.dev/api/usage/pagination-graphql).
     */
    public function selectCursor(): static
    {
        $this->selectField("cursor");

        return $this;
    }

    /**
     * The item at the end of TranslatableResourceEdge.
     */
    public function selectNode(?ShopifyTranslatableResourceEdgeNodeArgumentsObject $argsObject = null): ShopifyTranslatableResourceQueryObject
    {
        $object = new ShopifyTranslatableResourceQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
