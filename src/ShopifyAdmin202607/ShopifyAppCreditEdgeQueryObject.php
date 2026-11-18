<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * An auto-generated type which holds one AppCredit and a cursor during pagination.
 */
class ShopifyAppCreditEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "AppCreditEdge";

    /**
     * The position of each node in an array, used in [pagination](https://shopify.dev/api/usage/pagination-graphql).
     */
    public function selectCursor(): static
    {
        $this->selectField("cursor");

        return $this;
    }

    /**
     * The item at the end of AppCreditEdge.
     */
    public function selectNode(?ShopifyAppCreditEdgeNodeArgumentsObject $argsObject = null): ShopifyAppCreditQueryObject
    {
        $object = new ShopifyAppCreditQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
