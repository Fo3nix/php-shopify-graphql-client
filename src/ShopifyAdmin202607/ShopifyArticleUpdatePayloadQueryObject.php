<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `articleUpdate` mutation.
 */
class ShopifyArticleUpdatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "ArticleUpdatePayload";

    /**
     * The article that was updated.
     */
    public function selectArticle(?ShopifyArticleUpdatePayloadArticleArgumentsObject $argsObject = null): ShopifyArticleQueryObject
    {
        $object = new ShopifyArticleQueryObject("article");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyArticleUpdatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyArticleUpdateUserErrorQueryObject
    {
        $object = new ShopifyArticleUpdateUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
