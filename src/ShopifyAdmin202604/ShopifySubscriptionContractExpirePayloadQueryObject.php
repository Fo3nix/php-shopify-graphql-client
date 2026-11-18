<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `subscriptionContractExpire` mutation.
 */
class ShopifySubscriptionContractExpirePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionContractExpirePayload";

    /**
     * The new Subscription Contract object.
     */
    public function selectContract(?ShopifySubscriptionContractExpirePayloadContractArgumentsObject $argsObject = null): ShopifySubscriptionContractQueryObject
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
    public function selectUserErrors(?ShopifySubscriptionContractExpirePayloadUserErrorsArgumentsObject $argsObject = null): ShopifySubscriptionContractStatusUpdateUserErrorQueryObject
    {
        $object = new ShopifySubscriptionContractStatusUpdateUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
