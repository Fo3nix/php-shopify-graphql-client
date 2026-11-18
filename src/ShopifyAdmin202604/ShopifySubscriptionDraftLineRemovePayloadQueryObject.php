<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `subscriptionDraftLineRemove` mutation.
 */
class ShopifySubscriptionDraftLineRemovePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionDraftLineRemovePayload";

    /**
     * The list of updated subscription discounts impacted by the removed line.
     */
    public function selectDiscountsUpdated(?ShopifySubscriptionDraftLineRemovePayloadDiscountsUpdatedArgumentsObject $argsObject = null): ShopifySubscriptionManualDiscountQueryObject
    {
        $object = new ShopifySubscriptionManualDiscountQueryObject("discountsUpdated");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The Subscription Contract draft object.
     */
    public function selectDraft(?ShopifySubscriptionDraftLineRemovePayloadDraftArgumentsObject $argsObject = null): ShopifySubscriptionDraftQueryObject
    {
        $object = new ShopifySubscriptionDraftQueryObject("draft");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The removed Subscription Line.
     */
    public function selectLineRemoved(?ShopifySubscriptionDraftLineRemovePayloadLineRemovedArgumentsObject $argsObject = null): ShopifySubscriptionLineQueryObject
    {
        $object = new ShopifySubscriptionLineQueryObject("lineRemoved");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifySubscriptionDraftLineRemovePayloadUserErrorsArgumentsObject $argsObject = null): ShopifySubscriptionDraftUserErrorQueryObject
    {
        $object = new ShopifySubscriptionDraftUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
