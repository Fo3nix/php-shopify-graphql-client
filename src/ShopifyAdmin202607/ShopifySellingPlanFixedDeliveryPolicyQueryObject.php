<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Represents a fixed selling plan delivery policy.
 */
class ShopifySellingPlanFixedDeliveryPolicyQueryObject extends QueryObject
{
    const OBJECT_NAME = "SellingPlanFixedDeliveryPolicy";

    /**
     * The specific anchor dates upon which the delivery interval calculations should be made.
     */
    public function selectAnchors(?ShopifySellingPlanFixedDeliveryPolicyAnchorsArgumentsObject $argsObject = null): ShopifySellingPlanAnchorQueryObject
    {
        $object = new ShopifySellingPlanAnchorQueryObject("anchors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * A buffer period for orders to be included in next fulfillment anchor.
     */
    public function selectCutoff(): static
    {
        $this->selectField("cutoff");

        return $this;
    }

    /**
     * The date and time when the fulfillment should trigger.
     */
    public function selectFulfillmentExactTime(): static
    {
        $this->selectField("fulfillmentExactTime");

        return $this;
    }

    /**
     * What triggers the fulfillment. The value must be one of ANCHOR, ASAP, EXACT_TIME, or UNKNOWN.
     */
    public function selectFulfillmentTrigger(): static
    {
        $this->selectField("fulfillmentTrigger");

        return $this;
    }

    /**
     * Whether the delivery policy is merchant or buyer-centric.
     * Buyer-centric delivery policies state the time when the buyer will receive the goods.
     * Merchant-centric delivery policies state the time when the fulfillment should be started.
     * Currently, only merchant-centric delivery policies are supported.
     */
    public function selectIntent(): static
    {
        $this->selectField("intent");

        return $this;
    }

    /**
     * The fulfillment or delivery behavior of the first fulfillment when the order is placed before the anchor. The default value for this field is `ASAP`.
     */
    public function selectPreAnchorBehavior(): static
    {
        $this->selectField("preAnchorBehavior");

        return $this;
    }
}
