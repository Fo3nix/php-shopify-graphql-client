<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Represents a line item belonging to an inventory purchase order.
 * This is a simplified view of the purchase order line item for inventory management purposes.
 */
class ShopifyInventoryPurchaseOrderLineItemQueryObject extends QueryObject
{
    const OBJECT_NAME = "InventoryPurchaseOrderLineItem";

    /**
     * The date and time the purchase order line item was created.
     */
    public function selectCreatedAt(): static
    {
        $this->selectField("createdAt");

        return $this;
    }

    /**
     * A globally unique identifier.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }

    /**
     * The inventory item associated with this line item.
     */
    public function selectInventoryItem(?ShopifyInventoryPurchaseOrderLineItemInventoryItemArgumentsObject $argsObject = null): ShopifyInventoryItemQueryObject
    {
        $object = new ShopifyInventoryItemQueryObject("inventoryItem");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The purchase order this line item belongs to.
     */
    public function selectPurchaseOrder(?ShopifyInventoryPurchaseOrderLineItemPurchaseOrderArgumentsObject $argsObject = null): ShopifyInventoryPurchaseOrderQueryObject
    {
        $object = new ShopifyInventoryPurchaseOrderQueryObject("purchaseOrder");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The unit cost multiplied by the total quantity for the line item.
     */
    public function selectSubtotal(?ShopifyInventoryPurchaseOrderLineItemSubtotalArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("subtotal");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The SKU for the item.
     */
    public function selectSupplierSku(): static
    {
        $this->selectField("supplierSku");

        return $this;
    }

    /**
     * The tax rate percentage for the line item.
     */
    public function selectTaxPercent(): static
    {
        $this->selectField("taxPercent");

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
     * The total cost of the line item, including taxes.
     */
    public function selectTotalCost(?ShopifyInventoryPurchaseOrderLineItemTotalCostArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("totalCost");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The total number of units ordered for the line item.
     */
    public function selectTotalQuantity(): static
    {
        $this->selectField("totalQuantity");

        return $this;
    }

    /**
     * The unit cost of the item paid to the supplier.
     */
    public function selectUnitCost(?ShopifyInventoryPurchaseOrderLineItemUnitCostArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("unitCost");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The title of the variant associated with this line item.
     */
    public function selectVariantTitle(): static
    {
        $this->selectField("variantTitle");

        return $this;
    }
}
