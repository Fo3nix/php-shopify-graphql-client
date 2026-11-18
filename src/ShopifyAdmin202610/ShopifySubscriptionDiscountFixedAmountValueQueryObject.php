<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * The value of the discount and how it will be applied.
 */
class ShopifySubscriptionDiscountFixedAmountValueQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionDiscountFixedAmountValue";

    /**
     * The fixed amount value of the discount.
     */
    public function selectAmount(?ShopifySubscriptionDiscountFixedAmountValueAmountArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("amount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Whether the amount is applied per item.
     */
    public function selectAppliesOnEachItem(): static
    {
        $this->selectField("appliesOnEachItem");

        return $this;
    }
}
