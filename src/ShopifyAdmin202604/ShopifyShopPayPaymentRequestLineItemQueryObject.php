<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * Represents a line item for a Shop Pay payment request.
 */
class ShopifyShopPayPaymentRequestLineItemQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShopPayPaymentRequestLineItem";

    /**
     * The final item price for the line item.
     */
    public function selectFinalItemPrice(?ShopifyShopPayPaymentRequestLineItemFinalItemPriceArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("finalItemPrice");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The final line price for the line item.
     */
    public function selectFinalLinePrice(?ShopifyShopPayPaymentRequestLineItemFinalLinePriceArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("finalLinePrice");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The image of the line item.
     */
    public function selectImage(?ShopifyShopPayPaymentRequestLineItemImageArgumentsObject $argsObject = null): ShopifyShopPayPaymentRequestImageQueryObject
    {
        $object = new ShopifyShopPayPaymentRequestImageQueryObject("image");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The item discounts for the line item.
     */
    public function selectItemDiscounts(?ShopifyShopPayPaymentRequestLineItemItemDiscountsArgumentsObject $argsObject = null): ShopifyShopPayPaymentRequestDiscountQueryObject
    {
        $object = new ShopifyShopPayPaymentRequestDiscountQueryObject("itemDiscounts");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The label of the line item.
     */
    public function selectLabel(): static
    {
        $this->selectField("label");

        return $this;
    }

    /**
     * The line discounts for the line item.
     */
    public function selectLineDiscounts(?ShopifyShopPayPaymentRequestLineItemLineDiscountsArgumentsObject $argsObject = null): ShopifyShopPayPaymentRequestDiscountQueryObject
    {
        $object = new ShopifyShopPayPaymentRequestDiscountQueryObject("lineDiscounts");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The original item price for the line item.
     */
    public function selectOriginalItemPrice(?ShopifyShopPayPaymentRequestLineItemOriginalItemPriceArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("originalItemPrice");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The original line price for the line item.
     */
    public function selectOriginalLinePrice(?ShopifyShopPayPaymentRequestLineItemOriginalLinePriceArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("originalLinePrice");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The quantity of the line item.
     */
    public function selectQuantity(): static
    {
        $this->selectField("quantity");

        return $this;
    }

    /**
     * Whether the line item requires shipping.
     */
    public function selectRequiresShipping(): static
    {
        $this->selectField("requiresShipping");

        return $this;
    }

    /**
     * The SKU of the line item.
     */
    public function selectSku(): static
    {
        $this->selectField("sku");

        return $this;
    }
}
