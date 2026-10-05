<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyInventoryPurchaseOrderQueryObject extends QueryObject
{
    const OBJECT_NAME = "InventoryPurchaseOrder";

    public function selectArchivedAt()
    {
        $this->selectField("archivedAt");

        return $this;
    }

    public function selectCurrency()
    {
        $this->selectField("currency");

        return $this;
    }

    public function selectDateCreated()
    {
        $this->selectField("dateCreated");

        return $this;
    }

    public function selectDestination(ShopifyInventoryPurchaseOrderDestinationArgumentsObject $argsObject = null)
    {
        $object = new ShopifyLocationSnapshotQueryObject("destination");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectLineItems(ShopifyInventoryPurchaseOrderLineItemsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyInventoryPurchaseOrderLineItemConnectionQueryObject("lineItems");
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

    public function selectOrderedAt()
    {
        $this->selectField("orderedAt");

        return $this;
    }

    public function selectOrigin(ShopifyInventoryPurchaseOrderOriginArgumentsObject $argsObject = null)
    {
        $object = new ShopifyInventorySupplierSnapshotQueryObject("origin");
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

    public function selectTransfers(ShopifyInventoryPurchaseOrderTransfersArgumentsObject $argsObject = null)
    {
        $object = new ShopifyInventoryTransferConnectionQueryObject("transfers");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
