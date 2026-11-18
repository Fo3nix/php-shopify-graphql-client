<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `fulfillmentTrackingInfoUpdateV2` mutation.
 */
class ShopifyFulfillmentTrackingInfoUpdateV2PayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "FulfillmentTrackingInfoUpdateV2Payload";

    /**
     * The updated fulfillment with tracking information.
     */
    public function selectFulfillment(?ShopifyFulfillmentTrackingInfoUpdateV2PayloadFulfillmentArgumentsObject $argsObject = null): ShopifyFulfillmentQueryObject
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
    public function selectUserErrors(?ShopifyFulfillmentTrackingInfoUpdateV2PayloadUserErrorsArgumentsObject $argsObject = null): ShopifyUserErrorQueryObject
    {
        $object = new ShopifyUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
