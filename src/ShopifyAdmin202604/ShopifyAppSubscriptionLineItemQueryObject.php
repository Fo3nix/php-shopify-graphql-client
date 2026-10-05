<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifyAppSubscriptionLineItemQueryObject extends QueryObject
{
    const OBJECT_NAME = "AppSubscriptionLineItem";

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectPlan(ShopifyAppSubscriptionLineItemPlanArgumentsObject $argsObject = null)
    {
        $object = new ShopifyAppPlanV2QueryObject("plan");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectUsageRecords(ShopifyAppSubscriptionLineItemUsageRecordsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyAppUsageRecordConnectionQueryObject("usageRecords");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
