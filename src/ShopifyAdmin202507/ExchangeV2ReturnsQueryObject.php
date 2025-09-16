<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class ExchangeV2ReturnsQueryObject extends QueryObject
{
    const OBJECT_NAME = "ExchangeV2Returns";

    public function selectLineItems(ExchangeV2ReturnsLineItemsArgumentsObject $argsObject = null)
    {
        $object = new ExchangeV2LineItemQueryObject("lineItems");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectOrderDiscountAmountSet(ExchangeV2ReturnsOrderDiscountAmountSetArgumentsObject $argsObject = null)
    {
        $object = new MoneyBagQueryObject("orderDiscountAmountSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectShippingRefundAmountSet(ExchangeV2ReturnsShippingRefundAmountSetArgumentsObject $argsObject = null)
    {
        $object = new MoneyBagQueryObject("shippingRefundAmountSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectSubtotalPriceSet(ExchangeV2ReturnsSubtotalPriceSetArgumentsObject $argsObject = null)
    {
        $object = new MoneyBagQueryObject("subtotalPriceSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTaxLines(ExchangeV2ReturnsTaxLinesArgumentsObject $argsObject = null)
    {
        $object = new TaxLineQueryObject("taxLines");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTipRefundAmountSet(ExchangeV2ReturnsTipRefundAmountSetArgumentsObject $argsObject = null)
    {
        $object = new MoneyBagQueryObject("tipRefundAmountSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTotalPriceSet(ExchangeV2ReturnsTotalPriceSetArgumentsObject $argsObject = null)
    {
        $object = new MoneyBagQueryObject("totalPriceSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
