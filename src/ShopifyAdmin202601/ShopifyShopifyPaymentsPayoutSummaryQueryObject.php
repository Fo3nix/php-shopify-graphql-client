<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * Breakdown of the total fees and gross of each of the different types of transactions associated
 * with the payout.
 */
class ShopifyShopifyPaymentsPayoutSummaryQueryObject extends QueryObject
{
    const OBJECT_NAME = "ShopifyPaymentsPayoutSummary";

    /**
     * Total fees for all adjustments including disputes.
     */
    public function selectAdjustmentsFee(?ShopifyShopifyPaymentsPayoutSummaryAdjustmentsFeeArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("adjustmentsFee");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Total gross amount for all adjustments including disputes.
     */
    public function selectAdjustmentsGross(?ShopifyShopifyPaymentsPayoutSummaryAdjustmentsGrossArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("adjustmentsGross");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Total fees for all advances.
     */
    public function selectAdvanceFees(?ShopifyShopifyPaymentsPayoutSummaryAdvanceFeesArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("advanceFees");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Total gross amount for all advances.
     */
    public function selectAdvanceGross(?ShopifyShopifyPaymentsPayoutSummaryAdvanceGrossArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("advanceGross");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Total fees for all charges.
     */
    public function selectChargesFee(?ShopifyShopifyPaymentsPayoutSummaryChargesFeeArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("chargesFee");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Total gross amount for all charges.
     */
    public function selectChargesGross(?ShopifyShopifyPaymentsPayoutSummaryChargesGrossArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("chargesGross");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Total fees for all refunds.
     */
    public function selectRefundsFee(?ShopifyShopifyPaymentsPayoutSummaryRefundsFeeArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("refundsFee");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Total gross amount for all refunds.
     */
    public function selectRefundsFeeGross(?ShopifyShopifyPaymentsPayoutSummaryRefundsFeeGrossArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("refundsFeeGross");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Total fees for all reserved funds.
     */
    public function selectReservedFundsFee(?ShopifyShopifyPaymentsPayoutSummaryReservedFundsFeeArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("reservedFundsFee");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Total gross amount for all reserved funds.
     */
    public function selectReservedFundsGross(?ShopifyShopifyPaymentsPayoutSummaryReservedFundsGrossArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("reservedFundsGross");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Total fees for all retried payouts.
     */
    public function selectRetriedPayoutsFee(?ShopifyShopifyPaymentsPayoutSummaryRetriedPayoutsFeeArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("retriedPayoutsFee");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Total gross amount for all retried payouts.
     */
    public function selectRetriedPayoutsGross(?ShopifyShopifyPaymentsPayoutSummaryRetriedPayoutsGrossArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("retriedPayoutsGross");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Total amount for all usdc rebate credit balance adjustments.
     */
    public function selectUsdcRebateCreditAmount(?ShopifyShopifyPaymentsPayoutSummaryUsdcRebateCreditAmountArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("usdcRebateCreditAmount");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
