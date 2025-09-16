<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class SubscriptionBillingPolicyQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionBillingPolicy";

    public function selectAnchors(SubscriptionBillingPolicyAnchorsArgumentsObject $argsObject = null)
    {
        $object = new SellingPlanAnchorQueryObject("anchors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
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
