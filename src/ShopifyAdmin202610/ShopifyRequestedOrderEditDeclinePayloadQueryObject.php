<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `requestedOrderEditDecline` mutation.
 */
class ShopifyRequestedOrderEditDeclinePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "RequestedOrderEditDeclinePayload";

    /**
     * The declined requested order edit.
     */
    public function selectRequestedOrderEdit(?ShopifyRequestedOrderEditDeclinePayloadRequestedOrderEditArgumentsObject $argsObject = null): ShopifyRequestedOrderEditQueryObject
    {
        $object = new ShopifyRequestedOrderEditQueryObject("requestedOrderEdit");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyRequestedOrderEditDeclinePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyRequestedOrderEditDeclineUserErrorQueryObject
    {
        $object = new ShopifyRequestedOrderEditDeclineUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
