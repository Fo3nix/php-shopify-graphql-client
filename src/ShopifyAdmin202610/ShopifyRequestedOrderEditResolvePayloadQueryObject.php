<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `requestedOrderEditResolve` mutation.
 */
class ShopifyRequestedOrderEditResolvePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "RequestedOrderEditResolvePayload";

    /**
     * The resolved requested order edit.
     */
    public function selectRequestedOrderEdit(?ShopifyRequestedOrderEditResolvePayloadRequestedOrderEditArgumentsObject $argsObject = null): ShopifyRequestedOrderEditQueryObject
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
    public function selectUserErrors(?ShopifyRequestedOrderEditResolvePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyRequestedOrderEditResolveUserErrorQueryObject
    {
        $object = new ShopifyRequestedOrderEditResolveUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
