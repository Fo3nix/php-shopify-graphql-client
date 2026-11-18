<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * A rate group for a weight-based shipping option.
 *
 * Contains rates that define price tiers based on package weight.
 */
class ShopifyDeliveryWeightBasedRateGroupQueryObject extends QueryObject
{
    const OBJECT_NAME = "DeliveryWeightBasedRateGroup";

    /**
     * Conditions that limit this rate group to specific collections or origin locations.
     */
    public function selectConditions(?ShopifyDeliveryWeightBasedRateGroupConditionsArgumentsObject $argsObject = null): ShopifyDeliveryRateGroupConditionsQueryObject
    {
        $object = new ShopifyDeliveryRateGroupConditionsQueryObject("conditions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * A globally unique ID.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }

    /**
     * The weight-based rates in this rate group.
     */
    public function selectRates(?ShopifyDeliveryWeightBasedRateGroupRatesArgumentsObject $argsObject = null): ShopifyDeliveryWeightBasedRateConnectionQueryObject
    {
        $object = new ShopifyDeliveryWeightBasedRateConnectionQueryObject("rates");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
