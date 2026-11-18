<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `articleCreate` mutation.
 */
class ShopifyArticleCreatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "ArticleCreatePayload";

    /**
     * The article that was created.
     */
    public function selectArticle(?ShopifyArticleCreatePayloadArticleArgumentsObject $argsObject = null): ShopifyArticleQueryObject
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
    public function selectUserErrors(?ShopifyArticleCreatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyArticleCreateUserErrorQueryObject
    {
        $object = new ShopifyArticleCreateUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
