<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCashTrackingSessionQueryObject extends QueryObject
{
    const OBJECT_NAME = "CashTrackingSession";

    public function selectAdjustments(ShopifyCashTrackingSessionAdjustmentsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyCashTrackingAdjustmentConnectionQueryObject("adjustments");
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

    public function selectCashTransactions(ShopifyCashTrackingSessionCashTransactionsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyOrderTransactionConnectionQueryObject("cashTransactions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectClosingBalance(ShopifyCashTrackingSessionClosingBalanceArgumentsObject $argsObject = null)
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

    public function selectClosingStaffMember(ShopifyCashTrackingSessionClosingStaffMemberArgumentsObject $argsObject = null)
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

    public function selectExpectedBalance(ShopifyCashTrackingSessionExpectedBalanceArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyV2QueryObject("expectedBalance");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectExpectedClosingBalance(ShopifyCashTrackingSessionExpectedClosingBalanceArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyV2QueryObject("expectedClosingBalance");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectExpectedOpeningBalance(ShopifyCashTrackingSessionExpectedOpeningBalanceArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyV2QueryObject("expectedOpeningBalance");
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

    public function selectLocation(ShopifyCashTrackingSessionLocationArgumentsObject $argsObject = null)
    {
        $object = new ShopifyLocationQueryObject("location");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNetCashSales(ShopifyCashTrackingSessionNetCashSalesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyV2QueryObject("netCashSales");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectOpeningBalance(ShopifyCashTrackingSessionOpeningBalanceArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyV2QueryObject("openingBalance");
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

    public function selectOpeningStaffMember(ShopifyCashTrackingSessionOpeningStaffMemberArgumentsObject $argsObject = null)
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

    public function selectRegisterName()
    {
        $this->selectField("registerName");

        return $this;
    }

    public function selectTotalAdjustments(ShopifyCashTrackingSessionTotalAdjustmentsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyV2QueryObject("totalAdjustments");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTotalCashRefunds(ShopifyCashTrackingSessionTotalCashRefundsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyV2QueryObject("totalCashRefunds");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTotalCashSales(ShopifyCashTrackingSessionTotalCashSalesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyV2QueryObject("totalCashSales");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTotalDiscrepancy(ShopifyCashTrackingSessionTotalDiscrepancyArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyV2QueryObject("totalDiscrepancy");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
