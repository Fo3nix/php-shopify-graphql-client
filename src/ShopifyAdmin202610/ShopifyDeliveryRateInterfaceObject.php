<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\InterfaceObject;

/**
 * A shipping rate with a price and optional transit time.
 *
 * Rates define the price charged to buyers for a shipping option.
 */
class ShopifyDeliveryRateInterfaceObject extends InterfaceObject
{
    const OBJECT_NAME = "DeliveryRate";

    /**
     * The price charged for this rate.
     */
    public function selectPrice(?ShopifyDeliveryRatePriceArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("price");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The maximum transit time estimate in seconds.
     */
    public function selectTransitTimeMaxSeconds(): static
    {
        $this->selectField("transitTimeMaxSeconds");

        return $this;
    }

    /**
     * The minimum transit time estimate in seconds.
     */
    public function selectTransitTimeMinSeconds(): static
    {
        $this->selectField("transitTimeMinSeconds");

        return $this;
    }

    public function onDeliveryFlatRate(): ShopifyDeliveryFlatRateQueryObject
    {
        $object = new ShopifyDeliveryFlatRateQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onDeliveryValueBasedRate(): ShopifyDeliveryValueBasedRateQueryObject
    {
        $object = new ShopifyDeliveryValueBasedRateQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onDeliveryWeightBasedRate(): ShopifyDeliveryWeightBasedRateQueryObject
    {
        $object = new ShopifyDeliveryWeightBasedRateQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
