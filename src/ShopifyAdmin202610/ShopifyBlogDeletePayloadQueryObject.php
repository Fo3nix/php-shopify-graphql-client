<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `blogDelete` mutation.
 */
class ShopifyBlogDeletePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "BlogDeletePayload";

    /**
     * The ID of the deleted blog.
     */
    public function selectDeletedBlogId(): static
    {
        $this->selectField("deletedBlogId");

        return $this;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyBlogDeletePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyBlogDeleteUserErrorQueryObject
    {
        $object = new ShopifyBlogDeleteUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
