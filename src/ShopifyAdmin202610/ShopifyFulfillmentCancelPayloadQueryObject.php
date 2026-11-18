<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `fulfillmentCancel` mutation.
 */
class ShopifyFulfillmentCancelPayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "FulfillmentCancelPayload";

    /**
     * The canceled fulfillment.
     */
    public function selectFulfillment(?ShopifyFulfillmentCancelPayloadFulfillmentArgumentsObject $argsObject = null): ShopifyFulfillmentQueryObject
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
    public function selectUserErrors(?ShopifyFulfillmentCancelPayloadUserErrorsArgumentsObject $argsObject = null): ShopifyUserErrorQueryObject
    {
        $object = new ShopifyUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
