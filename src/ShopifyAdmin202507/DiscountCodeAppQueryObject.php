<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class DiscountCodeAppQueryObject extends QueryObject
{
    const OBJECT_NAME = "DiscountCodeApp";

    public function selectAppDiscountType(DiscountCodeAppAppDiscountTypeArgumentsObject $argsObject = null)
    {
        $object = new AppDiscountTypeQueryObject("appDiscountType");
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

    public function selectCodes(DiscountCodeAppCodesArgumentsObject $argsObject = null)
    {
        $object = new DiscountRedeemCodeConnectionQueryObject("codes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCodesCount(DiscountCodeAppCodesCountArgumentsObject $argsObject = null)
    {
        $object = new CountQueryObject("codesCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCombinesWith(DiscountCodeAppCombinesWithArgumentsObject $argsObject = null)
    {
        $object = new DiscountCombinesWithQueryObject("combinesWith");
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
    public function selectCustomerSelection(DiscountCodeAppCustomerSelectionArgumentsObject $argsObject = null)
    {
        $object = new DiscountCustomerSelectionUnionObject("customerSelection");
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

    public function selectErrorHistory(DiscountCodeAppErrorHistoryArgumentsObject $argsObject = null)
    {
        $object = new FunctionsErrorHistoryQueryObject("errorHistory");
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

    public function selectShareableUrls(DiscountCodeAppShareableUrlsArgumentsObject $argsObject = null)
    {
        $object = new DiscountShareableUrlQueryObject("shareableUrls");
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

    public function selectTotalSales(DiscountCodeAppTotalSalesArgumentsObject $argsObject = null)
    {
        $object = new MoneyV2QueryObject("totalSales");
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
