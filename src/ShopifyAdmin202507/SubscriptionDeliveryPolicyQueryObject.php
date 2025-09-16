<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class SubscriptionDeliveryPolicyQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionDeliveryPolicy";

    public function selectAnchors(SubscriptionDeliveryPolicyAnchorsArgumentsObject $argsObject = null)
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
}
