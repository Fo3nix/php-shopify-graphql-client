<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * A line item from an [`Order`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Order) that's included in a [`Fulfillment`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Fulfillment). Links the fulfillment to specific items from the original order, tracking how many units were fulfilled.
 *
 * > Note: The discounted total excludes order-level discounts, showing only line-item specific discount amounts.
 */
class ShopifyFulfillmentLineItemQueryObject extends QueryObject
{
    const OBJECT_NAME = "FulfillmentLineItem";

    /**
     * The date and time when the fulfillment line item was created.
     */
    public function selectCreatedAt(): static
    {
        $this->selectField("createdAt");

        return $this;
    }

    /**
     * The total price after discounts are applied.
     *
     * @deprecated Use `discountedTotalSet` instead.
     */
    public function selectDiscountedTotal(): static
    {
        $this->selectField("discountedTotal");

        return $this;
    }

    /**
     * The total price after discounts are applied in shop and presentment currencies. This value doesn't include order-level discounts.
     */
    public function selectDiscountedTotalSet(?ShopifyFulfillmentLineItemDiscountedTotalSetArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("discountedTotalSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * A globally-unique ID.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }

    /**
     * The associated order's line item.
     */
    public function selectLineItem(?ShopifyFulfillmentLineItemLineItemArgumentsObject $argsObject = null): ShopifyLineItemQueryObject
    {
        $object = new ShopifyLineItemQueryObject("lineItem");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The total price before discounts are applied.
     *
     * @deprecated Use `originalTotalSet` instead.
     */
    public function selectOriginalTotal(): static
    {
        $this->selectField("originalTotal");

        return $this;
    }

    /**
     * The total price before discounts are applied in shop and presentment currencies.
     */
    public function selectOriginalTotalSet(?ShopifyFulfillmentLineItemOriginalTotalSetArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("originalTotalSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Number of line items in the fulfillment.
     */
    public function selectQuantity(): static
    {
        $this->selectField("quantity");

        return $this;
    }
}
