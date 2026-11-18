<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Defines quantity-based discount rules that specify how many items are eligible for a discount effect. This object enables bulk purchase incentives and tiered pricing strategies.
 *
 * For example, a "Buy 4 candles, get 2 candles 50% off (mix and match)" promotion would specify a quantity threshold of 2 items that will receive a percentage discount effect, encouraging customers to purchase more items to unlock savings.
 *
 * The configuration combines quantity requirements with discount effects, allowing merchants to create sophisticated pricing rules that reward larger purchases and increase average order values.
 */
class ShopifyDiscountOnQuantityQueryObject extends QueryObject
{
    const OBJECT_NAME = "DiscountOnQuantity";

    /**
     * The discount's effect on qualifying items.
     */
    public function selectEffect(?ShopifyDiscountOnQuantityEffectArgumentsObject $argsObject = null): ShopifyDiscountEffectUnionObject
    {
        $object = new ShopifyDiscountEffectUnionObject("effect");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The number of items being discounted. The customer must have at least this many items of specified products or product variants in their order to be eligible for the discount.
     */
    public function selectQuantity(?ShopifyDiscountOnQuantityQuantityArgumentsObject $argsObject = null): ShopifyDiscountQuantityQueryObject
    {
        $object = new ShopifyDiscountQuantityQueryObject("quantity");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
