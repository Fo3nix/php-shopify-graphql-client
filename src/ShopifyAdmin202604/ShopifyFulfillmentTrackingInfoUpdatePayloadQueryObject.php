<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `fulfillmentTrackingInfoUpdate` mutation.
 */
class ShopifyFulfillmentTrackingInfoUpdatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "FulfillmentTrackingInfoUpdatePayload";

    /**
     * The updated fulfillment with tracking information.
     */
    public function selectFulfillment(?ShopifyFulfillmentTrackingInfoUpdatePayloadFulfillmentArgumentsObject $argsObject = null): ShopifyFulfillmentQueryObject
    {
        $object = new ShopifyFulfillmentQueryObject("fulfillment");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyFulfillmentTrackingInfoUpdatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyUserErrorQueryObject
    {
        $object = new ShopifyUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
