<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class SubscriptionManualDiscountQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionManualDiscount";

    public function selectEntitledLines(SubscriptionManualDiscountEntitledLinesArgumentsObject $argsObject = null)
    {
        $object = new SubscriptionDiscountEntitledLinesQueryObject("entitledLines");
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

    public function selectRecurringCycleLimit()
    {
        $this->selectField("recurringCycleLimit");

        return $this;
    }

    public function selectRejectionReason()
    {
        $this->selectField("rejectionReason");

        return $this;
    }

    public function selectTargetType()
    {
        $this->selectField("targetType");

        return $this;
    }

    public function selectTitle()
    {
        $this->selectField("title");

        return $this;
    }

    public function selectType()
    {
        $this->selectField("type");

        return $this;
    }

    public function selectUsageCount()
    {
        $this->selectField("usageCount");

        return $this;
    }

    public function selectValue(SubscriptionManualDiscountValueArgumentsObject $argsObject = null)
    {
        $object = new SubscriptionDiscountValueUnionObject("value");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
