<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `fulfillmentOrderSubmitCancellationRequest` mutation.
 */
class ShopifyFulfillmentOrderSubmitCancellationRequestPayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "FulfillmentOrderSubmitCancellationRequestPayload";

    /**
     * The fulfillment order specified in the cancelation request.
     */
    public function selectFulfillmentOrder(?ShopifyFulfillmentOrderSubmitCancellationRequestPayloadFulfillmentOrderArgumentsObject $argsObject = null): ShopifyFulfillmentOrderQueryObject
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
    public function selectUserErrors(?ShopifyFulfillmentOrderSubmitCancellationRequestPayloadUserErrorsArgumentsObject $argsObject = null): ShopifyUserErrorQueryObject
    {
        $object = new ShopifyUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
