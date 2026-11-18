<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * Represents an inventory shipment.
 */
class ShopifyInventoryShipmentQueryObject extends QueryObject
{
    const OBJECT_NAME = "InventoryShipment";

    /**
     * The date the shipment was created in UTC.
     */
    public function selectDateCreated(): static
    {
        $this->selectField("dateCreated");

        return $this;
    }

    /**
     * The date the shipment was initially received in UTC.
     */
    public function selectDateReceived(): static
    {
        $this->selectField("dateReceived");

        return $this;
    }

    /**
     * The date the shipment was shipped in UTC.
     */
    public function selectDateShipped(): static
    {
        $this->selectField("dateShipped");

        return $this;
    }

    /**
     * A globally-unique ID.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }

    /**
     * The total quantity of all items in the shipment.
     */
    public function selectLineItemTotalQuantity(): static
    {
        $this->selectField("lineItemTotalQuantity");

        return $this;
    }

    /**
     * The line items included in this shipment.
     */
    public function selectLineItems(?ShopifyInventoryShipmentLineItemsArgumentsObject $argsObject = null): ShopifyInventoryShipmentLineItemConnectionQueryObject
    {
        $object = new ShopifyInventoryShipmentLineItemConnectionQueryObject("lineItems");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The number of line items associated with the inventory shipment. Limited to a maximum of 10000 by default.
     */
    public function selectLineItemsCount(?ShopifyInventoryShipmentLineItemsCountArgumentsObject $argsObject = null): ShopifyCountQueryObject
    {
        $object = new ShopifyCountQueryObject("lineItemsCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The name of the inventory shipment.
     */
    public function selectName(): static
    {
        $this->selectField("name");

        return $this;
    }

    /**
     * The current status of the shipment.
     */
    public function selectStatus(): static
    {
        $this->selectField("status");

        return $this;
    }

    /**
     * The total quantity of items accepted across all line items in this shipment.
     */
    public function selectTotalAcceptedQuantity(): static
    {
        $this->selectField("totalAcceptedQuantity");

        return $this;
    }

    /**
     * The total quantity of items accepted, rejected, or marked as canceled across all line items in this shipment.
     */
    public function selectTotalReceivedQuantity(): static
    {
        $this->selectField("totalReceivedQuantity");

        return $this;
    }

    /**
     * The total quantity of items rejected across all line items in this shipment.
     */
    public function selectTotalRejectedQuantity(): static
    {
        $this->selectField("totalRejectedQuantity");

        return $this;
    }

    /**
     * The tracking information for the shipment.
     */
    public function selectTracking(?ShopifyInventoryShipmentTrackingArgumentsObject $argsObject = null): ShopifyInventoryShipmentTrackingQueryObject
    {
        $object = new ShopifyInventoryShipmentTrackingQueryObject("tracking");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
