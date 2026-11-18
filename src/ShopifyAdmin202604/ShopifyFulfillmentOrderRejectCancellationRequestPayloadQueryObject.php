<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `fulfillmentOrderRejectCancellationRequest` mutation.
 */
class ShopifyFulfillmentOrderRejectCancellationRequestPayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "FulfillmentOrderRejectCancellationRequestPayload";

    /**
     * The fulfillment order whose cancellation request was rejected.
     */
    public function selectFulfillmentOrder(?ShopifyFulfillmentOrderRejectCancellationRequestPayloadFulfillmentOrderArgumentsObject $argsObject = null): ShopifyFulfillmentOrderQueryObject
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
    public function selectUserErrors(?ShopifyFulfillmentOrderRejectCancellationRequestPayloadUserErrorsArgumentsObject $argsObject = null): ShopifyUserErrorQueryObject
    {
        $object = new ShopifyUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
