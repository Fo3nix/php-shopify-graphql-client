<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `subscriptionContractCreateCalculate` mutation.
 */
class ShopifySubscriptionContractCreateCalculatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionContractCreateCalculatePayload";

    /**
     * The result of the subscription contract calculation operation.
     */
    public function selectSubscriptionContractCalculation(?ShopifySubscriptionContractCreateCalculatePayloadSubscriptionContractCalculationArgumentsObject $argsObject = null): ShopifySubscriptionContractCalculationUnionObject
    {
        $object = new ShopifySubscriptionContractCalculationUnionObject("subscriptionContractCalculation");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifySubscriptionContractCreateCalculatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifySubscriptionContractCreateCalculateUserErrorQueryObject
    {
        $object = new ShopifySubscriptionContractCreateCalculateUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
