<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `pubSubServerPixelUpdate` mutation.
 */
class ShopifyPubSubServerPixelUpdatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "PubSubServerPixelUpdatePayload";

    /**
     * The server pixel as configured by the mutation.
     */
    public function selectServerPixel(?ShopifyPubSubServerPixelUpdatePayloadServerPixelArgumentsObject $argsObject = null): ShopifyServerPixelQueryObject
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
    public function selectUserErrors(?ShopifyPubSubServerPixelUpdatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyErrorsServerPixelUserErrorQueryObject
    {
        $object = new ShopifyErrorsServerPixelUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
