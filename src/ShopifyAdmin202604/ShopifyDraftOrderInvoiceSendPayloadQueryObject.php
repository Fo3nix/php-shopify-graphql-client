<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `draftOrderInvoiceSend` mutation.
 */
class ShopifyDraftOrderInvoiceSendPayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "DraftOrderInvoiceSendPayload";

    /**
     * The draft order an invoice email is sent for.
     */
    public function selectDraftOrder(?ShopifyDraftOrderInvoiceSendPayloadDraftOrderArgumentsObject $argsObject = null): ShopifyDraftOrderQueryObject
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
    public function selectUserErrors(?ShopifyDraftOrderInvoiceSendPayloadUserErrorsArgumentsObject $argsObject = null): ShopifyUserErrorQueryObject
    {
        $object = new ShopifyUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
