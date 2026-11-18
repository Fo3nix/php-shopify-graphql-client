<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202607;

use GraphQL\SchemaObject\QueryObject;

/**
 * The calculated costs of handling a return line item.
 * Typically, this would cover the costs of inspecting, repackaging, and restocking the item.
 */
class ShopifyCalculatedRestockingFeeQueryObject extends QueryObject
{
    const OBJECT_NAME = "CalculatedRestockingFee";

    /**
     * The calculated amount of the return fee, in shop and presentment currencies.
     */
    public function selectAmountSet(?ShopifyCalculatedRestockingFeeAmountSetArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
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
     * The value of the fee as a percentage.
     */
    public function selectPercentage(): static
    {
        $this->selectField("percentage");

        return $this;
    }
}
