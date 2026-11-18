<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `locationActivate` mutation.
 */
class ShopifyLocationActivatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "LocationActivatePayload";

    /**
     * The location that was activated.
     */
    public function selectLocation(?ShopifyLocationActivatePayloadLocationArgumentsObject $argsObject = null): ShopifyLocationQueryObject
    {
        $object = new ShopifyLocationQueryObject("location");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectLocationActivateUserErrors(?ShopifyLocationActivatePayloadLocationActivateUserErrorsArgumentsObject $argsObject = null): ShopifyLocationActivateUserErrorQueryObject
    {
        $object = new ShopifyLocationActivateUserErrorQueryObject("locationActivateUserErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
