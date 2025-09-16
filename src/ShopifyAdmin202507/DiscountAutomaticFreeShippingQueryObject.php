<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class DiscountAutomaticFreeShippingQueryObject extends QueryObject
{
    const OBJECT_NAME = "DiscountAutomaticFreeShipping";

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

    public function selectAsyncUsageCount()
    {
        $this->selectField("asyncUsageCount");

        return $this;
    }

    public function selectCombinesWith(DiscountAutomaticFreeShippingCombinesWithArgumentsObject $argsObject = null)
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

    public function selectDestinationSelection(DiscountAutomaticFreeShippingDestinationSelectionArgumentsObject $argsObject = null)
    {
        $object = new DiscountShippingDestinationSelectionUnionObject("destinationSelection");
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

    public function selectMaximumShippingPrice(DiscountAutomaticFreeShippingMaximumShippingPriceArgumentsObject $argsObject = null)
    {
        $object = new MoneyV2QueryObject("maximumShippingPrice");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMinimumRequirement(DiscountAutomaticFreeShippingMinimumRequirementArgumentsObject $argsObject = null)
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

    public function selectTotalSales(DiscountAutomaticFreeShippingTotalSalesArgumentsObject $argsObject = null)
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
}
