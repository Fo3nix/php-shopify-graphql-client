<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * The prerequisite items and prerequisite value that a customer must have on the order for the discount to be applicable.
 */
class ShopifyDiscountCustomerBuysQueryObject extends QueryObject
{
    const OBJECT_NAME = "DiscountCustomerBuys";

    /**
     * If the discount is applicable when a customer buys a one-time purchase.
     */
    public function selectIsOneTimePurchase(): static
    {
        $this->selectField("isOneTimePurchase");

        return $this;
    }

    /**
     * If the discount is applicable when a customer buys a subscription purchase.
     */
    public function selectIsSubscription(): static
    {
        $this->selectField("isSubscription");

        return $this;
    }

    /**
     * The items required for the discount to be applicable.
     */
    public function selectItems(?ShopifyDiscountCustomerBuysItemsArgumentsObject $argsObject = null): ShopifyDiscountItemsUnionObject
    {
        $object = new ShopifyDiscountItemsUnionObject("items");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The prerequisite value.
     */
    public function selectValue(?ShopifyDiscountCustomerBuysValueArgumentsObject $argsObject = null): ShopifyDiscountCustomerBuysValueUnionObject
    {
        $object = new ShopifyDiscountCustomerBuysValueUnionObject("value");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
