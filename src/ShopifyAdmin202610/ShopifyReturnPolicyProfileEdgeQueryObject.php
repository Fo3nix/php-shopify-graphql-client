<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * An auto-generated type which holds one ReturnPolicyProfile and a cursor during pagination.
 */
class ShopifyReturnPolicyProfileEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "ReturnPolicyProfileEdge";

    /**
     * The position of each node in an array, used in [pagination](https://shopify.dev/api/usage/pagination-graphql).
     */
    public function selectCursor(): static
    {
        $this->selectField("cursor");

        return $this;
    }

    /**
     * The item at the end of ReturnPolicyProfileEdge.
     */
    public function selectNode(?ShopifyReturnPolicyProfileEdgeNodeArgumentsObject $argsObject = null): ShopifyReturnPolicyProfileQueryObject
    {
        $object = new ShopifyReturnPolicyProfileQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
