<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `subscriptionDraftDiscountCodeApply` mutation.
 */
class ShopifySubscriptionDraftDiscountCodeApplyPayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionDraftDiscountCodeApplyPayload";

    /**
     * The added subscription discount.
     */
    public function selectAppliedDiscount(?ShopifySubscriptionDraftDiscountCodeApplyPayloadAppliedDiscountArgumentsObject $argsObject = null): ShopifySubscriptionAppliedCodeDiscountQueryObject
    {
        $object = new ShopifySubscriptionAppliedCodeDiscountQueryObject("appliedDiscount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The subscription contract draft object.
     */
    public function selectDraft(?ShopifySubscriptionDraftDiscountCodeApplyPayloadDraftArgumentsObject $argsObject = null): ShopifySubscriptionDraftQueryObject
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
    public function selectUserErrors(?ShopifySubscriptionDraftDiscountCodeApplyPayloadUserErrorsArgumentsObject $argsObject = null): ShopifySubscriptionDraftUserErrorQueryObject
    {
        $object = new ShopifySubscriptionDraftUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
