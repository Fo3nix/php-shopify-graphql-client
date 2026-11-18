<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `channelUpdate` mutation.
 */
class ShopifyChannelUpdatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "ChannelUpdatePayload";

    /**
     * The channel that was updated.
     */
    public function selectChannel(?ShopifyChannelUpdatePayloadChannelArgumentsObject $argsObject = null): ShopifyChannelQueryObject
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
    public function selectUserErrors(?ShopifyChannelUpdatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyChannelUpdateUserErrorQueryObject
    {
        $object = new ShopifyChannelUpdateUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
