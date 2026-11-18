<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * A rate group for a value-based shipping option.
 *
 * Contains rates that define price tiers based on cart value.
 */
class ShopifyDeliveryValueBasedRateGroupQueryObject extends QueryObject
{
    const OBJECT_NAME = "DeliveryValueBasedRateGroup";

    /**
     * Conditions that limit this rate group to specific collections or origin locations.
     */
    public function selectConditions(?ShopifyDeliveryValueBasedRateGroupConditionsArgumentsObject $argsObject = null): ShopifyDeliveryRateGroupConditionsQueryObject
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
     * The value-based rates in this rate group.
     */
    public function selectRates(?ShopifyDeliveryValueBasedRateGroupRatesArgumentsObject $argsObject = null): ShopifyDeliveryValueBasedRateConnectionQueryObject
    {
        $object = new ShopifyDeliveryValueBasedRateConnectionQueryObject("rates");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
