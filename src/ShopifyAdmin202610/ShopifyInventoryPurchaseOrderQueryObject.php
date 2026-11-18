<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * A purchase order represents an agreement from a merchant to buy goods or services from a supplier.
 * While the agreement is captured on the merchant's side as a purchase order, it’s recorded as a sales order
 * on the supplier side.
 */
class ShopifyInventoryPurchaseOrderQueryObject extends QueryObject
{
    const OBJECT_NAME = "InventoryPurchaseOrder";

    /**
     * The date and time the purchase order was archived.
     */
    public function selectArchivedAt(): static
    {
        $this->selectField("archivedAt");

        return $this;
    }

    /**
     * The currency for the purchase order's cost values.
     * The shop's currency will be used if one isn't provided during creation.
     */
    public function selectCurrency(): static
    {
        $this->selectField("currency");

        return $this;
    }

    /**
     * The date and time the purchase order was placed.
     */
    public function selectDateCreated(): static
    {
        $this->selectField("dateCreated");

        return $this;
    }

    /**
     * The target containing the destination location of the purchase order.
     */
    public function selectDestination(?ShopifyInventoryPurchaseOrderDestinationArgumentsObject $argsObject = null): ShopifyLocationSnapshotQueryObject
    {
        $object = new ShopifyLocationSnapshotQueryObject("destination");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
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
     * A list of the purchase order's line items.
     */
    public function selectLineItems(?ShopifyInventoryPurchaseOrderLineItemsArgumentsObject $argsObject = null): ShopifyInventoryPurchaseOrderLineItemConnectionQueryObject
    {
        $object = new ShopifyInventoryPurchaseOrderLineItemConnectionQueryObject("lineItems");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The name of the purchase order.
     */
    public function selectName(): static
    {
        $this->selectField("name");

        return $this;
    }

    /**
     * The date and time the purchase order was confirmed with the supplier.
     */
    public function selectOrderedAt(): static
    {
        $this->selectField("orderedAt");

        return $this;
    }

    /**
     * The supplier snapshot where the purchase order originates from.
     */
    public function selectOrigin(?ShopifyInventoryPurchaseOrderOriginArgumentsObject $argsObject = null): ShopifyInventorySupplierSnapshotQueryObject
    {
        $object = new ShopifyInventorySupplierSnapshotQueryObject("origin");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The current status of the inventory purchase order.
     */
    public function selectStatus(): static
    {
        $this->selectField("status");

        return $this;
    }

    /**
     * The inventory transfers linked to this purchase order.
     */
    public function selectTransfers(?ShopifyInventoryPurchaseOrderTransfersArgumentsObject $argsObject = null): ShopifyInventoryTransferConnectionQueryObject
    {
        $object = new ShopifyInventoryTransferConnectionQueryObject("transfers");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
