<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * An auto-generated type which holds one CashActivity and a cursor during pagination.
 */
class ShopifyCashActivityEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "CashActivityEdge";

    /**
     * The position of each node in an array, used in [pagination](https://shopify.dev/api/usage/pagination-graphql).
     */
    public function selectCursor(): static
    {
        $this->selectField("cursor");

        return $this;
    }

    /**
     * The item at the end of CashActivityEdge.
     */
    public function selectNode(?ShopifyCashActivityEdgeNodeArgumentsObject $argsObject = null): ShopifyCashActivityInterfaceObject
    {
        $object = new ShopifyCashActivityInterfaceObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
