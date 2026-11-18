<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `fulfillmentOrderReschedule` mutation.
 */
class ShopifyFulfillmentOrderReschedulePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "FulfillmentOrderReschedulePayload";

    /**
     * A fulfillment order with the rescheduled line items.
     *
     * Fulfillment orders may be merged if they have the same `fulfillAt` datetime.
     *
     * If the fulfillment order is merged then the resulting fulfillment order will be returned.
     * Otherwise the original fulfillment order will be returned with an updated `fulfillAt` datetime.
     */
    public function selectFulfillmentOrder(?ShopifyFulfillmentOrderReschedulePayloadFulfillmentOrderArgumentsObject $argsObject = null): ShopifyFulfillmentOrderQueryObject
    {
        $object = new ShopifyFulfillmentOrderQueryObject("fulfillmentOrder");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyFulfillmentOrderReschedulePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyFulfillmentOrderRescheduleUserErrorQueryObject
    {
        $object = new ShopifyFulfillmentOrderRescheduleUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
