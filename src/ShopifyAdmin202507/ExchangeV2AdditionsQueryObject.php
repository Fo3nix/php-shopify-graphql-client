<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class ExchangeV2AdditionsQueryObject extends QueryObject
{
    const OBJECT_NAME = "ExchangeV2Additions";

    public function selectLineItems(ExchangeV2AdditionsLineItemsArgumentsObject $argsObject = null)
    {
        $object = new ExchangeV2LineItemQueryObject("lineItems");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectSubtotalPriceSet(ExchangeV2AdditionsSubtotalPriceSetArgumentsObject $argsObject = null)
    {
        $object = new MoneyBagQueryObject("subtotalPriceSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTaxLines(ExchangeV2AdditionsTaxLinesArgumentsObject $argsObject = null)
    {
        $object = new TaxLineQueryObject("taxLines");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectTotalPriceSet(ExchangeV2AdditionsTotalPriceSetArgumentsObject $argsObject = null)
    {
        $object = new MoneyBagQueryObject("totalPriceSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
