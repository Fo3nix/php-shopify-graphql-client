<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class AppUsageRecordQueryObject extends QueryObject
{
    const OBJECT_NAME = "AppUsageRecord";

    public function selectCreatedAt()
    {
        $this->selectField("createdAt");

        return $this;
    }

    public function selectDescription()
    {
        $this->selectField("description");

        return $this;
    }

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectIdempotencyKey()
    {
        $this->selectField("idempotencyKey");

        return $this;
    }

    public function selectPrice(AppUsageRecordPriceArgumentsObject $argsObject = null)
    {
        $object = new MoneyV2QueryObject("price");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectSubscriptionLineItem(AppUsageRecordSubscriptionLineItemArgumentsObject $argsObject = null)
    {
        $object = new AppSubscriptionLineItemQueryObject("subscriptionLineItem");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
