<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `commentDelete` mutation.
 */
class ShopifyCommentDeletePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "CommentDeletePayload";

    /**
     * The ID of the comment that was deleted.
     */
    public function selectDeletedCommentId(): static
    {
        $this->selectField("deletedCommentId");

        return $this;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyCommentDeletePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyCommentDeleteUserErrorQueryObject
    {
        $object = new ShopifyCommentDeleteUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
