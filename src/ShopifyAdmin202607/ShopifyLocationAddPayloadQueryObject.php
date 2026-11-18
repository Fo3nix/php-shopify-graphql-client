<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `locationAdd` mutation.
 */
class ShopifyLocationAddPayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "LocationAddPayload";

    /**
     * The location that was added.
     */
    public function selectLocation(?ShopifyLocationAddPayloadLocationArgumentsObject $argsObject = null): ShopifyLocationQueryObject
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
    public function selectUserErrors(?ShopifyLocationAddPayloadUserErrorsArgumentsObject $argsObject = null): ShopifyLocationAddUserErrorQueryObject
    {
        $object = new ShopifyLocationAddUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
