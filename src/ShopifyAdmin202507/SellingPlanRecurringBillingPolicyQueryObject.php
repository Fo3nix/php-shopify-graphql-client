<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class SellingPlanRecurringBillingPolicyQueryObject extends QueryObject
{
    const OBJECT_NAME = "SellingPlanRecurringBillingPolicy";

    public function selectAnchors(SellingPlanRecurringBillingPolicyAnchorsArgumentsObject $argsObject = null)
    {
        $object = new SellingPlanAnchorQueryObject("anchors");
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
