<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `mobilePlatformApplicationDelete` mutation.
 */
class ShopifyMobilePlatformApplicationDeletePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "MobilePlatformApplicationDeletePayload";

    /**
     * The ID of the mobile platform application that was just deleted.
     */
    public function selectDeletedMobilePlatformApplicationId(): static
    {
        $this->selectField("deletedMobilePlatformApplicationId");

        return $this;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyMobilePlatformApplicationDeletePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyMobilePlatformApplicationUserErrorQueryObject
    {
        $object = new ShopifyMobilePlatformApplicationUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
