<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `commentApprove` mutation.
 */
class ShopifyCommentApprovePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "CommentApprovePayload";

    /**
     * The comment that was approved.
     */
    public function selectComment(?ShopifyCommentApprovePayloadCommentArgumentsObject $argsObject = null): ShopifyCommentQueryObject
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
    public function selectUserErrors(?ShopifyCommentApprovePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyCommentApproveUserErrorQueryObject
    {
        $object = new ShopifyCommentApproveUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
