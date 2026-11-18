<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * An auto-generated type which holds one MarketLocalizableResource and a cursor during pagination.
 */
class ShopifyMarketLocalizableResourceEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "MarketLocalizableResourceEdge";

    /**
     * The position of each node in an array, used in [pagination](https://shopify.dev/api/usage/pagination-graphql).
     */
    public function selectCursor(): static
    {
        $this->selectField("cursor");

        return $this;
    }

    /**
     * The item at the end of MarketLocalizableResourceEdge.
     */
    public function selectNode(?ShopifyMarketLocalizableResourceEdgeNodeArgumentsObject $argsObject = null): ShopifyMarketLocalizableResourceQueryObject
    {
        $object = new ShopifyMarketLocalizableResourceQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
