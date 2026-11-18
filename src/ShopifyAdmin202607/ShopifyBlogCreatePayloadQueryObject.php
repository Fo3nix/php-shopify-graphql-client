<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `blogCreate` mutation.
 */
class ShopifyBlogCreatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "BlogCreatePayload";

    /**
     * The blog that was created.
     */
    public function selectBlog(?ShopifyBlogCreatePayloadBlogArgumentsObject $argsObject = null): ShopifyBlogQueryObject
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
    public function selectUserErrors(?ShopifyBlogCreatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyBlogCreateUserErrorQueryObject
    {
        $object = new ShopifyBlogCreateUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
