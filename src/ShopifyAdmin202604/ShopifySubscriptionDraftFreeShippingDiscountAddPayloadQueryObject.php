<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `subscriptionDraftFreeShippingDiscountAdd` mutation.
 */
class ShopifySubscriptionDraftFreeShippingDiscountAddPayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionDraftFreeShippingDiscountAddPayload";

    /**
     * The added subscription free shipping discount.
     */
    public function selectDiscountAdded(?ShopifySubscriptionDraftFreeShippingDiscountAddPayloadDiscountAddedArgumentsObject $argsObject = null): ShopifySubscriptionManualDiscountQueryObject
    {
        $object = new ShopifySubscriptionManualDiscountQueryObject("discountAdded");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The subscription contract draft object.
     */
    public function selectDraft(?ShopifySubscriptionDraftFreeShippingDiscountAddPayloadDraftArgumentsObject $argsObject = null): ShopifySubscriptionDraftQueryObject
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
    public function selectUserErrors(?ShopifySubscriptionDraftFreeShippingDiscountAddPayloadUserErrorsArgumentsObject $argsObject = null): ShopifySubscriptionDraftUserErrorQueryObject
    {
        $object = new ShopifySubscriptionDraftUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
