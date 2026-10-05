<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifySubscriptionDeliveryPolicyQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionDeliveryPolicy";

    public function selectAnchors(ShopifySubscriptionDeliveryPolicyAnchorsArgumentsObject $argsObject = null)
    {
        $object = new ShopifySellingPlanAnchorQueryObject("anchors");
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
