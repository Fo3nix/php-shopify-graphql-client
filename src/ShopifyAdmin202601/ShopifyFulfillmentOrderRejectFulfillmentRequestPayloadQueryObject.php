<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `fulfillmentOrderRejectFulfillmentRequest` mutation.
 */
class ShopifyFulfillmentOrderRejectFulfillmentRequestPayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "FulfillmentOrderRejectFulfillmentRequestPayload";

    /**
     * The fulfillment order whose fulfillment request was rejected.
     */
    public function selectFulfillmentOrder(?ShopifyFulfillmentOrderRejectFulfillmentRequestPayloadFulfillmentOrderArgumentsObject $argsObject = null): ShopifyFulfillmentOrderQueryObject
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
    public function selectUserErrors(?ShopifyFulfillmentOrderRejectFulfillmentRequestPayloadUserErrorsArgumentsObject $argsObject = null): ShopifyUserErrorQueryObject
    {
        $object = new ShopifyUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
