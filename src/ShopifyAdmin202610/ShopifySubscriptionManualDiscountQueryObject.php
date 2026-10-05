<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifySubscriptionManualDiscountQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionManualDiscount";

    public function selectEntitledLines(ShopifySubscriptionManualDiscountEntitledLinesArgumentsObject $argsObject = null)
    {
        $object = new ShopifySubscriptionDiscountEntitledLinesQueryObject("entitledLines");
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

    public function selectValue(ShopifySubscriptionManualDiscountValueArgumentsObject $argsObject = null)
    {
        $object = new ShopifySubscriptionDiscountValueUnionObject("value");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
