<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `channelCreate` mutation.
 */
class ShopifyChannelCreatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "ChannelCreatePayload";

    /**
     * The channel that was created.
     */
    public function selectChannel(?ShopifyChannelCreatePayloadChannelArgumentsObject $argsObject = null): ShopifyChannelQueryObject
    {
        $object = new ShopifyChannelQueryObject("channel");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyChannelCreatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyChannelCreateUserErrorQueryObject
    {
        $object = new ShopifyChannelCreateUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
