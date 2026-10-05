<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

class ShopifySubscriptionContractCalculationProjectedOrderTotalsQueryObject extends QueryObject
{
    const OBJECT_NAME = "SubscriptionContractCalculationProjectedOrderTotals";

    public function selectSubtotal(ShopifySubscriptionContractCalculationProjectedOrderTotalsSubtotalArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyV2QueryObject("subtotal");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTotal(ShopifySubscriptionContractCalculationProjectedOrderTotalsTotalArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyV2QueryObject("total");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTotalDelivery(ShopifySubscriptionContractCalculationProjectedOrderTotalsTotalDeliveryArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyV2QueryObject("totalDelivery");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTotalDeliveryDiscounts(ShopifySubscriptionContractCalculationProjectedOrderTotalsTotalDeliveryDiscountsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyV2QueryObject("totalDeliveryDiscounts");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTotalMerchandiseDiscounts(ShopifySubscriptionContractCalculationProjectedOrderTotalsTotalMerchandiseDiscountsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyV2QueryObject("totalMerchandiseDiscounts");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTotalTax(ShopifySubscriptionContractCalculationProjectedOrderTotalsTotalTaxArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyV2QueryObject("totalTax");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
