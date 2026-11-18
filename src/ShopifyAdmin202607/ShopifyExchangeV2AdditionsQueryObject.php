<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * New items associated to the exchange.
 */
class ShopifyExchangeV2AdditionsQueryObject extends QueryObject
{
    const OBJECT_NAME = "ExchangeV2Additions";

    /**
     * The list of new items for the exchange.
     */
    public function selectLineItems(?ShopifyExchangeV2AdditionsLineItemsArgumentsObject $argsObject = null): ShopifyExchangeV2LineItemQueryObject
    {
        $object = new ShopifyExchangeV2LineItemQueryObject("lineItems");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The subtotal of the items being added, including discounts.
     */
    public function selectSubtotalPriceSet(?ShopifyExchangeV2AdditionsSubtotalPriceSetArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("subtotalPriceSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The summary of all taxes of the items being added.
     */
    public function selectTaxLines(?ShopifyExchangeV2AdditionsTaxLinesArgumentsObject $argsObject = null): ShopifyTaxLineQueryObject
    {
        $object = new ShopifyTaxLineQueryObject("taxLines");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The total price of the items being added, including discounts and taxes.
     */
    public function selectTotalPriceSet(?ShopifyExchangeV2AdditionsTotalPriceSetArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("totalPriceSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
