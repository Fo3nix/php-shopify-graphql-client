<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `subscriptionContractSetNextBillingDate` mutation.
 */
class ShopifySubscriptionContractSetNextBillingDatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionContractSetNextBillingDatePayload";

    /**
     * The updated Subscription Contract object.
     */
    public function selectContract(?ShopifySubscriptionContractSetNextBillingDatePayloadContractArgumentsObject $argsObject = null): ShopifySubscriptionContractQueryObject
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
    public function selectUserErrors(?ShopifySubscriptionContractSetNextBillingDatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifySubscriptionContractUserErrorQueryObject
    {
        $object = new ShopifySubscriptionContractUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
