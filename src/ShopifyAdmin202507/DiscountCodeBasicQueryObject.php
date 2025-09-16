<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class DiscountCodeBasicQueryObject extends QueryObject
{
    const OBJECT_NAME = "DiscountCodeBasic";

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

    public function selectCodes(DiscountCodeBasicCodesArgumentsObject $argsObject = null)
    {
        $object = new DiscountRedeemCodeConnectionQueryObject("codes");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCodesCount(DiscountCodeBasicCodesCountArgumentsObject $argsObject = null)
    {
        $object = new CountQueryObject("codesCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCombinesWith(DiscountCodeBasicCombinesWithArgumentsObject $argsObject = null)
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

    public function selectCustomerGets(DiscountCodeBasicCustomerGetsArgumentsObject $argsObject = null)
    {
        $object = new DiscountCustomerGetsQueryObject("customerGets");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use `context` instead.
     */
    public function selectCustomerSelection(DiscountCodeBasicCustomerSelectionArgumentsObject $argsObject = null)
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

    public function selectEndsAt()
    {
        $this->selectField("endsAt");

        return $this;
    }

    public function selectHasTimelineComment()
    {
        $this->selectField("hasTimelineComment");

        return $this;
    }

    public function selectMinimumRequirement(DiscountCodeBasicMinimumRequirementArgumentsObject $argsObject = null)
    {
        $object = new DiscountMinimumRequirementUnionObject("minimumRequirement");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectRecurringCycleLimit()
    {
        $this->selectField("recurringCycleLimit");

        return $this;
    }

    public function selectShareableUrls(DiscountCodeBasicShareableUrlsArgumentsObject $argsObject = null)
    {
        $object = new DiscountShareableUrlQueryObject("shareableUrls");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectShortSummary()
    {
        $this->selectField("shortSummary");

        return $this;
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

    public function selectTotalSales(DiscountCodeBasicTotalSalesArgumentsObject $argsObject = null)
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
