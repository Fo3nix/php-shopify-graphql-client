<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `channelDelete` mutation.
 */
class ShopifyChannelDeletePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "ChannelDeletePayload";

    /**
     * The ID of the deleted channel.
     */
    public function selectDeletedId(): static
    {
        $this->selectField("deletedId");

        return $this;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyChannelDeletePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyChannelDeleteUserErrorQueryObject
    {
        $object = new ShopifyChannelDeleteUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
