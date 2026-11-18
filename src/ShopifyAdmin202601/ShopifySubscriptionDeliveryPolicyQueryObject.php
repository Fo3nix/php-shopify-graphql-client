<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * Represents a Subscription Delivery Policy.
 */
class ShopifySubscriptionDeliveryPolicyQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionDeliveryPolicy";

    /**
     * The specific anchor dates upon which the delivery interval calculations should be made.
     */
    public function selectAnchors(?ShopifySubscriptionDeliveryPolicyAnchorsArgumentsObject $argsObject = null): ShopifySellingPlanAnchorQueryObject
    {
        $object = new ShopifySellingPlanAnchorQueryObject("anchors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The kind of interval that's associated with this schedule (e.g. Monthly, Weekly, etc).
     */
    public function selectInterval(): static
    {
        $this->selectField("interval");

        return $this;
    }

    /**
     * The number of delivery intervals between deliveries.
     */
    public function selectIntervalCount(): static
    {
        $this->selectField("intervalCount");

        return $this;
    }
}
