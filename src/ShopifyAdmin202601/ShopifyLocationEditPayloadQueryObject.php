<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `locationEdit` mutation.
 */
class ShopifyLocationEditPayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "LocationEditPayload";

    /**
     * The location that was edited.
     */
    public function selectLocation(?ShopifyLocationEditPayloadLocationArgumentsObject $argsObject = null): ShopifyLocationQueryObject
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
    public function selectUserErrors(?ShopifyLocationEditPayloadUserErrorsArgumentsObject $argsObject = null): ShopifyLocationEditUserErrorQueryObject
    {
        $object = new ShopifyLocationEditUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
