<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `draftOrderUpdate` mutation.
 */
class ShopifyDraftOrderUpdatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "DraftOrderUpdatePayload";

    /**
     * The updated draft order.
     */
    public function selectDraftOrder(?ShopifyDraftOrderUpdatePayloadDraftOrderArgumentsObject $argsObject = null): ShopifyDraftOrderQueryObject
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
    public function selectUserErrors(?ShopifyDraftOrderUpdatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyUserErrorQueryObject
    {
        $object = new ShopifyUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
