<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * An auto-generated type which holds one ReverseFulfillmentOrder and a cursor during pagination.
 */
class ShopifyReverseFulfillmentOrderEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "ReverseFulfillmentOrderEdge";

    /**
     * The position of each node in an array, used in [pagination](https://shopify.dev/api/usage/pagination-graphql).
     */
    public function selectCursor(): static
    {
        $this->selectField("cursor");

        return $this;
    }

    /**
     * The item at the end of ReverseFulfillmentOrderEdge.
     */
    public function selectNode(?ShopifyReverseFulfillmentOrderEdgeNodeArgumentsObject $argsObject = null): ShopifyReverseFulfillmentOrderQueryObject
    {
        $object = new ShopifyReverseFulfillmentOrderQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
