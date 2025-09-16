<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class InventoryTransferLineItemQueryObject extends QueryObject
{
    const OBJECT_NAME = "InventoryTransferLineItem";

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectInventoryItem(InventoryTransferLineItemInventoryItemArgumentsObject $argsObject = null)
    {
        $object = new InventoryItemQueryObject("inventoryItem");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPickedForShipmentQuantity()
    {
        $this->selectField("pickedForShipmentQuantity");

        return $this;
    }

    public function selectProcessableQuantity()
    {
        $this->selectField("processableQuantity");

        return $this;
    }

    public function selectShippableQuantity()
    {
        $this->selectField("shippableQuantity");

        return $this;
    }

    public function selectShippedQuantity()
    {
        $this->selectField("shippedQuantity");

        return $this;
    }

    public function selectTitle()
    {
        $this->selectField("title");

        return $this;
    }

    public function selectTotalQuantity()
    {
        $this->selectField("totalQuantity");

        return $this;
    }
}
