<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Markets where the discount is available.
 */
class ShopifyDiscountMarketsQueryObject extends QueryObject
{
    const OBJECT_NAME = "DiscountMarkets";

    /**
     * The list of markets where the discount is available.
     */
    public function selectMarkets(?ShopifyDiscountMarketsMarketsArgumentsObject $argsObject = null): ShopifyMarketConnectionQueryObject
    {
        $object = new ShopifyMarketConnectionQueryObject("markets");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The number of markets where the discount is available.
     */
    public function selectMarketsCount(): static
    {
        $this->selectField("marketsCount");

        return $this;
    }
}
