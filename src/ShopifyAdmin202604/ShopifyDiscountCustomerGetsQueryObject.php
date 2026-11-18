<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * The items in the order that qualify for the discount, their quantities, and the total value of the discount.
 */
class ShopifyDiscountCustomerGetsQueryObject extends QueryObject
{
    const OBJECT_NAME = "DiscountCustomerGets";

    /**
     * Whether the discount applies on regular one-time-purchase items.
     */
    public function selectAppliesOnOneTimePurchase(): static
    {
        $this->selectField("appliesOnOneTimePurchase");

        return $this;
    }

    /**
     * Whether the discount applies on subscription items.
     * [Subscriptions](https://shopify.dev/docs/apps/launch/billing/subscription-billing/offer-subscription-discounts)
     * enable customers to purchase products
     * on a recurring basis.
     */
    public function selectAppliesOnSubscription(): static
    {
        $this->selectField("appliesOnSubscription");

        return $this;
    }

    /**
     * The items to which the discount applies.
     */
    public function selectItems(?ShopifyDiscountCustomerGetsItemsArgumentsObject $argsObject = null): ShopifyDiscountItemsUnionObject
    {
        $object = new ShopifyDiscountItemsUnionObject("items");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Entitled quantity and the discount value.
     */
    public function selectValue(?ShopifyDiscountCustomerGetsValueArgumentsObject $argsObject = null): ShopifyDiscountCustomerGetsValueUnionObject
    {
        $object = new ShopifyDiscountCustomerGetsValueUnionObject("value");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
