<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `fulfillmentOrderSubmitFulfillmentRequest` mutation.
 */
class ShopifyFulfillmentOrderSubmitFulfillmentRequestPayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "FulfillmentOrderSubmitFulfillmentRequestPayload";

    /**
     * The original fulfillment order intended to request fulfillment for.
     */
    public function selectOriginalFulfillmentOrder(?ShopifyFulfillmentOrderSubmitFulfillmentRequestPayloadOriginalFulfillmentOrderArgumentsObject $argsObject = null): ShopifyFulfillmentOrderQueryObject
    {
        $object = new ShopifyFulfillmentOrderQueryObject("originalFulfillmentOrder");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The fulfillment order that was submitted to the fulfillment service. This will be the same as
     * the original fulfillment order field. The exception to this is partial fulfillment requests or
     * fulfillment request for cancelled or incomplete fulfillment orders.
     */
    public function selectSubmittedFulfillmentOrder(?ShopifyFulfillmentOrderSubmitFulfillmentRequestPayloadSubmittedFulfillmentOrderArgumentsObject $argsObject = null): ShopifyFulfillmentOrderQueryObject
    {
        $object = new ShopifyFulfillmentOrderQueryObject("submittedFulfillmentOrder");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * This field will only be present for partial fulfillment requests. This will represent the new
     * fulfillment order with the remaining line items not submitted to the fulfillment service.
     */
    public function selectUnsubmittedFulfillmentOrder(?ShopifyFulfillmentOrderSubmitFulfillmentRequestPayloadUnsubmittedFulfillmentOrderArgumentsObject $argsObject = null): ShopifyFulfillmentOrderQueryObject
    {
        $object = new ShopifyFulfillmentOrderQueryObject("unsubmittedFulfillmentOrder");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyFulfillmentOrderSubmitFulfillmentRequestPayloadUserErrorsArgumentsObject $argsObject = null): ShopifyUserErrorQueryObject
    {
        $object = new ShopifyUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
