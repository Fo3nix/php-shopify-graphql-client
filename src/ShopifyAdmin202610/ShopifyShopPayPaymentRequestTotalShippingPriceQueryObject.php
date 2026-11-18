<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Represents a shipping total for a Shop Pay payment request.
 */
class ShopifyShopPayPaymentRequestTotalShippingPriceQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShopPayPaymentRequestTotalShippingPrice";

    /**
     * The discounts for the shipping total.
     */
    public function selectDiscounts(?ShopifyShopPayPaymentRequestTotalShippingPriceDiscountsArgumentsObject $argsObject = null): ShopifyShopPayPaymentRequestDiscountQueryObject
    {
        $object = new ShopifyShopPayPaymentRequestDiscountQueryObject("discounts");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The final total for the shipping line.
     */
    public function selectFinalTotal(?ShopifyShopPayPaymentRequestTotalShippingPriceFinalTotalArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("finalTotal");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The original total for the shipping line.
     */
    public function selectOriginalTotal(?ShopifyShopPayPaymentRequestTotalShippingPriceOriginalTotalArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("originalTotal");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
