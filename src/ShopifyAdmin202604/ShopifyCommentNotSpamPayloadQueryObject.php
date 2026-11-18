<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `commentNotSpam` mutation.
 */
class ShopifyCommentNotSpamPayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "CommentNotSpamPayload";

    /**
     * The comment that was marked as not spam.
     */
    public function selectComment(?ShopifyCommentNotSpamPayloadCommentArgumentsObject $argsObject = null): ShopifyCommentQueryObject
    {
        $object = new ShopifyCommentQueryObject("comment");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyCommentNotSpamPayloadUserErrorsArgumentsObject $argsObject = null): ShopifyCommentNotSpamUserErrorQueryObject
    {
        $object = new ShopifyCommentNotSpamUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
