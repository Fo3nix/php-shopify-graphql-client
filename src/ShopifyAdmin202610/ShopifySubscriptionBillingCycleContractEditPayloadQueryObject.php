<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `subscriptionBillingCycleContractEdit` mutation.
 */
class ShopifySubscriptionBillingCycleContractEditPayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionBillingCycleContractEditPayload";

    /**
     * The draft subscription contract object.
     */
    public function selectDraft(?ShopifySubscriptionBillingCycleContractEditPayloadDraftArgumentsObject $argsObject = null): ShopifySubscriptionDraftQueryObject
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
    public function selectUserErrors(?ShopifySubscriptionBillingCycleContractEditPayloadUserErrorsArgumentsObject $argsObject = null): ShopifySubscriptionDraftUserErrorQueryObject
    {
        $object = new ShopifySubscriptionDraftUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
