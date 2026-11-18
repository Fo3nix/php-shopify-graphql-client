<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202604;

use GraphQL\SchemaObject\QueryObject;

/**
 * A summary of cash management data.
 */
class ShopifyCashManagementSummaryQueryObject extends QueryObject
{
    const OBJECT_NAME = "CashManagementSummary";

    /**
     * The cumulative cash balance of all cash drawers at the provided end date.
     */
    public function selectCashBalanceAtEnd(?ShopifyCashManagementSummaryCashBalanceAtEndArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("cashBalanceAtEnd");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The cumulative cash balance of all cash drawers at the provided start date.
     */
    public function selectCashBalanceAtStart(?ShopifyCashManagementSummaryCashBalanceAtStartArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("cashBalanceAtStart");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The net cash flow during the specified period (start date to end date). Calculated as net sales plus adjustments.
     */
    public function selectNetCash(?ShopifyCashManagementSummaryNetCashArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("netCash");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The number of sessions that were closed during the specified period (start date to end date).
     */
    public function selectSessionsClosed(): static
    {
        $this->selectField("sessionsClosed");

        return $this;
    }

    /**
     * The number of sessions that were opened during the specified period (start date to end date).
     */
    public function selectSessionsOpened(): static
    {
        $this->selectField("sessionsOpened");

        return $this;
    }

    /**
     * The total cash discrepancies during the specified period (start date to end date).
     */
    public function selectTotalDiscrepancies(?ShopifyCashManagementSummaryTotalDiscrepanciesArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("totalDiscrepancies");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
