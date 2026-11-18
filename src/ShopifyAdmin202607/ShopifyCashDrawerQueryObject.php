<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * A cash drawer for cash management.
 */
class ShopifyCashDrawerQueryObject extends QueryObject
{
    const OBJECT_NAME = "CashDrawer";

    /**
     * The current balance in the cash drawer.
     */
    public function selectBalance(?ShopifyCashDrawerBalanceArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("balance");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The activities on the cash drawer.
     */
    public function selectCashActivities(?ShopifyCashDrawerCashActivitiesArgumentsObject $argsObject = null): ShopifyCashActivityConnectionQueryObject
    {
        $object = new ShopifyCashActivityConnectionQueryObject("cashActivities");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * A unique ID for the cash drawer.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }

    /**
     * The location of the cash drawer.
     */
    public function selectLocation(?ShopifyCashDrawerLocationArgumentsObject $argsObject = null): ShopifyLocationQueryObject
    {
        $object = new ShopifyLocationQueryObject("location");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The name of the cash drawer.
     */
    public function selectName(): static
    {
        $this->selectField("name");

        return $this;
    }

    /**
     * The net sales for this cash drawer.
     */
    public function selectNetSales(ShopifyCashDrawerNetSalesArgumentsObject $argsObject): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("netSales");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * The Point of Sale devices assigned to this cash drawer.
     */
    public function selectPointOfSaleDevices(?ShopifyCashDrawerPointOfSaleDevicesArgumentsObject $argsObject = null): ShopifyPointOfSaleDeviceConnectionQueryObject
    {
        $object = new ShopifyPointOfSaleDeviceConnectionQueryObject("pointOfSaleDevices");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The total adjustments for this cash drawer.
     */
    public function selectTotalAdjustments(ShopifyCashDrawerTotalAdjustmentsArgumentsObject $argsObject): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("totalAdjustments");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * The total discrepancies for this cash drawer.
     */
    public function selectTotalDiscrepancies(ShopifyCashDrawerTotalDiscrepanciesArgumentsObject $argsObject): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("totalDiscrepancies");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * The total refunds for this cash drawer.
     */
    public function selectTotalRefunds(ShopifyCashDrawerTotalRefundsArgumentsObject $argsObject): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("totalRefunds");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }

    /**
     * The total sales for this cash drawer.
     */
    public function selectTotalSales(ShopifyCashDrawerTotalSalesArgumentsObject $argsObject): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("totalSales");
        $object->appendArguments($argsObject->toArray());
        $this->selectField($object);

        return $object;
    }
}
