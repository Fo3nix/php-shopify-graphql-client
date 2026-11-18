<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * A [`Product`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Product) or [`ProductVariant`](https://shopify.dev/docs/api/admin-graphql/latest/objects/ProductVariant) being refunded from an order. Each refund line item tracks the quantity, pricing, and restocking details for items returned to the merchant.
 *
 * The refund line item links to the original [`LineItem`](https://shopify.dev/docs/api/admin-graphql/latest/objects/LineItem) from the [`Order`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Order) and includes financial information such as the refunded price, subtotal, and taxes in both shop and presentment currencies. The [`restockType`](https://shopify.dev/docs/api/admin-graphql/latest/objects/RefundLineItem#field-RefundLineItem.fields.restockType) field indicates whether and how the merchant restocks the returned items to inventory, while the [`location`](https://shopify.dev/docs/api/admin-graphql/latest/objects/RefundLineItem#field-RefundLineItem.fields.location) field specifies where restocking occurs.
 */
class ShopifyRefundLineItemQueryObject extends QueryObject
{
    const OBJECT_NAME = "RefundLineItem";

    /**
     * A globally-unique ID.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }

    /**
     * The `LineItem` resource associated to the refunded line item.
     */
    public function selectLineItem(?ShopifyRefundLineItemLineItemArgumentsObject $argsObject = null): ShopifyLineItemQueryObject
    {
        $object = new ShopifyLineItemQueryObject("lineItem");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The inventory restock location.
     */
    public function selectLocation(?ShopifyRefundLineItemLocationArgumentsObject $argsObject = null): ShopifyLocationQueryObject
    {
        $object = new ShopifyLocationQueryObject("location");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The price of a refunded line item.
     *
     * @deprecated Use `priceSet` instead.
     */
    public function selectPrice(): static
    {
        $this->selectField("price");

        return $this;
    }

    /**
     * The price of a refunded line item in shop and presentment currencies.
     */
    public function selectPriceSet(?ShopifyRefundLineItemPriceSetArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("priceSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The quantity of a refunded line item.
     */
    public function selectQuantity(): static
    {
        $this->selectField("quantity");

        return $this;
    }

    /**
     * The type of restock for the refunded line item.
     */
    public function selectRestockType(): static
    {
        $this->selectField("restockType");

        return $this;
    }

    /**
     * Whether the refunded line item was restocked. Not applicable in the context of a SuggestedRefund.
     */
    public function selectRestocked(): static
    {
        $this->selectField("restocked");

        return $this;
    }

    /**
     * The subtotal price of a refunded line item.
     *
     * @deprecated Use `subtotalSet` instead.
     */
    public function selectSubtotal(): static
    {
        $this->selectField("subtotal");

        return $this;
    }

    /**
     * The subtotal price of a refunded line item in shop and presentment currencies.
     */
    public function selectSubtotalSet(?ShopifyRefundLineItemSubtotalSetArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("subtotalSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The total tax charged on a refunded line item.
     *
     * @deprecated Use `totalTaxSet` instead.
     */
    public function selectTotalTax(): static
    {
        $this->selectField("totalTax");

        return $this;
    }

    /**
     * The total tax charged on a refunded line item in shop and presentment currencies.
     */
    public function selectTotalTaxSet(?ShopifyRefundLineItemTotalTaxSetArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("totalTaxSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
