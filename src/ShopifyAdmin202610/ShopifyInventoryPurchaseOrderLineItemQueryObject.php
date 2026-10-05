<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyInventoryPurchaseOrderLineItemQueryObject extends QueryObject
{
    const OBJECT_NAME = "InventoryPurchaseOrderLineItem";

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectInventoryItem(ShopifyInventoryPurchaseOrderLineItemInventoryItemArgumentsObject $argsObject = null)
    {
        $object = new ShopifyInventoryItemQueryObject("inventoryItem");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPurchaseOrder(ShopifyInventoryPurchaseOrderLineItemPurchaseOrderArgumentsObject $argsObject = null)
    {
        $object = new ShopifyInventoryPurchaseOrderQueryObject("purchaseOrder");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectSubtotal(ShopifyInventoryPurchaseOrderLineItemSubtotalArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyV2QueryObject("subtotal");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectSupplierSku()
    {
        $this->selectField("supplierSku");

        return $this;
    }

    public function selectTaxPercent()
    {
        $this->selectField("taxPercent");

        return $this;
    }

    public function selectTitle()
    {
        $this->selectField("title");

        return $this;
    }

    public function selectTotalCost(ShopifyInventoryPurchaseOrderLineItemTotalCostArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyV2QueryObject("totalCost");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTotalQuantity()
    {
        $this->selectField("totalQuantity");

        return $this;
    }

    public function selectUnitCost(ShopifyInventoryPurchaseOrderLineItemUnitCostArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyV2QueryObject("unitCost");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectVariantTitle()
    {
        $this->selectField("variantTitle");

        return $this;
    }
}
