<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `fulfillmentOrderHold` mutation.
 */
class ShopifyFulfillmentOrderHoldPayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "FulfillmentOrderHoldPayload";

    /**
     * The fulfillment hold created for the fulfillment order. Null if no hold was created.
     */
    public function selectFulfillmentHold(?ShopifyFulfillmentOrderHoldPayloadFulfillmentHoldArgumentsObject $argsObject = null): ShopifyFulfillmentHoldQueryObject
    {
        $object = new ShopifyFulfillmentHoldQueryObject("fulfillmentHold");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The fulfillment order on which a fulfillment hold was applied.
     */
    public function selectFulfillmentOrder(?ShopifyFulfillmentOrderHoldPayloadFulfillmentOrderArgumentsObject $argsObject = null): ShopifyFulfillmentOrderQueryObject
    {
        $object = new ShopifyFulfillmentOrderQueryObject("fulfillmentOrder");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The remaining fulfillment order containing the line items to which the hold wasn't applied,
     * if specific line items were specified to be placed on hold.
     */
    public function selectRemainingFulfillmentOrder(?ShopifyFulfillmentOrderHoldPayloadRemainingFulfillmentOrderArgumentsObject $argsObject = null): ShopifyFulfillmentOrderQueryObject
    {
        $object = new ShopifyFulfillmentOrderQueryObject("remainingFulfillmentOrder");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyFulfillmentOrderHoldPayloadUserErrorsArgumentsObject $argsObject = null): ShopifyFulfillmentOrderHoldUserErrorQueryObject
    {
        $object = new ShopifyFulfillmentOrderHoldUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
