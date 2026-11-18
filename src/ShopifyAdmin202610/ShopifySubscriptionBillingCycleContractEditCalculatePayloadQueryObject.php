<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `subscriptionBillingCycleContractEditCalculate` mutation.
 */
class ShopifySubscriptionBillingCycleContractEditCalculatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionBillingCycleContractEditCalculatePayload";

    /**
     * The result of the subscription contract calculation operation.
     */
    public function selectSubscriptionContractCalculation(?ShopifySubscriptionBillingCycleContractEditCalculatePayloadSubscriptionContractCalculationArgumentsObject $argsObject = null): ShopifySubscriptionContractCalculationUnionObject
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
    public function selectUserErrors(?ShopifySubscriptionBillingCycleContractEditCalculatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifySubscriptionBillingCycleContractEditCalculateUserErrorQueryObject
    {
        $object = new ShopifySubscriptionBillingCycleContractEditCalculateUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
