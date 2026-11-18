<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * Return items associated to the exchange.
 */
class ShopifyExchangeV2ReturnsQueryObject extends QueryObject
{
    const OBJECT_NAME = "ExchangeV2Returns";

    /**
     * The list of return items for the exchange.
     */
    public function selectLineItems(?ShopifyExchangeV2ReturnsLineItemsArgumentsObject $argsObject = null): ShopifyExchangeV2LineItemQueryObject
    {
        $object = new ShopifyExchangeV2LineItemQueryObject("lineItems");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The amount of the order-level discount for the items and shipping being returned, which doesn't contain any line item discounts.
     */
    public function selectOrderDiscountAmountSet(?ShopifyExchangeV2ReturnsOrderDiscountAmountSetArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("orderDiscountAmountSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The amount of money to be refunded for shipping.
     */
    public function selectShippingRefundAmountSet(?ShopifyExchangeV2ReturnsShippingRefundAmountSetArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("shippingRefundAmountSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The subtotal of the items being returned.
     */
    public function selectSubtotalPriceSet(?ShopifyExchangeV2ReturnsSubtotalPriceSetArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("subtotalPriceSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The summary of all taxes of the items being returned.
     */
    public function selectTaxLines(?ShopifyExchangeV2ReturnsTaxLinesArgumentsObject $argsObject = null): ShopifyTaxLineQueryObject
    {
        $object = new ShopifyTaxLineQueryObject("taxLines");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The amount of money to be refunded for tip.
     */
    public function selectTipRefundAmountSet(?ShopifyExchangeV2ReturnsTipRefundAmountSetArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("tipRefundAmountSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The total value of the items being returned.
     */
    public function selectTotalPriceSet(?ShopifyExchangeV2ReturnsTotalPriceSetArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("totalPriceSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
