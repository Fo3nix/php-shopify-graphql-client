<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return type for `subscriptionContractCalculationCommit` mutation.
 */
class ShopifySubscriptionContractCalculationCommitPayloadQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionContractCalculationCommitPayload";

    /**
     * The contract produced by committing the calculation. A create or update returns a SubscriptionContract; a billing cycle edit returns a SubscriptionBillingCycleEditedContract.
     */
    public function selectContract(?ShopifySubscriptionContractCalculationCommitPayloadContractArgumentsObject $argsObject = null): ShopifySubscriptionCommittedContractUnionObject
    {
        $object = new ShopifySubscriptionCommittedContractUnionObject("contract");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The list of errors that occurred from executing the mutation.
     */
    public function selectUserErrors(?ShopifySubscriptionContractCalculationCommitPayloadUserErrorsArgumentsObject $argsObject = null): ShopifySubscriptionContractCalculationCommitUserErrorQueryObject
    {
        $object = new ShopifySubscriptionContractCalculationCommitUserErrorQueryObject("userErrors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
