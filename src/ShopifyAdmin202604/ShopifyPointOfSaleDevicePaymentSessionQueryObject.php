<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

class ShopifyPointOfSaleDevicePaymentSessionQueryObject extends QueryObject
{
    const OBJECT_NAME = "PointOfSaleDevicePaymentSession";

    public function selectCashActivities(ShopifyPointOfSaleDevicePaymentSessionCashActivitiesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCashActivityConnectionQueryObject("cashActivities");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCashCountedAtClose(ShopifyPointOfSaleDevicePaymentSessionCashCountedAtCloseArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyV2QueryObject("cashCountedAtClose");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCashCountedAtOpen(ShopifyPointOfSaleDevicePaymentSessionCashCountedAtOpenArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyV2QueryObject("cashCountedAtOpen");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCashDrawer(ShopifyPointOfSaleDevicePaymentSessionCashDrawerArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCashDrawerQueryObject("cashDrawer");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectClosingAdjustment(ShopifyPointOfSaleDevicePaymentSessionClosingAdjustmentArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyV2QueryObject("closingAdjustment");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectClosingBalance(ShopifyPointOfSaleDevicePaymentSessionClosingBalanceArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyV2QueryObject("closingBalance");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectClosingNote()
    {
        $this->selectField("closingNote");

        return $this;
    }

    public function selectClosingStaffMember(ShopifyPointOfSaleDevicePaymentSessionClosingStaffMemberArgumentsObject $argsObject = null)
    {
        $object = new ShopifyStaffMemberQueryObject("closingStaffMember");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectClosingTime()
    {
        $this->selectField("closingTime");

        return $this;
    }

    public function selectCurrency()
    {
        $this->selectField("currency");

        return $this;
    }

    public function selectExpectedCashAtClose(ShopifyPointOfSaleDevicePaymentSessionExpectedCashAtCloseArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyV2QueryObject("expectedCashAtClose");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectExpectedCashAtOpen(ShopifyPointOfSaleDevicePaymentSessionExpectedCashAtOpenArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyV2QueryObject("expectedCashAtOpen");
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

    public function selectLocation(ShopifyPointOfSaleDevicePaymentSessionLocationArgumentsObject $argsObject = null)
    {
        $object = new ShopifyLocationQueryObject("location");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNetCashSales(ShopifyPointOfSaleDevicePaymentSessionNetCashSalesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyV2QueryObject("netCashSales");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNetSales(ShopifyPointOfSaleDevicePaymentSessionNetSalesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyV2QueryObject("netSales");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectOpeningNote()
    {
        $this->selectField("openingNote");

        return $this;
    }

    public function selectOpeningStaffMember(ShopifyPointOfSaleDevicePaymentSessionOpeningStaffMemberArgumentsObject $argsObject = null)
    {
        $object = new ShopifyStaffMemberQueryObject("openingStaffMember");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectOpeningTime()
    {
        $this->selectField("openingTime");

        return $this;
    }

    public function selectPointOfSaleDevice(ShopifyPointOfSaleDevicePaymentSessionPointOfSaleDeviceArgumentsObject $argsObject = null)
    {
        $object = new ShopifyPointOfSaleDeviceQueryObject("pointOfSaleDevice");
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

    public function selectTotalAdjustments(ShopifyPointOfSaleDevicePaymentSessionTotalAdjustmentsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyV2QueryObject("totalAdjustments");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTotalCashRefunds(ShopifyPointOfSaleDevicePaymentSessionTotalCashRefundsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyV2QueryObject("totalCashRefunds");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTotalCashSales(ShopifyPointOfSaleDevicePaymentSessionTotalCashSalesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyV2QueryObject("totalCashSales");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTotalDiscrepancy(ShopifyPointOfSaleDevicePaymentSessionTotalDiscrepancyArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyV2QueryObject("totalDiscrepancy");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTotalRefunds(ShopifyPointOfSaleDevicePaymentSessionTotalRefundsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyV2QueryObject("totalRefunds");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTotalSales(ShopifyPointOfSaleDevicePaymentSessionTotalSalesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyV2QueryObject("totalSales");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTotalsReady()
    {
        $this->selectField("totalsReady");

        return $this;
    }
}
