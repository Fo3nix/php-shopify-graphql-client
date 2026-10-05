<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifySellingPlanRecurringBillingPolicyQueryObject extends QueryObject
{
    const OBJECT_NAME = "SellingPlanRecurringBillingPolicy";

    public function selectAnchors(ShopifySellingPlanRecurringBillingPolicyAnchorsArgumentsObject $argsObject = null)
    {
        $object = new ShopifySellingPlanAnchorQueryObject("anchors");
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

    public function selectInterval()
    {
        $this->selectField("interval");

        return $this;
    }

    public function selectIntervalCount()
    {
        $this->selectField("intervalCount");

        return $this;
    }

    public function selectMaxCycles()
    {
        $this->selectField("maxCycles");

        return $this;
    }

    public function selectMinCycles()
    {
        $this->selectField("minCycles");

        return $this;
    }
}
