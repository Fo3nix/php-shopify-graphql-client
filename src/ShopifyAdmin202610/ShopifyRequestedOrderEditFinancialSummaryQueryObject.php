<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifyRequestedOrderEditFinancialSummaryQueryObject extends QueryObject
{
    const OBJECT_NAME = "RequestedOrderEditFinancialSummary";

    public function selectEditOrderLevelDiscountSubtotalSet(ShopifyRequestedOrderEditFinancialSummaryEditOrderLevelDiscountSubtotalSetArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyBagQueryObject("editOrderLevelDiscountSubtotalSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectEditSubtotalBeforeTargetAllDiscountsSet(ShopifyRequestedOrderEditFinancialSummaryEditSubtotalBeforeTargetAllDiscountsSetArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyBagQueryObject("editSubtotalBeforeTargetAllDiscountsSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectEditSubtotalSet(ShopifyRequestedOrderEditFinancialSummaryEditSubtotalSetArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyBagQueryObject("editSubtotalSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectEditSubtotalWithCartDiscountSet(ShopifyRequestedOrderEditFinancialSummaryEditSubtotalWithCartDiscountSetArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyBagQueryObject("editSubtotalWithCartDiscountSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectEditTotalSet(ShopifyRequestedOrderEditFinancialSummaryEditTotalSetArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyBagQueryObject("editTotalSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectEditTotalTaxSet(ShopifyRequestedOrderEditFinancialSummaryEditTotalTaxSetArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyBagQueryObject("editTotalTaxSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
