<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `serverPixelDelete` mutation.
 */
class ShopifyServerPixelDeletePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "ServerPixelDeletePayload";

    /**
     * The ID of the server pixel that was deleted, if one was deleted.
     */
    public function selectDeletedServerPixelId(): static
    {
        $this->selectField("deletedServerPixelId");

        return $this;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyServerPixelDeletePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyErrorsServerPixelUserErrorQueryObject
    {
        $object = new ShopifyErrorsServerPixelUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
