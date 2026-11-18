<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * An incomplete checkout where the customer added items and provided contact information but didn't complete the purchase. Tracks the customer's cart contents, pricing details, addresses, and timestamps to enable recovery campaigns and abandonment analytics.
 *
 * The checkout includes a recovery URL that merchants can send to customers to resume their purchase. [`AbandonedCheckoutLineItem`](https://shopify.dev/docs/api/admin-graphql/latest/objects/AbandonedCheckoutLineItem) objects preserve the original [`Product`](https://shopify.dev/docs/api/admin-graphql/latest/objects/Product) selections, quantities, and pricing at the time of abandonment.
 */
class ShopifyAbandonedCheckoutQueryObject extends QueryObject
{
    const OBJECT_NAME = "AbandonedCheckout";

    /**
     * The URL for the buyer to recover their checkout.
     */
    public function selectAbandonedCheckoutUrl(): static
    {
        $this->selectField("abandonedCheckoutUrl");

        return $this;
    }

    /**
     * The billing address provided by the buyer.
     * Null if the user didn't provide a billing address.
     */
    public function selectBillingAddress(?ShopifyAbandonedCheckoutBillingAddressArgumentsObject $argsObject = null): ShopifyMailingAddressQueryObject
    {
        $object = new ShopifyMailingAddressQueryObject("billingAddress");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The date and time when the buyer completed the checkout.
     * Null if the checkout hasn't been completed.
     */
    public function selectCompletedAt(): static
    {
        $this->selectField("completedAt");

        return $this;
    }

    /**
     * The date and time when the checkout was created.
     */
    public function selectCreatedAt(): static
    {
        $this->selectField("createdAt");

        return $this;
    }

    /**
     * A list of extra information that has been added to the checkout.
     */
    public function selectCustomAttributes(?ShopifyAbandonedCheckoutCustomAttributesArgumentsObject $argsObject = null): ShopifyAttributeQueryObject
    {
        $object = new ShopifyAttributeQueryObject("customAttributes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The customer who created this checkout.
     * May be null if the checkout was created from a draft order or via an app.
     */
    public function selectCustomer(?ShopifyAbandonedCheckoutCustomerArgumentsObject $argsObject = null): ShopifyCustomerQueryObject
    {
        $object = new ShopifyCustomerQueryObject("customer");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * A default [cursor](https://shopify.dev/api/usage/pagination-graphql) that returns the single next record, sorted ascending by ID.
     */
    public function selectDefaultCursor(): static
    {
        $this->selectField("defaultCursor");

        return $this;
    }

    /**
     * The discount codes entered by the buyer at checkout.
     */
    public function selectDiscountCodes(): static
    {
        $this->selectField("discountCodes");

        return $this;
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
     * A list of the line items in this checkout.
     */
    public function selectLineItems(?ShopifyAbandonedCheckoutLineItemsArgumentsObject $argsObject = null): ShopifyAbandonedCheckoutLineItemConnectionQueryObject
    {
        $object = new ShopifyAbandonedCheckoutLineItemConnectionQueryObject("lineItems");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The number of products in the checkout.
     *
     * @deprecated Use [AbandonedCheckoutLineItem.quantity](https://shopify.dev/api/admin-graphql/unstable/objects/AbandonedCheckoutLineItem#field-quantity) instead.
     */
    public function selectLineItemsQuantity(): static
    {
        $this->selectField("lineItemsQuantity");

        return $this;
    }

    /**
     * Unique merchant-facing identifier for the checkout.
     */
    public function selectName(): static
    {
        $this->selectField("name");

        return $this;
    }

    /**
     * A merchant-facing note added to the checkout. Not visible to the buyer.
     */
    public function selectNote(): static
    {
        $this->selectField("note");

        return $this;
    }

    /**
     * The shipping address to where the line items will be shipped.
     * Null if the user didn't provide a shipping address.
     */
    public function selectShippingAddress(?ShopifyAbandonedCheckoutShippingAddressArgumentsObject $argsObject = null): ShopifyMailingAddressQueryObject
    {
        $object = new ShopifyMailingAddressQueryObject("shippingAddress");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The sum of all items in the checkout, including discounts but excluding shipping, taxes and tips.
     */
    public function selectSubtotalPriceSet(?ShopifyAbandonedCheckoutSubtotalPriceSetArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("subtotalPriceSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Individual taxes charged on the checkout.
     */
    public function selectTaxLines(?ShopifyAbandonedCheckoutTaxLinesArgumentsObject $argsObject = null): ShopifyTaxLineQueryObject
    {
        $object = new ShopifyTaxLineQueryObject("taxLines");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Whether taxes are included in line item and shipping line prices.
     */
    public function selectTaxesIncluded(): static
    {
        $this->selectField("taxesIncluded");

        return $this;
    }

    /**
     * The total amount of discounts to be applied.
     */
    public function selectTotalDiscountSet(?ShopifyAbandonedCheckoutTotalDiscountSetArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("totalDiscountSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The total duties applied to the checkout.
     */
    public function selectTotalDutiesSet(?ShopifyAbandonedCheckoutTotalDutiesSetArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("totalDutiesSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The sum of the prices of all line items in the checkout.
     */
    public function selectTotalLineItemsPriceSet(?ShopifyAbandonedCheckoutTotalLineItemsPriceSetArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("totalLineItemsPriceSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The sum of all items in the checkout, including discounts, shipping, taxes, and tips.
     */
    public function selectTotalPriceSet(?ShopifyAbandonedCheckoutTotalPriceSetArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("totalPriceSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The total tax applied to the checkout.
     */
    public function selectTotalTaxSet(?ShopifyAbandonedCheckoutTotalTaxSetArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("totalTaxSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The date and time when the checkout was most recently updated.
     */
    public function selectUpdatedAt(): static
    {
        $this->selectField("updatedAt");

        return $this;
    }
}
