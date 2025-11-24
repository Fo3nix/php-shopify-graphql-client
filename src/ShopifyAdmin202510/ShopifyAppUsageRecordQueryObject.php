<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\QueryObject;

class ShopifyAppUsageRecordQueryObject extends QueryObject
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

    public function selectPrice(ShopifyAppUsageRecordPriceArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyV2QueryObject("price");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectSubscriptionLineItem(ShopifyAppUsageRecordSubscriptionLineItemArgumentsObject $argsObject = null)
    {
        $object = new ShopifyAppSubscriptionLineItemQueryObject("subscriptionLineItem");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
