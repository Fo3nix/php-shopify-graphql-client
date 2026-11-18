<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `blogUpdate` mutation.
 */
class ShopifyBlogUpdatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "BlogUpdatePayload";

    /**
     * The blog that was updated.
     */
    public function selectBlog(?ShopifyBlogUpdatePayloadBlogArgumentsObject $argsObject = null): ShopifyBlogQueryObject
    {
        $object = new ShopifyBlogQueryObject("blog");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyBlogUpdatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyBlogUpdateUserErrorQueryObject
    {
        $object = new ShopifyBlogUpdateUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
