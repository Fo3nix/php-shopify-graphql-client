<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `fulfillmentOrderReleaseHold` mutation.
 */
class ShopifyFulfillmentOrderReleaseHoldPayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "FulfillmentOrderReleaseHoldPayload";

    /**
     * The fulfillment order on which the hold was released.
     */
    public function selectFulfillmentOrder(?ShopifyFulfillmentOrderReleaseHoldPayloadFulfillmentOrderArgumentsObject $argsObject = null): ShopifyFulfillmentOrderQueryObject
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
    public function selectUserErrors(?ShopifyFulfillmentOrderReleaseHoldPayloadUserErrorsArgumentsObject $argsObject = null): ShopifyFulfillmentOrderReleaseHoldUserErrorQueryObject
    {
        $object = new ShopifyFulfillmentOrderReleaseHoldUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
