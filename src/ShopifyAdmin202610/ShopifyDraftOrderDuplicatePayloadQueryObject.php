<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `draftOrderDuplicate` mutation.
 */
class ShopifyDraftOrderDuplicatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "DraftOrderDuplicatePayload";

    /**
     * The newly duplicated draft order.
     */
    public function selectDraftOrder(?ShopifyDraftOrderDuplicatePayloadDraftOrderArgumentsObject $argsObject = null): ShopifyDraftOrderQueryObject
    {
        $object = new ShopifyDraftOrderQueryObject("draftOrder");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyDraftOrderDuplicatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyUserErrorQueryObject
    {
        $object = new ShopifyUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
