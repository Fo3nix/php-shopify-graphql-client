<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `commentSpam` mutation.
 */
class ShopifyCommentSpamPayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "CommentSpamPayload";

    /**
     * The comment that was marked as spam.
     */
    public function selectComment(?ShopifyCommentSpamPayloadCommentArgumentsObject $argsObject = null): ShopifyCommentQueryObject
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
    public function selectUserErrors(?ShopifyCommentSpamPayloadUserErrorsArgumentsObject $argsObject = null): ShopifyCommentSpamUserErrorQueryObject
    {
        $object = new ShopifyCommentSpamUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
