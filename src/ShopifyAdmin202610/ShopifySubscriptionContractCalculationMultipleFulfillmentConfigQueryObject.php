<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * The multiple fulfillment configuration of a subscription delivery policy: how many fulfillments occur in each billing cycle, and the cadence between them.
 */
class ShopifySubscriptionContractCalculationMultipleFulfillmentConfigQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionContractCalculationMultipleFulfillmentConfig";

    /**
     * The cadence for calculating fulfillment dates within each billing cycle.
     */
    public function selectCadence(?ShopifySubscriptionContractCalculationMultipleFulfillmentConfigCadenceArgumentsObject $argsObject = null): ShopifySubscriptionContractCalculationCadenceQueryObject
    {
        $object = new ShopifySubscriptionContractCalculationCadenceQueryObject("cadence");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The number of fulfillments per billing cycle.
     */
    public function selectNumberOfFulfillments(): static
    {
        $this->selectField("numberOfFulfillments");

        return $this;
    }
}
