<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `subscriptionDraftDiscountRemove` mutation.
 */
class ShopifySubscriptionDraftDiscountRemovePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionDraftDiscountRemovePayload";

    /**
     * The removed subscription draft discount.
     */
    public function selectDiscountRemoved(?ShopifySubscriptionDraftDiscountRemovePayloadDiscountRemovedArgumentsObject $argsObject = null): ShopifySubscriptionDiscountUnionObject
    {
        $object = new ShopifySubscriptionDiscountUnionObject("discountRemoved");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The subscription contract draft object.
     */
    public function selectDraft(?ShopifySubscriptionDraftDiscountRemovePayloadDraftArgumentsObject $argsObject = null): ShopifySubscriptionDraftQueryObject
    {
        $object = new ShopifySubscriptionDraftQueryObject("draft");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifySubscriptionDraftDiscountRemovePayloadUserErrorsArgumentsObject $argsObject = null): ShopifySubscriptionDraftUserErrorQueryObject
    {
        $object = new ShopifySubscriptionDraftUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
