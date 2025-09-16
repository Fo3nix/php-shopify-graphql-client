<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class DiscountAutomaticBxgyQueryObject extends QueryObject
{
    const OBJECT_NAME = "DiscountAutomaticBxgy";

    public function selectAsyncUsageCount()
    {
        $this->selectField("asyncUsageCount");

        return $this;
    }

    public function selectCombinesWith(DiscountAutomaticBxgyCombinesWithArgumentsObject $argsObject = null)
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

    public function selectCustomerBuys(DiscountAutomaticBxgyCustomerBuysArgumentsObject $argsObject = null)
    {
        $object = new DiscountCustomerBuysQueryObject("customerBuys");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCustomerGets(DiscountAutomaticBxgyCustomerGetsArgumentsObject $argsObject = null)
    {
        $object = new DiscountCustomerGetsQueryObject("customerGets");
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

    public function selectEvents(DiscountAutomaticBxgyEventsArgumentsObject $argsObject = null)
    {
        $object = new EventConnectionQueryObject("events");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated Use DiscountAutomaticNode.id instead.
     */
    public function selectId()
    {
        $this->selectField("id");

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

    public function selectUsesPerOrderLimit()
    {
        $this->selectField("usesPerOrderLimit");

        return $this;
    }
}
