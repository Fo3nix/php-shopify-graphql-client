<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * Tracks the balance in a cash drawer for a point of sale device over the course of a shift.
 */
class ShopifyCashTrackingSessionQueryObject extends QueryObject
{
    const OBJECT_NAME = "CashTrackingSession";

    /**
     * The adjustments made to the cash drawer during this session.
     */
    public function selectAdjustments(?ShopifyCashTrackingSessionAdjustmentsArgumentsObject $argsObject = null): ShopifyCashTrackingAdjustmentConnectionQueryObject
    {
        $object = new ShopifyCashTrackingAdjustmentConnectionQueryObject("adjustments");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * Whether this session is tracking cash payments.
     */
    public function selectCashTrackingEnabled(): static
    {
        $this->selectField("cashTrackingEnabled");

        return $this;
    }

    /**
     * The cash transactions made during this session.
     */
    public function selectCashTransactions(?ShopifyCashTrackingSessionCashTransactionsArgumentsObject $argsObject = null): ShopifyOrderTransactionConnectionQueryObject
    {
        $object = new ShopifyOrderTransactionConnectionQueryObject("cashTransactions");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The counted cash balance when the session was closed.
     */
    public function selectClosingBalance(?ShopifyCashTrackingSessionClosingBalanceArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("closingBalance");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The note entered when the session was closed.
     */
    public function selectClosingNote(): static
    {
        $this->selectField("closingNote");

        return $this;
    }

    /**
     * The user who closed the session.
     */
    public function selectClosingStaffMember(?ShopifyCashTrackingSessionClosingStaffMemberArgumentsObject $argsObject = null): ShopifyStaffMemberQueryObject
    {
        $object = new ShopifyStaffMemberQueryObject("closingStaffMember");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * When the session was closed.
     */
    public function selectClosingTime(): static
    {
        $this->selectField("closingTime");

        return $this;
    }

    /**
     * The expected balance at the end of the session or the expected current balance for sessions that are still open.
     */
    public function selectExpectedBalance(?ShopifyCashTrackingSessionExpectedBalanceArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("expectedBalance");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The amount that was expected to be in the cash drawer at the end of the session, calculated after the session was closed.
     */
    public function selectExpectedClosingBalance(?ShopifyCashTrackingSessionExpectedClosingBalanceArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("expectedClosingBalance");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The amount expected to be in the cash drawer based on the previous session.
     */
    public function selectExpectedOpeningBalance(?ShopifyCashTrackingSessionExpectedOpeningBalanceArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("expectedOpeningBalance");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * A globally-unique ID.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }

    /**
     * The location of the point of sale device during this session.
     */
    public function selectLocation(?ShopifyCashTrackingSessionLocationArgumentsObject $argsObject = null): ShopifyLocationQueryObject
    {
        $object = new ShopifyLocationQueryObject("location");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The net cash sales made for the duration of this cash tracking session.
     */
    public function selectNetCashSales(?ShopifyCashTrackingSessionNetCashSalesArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("netCashSales");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The counted cash balance when the session was opened.
     */
    public function selectOpeningBalance(?ShopifyCashTrackingSessionOpeningBalanceArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("openingBalance");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The note entered when the session was opened.
     */
    public function selectOpeningNote(): static
    {
        $this->selectField("openingNote");

        return $this;
    }

    /**
     * The user who opened the session.
     */
    public function selectOpeningStaffMember(?ShopifyCashTrackingSessionOpeningStaffMemberArgumentsObject $argsObject = null): ShopifyStaffMemberQueryObject
    {
        $object = new ShopifyStaffMemberQueryObject("openingStaffMember");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * When the session was opened.
     */
    public function selectOpeningTime(): static
    {
        $this->selectField("openingTime");

        return $this;
    }

    /**
     * The register name for the point of sale device that this session is tracking cash for.
     */
    public function selectRegisterName(): static
    {
        $this->selectField("registerName");

        return $this;
    }

    /**
     * The sum of all adjustments made during the session, excluding the final adjustment.
     */
    public function selectTotalAdjustments(?ShopifyCashTrackingSessionTotalAdjustmentsArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("totalAdjustments");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The sum of all cash refunds for the duration of this cash tracking session.
     */
    public function selectTotalCashRefunds(?ShopifyCashTrackingSessionTotalCashRefundsArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("totalCashRefunds");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The sum of all cash sales for the duration of this cash tracking session.
     */
    public function selectTotalCashSales(?ShopifyCashTrackingSessionTotalCashSalesArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("totalCashSales");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The total discrepancy for the session including starting and ending.
     */
    public function selectTotalDiscrepancy(?ShopifyCashTrackingSessionTotalDiscrepancyArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("totalDiscrepancy");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
