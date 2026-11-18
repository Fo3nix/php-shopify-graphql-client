<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * Represents a line item belonging to an inventory transfer.
 */
class ShopifyInventoryTransferLineItemQueryObject extends QueryObject
{
    const OBJECT_NAME = "InventoryTransferLineItem";

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
    public function selectInventoryItem(?ShopifyInventoryTransferLineItemInventoryItemArgumentsObject $argsObject = null): ShopifyInventoryItemQueryObject
    {
        $object = new ShopifyInventoryItemQueryObject("inventoryItem");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The quantity of the item that has been picked for a draft shipment but not yet shipped.
     */
    public function selectPickedForShipmentQuantity(): static
    {
        $this->selectField("pickedForShipmentQuantity");

        return $this;
    }

    /**
     * The quantity of the item that can be actioned upon, such as editing the item quantity on the transfer or adding to a shipment.
     */
    public function selectProcessableQuantity(): static
    {
        $this->selectField("processableQuantity");

        return $this;
    }

    /**
     * The quantity of the item that can be shipped.
     */
    public function selectShippableQuantity(): static
    {
        $this->selectField("shippableQuantity");

        return $this;
    }

    /**
     * The quantity of the item that has been shipped.
     */
    public function selectShippedQuantity(): static
    {
        $this->selectField("shippedQuantity");

        return $this;
    }

    /**
     * The title of the product associated with this line item.
     */
    public function selectTitle(): static
    {
        $this->selectField("title");

        return $this;
    }

    /**
     * The total quantity of items being transferred.
     */
    public function selectTotalQuantity(): static
    {
        $this->selectField("totalQuantity");

        return $this;
    }
}
