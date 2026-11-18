<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `urlRedirectDelete` mutation.
 */
class ShopifyUrlRedirectDeletePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "UrlRedirectDeletePayload";

    /**
     * The ID of the deleted redirect.
     */
    public function selectDeletedUrlRedirectId(): static
    {
        $this->selectField("deletedUrlRedirectId");

        return $this;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyUrlRedirectDeletePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyUrlRedirectUserErrorQueryObject
    {
        $object = new ShopifyUrlRedirectUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
