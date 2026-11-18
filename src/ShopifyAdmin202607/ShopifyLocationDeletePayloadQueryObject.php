<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `locationDelete` mutation.
 */
class ShopifyLocationDeletePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "LocationDeletePayload";

    /**
     * The ID of the location that was deleted.
     */
    public function selectDeletedLocationId(): static
    {
        $this->selectField("deletedLocationId");

        return $this;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectLocationDeleteUserErrors(?ShopifyLocationDeletePayloadLocationDeleteUserErrorsArgumentsObject $argsObject = null): ShopifyLocationDeleteUserErrorQueryObject
    {
        $object = new ShopifyLocationDeleteUserErrorQueryObject("locationDeleteUserErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
