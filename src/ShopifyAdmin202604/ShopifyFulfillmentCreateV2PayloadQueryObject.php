<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `fulfillmentCreateV2` mutation.
 */
class ShopifyFulfillmentCreateV2PayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "FulfillmentCreateV2Payload";

    /**
     * The created fulfillment.
     */
    public function selectFulfillment(?ShopifyFulfillmentCreateV2PayloadFulfillmentArgumentsObject $argsObject = null): ShopifyFulfillmentQueryObject
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
    public function selectUserErrors(?ShopifyFulfillmentCreateV2PayloadUserErrorsArgumentsObject $argsObject = null): ShopifyUserErrorQueryObject
    {
        $object = new ShopifyUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
