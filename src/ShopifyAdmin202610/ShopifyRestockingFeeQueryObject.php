<?php

namespace Fo3nix\ShopifyGraphQL\ShopifyAdmin202610;

use GraphQL\SchemaObject\QueryObject;

/**
 * A restocking fee is a fee captured as part of a return to cover the costs of handling a return line item.
 * Typically, this would cover the costs of inspecting, repackaging, and restocking the item.
 */
class ShopifyRestockingFeeQueryObject extends QueryObject
{
    const OBJECT_NAME = "RestockingFee";

    /**
     * The amount of the restocking fee, in shop and presentment currencies.
     */
    public function selectAmountSet(?ShopifyRestockingFeeAmountSetArgumentsObject $argsObject = null): ShopifyMoneyBagQueryObject
    {
        $object = new ShopifyMoneyBagQueryObject("amountSet");
        if ($argsObject !== null) {
            $object->appendArguments($argsObject->toArray());
        }
        $this->selectField($object);

        return $object;
    }

    /**
     * The unique ID for the Fee.
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
