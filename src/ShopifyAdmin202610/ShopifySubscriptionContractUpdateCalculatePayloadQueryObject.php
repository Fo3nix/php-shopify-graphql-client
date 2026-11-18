<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `subscriptionContractUpdateCalculate` mutation.
 */
class ShopifySubscriptionContractUpdateCalculatePayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionContractUpdateCalculatePayload";

    /**
     * The result of the subscription contract calculation operation.
     */
    public function selectSubscriptionContractCalculation(?ShopifySubscriptionContractUpdateCalculatePayloadSubscriptionContractCalculationArgumentsObject $argsObject = null): ShopifySubscriptionContractCalculationUnionObject
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
    public function selectUserErrors(?ShopifySubscriptionContractUpdateCalculatePayloadUserErrorsArgumentsObject $argsObject = null): ShopifySubscriptionContractUpdateCalculateUserErrorQueryObject
    {
        $object = new ShopifySubscriptionContractUpdateCalculateUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
