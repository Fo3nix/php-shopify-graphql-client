<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class ShopifyPaymentsPayoutSummaryQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShopifyPaymentsPayoutSummary";

    public function selectAdjustmentsFee(ShopifyPaymentsPayoutSummaryAdjustmentsFeeArgumentsObject $argsObject = null)
    {
        $object = new MoneyV2QueryObject("adjustmentsFee");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectAdjustmentsGross(ShopifyPaymentsPayoutSummaryAdjustmentsGrossArgumentsObject $argsObject = null)
    {
        $object = new MoneyV2QueryObject("adjustmentsGross");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectAdvanceFees(ShopifyPaymentsPayoutSummaryAdvanceFeesArgumentsObject $argsObject = null)
    {
        $object = new MoneyV2QueryObject("advanceFees");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectAdvanceGross(ShopifyPaymentsPayoutSummaryAdvanceGrossArgumentsObject $argsObject = null)
    {
        $object = new MoneyV2QueryObject("advanceGross");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectChargesFee(ShopifyPaymentsPayoutSummaryChargesFeeArgumentsObject $argsObject = null)
    {
        $object = new MoneyV2QueryObject("chargesFee");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectChargesGross(ShopifyPaymentsPayoutSummaryChargesGrossArgumentsObject $argsObject = null)
    {
        $object = new MoneyV2QueryObject("chargesGross");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectRefundsFee(ShopifyPaymentsPayoutSummaryRefundsFeeArgumentsObject $argsObject = null)
    {
        $object = new MoneyV2QueryObject("refundsFee");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectRefundsFeeGross(ShopifyPaymentsPayoutSummaryRefundsFeeGrossArgumentsObject $argsObject = null)
    {
        $object = new MoneyV2QueryObject("refundsFeeGross");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectReservedFundsFee(ShopifyPaymentsPayoutSummaryReservedFundsFeeArgumentsObject $argsObject = null)
    {
        $object = new MoneyV2QueryObject("reservedFundsFee");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectReservedFundsGross(ShopifyPaymentsPayoutSummaryReservedFundsGrossArgumentsObject $argsObject = null)
    {
        $object = new MoneyV2QueryObject("reservedFundsGross");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectRetriedPayoutsFee(ShopifyPaymentsPayoutSummaryRetriedPayoutsFeeArgumentsObject $argsObject = null)
    {
        $object = new MoneyV2QueryObject("retriedPayoutsFee");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectRetriedPayoutsGross(ShopifyPaymentsPayoutSummaryRetriedPayoutsGrossArgumentsObject $argsObject = null)
    {
        $object = new MoneyV2QueryObject("retriedPayoutsGross");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
