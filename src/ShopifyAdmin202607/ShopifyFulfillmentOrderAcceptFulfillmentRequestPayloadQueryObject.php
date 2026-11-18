<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `fulfillmentOrderAcceptFulfillmentRequest` mutation.
 */
class ShopifyFulfillmentOrderAcceptFulfillmentRequestPayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "FulfillmentOrderAcceptFulfillmentRequestPayload";

    /**
     * The fulfillment order whose fulfillment request was accepted.
     */
    public function selectFulfillmentOrder(?ShopifyFulfillmentOrderAcceptFulfillmentRequestPayloadFulfillmentOrderArgumentsObject $argsObject = null): ShopifyFulfillmentOrderQueryObject
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
    public function selectUserErrors(?ShopifyFulfillmentOrderAcceptFulfillmentRequestPayloadUserErrorsArgumentsObject $argsObject = null): ShopifyUserErrorQueryObject
    {
        $object = new ShopifyUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
