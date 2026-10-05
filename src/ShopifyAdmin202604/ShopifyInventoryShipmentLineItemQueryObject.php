<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifyInventoryShipmentLineItemQueryObject extends QueryObject
{
    const OBJECT_NAME = "InventoryShipmentLineItem";

    public function selectAcceptedQuantity()
    {
        $this->selectField("acceptedQuantity");

        return $this;
    }

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectInventoryItem(ShopifyInventoryShipmentLineItemInventoryItemArgumentsObject $argsObject = null)
    {
        $object = new ShopifyInventoryItemQueryObject("inventoryItem");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectQuantity()
    {
        $this->selectField("quantity");

        return $this;
    }

    public function selectRejectedQuantity()
    {
        $this->selectField("rejectedQuantity");

        return $this;
    }

    public function selectUnreceivedQuantity()
    {
        $this->selectField("unreceivedQuantity");

        return $this;
    }
}
