<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * An auto-generated type which holds one ExchangeV2 and a cursor during pagination.
 */
class ShopifyExchangeV2EdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "ExchangeV2Edge";

    /**
     * The position of each node in an array, used in [pagination](https://shopify.dev/api/usage/pagination-graphql).
     */
    public function selectCursor(): static
    {
        $this->selectField("cursor");

        return $this;
    }

    /**
     * The item at the end of ExchangeV2Edge.
     */
    public function selectNode(?ShopifyExchangeV2EdgeNodeArgumentsObject $argsObject = null): ShopifyExchangeV2QueryObject
    {
        $object = new ShopifyExchangeV2QueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
