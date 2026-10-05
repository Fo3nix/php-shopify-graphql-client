<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

class ShopifyExchangeV2AdditionsQueryObject extends QueryObject
{
    const OBJECT_NAME = "ExchangeV2Additions";

    public function selectLineItems(ShopifyExchangeV2AdditionsLineItemsArgumentsObject $argsObject = null)
    {
        $object = new ShopifyExchangeV2LineItemQueryObject("lineItems");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectSubtotalPriceSet(ShopifyExchangeV2AdditionsSubtotalPriceSetArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyBagQueryObject("subtotalPriceSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTaxLines(ShopifyExchangeV2AdditionsTaxLinesArgumentsObject $argsObject = null)
    {
        $object = new ShopifyTaxLineQueryObject("taxLines");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTotalPriceSet(ShopifyExchangeV2AdditionsTotalPriceSetArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyBagQueryObject("totalPriceSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
