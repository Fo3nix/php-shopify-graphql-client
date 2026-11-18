<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `subscriptionDraftDiscountUpdate` mutation.
 */
class ShopifySubscriptionDraftDiscountUpdatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionDraftDiscountUpdatePayload";

    /**
     * The updated Subscription Discount.
     */
    public function selectDiscountUpdated(?ShopifySubscriptionDraftDiscountUpdatePayloadDiscountUpdatedArgumentsObject $argsObject = null): ShopifySubscriptionManualDiscountQueryObject
    {
        $object = new ShopifySubscriptionManualDiscountQueryObject("discountUpdated");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The Subscription Contract draft object.
     */
    public function selectDraft(?ShopifySubscriptionDraftDiscountUpdatePayloadDraftArgumentsObject $argsObject = null): ShopifySubscriptionDraftQueryObject
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
    public function selectUserErrors(?ShopifySubscriptionDraftDiscountUpdatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifySubscriptionDraftUserErrorQueryObject
    {
        $object = new ShopifySubscriptionDraftUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
