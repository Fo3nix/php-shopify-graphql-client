<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * The financial breakdown of the requested order edit.
 */
class ShopifyRequestedOrderEditFinancialSummaryQueryObject extends QueryObject
{
    const OBJECT_NAME = "RequestedOrderEditFinancialSummary";

    /**
     * The sum of all order level discounts that are target_all.
     */
    public function selectEditOrderLevelDiscountSubtotalSet(?ShopifyRequestedOrderEditFinancialSummaryEditOrderLevelDiscountSubtotalSetArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("editOrderLevelDiscountSubtotalSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The subtotal of all edit line items excluding target_all discounts.
     */
    public function selectEditSubtotalBeforeTargetAllDiscountsSet(?ShopifyRequestedOrderEditFinancialSummaryEditSubtotalBeforeTargetAllDiscountsSetArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("editSubtotalBeforeTargetAllDiscountsSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The subtotal of all edit line items.
     */
    public function selectEditSubtotalSet(?ShopifyRequestedOrderEditFinancialSummaryEditSubtotalSetArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("editSubtotalSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The subtotal of all edit line items with order level discounts applied.
     */
    public function selectEditSubtotalWithCartDiscountSet(?ShopifyRequestedOrderEditFinancialSummaryEditSubtotalWithCartDiscountSetArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("editSubtotalWithCartDiscountSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The total sum of all edit line items, including subtotals and taxes.
     */
    public function selectEditTotalSet(?ShopifyRequestedOrderEditFinancialSummaryEditTotalSetArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("editTotalSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The total tax sum of all edit line items.
     */
    public function selectEditTotalTaxSet(?ShopifyRequestedOrderEditFinancialSummaryEditTotalTaxSetArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("editTotalTaxSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
