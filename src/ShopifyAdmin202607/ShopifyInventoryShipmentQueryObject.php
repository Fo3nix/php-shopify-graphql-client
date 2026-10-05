<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyInventoryShipmentQueryObject extends QueryObject
{
    const OBJECT_NAME = "InventoryShipment";

    public function selectBarcode()
    {
        $this->selectField("barcode");

        return $this;
    }

    public function selectDateCreated()
    {
        $this->selectField("dateCreated");

        return $this;
    }

    public function selectDateReceived()
    {
        $this->selectField("dateReceived");

        return $this;
    }

    public function selectDateShipped()
    {
        $this->selectField("dateShipped");

        return $this;
    }

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

    public function selectLineItems(ShopifyInventoryShipmentLineItemsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyInventoryShipmentLineItemConnectionQueryObject("lineItems");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectLineItemsCount(ShopifyInventoryShipmentLineItemsCountArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCountQueryObject("lineItemsCount");
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

    public function selectTracking(ShopifyInventoryShipmentTrackingArgumentsObject $argsObject = null)
    {
        $object = new ShopifyInventoryShipmentTrackingQueryObject("tracking");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
