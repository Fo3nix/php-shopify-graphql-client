<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202601;

use GraphQL\SchemaObject\QueryObject;

/**
 * Represents a currency exchange adjustment applied to an order transaction.
 */
class ShopifyCurrencyExchangeAdjustmentQueryObject extends QueryObject
{
    const OBJECT_NAME = "CurrencyExchangeAdjustment";

    /**
     * The adjustment amount in both shop and presentment currencies.
     */
    public function selectAdjustment(?ShopifyCurrencyExchangeAdjustmentAdjustmentArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("adjustment");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The final amount in both shop and presentment currencies after the adjustment.
     */
    public function selectFinalAmountSet(?ShopifyCurrencyExchangeAdjustmentFinalAmountSetArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("finalAmountSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * A globally-unique ID.
     */
    public function selectId(): static
    {
        $this->selectField("id");

        return $this;
    }

    /**
     * The original amount in both shop and presentment currencies before the adjustment.
     */
    public function selectOriginalAmountSet(?ShopifyCurrencyExchangeAdjustmentOriginalAmountSetArgumentsObject $argsObject = null): ShopifyMoneyV2QueryObject
    {
        $object = new ShopifyMoneyV2QueryObject("originalAmountSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
