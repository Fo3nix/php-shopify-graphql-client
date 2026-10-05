<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyDiscountMarketsQueryObject extends QueryObject
{
    const OBJECT_NAME = "DiscountMarkets";

    public function selectMarkets(ShopifyDiscountMarketsMarketsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMarketConnectionQueryObject("markets");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMarketsCount()
    {
        $this->selectField("marketsCount");

        return $this;
    }
}
