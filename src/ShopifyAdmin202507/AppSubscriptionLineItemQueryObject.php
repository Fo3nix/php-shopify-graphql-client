<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class AppSubscriptionLineItemQueryObject extends QueryObject
{
    const OBJECT_NAME = "AppSubscriptionLineItem";

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectPlan(AppSubscriptionLineItemPlanArgumentsObject $argsObject = null)
    {
        $object = new AppPlanV2QueryObject("plan");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectUsageRecords(AppSubscriptionLineItemUsageRecordsArgumentsObject $argsObject = null)
    {
        $object = new AppUsageRecordConnectionQueryObject("usageRecords");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
