<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * A fixed-price shipping rate.
 *
 * Flat rates charge the same price regardless of cart value or weight,
 * and may include optional transit time estimates.
 */
class ShopifyDeliveryFlatRateQueryObject extends QueryObject
{
    const OBJECT_NAME = "DeliveryFlatRate";

    /**
     * A globally unique ID.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }

    /**
     * The fixed price charged for this rate.
     */
    public function selectPrice(?ShopifyDeliveryFlatRatePriceArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
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
