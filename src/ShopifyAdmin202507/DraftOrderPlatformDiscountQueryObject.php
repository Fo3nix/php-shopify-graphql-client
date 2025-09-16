<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class DraftOrderPlatformDiscountQueryObject extends QueryObject
{
    const OBJECT_NAME = "DraftOrderPlatformDiscount";

    public function selectAllocations(DraftOrderPlatformDiscountAllocationsArgumentsObject $argsObject = null)
    {
        $object = new DraftOrderPlatformDiscountAllocationQueryObject("allocations");
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

    public function selectDiscountNode(DraftOrderPlatformDiscountDiscountNodeArgumentsObject $argsObject = null)
    {
        $object = new DiscountNodeQueryObject("discountNode");
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

    public function selectTotalAmount(DraftOrderPlatformDiscountTotalAmountArgumentsObject $argsObject = null)
    {
        $object = new MoneyV2QueryObject("totalAmount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTotalAmountPriceSet(DraftOrderPlatformDiscountTotalAmountPriceSetArgumentsObject $argsObject = null)
    {
        $object = new MoneyBagQueryObject("totalAmountPriceSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
