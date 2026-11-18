<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `fulfillmentEventCreate` mutation.
 */
class ShopifyFulfillmentEventCreatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "FulfillmentEventCreatePayload";

    /**
     * The created fulfillment event.
     */
    public function selectFulfillmentEvent(?ShopifyFulfillmentEventCreatePayloadFulfillmentEventArgumentsObject $argsObject = null): ShopifyFulfillmentEventQueryObject
    {
        $object = new ShopifyFulfillmentEventQueryObject("fulfillmentEvent");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyFulfillmentEventCreatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyUserErrorQueryObject
    {
        $object = new ShopifyUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
