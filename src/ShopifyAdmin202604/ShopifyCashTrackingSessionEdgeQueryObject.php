<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * An auto-generated type which holds one CashTrackingSession and a cursor during pagination.
 */
class ShopifyCashTrackingSessionEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "CashTrackingSessionEdge";

    /**
     * The position of each node in an array, used in [pagination](https://shopify.dev/api/usage/pagination-graphql).
     */
    public function selectCursor(): static
    {
        $this->selectField("cursor");

        return $this;
    }

    /**
     * The item at the end of CashTrackingSessionEdge.
     */
    public function selectNode(?ShopifyCashTrackingSessionEdgeNodeArgumentsObject $argsObject = null): ShopifyCashTrackingSessionQueryObject
    {
        $object = new ShopifyCashTrackingSessionQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
