<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\InterfaceObject;

/**
 * A additional cost, charged by the merchant, on an order. Examples include return shipping fees and restocking fees.
 */
class ShopifyFeeInterfaceObject extends InterfaceObject
{
    const OBJECT_NAME = "Fee";

    /**
     * The unique ID for the Fee.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }

    public function onRestockingFee(): ShopifyRestockingFeeQueryObject
    {
        $object = new ShopifyRestockingFeeQueryObject();
        $this->addPossibleType($object);

        return $object;
    }

    public function onReturnShippingFee(): ShopifyReturnShippingFeeQueryObject
    {
        $object = new ShopifyReturnShippingFeeQueryObject();
        $this->addPossibleType($object);

        return $object;
    }
}
