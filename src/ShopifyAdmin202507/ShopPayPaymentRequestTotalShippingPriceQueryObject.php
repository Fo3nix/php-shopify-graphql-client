<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class ShopPayPaymentRequestTotalShippingPriceQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShopPayPaymentRequestTotalShippingPrice";

    public function selectDiscounts(ShopPayPaymentRequestTotalShippingPriceDiscountsArgumentsObject $argsObject = null)
    {
        $object = new ShopPayPaymentRequestDiscountQueryObject("discounts");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectFinalTotal(ShopPayPaymentRequestTotalShippingPriceFinalTotalArgumentsObject $argsObject = null)
    {
        $object = new MoneyV2QueryObject("finalTotal");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectOriginalTotal(ShopPayPaymentRequestTotalShippingPriceOriginalTotalArgumentsObject $argsObject = null)
    {
        $object = new MoneyV2QueryObject("originalTotal");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
