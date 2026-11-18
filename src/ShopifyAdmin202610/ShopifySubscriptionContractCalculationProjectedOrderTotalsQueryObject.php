<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Projected order totals for a successfully calculated subscription contract. The figures are derived from the calculation's cost breakdown; taxes are estimated.
 */
class ShopifySubscriptionContractCalculationProjectedOrderTotalsQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionContractCalculationProjectedOrderTotals";

    /**
     * The merchandise line total after line item discounts and before order-level discounts and delivery. For tax-inclusive carts, this amount includes taxes.
     */
    public function selectSubtotal(?ShopifySubscriptionContractCalculationProjectedOrderTotalsSubtotalArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("subtotal");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The grand total of the projected order.
     */
    public function selectTotal(?ShopifySubscriptionContractCalculationProjectedOrderTotalsTotalArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("total");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The total delivery cost.
     */
    public function selectTotalDelivery(?ShopifySubscriptionContractCalculationProjectedOrderTotalsTotalDeliveryArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("totalDelivery");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The total of discounts applied to delivery.
     */
    public function selectTotalDeliveryDiscounts(?ShopifySubscriptionContractCalculationProjectedOrderTotalsTotalDeliveryDiscountsArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("totalDeliveryDiscounts");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The total of discounts applied to the merchandise lines.
     */
    public function selectTotalMerchandiseDiscounts(?ShopifySubscriptionContractCalculationProjectedOrderTotalsTotalMerchandiseDiscountsArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("totalMerchandiseDiscounts");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The total estimated tax.
     */
    public function selectTotalTax(?ShopifySubscriptionContractCalculationProjectedOrderTotalsTotalTaxArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("totalTax");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
