<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * Represents a Shop Pay payment request.
 */
class ShopifyShopPayPaymentRequestQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShopPayPaymentRequest";

    /**
     * The discounts for the payment request order.
     */
    public function selectDiscounts(?ShopifyShopPayPaymentRequestDiscountsArgumentsObject $argsObject = null): ShopifyShopPayPaymentRequestDiscountQueryObject
    {
        $object = new ShopifyShopPayPaymentRequestDiscountQueryObject("discounts");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The line items for the payment request.
     */
    public function selectLineItems(?ShopifyShopPayPaymentRequestLineItemsArgumentsObject $argsObject = null): ShopifyShopPayPaymentRequestLineItemQueryObject
    {
        $object = new ShopifyShopPayPaymentRequestLineItemQueryObject("lineItems");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The presentment currency for the payment request.
     */
    public function selectPresentmentCurrency(): static
    {
        $this->selectField("presentmentCurrency");

        return $this;
    }

    /**
     * The delivery method type for the payment request.
     */
    public function selectSelectedDeliveryMethodType(): static
    {
        $this->selectField("selectedDeliveryMethodType");

        return $this;
    }

    /**
     * The shipping address for the payment request.
     */
    public function selectShippingAddress(?ShopifyShopPayPaymentRequestShippingAddressArgumentsObject $argsObject = null): ShopifyShopPayPaymentRequestContactFieldQueryObject
    {
        $object = new ShopifyShopPayPaymentRequestContactFieldQueryObject("shippingAddress");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The shipping lines for the payment request.
     */
    public function selectShippingLines(?ShopifyShopPayPaymentRequestShippingLinesArgumentsObject $argsObject = null): ShopifyShopPayPaymentRequestShippingLineQueryObject
    {
        $object = new ShopifyShopPayPaymentRequestShippingLineQueryObject("shippingLines");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The subtotal amount for the payment request.
     */
    public function selectSubtotal(?ShopifyShopPayPaymentRequestSubtotalArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("subtotal");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The total amount for the payment request.
     */
    public function selectTotal(?ShopifyShopPayPaymentRequestTotalArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("total");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The total shipping price for the payment request.
     */
    public function selectTotalShippingPrice(?ShopifyShopPayPaymentRequestTotalShippingPriceArgumentsObject $argsObject = null): ShopifyShopPayPaymentRequestTotalShippingPriceQueryObject
    {
        $object = new ShopifyShopPayPaymentRequestTotalShippingPriceQueryObject("totalShippingPrice");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The total tax for the payment request.
     */
    public function selectTotalTax(?ShopifyShopPayPaymentRequestTotalTaxArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("totalTax");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
