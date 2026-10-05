<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifySellingPlanRecurringDeliveryPolicyQueryObject extends QueryObject
{
    const OBJECT_NAME = "SellingPlanRecurringDeliveryPolicy";

    public function selectAnchors(ShopifySellingPlanRecurringDeliveryPolicyAnchorsArgumentsObject $argsObject = null)
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

    public function selectCutoff()
    {
        $this->selectField("cutoff");

        return $this;
    }

    public function selectIntent()
    {
        $this->selectField("intent");

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

    public function selectPreAnchorBehavior()
    {
        $this->selectField("preAnchorBehavior");

        return $this;
    }
}
