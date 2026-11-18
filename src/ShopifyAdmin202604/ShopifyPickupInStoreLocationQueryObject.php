<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * A location for in-store pickup.
 */
class ShopifyPickupInStoreLocationQueryObject extends QueryObject
{
    const OBJECT_NAME = "PickupInStoreLocation";

    /**
     * The code of the pickup location.
     */
    public function selectCode(): static
    {
        $this->selectField("code");

        return $this;
    }

    /**
     * Distance from the buyer to the pickup location.
     */
    public function selectDistanceFromBuyer(?ShopifyPickupInStoreLocationDistanceFromBuyerArgumentsObject $argsObject = null): ShopifyDistanceQueryObject
    {
        $object = new ShopifyDistanceQueryObject("distanceFromBuyer");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * A unique identifier for this pickup location.
     */
    public function selectHandle(): static
    {
        $this->selectField("handle");

        return $this;
    }

    /**
     * Pickup instructions.
     */
    public function selectInstructions(): static
    {
        $this->selectField("instructions");

        return $this;
    }

    /**
     * The location ID of the pickup location.
     */
    public function selectLocationId(): static
    {
        $this->selectField("locationId");

        return $this;
    }

    /**
     * The source of the pickup location.
     */
    public function selectSource(): static
    {
        $this->selectField("source");

        return $this;
    }

    /**
     * Title of the pickup location.
     */
    public function selectTitle(): static
    {
        $this->selectField("title");

        return $this;
    }
}
