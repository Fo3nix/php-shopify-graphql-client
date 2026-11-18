<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `draftOrderCreateFromOrder` mutation.
 */
class ShopifyDraftOrderCreateFromOrderPayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "DraftOrderCreateFromOrderPayload";

    /**
     * The created draft order.
     */
    public function selectDraftOrder(?ShopifyDraftOrderCreateFromOrderPayloadDraftOrderArgumentsObject $argsObject = null): ShopifyDraftOrderQueryObject
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
    public function selectUserErrors(?ShopifyDraftOrderCreateFromOrderPayloadUserErrorsArgumentsObject $argsObject = null): ShopifyUserErrorQueryObject
    {
        $object = new ShopifyUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
