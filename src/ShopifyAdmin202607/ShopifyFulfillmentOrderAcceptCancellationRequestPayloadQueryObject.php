<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `fulfillmentOrderAcceptCancellationRequest` mutation.
 */
class ShopifyFulfillmentOrderAcceptCancellationRequestPayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "FulfillmentOrderAcceptCancellationRequestPayload";

    /**
     * The fulfillment order whose cancellation request was accepted.
     */
    public function selectFulfillmentOrder(?ShopifyFulfillmentOrderAcceptCancellationRequestPayloadFulfillmentOrderArgumentsObject $argsObject = null): ShopifyFulfillmentOrderQueryObject
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
    public function selectUserErrors(?ShopifyFulfillmentOrderAcceptCancellationRequestPayloadUserErrorsArgumentsObject $argsObject = null): ShopifyUserErrorQueryObject
    {
        $object = new ShopifyUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
