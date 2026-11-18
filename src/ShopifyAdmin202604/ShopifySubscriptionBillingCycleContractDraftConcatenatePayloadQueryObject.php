<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `subscriptionBillingCycleContractDraftConcatenate` mutation.
 */
class ShopifySubscriptionBillingCycleContractDraftConcatenatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionBillingCycleContractDraftConcatenatePayload";

    /**
     * The Subscription Draft object.
     */
    public function selectDraft(?ShopifySubscriptionBillingCycleContractDraftConcatenatePayloadDraftArgumentsObject $argsObject = null): ShopifySubscriptionDraftQueryObject
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
    public function selectUserErrors(?ShopifySubscriptionBillingCycleContractDraftConcatenatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifySubscriptionDraftUserErrorQueryObject
    {
        $object = new ShopifySubscriptionDraftUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
