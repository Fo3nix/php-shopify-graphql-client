<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * An auto-generated type which holds one QuantityRule and a cursor during pagination.
 */
class ShopifyQuantityRuleEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "QuantityRuleEdge";

    /**
     * The position of each node in an array, used in [pagination](https://shopify.dev/api/usage/pagination-graphql).
     */
    public function selectCursor(): static
    {
        $this->selectField("cursor");

        return $this;
    }

    /**
     * The item at the end of QuantityRuleEdge.
     */
    public function selectNode(?ShopifyQuantityRuleEdgeNodeArgumentsObject $argsObject = null): ShopifyQuantityRuleQueryObject
    {
        $object = new ShopifyQuantityRuleQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
