<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * A subscription contract calculation that has failed.
 */
class ShopifySubscriptionContractCalculationFailureQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionContractCalculationFailure";

    /**
     * The errors that caused the calculation to fail.
     */
    public function selectErrors(?ShopifySubscriptionContractCalculationFailureErrorsArgumentsObject $argsObject = null): ShopifySubscriptionContractCalculationDiagnosticQueryObject
    {
        $object = new ShopifySubscriptionContractCalculationDiagnosticQueryObject("errors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The ID of the contract calculation.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }
}
