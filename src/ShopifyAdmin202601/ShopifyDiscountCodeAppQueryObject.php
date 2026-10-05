<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

class ShopifyDiscountCodeAppQueryObject extends QueryObject
{
    const OBJECT_NAME = "DiscountCodeApp";

    public function selectAppDiscountType(ShopifyDiscountCodeAppAppDiscountTypeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyAppDiscountTypeQueryObject("appDiscountType");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectAppliesOnOneTimePurchase()
    {
        $this->selectField("appliesOnOneTimePurchase");

        return $this;
    }

    public function selectAppliesOnSubscription()
    {
        $this->selectField("appliesOnSubscription");

        return $this;
    }

    public function selectAppliesOncePerCustomer()
    {
        $this->selectField("appliesOncePerCustomer");

        return $this;
    }

    public function selectAsyncUsageCount()
    {
        $this->selectField("asyncUsageCount");

        return $this;
    }

    public function selectCodes(ShopifyDiscountCodeAppCodesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyDiscountRedeemCodeConnectionQueryObject("codes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCodesCount(ShopifyDiscountCodeAppCodesCountArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCountQueryObject("codesCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCombinesWith(ShopifyDiscountCodeAppCombinesWithArgumentsObject $argsObject = null)
    {
        $object = new ShopifyDiscountCombinesWithQueryObject("combinesWith");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectContext(ShopifyDiscountCodeAppContextArgumentsObject $argsObject = null)
    {
        $object = new ShopifyDiscountContextUnionObject("context");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCreatedAt()
    {
        $this->selectField("createdAt");

        return $this;
    }

    /**
     * @deprecated Use `context` instead.
     */
    public function selectCustomerSelection(ShopifyDiscountCodeAppCustomerSelectionArgumentsObject $argsObject = null)
    {
        $object = new ShopifyDiscountCustomerSelectionUnionObject("customerSelection");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
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

    public function selectDiscountId()
    {
        $this->selectField("discountId");

        return $this;
    }

    public function selectEndsAt()
    {
        $this->selectField("endsAt");

        return $this;
    }

    public function selectErrorHistory(ShopifyDiscountCodeAppErrorHistoryArgumentsObject $argsObject = null)
    {
        $object = new ShopifyFunctionsErrorHistoryQueryObject("errorHistory");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectHasTimelineComment()
    {
        $this->selectField("hasTimelineComment");

        return $this;
    }

    public function selectRecurringCycleLimit()
    {
        $this->selectField("recurringCycleLimit");

        return $this;
    }

    public function selectShareableUrls(ShopifyDiscountCodeAppShareableUrlsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyDiscountShareableUrlQueryObject("shareableUrls");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectStartsAt()
    {
        $this->selectField("startsAt");

        return $this;
    }

    public function selectStatus()
    {
        $this->selectField("status");

        return $this;
    }

    public function selectTitle()
    {
        $this->selectField("title");

        return $this;
    }

    public function selectTotalSales(ShopifyDiscountCodeAppTotalSalesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyV2QueryObject("totalSales");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectUpdatedAt()
    {
        $this->selectField("updatedAt");

        return $this;
    }

    public function selectUsageLimit()
    {
        $this->selectField("usageLimit");

        return $this;
    }
}
