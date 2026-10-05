<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

class ShopifyDiscountAutomaticBasicQueryObject extends QueryObject
{
    const OBJECT_NAME = "DiscountAutomaticBasic";

    public function selectAsyncUsageCount()
    {
        $this->selectField("asyncUsageCount");

        return $this;
    }

    public function selectCombinesWith(ShopifyDiscountAutomaticBasicCombinesWithArgumentsObject $argsObject = null)
    {
        $object = new ShopifyDiscountCombinesWithQueryObject("combinesWith");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectContext(ShopifyDiscountAutomaticBasicContextArgumentsObject $argsObject = null)
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

    public function selectCustomerGets(ShopifyDiscountAutomaticBasicCustomerGetsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyDiscountCustomerGetsQueryObject("customerGets");
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

    public function selectMinimumRequirement(ShopifyDiscountAutomaticBasicMinimumRequirementArgumentsObject $argsObject = null)
    {
        $object = new ShopifyDiscountMinimumRequirementUnionObject("minimumRequirement");
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

    public function selectUpdatedAt()
    {
        $this->selectField("updatedAt");

        return $this;
    }

    /**
     * @deprecated Use `asyncUsageCount` instead.
     */
    public function selectUsageCount()
    {
        $this->selectField("usageCount");

        return $this;
    }
}
