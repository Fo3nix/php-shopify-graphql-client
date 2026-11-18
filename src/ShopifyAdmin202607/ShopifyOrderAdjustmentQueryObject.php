<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * An order adjustment accounts for the difference between a calculated and actual refund amount.
 */
class ShopifyOrderAdjustmentQueryObject extends QueryObject
{
    const OBJECT_NAME = "OrderAdjustment";

    /**
     * The amount of the order adjustment in shop and presentment currencies.
     */
    public function selectAmountSet(?ShopifyOrderAdjustmentAmountSetArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("amountSet");
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
     * An optional reason that explains a discrepancy between calculated and actual refund amounts.
     */
    public function selectReason(): static
    {
        $this->selectField("reason");

        return $this;
    }

    /**
     * The tax amount of the order adjustment in shop and presentment currencies.
     */
    public function selectTaxAmountSet(?ShopifyOrderAdjustmentTaxAmountSetArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("taxAmountSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }
}
