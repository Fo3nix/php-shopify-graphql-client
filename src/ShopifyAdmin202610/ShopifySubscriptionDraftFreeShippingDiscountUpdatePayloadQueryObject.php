<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `subscriptionDraftFreeShippingDiscountUpdate` mutation.
 */
class ShopifySubscriptionDraftFreeShippingDiscountUpdatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionDraftFreeShippingDiscountUpdatePayload";

    /**
     * The updated Subscription Discount.
     */
    public function selectDiscountUpdated(?ShopifySubscriptionDraftFreeShippingDiscountUpdatePayloadDiscountUpdatedArgumentsObject $argsObject = null): ShopifySubscriptionManualDiscountQueryObject
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
    public function selectDraft(?ShopifySubscriptionDraftFreeShippingDiscountUpdatePayloadDraftArgumentsObject $argsObject = null): ShopifySubscriptionDraftQueryObject
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
    public function selectUserErrors(?ShopifySubscriptionDraftFreeShippingDiscountUpdatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifySubscriptionDraftUserErrorQueryObject
    {
        $object = new ShopifySubscriptionDraftUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
