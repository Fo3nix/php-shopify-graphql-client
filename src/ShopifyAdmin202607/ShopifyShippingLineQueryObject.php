<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * The shipping method that customers select for an order. Includes pricing details, carrier information, and any applied discounts or taxes.
 */
class ShopifyShippingLineQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShippingLine";

    /**
     * A reference to the carrier service that provided the rate.
     * Present when the rate was computed by a third-party carrier service.
     */
    public function selectCarrierIdentifier(): static
    {
        $this->selectField("carrierIdentifier");

        return $this;
    }

    /**
     * A reference to the shipping method.
     */
    public function selectCode(): static
    {
        $this->selectField("code");

        return $this;
    }

    /**
     * The date and time when the shipping line was created.
     */
    public function selectCreatedAt(): static
    {
        $this->selectField("createdAt");

        return $this;
    }

    /**
     * The current shipping price after applying refunds, after applying discounts. If the parent `order.taxesIncluded`` field is true, then this price includes taxes. Otherwise, this field is the pre-tax price.
     */
    public function selectCurrentDiscountedPriceSet(?ShopifyShippingLineCurrentDiscountedPriceSetArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("currentDiscountedPriceSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Whether the shipping line is custom or not.
     */
    public function selectCustom(): static
    {
        $this->selectField("custom");

        return $this;
    }

    /**
     * The general classification of the delivery method.
     */
    public function selectDeliveryCategory(): static
    {
        $this->selectField("deliveryCategory");

        return $this;
    }

    /**
     * The discounts that have been allocated to the shipping line.
     */
    public function selectDiscountAllocations(?ShopifyShippingLineDiscountAllocationsArgumentsObject $argsObject = null): ShopifyDiscountAllocationQueryObject
    {
        $object = new ShopifyDiscountAllocationQueryObject("discountAllocations");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The pre-tax shipping price with discounts applied.
     * As of API version 2024-07, this will be calculated including cart level discounts, such as the free shipping discount.
     *
     * @deprecated Use `discountedPriceSet` instead.
     */
    public function selectDiscountedPrice(?ShopifyShippingLineDiscountedPriceArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("discountedPrice");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The shipping price after applying discounts. If the parent order.taxesIncluded field is true, then this price includes taxes. If not, it's the pre-tax price.
     * As of API version 2024-07, this will be calculated including cart level discounts, such as the free shipping discount.
     */
    public function selectDiscountedPriceSet(?ShopifyShippingLineDiscountedPriceSetArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("discountedPriceSet");
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
     * Whether the shipping line has been removed.
     */
    public function selectIsRemoved(): static
    {
        $this->selectField("isRemoved");

        return $this;
    }

    /**
     * The shipping price without any discounts applied. If the parent order.taxesIncluded field is true, then this price includes taxes. Otherwise, this field is the pre-tax price.
     *
     * @deprecated Use `originalPriceSet` instead.
     */
    public function selectOriginalPrice(?ShopifyShippingLineOriginalPriceArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("originalPrice");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The shipping price without any discounts applied. If the parent order.taxesIncluded field is true, then this price includes taxes. Otherwise, this field is the pre-tax price.
     */
    public function selectOriginalPriceSet(?ShopifyShippingLineOriginalPriceSetArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("originalPriceSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The phone number at the shipping address.
     */
    public function selectPhone(): static
    {
        $this->selectField("phone");

        return $this;
    }

    /**
     * Returns the price of the shipping line.
     *
     * @deprecated Use `originalPriceSet` instead.
     */
    public function selectPrice(): static
    {
        $this->selectField("price");

        return $this;
    }

    /**
     * The fulfillment service requested for the shipping method.
     * Present if the shipping method requires processing by a third party fulfillment service.
     *
     * @deprecated requestedFulfillmentService is no longer in use. Order routing does not use the requestedFulfillmentService during order and fulfillment order creation.
     */
    public function selectRequestedFulfillmentService(?ShopifyShippingLineRequestedFulfillmentServiceArgumentsObject $argsObject = null): ShopifyFulfillmentServiceQueryObject
    {
        $object = new ShopifyFulfillmentServiceQueryObject("requestedFulfillmentService");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * A unique identifier for the shipping rate. The format can change without notice and isn't meant to be shown to users.
     */
    public function selectShippingRateHandle(): static
    {
        $this->selectField("shippingRateHandle");

        return $this;
    }

    /**
     * Returns the rate source for the shipping line.
     */
    public function selectSource(): static
    {
        $this->selectField("source");

        return $this;
    }

    /**
     * The TaxLine objects connected to this shipping line.
     */
    public function selectTaxLines(?ShopifyShippingLineTaxLinesArgumentsObject $argsObject = null): ShopifyTaxLineQueryObject
    {
        $object = new ShopifyTaxLineQueryObject("taxLines");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Returns the title of the shipping line.
     */
    public function selectTitle(): static
    {
        $this->selectField("title");

        return $this;
    }
}
