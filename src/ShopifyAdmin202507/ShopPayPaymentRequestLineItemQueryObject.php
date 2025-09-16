<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class ShopPayPaymentRequestLineItemQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShopPayPaymentRequestLineItem";

    public function selectFinalItemPrice(ShopPayPaymentRequestLineItemFinalItemPriceArgumentsObject $argsObject = null)
    {
        $object = new MoneyV2QueryObject("finalItemPrice");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectFinalLinePrice(ShopPayPaymentRequestLineItemFinalLinePriceArgumentsObject $argsObject = null)
    {
        $object = new MoneyV2QueryObject("finalLinePrice");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectImage(ShopPayPaymentRequestLineItemImageArgumentsObject $argsObject = null)
    {
        $object = new ShopPayPaymentRequestImageQueryObject("image");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectItemDiscounts(ShopPayPaymentRequestLineItemItemDiscountsArgumentsObject $argsObject = null)
    {
        $object = new ShopPayPaymentRequestDiscountQueryObject("itemDiscounts");
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

    public function selectLineDiscounts(ShopPayPaymentRequestLineItemLineDiscountsArgumentsObject $argsObject = null)
    {
        $object = new ShopPayPaymentRequestDiscountQueryObject("lineDiscounts");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectOriginalItemPrice(ShopPayPaymentRequestLineItemOriginalItemPriceArgumentsObject $argsObject = null)
    {
        $object = new MoneyV2QueryObject("originalItemPrice");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectOriginalLinePrice(ShopPayPaymentRequestLineItemOriginalLinePriceArgumentsObject $argsObject = null)
    {
        $object = new MoneyV2QueryObject("originalLinePrice");
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
