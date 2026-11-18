<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `locationDeactivate` mutation.
 */
class ShopifyLocationDeactivatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "LocationDeactivatePayload";

    /**
     * The location that was deactivated.
     */
    public function selectLocation(?ShopifyLocationDeactivatePayloadLocationArgumentsObject $argsObject = null): ShopifyLocationQueryObject
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
    public function selectLocationDeactivateUserErrors(?ShopifyLocationDeactivatePayloadLocationDeactivateUserErrorsArgumentsObject $argsObject = null): ShopifyLocationDeactivateUserErrorQueryObject
    {
        $object = new ShopifyLocationDeactivateUserErrorQueryObject("locationDeactivateUserErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
