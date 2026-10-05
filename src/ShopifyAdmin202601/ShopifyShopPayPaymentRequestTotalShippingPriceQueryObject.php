<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

class ShopifyShopPayPaymentRequestTotalShippingPriceQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShopPayPaymentRequestTotalShippingPrice";

    public function selectDiscounts(ShopifyShopPayPaymentRequestTotalShippingPriceDiscountsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyShopPayPaymentRequestDiscountQueryObject("discounts");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectFinalTotal(ShopifyShopPayPaymentRequestTotalShippingPriceFinalTotalArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyV2QueryObject("finalTotal");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectOriginalTotal(ShopifyShopPayPaymentRequestTotalShippingPriceOriginalTotalArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyV2QueryObject("originalTotal");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
