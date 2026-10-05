<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyShopifyPaymentsPayoutSummaryQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShopifyPaymentsPayoutSummary";

    public function selectAdjustmentsFee(ShopifyShopifyPaymentsPayoutSummaryAdjustmentsFeeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyV2QueryObject("adjustmentsFee");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectAdjustmentsGross(ShopifyShopifyPaymentsPayoutSummaryAdjustmentsGrossArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyV2QueryObject("adjustmentsGross");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectAdvanceFees(ShopifyShopifyPaymentsPayoutSummaryAdvanceFeesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyV2QueryObject("advanceFees");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectAdvanceGross(ShopifyShopifyPaymentsPayoutSummaryAdvanceGrossArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyV2QueryObject("advanceGross");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectChargesFee(ShopifyShopifyPaymentsPayoutSummaryChargesFeeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyV2QueryObject("chargesFee");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectChargesGross(ShopifyShopifyPaymentsPayoutSummaryChargesGrossArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyV2QueryObject("chargesGross");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectRefundsFee(ShopifyShopifyPaymentsPayoutSummaryRefundsFeeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyV2QueryObject("refundsFee");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectRefundsFeeGross(ShopifyShopifyPaymentsPayoutSummaryRefundsFeeGrossArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyV2QueryObject("refundsFeeGross");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectReservedFundsFee(ShopifyShopifyPaymentsPayoutSummaryReservedFundsFeeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyV2QueryObject("reservedFundsFee");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectReservedFundsGross(ShopifyShopifyPaymentsPayoutSummaryReservedFundsGrossArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyV2QueryObject("reservedFundsGross");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectRetriedPayoutsFee(ShopifyShopifyPaymentsPayoutSummaryRetriedPayoutsFeeArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyV2QueryObject("retriedPayoutsFee");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectRetriedPayoutsGross(ShopifyShopifyPaymentsPayoutSummaryRetriedPayoutsGrossArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyV2QueryObject("retriedPayoutsGross");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectUsdcRebateCreditAmount(ShopifyShopifyPaymentsPayoutSummaryUsdcRebateCreditAmountArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyV2QueryObject("usdcRebateCreditAmount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
