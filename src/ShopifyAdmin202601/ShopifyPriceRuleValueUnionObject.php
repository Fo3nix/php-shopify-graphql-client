<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\UnionObject;

/**
 * The type of the price rule value. The price rule value might be a percentage value, or a fixed amount.
 */
class ShopifyPriceRuleValueUnionObject extends UnionObject
{
    public function onShopifyPriceRuleFixedAmountValue(): ShopifyPriceRuleFixedAmountValueQueryObject
    {
        $object = new ShopifyPriceRuleFixedAmountValueQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onShopifyPriceRulePercentValue(): ShopifyPriceRulePercentValueQueryObject
    {
        $object = new ShopifyPriceRulePercentValueQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
