<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `webPixelDelete` mutation.
 */
class ShopifyWebPixelDeletePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "WebPixelDeletePayload";

    /**
     * The ID of the web pixel settings that was deleted.
     */
    public function selectDeletedWebPixelId(): static
    {
        $this->selectField("deletedWebPixelId");

        return $this;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyWebPixelDeletePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyErrorsWebPixelUserErrorQueryObject
    {
        $object = new ShopifyErrorsWebPixelUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
