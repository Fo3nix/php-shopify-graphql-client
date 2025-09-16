<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class SellingPlanRecurringDeliveryPolicyQueryObject extends QueryObject
{
    const OBJECT_NAME = "SellingPlanRecurringDeliveryPolicy";

    public function selectAnchors(SellingPlanRecurringDeliveryPolicyAnchorsArgumentsObject $argsObject = null)
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
