<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * A value-based shipping rate.
 *
 * Defines price, optional transit time estimates, and the cart-value range for this rate.
 */
class ShopifyDeliveryValueBasedRateQueryObject extends QueryObject
{
    const OBJECT_NAME = "DeliveryValueBasedRate";

    /**
     * A globally unique ID.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }

    /**
     * The maximum cart value (inclusive) for this rate. Null means no upper limit.
     */
    public function selectMaxValue(?ShopifyDeliveryValueBasedRateMaxValueArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("maxValue");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The minimum cart value (inclusive) for this rate.
     */
    public function selectMinValue(?ShopifyDeliveryValueBasedRateMinValueArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("minValue");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The price charged for this rate.
     */
    public function selectPrice(?ShopifyDeliveryValueBasedRatePriceArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
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
}
