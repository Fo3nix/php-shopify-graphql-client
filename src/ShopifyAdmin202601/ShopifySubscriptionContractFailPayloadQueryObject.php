<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `subscriptionContractFail` mutation.
 */
class ShopifySubscriptionContractFailPayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionContractFailPayload";

    /**
     * The new Subscription Contract object.
     */
    public function selectContract(?ShopifySubscriptionContractFailPayloadContractArgumentsObject $argsObject = null): ShopifySubscriptionContractQueryObject
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
    public function selectUserErrors(?ShopifySubscriptionContractFailPayloadUserErrorsArgumentsObject $argsObject = null): ShopifySubscriptionContractStatusUpdateUserErrorQueryObject
    {
        $object = new ShopifySubscriptionContractStatusUpdateUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
