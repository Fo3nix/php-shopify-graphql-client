<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `subscriptionContractActivate` mutation.
 */
class ShopifySubscriptionContractActivatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionContractActivatePayload";

    /**
     * The new Subscription Contract object.
     */
    public function selectContract(?ShopifySubscriptionContractActivatePayloadContractArgumentsObject $argsObject = null): ShopifySubscriptionContractQueryObject
    {
        $object = new ShopifySubscriptionContractQueryObject("contract");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifySubscriptionContractActivatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifySubscriptionContractStatusUpdateUserErrorQueryObject
    {
        $object = new ShopifySubscriptionContractStatusUpdateUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
