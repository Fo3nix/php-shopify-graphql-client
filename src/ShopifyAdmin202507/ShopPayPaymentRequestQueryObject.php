<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class ShopPayPaymentRequestQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShopPayPaymentRequest";

    public function selectDiscounts(ShopPayPaymentRequestDiscountsArgumentsObject $argsObject = null)
    {
        $object = new ShopPayPaymentRequestDiscountQueryObject("discounts");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectLineItems(ShopPayPaymentRequestLineItemsArgumentsObject $argsObject = null)
    {
        $object = new ShopPayPaymentRequestLineItemQueryObject("lineItems");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPresentmentCurrency()
    {
        $this->selectField("presentmentCurrency");

        return $this;
    }

    public function selectSelectedDeliveryMethodType()
    {
        $this->selectField("selectedDeliveryMethodType");

        return $this;
    }

    public function selectShippingAddress(ShopPayPaymentRequestShippingAddressArgumentsObject $argsObject = null)
    {
        $object = new ShopPayPaymentRequestContactFieldQueryObject("shippingAddress");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectShippingLines(ShopPayPaymentRequestShippingLinesArgumentsObject $argsObject = null)
    {
        $object = new ShopPayPaymentRequestShippingLineQueryObject("shippingLines");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectSubtotal(ShopPayPaymentRequestSubtotalArgumentsObject $argsObject = null)
    {
        $object = new MoneyV2QueryObject("subtotal");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTotal(ShopPayPaymentRequestTotalArgumentsObject $argsObject = null)
    {
        $object = new MoneyV2QueryObject("total");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTotalShippingPrice(ShopPayPaymentRequestTotalShippingPriceArgumentsObject $argsObject = null)
    {
        $object = new ShopPayPaymentRequestTotalShippingPriceQueryObject("totalShippingPrice");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTotalTax(ShopPayPaymentRequestTotalTaxArgumentsObject $argsObject = null)
    {
        $object = new MoneyV2QueryObject("totalTax");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
