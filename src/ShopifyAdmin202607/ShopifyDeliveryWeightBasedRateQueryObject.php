<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * A weight-based shipping rate.
 *
 * Weight-based rates charge different prices depending on package weight, which can
 * include packaging weight in addition to item weight, and may include optional
 * transit time estimates.
 */
class ShopifyDeliveryWeightBasedRateQueryObject extends QueryObject
{
    const OBJECT_NAME = "DeliveryWeightBasedRate";

    /**
     * A globally unique ID.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }

    /**
     * The maximum package weight for this rate tier.
     */
    public function selectMaxWeight(?ShopifyDeliveryWeightBasedRateMaxWeightArgumentsObject $argsObject = null): ShopifyWeightQueryObject
    {
        $object = new ShopifyWeightQueryObject("maxWeight");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The minimum package weight for this rate tier.
     */
    public function selectMinWeight(?ShopifyDeliveryWeightBasedRateMinWeightArgumentsObject $argsObject = null): ShopifyWeightQueryObject
    {
        $object = new ShopifyWeightQueryObject("minWeight");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The price charged for this rate.
     */
    public function selectPrice(?ShopifyDeliveryWeightBasedRatePriceArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
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
