<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\QueryObject;

class ShopifyShopPayPaymentRequestLineItemQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShopPayPaymentRequestLineItem";

    public function selectFinalItemPrice(ShopifyShopPayPaymentRequestLineItemFinalItemPriceArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyV2QueryObject("finalItemPrice");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectFinalLinePrice(ShopifyShopPayPaymentRequestLineItemFinalLinePriceArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyV2QueryObject("finalLinePrice");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectImage(ShopifyShopPayPaymentRequestLineItemImageArgumentsObject $argsObject = null)
    {
        $object = new ShopifyShopPayPaymentRequestImageQueryObject("image");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectItemDiscounts(ShopifyShopPayPaymentRequestLineItemItemDiscountsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyShopPayPaymentRequestDiscountQueryObject("itemDiscounts");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectLabel()
    {
        $this->selectField("label");

        return $this;
    }

    public function selectLineDiscounts(ShopifyShopPayPaymentRequestLineItemLineDiscountsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyShopPayPaymentRequestDiscountQueryObject("lineDiscounts");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectOriginalItemPrice(ShopifyShopPayPaymentRequestLineItemOriginalItemPriceArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyV2QueryObject("originalItemPrice");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectOriginalLinePrice(ShopifyShopPayPaymentRequestLineItemOriginalLinePriceArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyV2QueryObject("originalLinePrice");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectQuantity()
    {
        $this->selectField("quantity");

        return $this;
    }

    public function selectRequiresShipping()
    {
        $this->selectField("requiresShipping");

        return $this;
    }

    public function selectSku()
    {
        $this->selectField("sku");

        return $this;
    }
}
