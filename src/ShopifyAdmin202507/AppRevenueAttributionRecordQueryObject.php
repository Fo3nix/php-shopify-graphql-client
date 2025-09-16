<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class AppRevenueAttributionRecordQueryObject extends QueryObject
{
    const OBJECT_NAME = "AppRevenueAttributionRecord";

    public function selectAmount(AppRevenueAttributionRecordAmountArgumentsObject $argsObject = null)
    {
        $object = new MoneyV2QueryObject("amount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCapturedAt()
    {
        $this->selectField("capturedAt");

        return $this;
    }

    public function selectCreatedAt()
    {
        $this->selectField("createdAt");

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

    public function selectTest()
    {
        $this->selectField("test");

        return $this;
    }

    public function selectType()
    {
        $this->selectField("type");

        return $this;
    }
}
