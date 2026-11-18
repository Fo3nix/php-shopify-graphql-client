<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * An auto-generated type which holds one PriceRuleDiscountCode and a cursor during pagination.
 */
class ShopifyPriceRuleDiscountCodeEdgeQueryObject extends QueryObject
{
    const OBJECT_NAME = "PriceRuleDiscountCodeEdge";

    /**
     * The position of each node in an array, used in [pagination](https://shopify.dev/api/usage/pagination-graphql).
     */
    public function selectCursor(): static
    {
        $this->selectField("cursor");

        return $this;
    }

    /**
     * The item at the end of PriceRuleDiscountCodeEdge.
     */
    public function selectNode(?ShopifyPriceRuleDiscountCodeEdgeNodeArgumentsObject $argsObject = null): ShopifyPriceRuleDiscountCodeQueryObject
    {
        $object = new ShopifyPriceRuleDiscountCodeQueryObject("node");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
