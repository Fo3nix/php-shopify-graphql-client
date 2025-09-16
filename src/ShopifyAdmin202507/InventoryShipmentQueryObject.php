<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class InventoryShipmentQueryObject extends QueryObject
{
    const OBJECT_NAME = "InventoryShipment";

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectLineItemTotalQuantity()
    {
        $this->selectField("lineItemTotalQuantity");

        return $this;
    }

    public function selectLineItems(InventoryShipmentLineItemsArgumentsObject $argsObject = null)
    {
        $object = new InventoryShipmentLineItemConnectionQueryObject("lineItems");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectLineItemsCount(InventoryShipmentLineItemsCountArgumentsObject $argsObject = null)
    {
        $object = new CountQueryObject("lineItemsCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectName()
    {
        $this->selectField("name");

        return $this;
    }

    public function selectStatus()
    {
        $this->selectField("status");

        return $this;
    }

    public function selectTotalAcceptedQuantity()
    {
        $this->selectField("totalAcceptedQuantity");

        return $this;
    }

    public function selectTotalReceivedQuantity()
    {
        $this->selectField("totalReceivedQuantity");

        return $this;
    }

    public function selectTotalRejectedQuantity()
    {
        $this->selectField("totalRejectedQuantity");

        return $this;
    }

    public function selectTracking(InventoryShipmentTrackingArgumentsObject $argsObject = null)
    {
        $object = new InventoryShipmentTrackingQueryObject("tracking");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
