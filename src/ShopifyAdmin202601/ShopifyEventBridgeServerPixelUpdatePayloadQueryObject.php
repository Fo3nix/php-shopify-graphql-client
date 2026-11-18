<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `eventBridgeServerPixelUpdate` mutation.
 */
class ShopifyEventBridgeServerPixelUpdatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "EventBridgeServerPixelUpdatePayload";

    /**
     * The server pixel as configured by the mutation.
     */
    public function selectServerPixel(?ShopifyEventBridgeServerPixelUpdatePayloadServerPixelArgumentsObject $argsObject = null): ShopifyServerPixelQueryObject
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
    public function selectUserErrors(?ShopifyEventBridgeServerPixelUpdatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyErrorsServerPixelUserErrorQueryObject
    {
        $object = new ShopifyErrorsServerPixelUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
