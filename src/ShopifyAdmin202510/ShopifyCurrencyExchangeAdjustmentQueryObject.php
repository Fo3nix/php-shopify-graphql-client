<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202510;

use GraphQL\SchemaObject\QueryObject;

class ShopifyCurrencyExchangeAdjustmentQueryObject extends QueryObject
{
    const OBJECT_NAME = "CurrencyExchangeAdjustment";

    public function selectAdjustment(ShopifyCurrencyExchangeAdjustmentAdjustmentArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyV2QueryObject("adjustment");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    public function selectFinalAmountSet(ShopifyCurrencyExchangeAdjustmentFinalAmountSetArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyV2QueryObject("finalAmountSet");
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

    public function selectOriginalAmountSet(ShopifyCurrencyExchangeAdjustmentOriginalAmountSetArgumentsObject $argsObject = null)
    {
        $object = new ShopifyMoneyV2QueryObject("originalAmountSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
