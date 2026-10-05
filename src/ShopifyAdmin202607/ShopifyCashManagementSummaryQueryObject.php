<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCashManagementSummaryQueryObject extends QueryObject
{
    const OBJECT_NAME = "CashManagementSummary";

    public function selectCashBalanceAtEnd(ShopifyCashManagementSummaryCashBalanceAtEndArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyV2QueryObject("cashBalanceAtEnd");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectCashBalanceAtStart(ShopifyCashManagementSummaryCashBalanceAtStartArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyV2QueryObject("cashBalanceAtStart");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectNetCash(ShopifyCashManagementSummaryNetCashArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyV2QueryObject("netCash");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectSessionsClosed()
    {
        $this->selectField("sessionsClosed");

        return $this;
    }

    public function selectSessionsOpened()
    {
        $this->selectField("sessionsOpened");

        return $this;
    }

    public function selectTotalDiscrepancies(ShopifyCashManagementSummaryTotalDiscrepanciesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyV2QueryObject("totalDiscrepancies");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
