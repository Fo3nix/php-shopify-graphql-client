<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * A location that a fulfillment order can potentially move to.
 */
class ShopifyFulfillmentOrderLocationForMoveQueryObject extends QueryObject
{
    const OBJECT_NAME = "FulfillmentOrderLocationForMove";

    /**
     * Fulfillment order line items that can be moved from their current location to the given location.
     */
    public function selectAvailableLineItems(?ShopifyFulfillmentOrderLocationForMoveAvailableLineItemsArgumentsObject $argsObject = null): ShopifyFulfillmentOrderLineItemConnectionQueryObject
    {
        $object = new ShopifyFulfillmentOrderLineItemConnectionQueryObject("availableLineItems");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Total number of fulfillment order line items that can be moved from their current assigned location to the
     * given location.
     */
    public function selectAvailableLineItemsCount(?ShopifyFulfillmentOrderLocationForMoveAvailableLineItemsCountArgumentsObject $argsObject = null): ShopifyCountQueryObject
    {
        $object = new ShopifyCountQueryObject("availableLineItemsCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The location being considered as the fulfillment order's new assigned location.
     */
    public function selectLocation(?ShopifyFulfillmentOrderLocationForMoveLocationArgumentsObject $argsObject = null): ShopifyLocationQueryObject
    {
        $object = new ShopifyLocationQueryObject("location");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * A human-readable string with the reason why the fulfillment order, or some of its line items, can't be
     * moved to the location.
     */
    public function selectMessage(): static
    {
        $this->selectField("message");

        return $this;
    }

    /**
     * Whether the fulfillment order can be moved to the location.
     */
    public function selectMovable(): static
    {
        $this->selectField("movable");

        return $this;
    }

    /**
     * Fulfillment order line items that cannot be moved from their current location to the given location.
     */
    public function selectUnavailableLineItems(?ShopifyFulfillmentOrderLocationForMoveUnavailableLineItemsArgumentsObject $argsObject = null): ShopifyFulfillmentOrderLineItemConnectionQueryObject
    {
        $object = new ShopifyFulfillmentOrderLineItemConnectionQueryObject("unavailableLineItems");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Total number of fulfillment order line items that can't be moved from their current assigned location to the
     * given location.
     */
    public function selectUnavailableLineItemsCount(?ShopifyFulfillmentOrderLocationForMoveUnavailableLineItemsCountArgumentsObject $argsObject = null): ShopifyCountQueryObject
    {
        $object = new ShopifyCountQueryObject("unavailableLineItemsCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
