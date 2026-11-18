<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `serverPixelCreate` mutation.
 */
class ShopifyServerPixelCreatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "ServerPixelCreatePayload";

    /**
     * The new server pixel.
     */
    public function selectServerPixel(?ShopifyServerPixelCreatePayloadServerPixelArgumentsObject $argsObject = null): ShopifyServerPixelQueryObject
    {
        $object = new ShopifyServerPixelQueryObject("serverPixel");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyServerPixelCreatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyErrorsServerPixelUserErrorQueryObject
    {
        $object = new ShopifyErrorsServerPixelUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
