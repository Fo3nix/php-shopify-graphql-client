<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class CashTrackingSessionQueryObject extends QueryObject
{
    const OBJECT_NAME = "CashTrackingSession";

    public function selectAdjustments(CashTrackingSessionAdjustmentsArgumentsObject $argsObject = null)
    {
        $object = new CashTrackingAdjustmentConnectionQueryObject("adjustments");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCashTrackingEnabled()
    {
        $this->selectField("cashTrackingEnabled");

        return $this;
    }

    public function selectCashTransactions(CashTrackingSessionCashTransactionsArgumentsObject $argsObject = null)
    {
        $object = new OrderTransactionConnectionQueryObject("cashTransactions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectClosingBalance(CashTrackingSessionClosingBalanceArgumentsObject $argsObject = null)
    {
        $object = new MoneyV2QueryObject("closingBalance");
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

    public function selectClosingStaffMember(CashTrackingSessionClosingStaffMemberArgumentsObject $argsObject = null)
    {
        $object = new StaffMemberQueryObject("closingStaffMember");
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

    public function selectExpectedBalance(CashTrackingSessionExpectedBalanceArgumentsObject $argsObject = null)
    {
        $object = new MoneyV2QueryObject("expectedBalance");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectExpectedClosingBalance(CashTrackingSessionExpectedClosingBalanceArgumentsObject $argsObject = null)
    {
        $object = new MoneyV2QueryObject("expectedClosingBalance");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectExpectedOpeningBalance(CashTrackingSessionExpectedOpeningBalanceArgumentsObject $argsObject = null)
    {
        $object = new MoneyV2QueryObject("expectedOpeningBalance");
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

    public function selectLocation(CashTrackingSessionLocationArgumentsObject $argsObject = null)
    {
        $object = new LocationQueryObject("location");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNetCashSales(CashTrackingSessionNetCashSalesArgumentsObject $argsObject = null)
    {
        $object = new MoneyV2QueryObject("netCashSales");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectOpeningBalance(CashTrackingSessionOpeningBalanceArgumentsObject $argsObject = null)
    {
        $object = new MoneyV2QueryObject("openingBalance");
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

    public function selectOpeningStaffMember(CashTrackingSessionOpeningStaffMemberArgumentsObject $argsObject = null)
    {
        $object = new StaffMemberQueryObject("openingStaffMember");
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

    public function selectRegisterName()
    {
        $this->selectField("registerName");

        return $this;
    }

    public function selectTotalAdjustments(CashTrackingSessionTotalAdjustmentsArgumentsObject $argsObject = null)
    {
        $object = new MoneyV2QueryObject("totalAdjustments");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTotalCashRefunds(CashTrackingSessionTotalCashRefundsArgumentsObject $argsObject = null)
    {
        $object = new MoneyV2QueryObject("totalCashRefunds");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTotalCashSales(CashTrackingSessionTotalCashSalesArgumentsObject $argsObject = null)
    {
        $object = new MoneyV2QueryObject("totalCashSales");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTotalDiscrepancy(CashTrackingSessionTotalDiscrepancyArgumentsObject $argsObject = null)
    {
        $object = new MoneyV2QueryObject("totalDiscrepancy");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
