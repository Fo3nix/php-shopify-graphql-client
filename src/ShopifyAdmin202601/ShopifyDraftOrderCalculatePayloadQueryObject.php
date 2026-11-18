<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `draftOrderCalculate` mutation.
 */
class ShopifyDraftOrderCalculatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "DraftOrderCalculatePayload";

    /**
     * The calculated properties for a draft order.
     */
    public function selectCalculatedDraftOrder(?ShopifyDraftOrderCalculatePayloadCalculatedDraftOrderArgumentsObject $argsObject = null): ShopifyCalculatedDraftOrderQueryObject
    {
        $object = new ShopifyCalculatedDraftOrderQueryObject("calculatedDraftOrder");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifyDraftOrderCalculatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifyUserErrorQueryObject
    {
        $object = new ShopifyUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
