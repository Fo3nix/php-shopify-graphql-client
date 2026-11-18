<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `draftOrderBulkRemoveTags` mutation.
 */
class ShopifyDraftOrderBulkRemoveTagsPayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "DraftOrderBulkRemoveTagsPayload";

    /**
     * The asynchronous job for removing tags from the draft orders.
     */
    public function selectJob(?ShopifyDraftOrderBulkRemoveTagsPayloadJobArgumentsObject $argsObject = null): ShopifyJobQueryObject
    {
        $object = new ShopifyJobQueryObject("job");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyDraftOrderBulkRemoveTagsPayloadUserErrorsArgumentsObject $argsObject = null): ShopifyUserErrorQueryObject
    {
        $object = new ShopifyUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
