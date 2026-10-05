<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifySubscriptionContractCalculationMultipleFulfillmentConfigQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionContractCalculationMultipleFulfillmentConfig";

    public function selectCadence(ShopifySubscriptionContractCalculationMultipleFulfillmentConfigCadenceArgumentsObject $argsObject = null)
    {
        $object = new ShopifySubscriptionContractCalculationCadenceQueryObject("cadence");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNumberOfFulfillments()
    {
        $this->selectField("numberOfFulfillments");

        return $this;
    }
}
