<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * The platform discounts applied to the draft order.
 */
class ShopifyDraftOrderPlatformDiscountQueryObject extends QueryObject
{
    const OBJECT_NAME = "DraftOrderPlatformDiscount";

    /**
     * Price reduction allocations across the draft order's lines.
     */
    public function selectAllocations(?ShopifyDraftOrderPlatformDiscountAllocationsArgumentsObject $argsObject = null): ShopifyDraftOrderPlatformDiscountAllocationQueryObject
    {
        $object = new ShopifyDraftOrderPlatformDiscountAllocationQueryObject("allocations");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Whether the discount is an automatic discount.
     */
    public function selectAutomaticDiscount(): static
    {
        $this->selectField("automaticDiscount");

        return $this;
    }

    /**
     * Whether the discount is a buy x get y discount.
     */
    public function selectBxgyDiscount(): static
    {
        $this->selectField("bxgyDiscount");

        return $this;
    }

    /**
     * If a code-based discount, the code used to add the discount.
     */
    public function selectCode(): static
    {
        $this->selectField("code");

        return $this;
    }

    /**
     * The discount class.
     *
     * @deprecated Use `discountClasses` instead.
     */
    public function selectDiscountClass(): static
    {
        $this->selectField("discountClass");

        return $this;
    }

    /**
     * The discount classes.
     */
    public function selectDiscountClasses(): static
    {
        $this->selectField("discountClasses");

        return $this;
    }

    /**
     * The discount node for the platform discount.
     */
    public function selectDiscountNode(?ShopifyDraftOrderPlatformDiscountDiscountNodeArgumentsObject $argsObject = null): ShopifyDiscountNodeQueryObject
    {
        $object = new ShopifyDiscountNodeQueryObject("discountNode");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The ID of the discount.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }

    /**
     * Whether the discount is line, order or shipping level.
     */
    public function selectPresentationLevel(): static
    {
        $this->selectField("presentationLevel");

        return $this;
    }

    /**
     * The short summary of the discount.
     */
    public function selectShortSummary(): static
    {
        $this->selectField("shortSummary");

        return $this;
    }

    /**
     * The summary of the discount.
     */
    public function selectSummary(): static
    {
        $this->selectField("summary");

        return $this;
    }

    /**
     * The name of the discount.
     */
    public function selectTitle(): static
    {
        $this->selectField("title");

        return $this;
    }

    /**
     * The discount total amount in shop currency.
     */
    public function selectTotalAmount(?ShopifyDraftOrderPlatformDiscountTotalAmountArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("totalAmount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The amount of money discounted, with values shown in both shop currency and presentment currency.
     */
    public function selectTotalAmountPriceSet(?ShopifyDraftOrderPlatformDiscountTotalAmountPriceSetArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("totalAmountPriceSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
