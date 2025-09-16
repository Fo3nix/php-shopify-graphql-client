<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202507;

use GraphQL\SchemaObject\QueryObject;

class CurrencyExchangeAdjustmentQueryObject extends QueryObject
{
    const OBJECT_NAME = "CurrencyExchangeAdjustment";

    public function selectAdjustment(CurrencyExchangeAdjustmentAdjustmentArgumentsObject $argsObject = null)
    {
        $object = new MoneyV2QueryObject("adjustment");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectFinalAmountSet(CurrencyExchangeAdjustmentFinalAmountSetArgumentsObject $argsObject = null)
    {
        $object = new MoneyV2QueryObject("finalAmountSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectId()
    {
        $this->selectField("id");

        return $this;
    }

    public function selectOriginalAmountSet(CurrencyExchangeAdjustmentOriginalAmountSetArgumentsObject $argsObject = null)
    {
        $object = new MoneyV2QueryObject("originalAmountSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
