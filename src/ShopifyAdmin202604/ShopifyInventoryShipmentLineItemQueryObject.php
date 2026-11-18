<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * Represents a single line item within an inventory shipment.
 */
class ShopifyInventoryShipmentLineItemQueryObject extends QueryObject
{
    const OBJECT_NAME = "InventoryShipmentLineItem";

    /**
     * The quantity of items that were accepted in this shipment line item.
     */
    public function selectAcceptedQuantity(): static
    {
        $this->selectField("acceptedQuantity");

        return $this;
    }

    /**
     * The date and time the shipment line item was created.
     */
    public function selectCreatedAt(): static
    {
        $this->selectField("createdAt");

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
     * The inventory item associated with this line item.
     */
    public function selectInventoryItem(?ShopifyInventoryShipmentLineItemInventoryItemArgumentsObject $argsObject = null): ShopifyInventoryItemQueryObject
    {
        $object = new ShopifyInventoryItemQueryObject("inventoryItem");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The quantity of items in this shipment line item.
     */
    public function selectQuantity(): static
    {
        $this->selectField("quantity");

        return $this;
    }

    /**
     * The quantity of items that were rejected in this shipment line item.
     */
    public function selectRejectedQuantity(): static
    {
        $this->selectField("rejectedQuantity");

        return $this;
    }

    /**
     * The total quantity of units that haven't been accepted, rejected, or marked as canceled in this shipment line item.
     */
    public function selectUnreceivedQuantity(): static
    {
        $this->selectField("unreceivedQuantity");

        return $this;
    }
}
