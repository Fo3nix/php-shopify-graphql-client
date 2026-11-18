<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `webPixelUpdate` mutation.
 */
class ShopifyWebPixelUpdatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "WebPixelUpdatePayload";

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyWebPixelUpdatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyErrorsWebPixelUserErrorQueryObject
    {
        $object = new ShopifyErrorsWebPixelUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The updated web pixel settings.
     */
    public function selectWebPixel(?ShopifyWebPixelUpdatePayloadWebPixelArgumentsObject $argsObject = null): ShopifyWebPixelQueryObject
    {
        $object = new ShopifyWebPixelQueryObject("webPixel");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
