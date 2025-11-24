<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\QueryObject;

class ShopifyDraftOrderPlatformDiscountQueryObject extends QueryObject
{
    const OBJECT_NAME = "DraftOrderPlatformDiscount";

    public function selectAllocations(ShopifyDraftOrderPlatformDiscountAllocationsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyDraftOrderPlatformDiscountAllocationQueryObject("allocations");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectAutomaticDiscount()
    {
        $this->selectField("automaticDiscount");

        return $this;
    }

    public function selectBxgyDiscount()
    {
        $this->selectField("bxgyDiscount");

        return $this;
    }

    public function selectCode()
    {
        $this->selectField("code");

        return $this;
    }

    /**
     * @deprecated Use `discountClasses` instead.
     */
    public function selectDiscountClass()
    {
        $this->selectField("discountClass");

        return $this;
    }

    public function selectDiscountClasses()
    {
        $this->selectField("discountClasses");

        return $this;
    }

    public function selectDiscountNode(ShopifyDraftOrderPlatformDiscountDiscountNodeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyDiscountNodeQueryObject("discountNode");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectPresentationLevel()
    {
        $this->selectField("presentationLevel");

        return $this;
    }

    public function selectShortSummary()
    {
        $this->selectField("shortSummary");

        return $this;
    }

    public function selectSummary()
    {
        $this->selectField("summary");

        return $this;
    }

    public function selectTitle()
    {
        $this->selectField("title");

        return $this;
    }

    public function selectTotalAmount(ShopifyDraftOrderPlatformDiscountTotalAmountArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyV2QueryObject("totalAmount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTotalAmountPriceSet(ShopifyDraftOrderPlatformDiscountTotalAmountPriceSetArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyBagQueryObject("totalAmountPriceSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
