<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `requestedOrderEditCreate` mutation.
 */
class ShopifyRequestedOrderEditCreatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "RequestedOrderEditCreatePayload";

    /**
     * The created requested order edit.
     */
    public function selectRequestedOrderEdit(?ShopifyRequestedOrderEditCreatePayloadRequestedOrderEditArgumentsObject $argsObject = null): ShopifyRequestedOrderEditQueryObject
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
    public function selectUserErrors(?ShopifyRequestedOrderEditCreatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyRequestedOrderEditCreateUserErrorQueryObject
    {
        $object = new ShopifyRequestedOrderEditCreateUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
