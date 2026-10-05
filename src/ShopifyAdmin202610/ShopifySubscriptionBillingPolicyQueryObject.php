<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifySubscriptionBillingPolicyQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionBillingPolicy";

    public function selectAnchors(ShopifySubscriptionBillingPolicyAnchorsArgumentsObject $argsObject = null)
    {
        $object = new ShopifySellingPlanAnchorQueryObject("anchors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCadence(ShopifySubscriptionBillingPolicyCadenceArgumentsObject $argsObject = null)
    {
        $object = new ShopifySubscriptionContractCalculationCadenceQueryObject("cadence");
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
