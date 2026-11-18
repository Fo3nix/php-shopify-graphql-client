<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `fulfillmentCreate` mutation.
 */
class ShopifyFulfillmentCreatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "FulfillmentCreatePayload";

    /**
     * The created fulfillment.
     */
    public function selectFulfillment(?ShopifyFulfillmentCreatePayloadFulfillmentArgumentsObject $argsObject = null): ShopifyFulfillmentQueryObject
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
    public function selectUserErrors(?ShopifyFulfillmentCreatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyUserErrorQueryObject
    {
        $object = new ShopifyUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
