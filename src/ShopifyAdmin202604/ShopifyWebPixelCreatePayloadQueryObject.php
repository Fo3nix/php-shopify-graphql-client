<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `webPixelCreate` mutation.
 */
class ShopifyWebPixelCreatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "WebPixelCreatePayload";

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyWebPixelCreatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyErrorsWebPixelUserErrorQueryObject
    {
        $object = new ShopifyErrorsWebPixelUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The created web pixel settings.
     */
    public function selectWebPixel(?ShopifyWebPixelCreatePayloadWebPixelArgumentsObject $argsObject = null): ShopifyWebPixelQueryObject
    {
        $object = new ShopifyWebPixelQueryObject("webPixel");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
