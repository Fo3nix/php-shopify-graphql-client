<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class InventoryTransferQueryObject extends QueryObject
{
    const OBJECT_NAME = "InventoryTransfer";

    public function selectDateCreated()
    {
        $this->selectField("dateCreated");

        return $this;
    }

    public function selectDestination(InventoryTransferDestinationArgumentsObject $argsObject = null)
    {
        $object = new LocationSnapshotQueryObject("destination");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectEvents(InventoryTransferEventsArgumentsObject $argsObject = null)
    {
        $object = new EventConnectionQueryObject("events");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectHasTimelineComment()
    {
        $this->selectField("hasTimelineComment");

        return $this;
    }

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectLineItems(InventoryTransferLineItemsArgumentsObject $argsObject = null)
    {
        $object = new InventoryTransferLineItemConnectionQueryObject("lineItems");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectLineItemsCount(InventoryTransferLineItemsCountArgumentsObject $argsObject = null)
    {
        $object = new CountQueryObject("lineItemsCount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMetafield(InventoryTransferMetafieldArgumentsObject $argsObject = null)
    {
        $object = new MetafieldQueryObject("metafield");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * @deprecated This field will be removed in a future version. Use `QueryRoot.metafieldDefinitions` instead.
     */
    public function selectMetafieldDefinitions(InventoryTransferMetafieldDefinitionsArgumentsObject $argsObject = null)
    {
        $object = new MetafieldDefinitionConnectionQueryObject("metafieldDefinitions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectMetafields(InventoryTransferMetafieldsArgumentsObject $argsObject = null)
    {
        $object = new MetafieldConnectionQueryObject("metafields");
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

    public function selectNote()
    {
        $this->selectField("note");

        return $this;
    }

    public function selectOrigin(InventoryTransferOriginArgumentsObject $argsObject = null)
    {
        $object = new LocationSnapshotQueryObject("origin");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectReceivedQuantity()
    {
        $this->selectField("receivedQuantity");

        return $this;
    }

    public function selectReferenceName()
    {
        $this->selectField("referenceName");

        return $this;
    }

    public function selectShipments(InventoryTransferShipmentsArgumentsObject $argsObject = null)
    {
        $object = new InventoryShipmentConnectionQueryObject("shipments");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectStatus()
    {
        $this->selectField("status");

        return $this;
    }

    public function selectTags()
    {
        $this->selectField("tags");

        return $this;
    }

    public function selectTotalQuantity()
    {
        $this->selectField("totalQuantity");

        return $this;
    }
}
