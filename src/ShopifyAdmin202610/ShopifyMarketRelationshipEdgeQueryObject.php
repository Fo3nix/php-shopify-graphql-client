<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * An auto-generated type which holds one MarketRelationship and a cursor during pagination.
 */
class ShopifyMarketRelationshipEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "MarketRelationshipEdge";

    /**
     * The position of each node in an array, used in [pagination](https://shopify.dev/api/usage/pagination-graphql).
     */
    public function selectCursor(): static
    {
        $this->selectField("cursor");

        return $this;
    }

    /**
     * The item at the end of MarketRelationshipEdge.
     */
    public function selectNode(?ShopifyMarketRelationshipEdgeNodeArgumentsObject $argsObject = null): ShopifyMarketRelationshipQueryObject
    {
        $object = new ShopifyMarketRelationshipQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
