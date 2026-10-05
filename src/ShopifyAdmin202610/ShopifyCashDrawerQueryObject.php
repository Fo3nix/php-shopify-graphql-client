<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCashDrawerQueryObject extends QueryObject
{
    const OBJECT_NAME = "CashDrawer";

    public function selectBalance(ShopifyCashDrawerBalanceArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyV2QueryObject("balance");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCashActivities(ShopifyCashDrawerCashActivitiesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCashActivityConnectionQueryObject("cashActivities");
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

    public function selectLocation(ShopifyCashDrawerLocationArgumentsObject $argsObject = null)
    {
        $object = new ShopifyLocationQueryObject("location");
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

    public function selectNetSales(ShopifyCashDrawerNetSalesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyV2QueryObject("netSales");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectPointOfSaleDevices(ShopifyCashDrawerPointOfSaleDevicesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPointOfSaleDeviceConnectionQueryObject("pointOfSaleDevices");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTotalAdjustments(ShopifyCashDrawerTotalAdjustmentsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyV2QueryObject("totalAdjustments");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTotalDiscrepancies(ShopifyCashDrawerTotalDiscrepanciesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyV2QueryObject("totalDiscrepancies");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTotalRefunds(ShopifyCashDrawerTotalRefundsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyV2QueryObject("totalRefunds");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTotalSales(ShopifyCashDrawerTotalSalesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyV2QueryObject("totalSales");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
