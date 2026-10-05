<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifySubscriptionContractCalculationFailureQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionContractCalculationFailure";

    public function selectErrors(ShopifySubscriptionContractCalculationFailureErrorsArgumentsObject $argsObject = null)
    {
        $object = new ShopifySubscriptionContractCalculationDiagnosticQueryObject("errors");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }
}
