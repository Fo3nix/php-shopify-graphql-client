<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifyShopPayPaymentRequestQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShopPayPaymentRequest";

    public function selectDiscounts(ShopifyShopPayPaymentRequestDiscountsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyShopPayPaymentRequestDiscountQueryObject("discounts");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectLineItems(ShopifyShopPayPaymentRequestLineItemsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyShopPayPaymentRequestLineItemQueryObject("lineItems");
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

    public function selectShippingAddress(ShopifyShopPayPaymentRequestShippingAddressArgumentsObject $argsObject = null)
    {
        $object = new ShopifyShopPayPaymentRequestContactFieldQueryObject("shippingAddress");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectShippingLines(ShopifyShopPayPaymentRequestShippingLinesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyShopPayPaymentRequestShippingLineQueryObject("shippingLines");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectSubtotal(ShopifyShopPayPaymentRequestSubtotalArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyV2QueryObject("subtotal");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTotal(ShopifyShopPayPaymentRequestTotalArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyV2QueryObject("total");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTotalShippingPrice(ShopifyShopPayPaymentRequestTotalShippingPriceArgumentsObject $argsObject = null)
    {
        $object = new ShopifyShopPayPaymentRequestTotalShippingPriceQueryObject("totalShippingPrice");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTotalTax(ShopifyShopPayPaymentRequestTotalTaxArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyV2QueryObject("totalTax");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
