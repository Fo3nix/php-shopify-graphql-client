<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `subscriptionBillingCycleContractDraftCommit` mutation.
 */
class ShopifySubscriptionBillingCycleContractDraftCommitPayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionBillingCycleContractDraftCommitPayload";

    /**
     * The committed Subscription Billing Cycle Edited Contract object.
     */
    public function selectContract(?ShopifySubscriptionBillingCycleContractDraftCommitPayloadContractArgumentsObject $argsObject = null): ShopifySubscriptionBillingCycleEditedContractQueryObject
    {
        $object = new ShopifySubscriptionBillingCycleEditedContractQueryObject("contract");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifySubscriptionBillingCycleContractDraftCommitPayloadUserErrorsArgumentsObject $argsObject = null): ShopifySubscriptionDraftUserErrorQueryObject
    {
        $object = new ShopifySubscriptionDraftUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
