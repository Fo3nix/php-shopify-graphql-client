<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `pageDelete` mutation.
 */
class ShopifyPageDeletePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "PageDeletePayload";

    /**
     * The ID of the deleted page.
     */
    public function selectDeletedPageId(): static
    {
        $this->selectField("deletedPageId");

        return $this;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyPageDeletePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyPageDeleteUserErrorQueryObject
    {
        $object = new ShopifyPageDeleteUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
