<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `articleDelete` mutation.
 */
class ShopifyArticleDeletePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "ArticleDeletePayload";

    /**
     * The ID of the deleted article.
     */
    public function selectDeletedArticleId(): static
    {
        $this->selectField("deletedArticleId");

        return $this;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyArticleDeletePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyArticleDeleteUserErrorQueryObject
    {
        $object = new ShopifyArticleDeleteUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
